<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Posts extends Component
{
    use WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    #[Rule('required|max:255')]
    public $title;
    #[Rule('required|unique:posts,slug')]
    public $slug;
    #[Rule('required|min:10')]
    public $body;
    #[Rule('required')]
    public $image;
    #[Rule('required')]
    public $published_at;
    #[Rule('required')]
    public $featured;

    public function render()
    {
        $posts = Post::latest()->paginate(5);
        return view('livewire.posts.view', compact('posts'));
    }

    public function createPost()
    {
        $validateData = $this->validate();
        // $this->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:posts,slug',
        //     'body' => 'required',
        //     'image' => 'nullable|image',
        //     'published_at' => 'nullable|date',
        //     'featured' => 'boolean',
        // ]);
        $validateData['user_id'] =  Auth::id();

        Post::create($validateData);
        $this->reset();
    }
}