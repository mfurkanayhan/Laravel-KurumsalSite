<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Contents::all();
        return view('admin.contents', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Menu::all();
        return view('admin.contents_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Contents;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
        $data->menu_id = $request->input('menu_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->type = $request->input('type');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function edit(Contents $contents,$id)
    {
        $data = Contents::find($id);
        $datalist = Menu::all();

        return view('admin.contents_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contents $contents, $id)
    {
        $data = Contents::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
        $data->menu_id = $request->input('menu_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->type = $request->input('type');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contents $contents, $id)
    {
        //DB::table('contents')->where('id','=', $id)->delete();
        $data = Contents::find($id);
        $data->delete();
        return redirect()->route('admin_contents');
    }
}
