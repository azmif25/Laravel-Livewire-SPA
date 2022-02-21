<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;

class Edit extends Component
{
    public $bookId;
    public $title;
    public $sinopsys;
    public $price;

    public function mount($id)
    {
        $book = Book::find($id);

        if ($book) {
            $this->bookId = $book->id;
            $this->title = $book->title;
            $this->sinopsys = $book->sinopsys;
            $this->price = $book->price;
        }
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'sinopsys' => 'required',
            'price' => 'required'
        ]);

        if ($this->bookId) {

            $book = Book::find($this->bookId);

            if ($book) {
                $book->update([
                    'title' => $this->title,
                    'sinopsys' => $this->sinopsys,
                    'price' => $this->price
                ]);
            }
        }

        // flash message
        session()->flash('message', 'Data Successfully Updated');

        // redirect
        return redirect()->route('book.index');
    }

    public function render()
    {
        return view('livewire.book.edit');
    }
}
