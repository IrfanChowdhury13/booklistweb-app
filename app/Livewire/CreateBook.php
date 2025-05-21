<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateBook extends Component
{   
    #[Rule('required|string|min:3|max:255')]
    public $name;

    #[Rule('required|string|min:3|max:255')]
    public $author;

    #[Rule('required|numeric|min:1|max:5')]
    public $rating;

    public function save()
    {   
        $this->validate();

        Book::create([
            'name' => $this->name,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);
        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
