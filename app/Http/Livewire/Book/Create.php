<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $sinopsys;
    public $price;

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'sinopsys' => 'required',
            'price' => 'required'
        ]);

        $books = Book::create([
            'title' => $this->title,
            'sinopsys' => $this->sinopsys,
            'price' => $this->price
        ]);

        // flash message
        session()->flash('message', 'Data Successfully Saved');

        // redirect
        return redirect()->route('book.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
