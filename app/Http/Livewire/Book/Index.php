<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($bookId)
    {
        $book = Book::find($bookId);

        if ($book) {
            $book->delete();
        }

        // flash message
        session()->flash('message', 'Data Successfully Deleted');

        // redirect
        return redirect()->route('book.index');
    }

    public function render()
    {
        return view('livewire.book.index', [
            'books' => Book::latest()->paginate(5)
        ]);
    }
}
