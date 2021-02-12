<?php

namespace App\Http\Livewire;

use App\Models\Contents;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $contents_id ,$rate;

    public function mount($id)
    {
        $this->record = Contents::findOrFall($id);
        $this->contents_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }
    private function resetInput()
    {
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->contents_id = null;
        $this->ip = null;
    }
    private function store()
    {
        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
            'rate' => 'required',
        ]);

        \App\Models\Review::create([
            'contents_id' => $this->contents_id,
            'userid' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'rate' =>$this->rate,
            'review'=>$this->review
        ]);

        session()->flash('message' , 'Revire Send Succesfuly.');
        $this->resetInput();
    }
}
