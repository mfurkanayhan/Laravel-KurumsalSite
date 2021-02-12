<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function menuList()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Contents::select('id','title','image','type')->limit(4)->get();
        $daily = Contents::select('id','title','image','type')->limit(15)->inRandomOrder()->get();

        #print_r($slider);
        #exit();
        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
        ];
        return view('home.index',$data);
    }
    public function contents($id)
    {
        $data = Contents::find($id);
        $datalist = Image::where('contents_id', $id)->get();

        #print_r($data);
        #exit();
        return view('home.contents_detail',['data'=>$data,'datalist'=>$datalist]);

    }
    public function getcontents(Request $request)
    {
        $search = $request->input('search');

        $count = Contents::where('title', 'like', '%')->get()->count;
        if ($count==1)
        {
            $data = Contents::where('title' , 'like', '%'.$search.'%')->first();
            return redirect()->route('contents',['id'=>$data->id,'type'=>$data->type]);
        }
        else
        {
            return redirect()->route('contentslist',['search'=>$search]);
        }
    }
    public function contentslist($search)
    {
        $datalist = Contents::where('title' , 'like', '%'.$search.'%')->get();
        return view('home.search_contents' ,['search'=>$search, 'datalist'=>$datalist]);
    }
    public function menucontents($id,$type)
    {
        $datalist = Contents::where('menu_id', $id)->get();
        $data = Menu::find($id);
        #print_r($data);
        #exit();
        return view('home.menu_contents',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function portfolio()
    {
        return view('home.about');
    }
    public function singlepage()
    {
        return view('home.about');
    }
    public function contactus()
    {
        $setting = Setting::first();
        return view('home.contactus',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name= $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contactus')->with('success','Mesajınız Kaydedilmiştir.');
    }
    public function menus()
    {
        return view('home.about');
    }
    public function userlogin()
    {
        return view('home.about');
    }
    public function register()
    {
        return view('home.about');
    }

    public function login()
    {
        return view('admin.login');

    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password', 'remember');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors(
                [
                    'email' => 'The provided credentials do not match our records.',
                ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');

    }


    //
    public function test($id, $name)
    {
        $data['id'] = $id;
        $data['name'] = $name;
        return view('home.test', ['id' => $id, 'name' => $name]);
        /*echo "Id Number :", $id;
        echo "<br>Name :", $name;
        for($i=1;$i<=$id;$i++){
            echo "<br> $i - $name";
        }
        */
    }
}
