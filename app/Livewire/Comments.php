<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public Post $post;

    public array $evenListeners = [
        'commentCreated' => 'commentCreated',
        'commentDeleted' => 'commentDeleted',
    ];

    public function mount( Post $post ) {
        $this->post = $post;
        $this->comments = $this->selectComments();
    }

    public function render()
    {
        return view('livewire.comments');
    }

    #[On('commentCreated')]
    public function commentCreated( int $id ) {
        $comment = Comment::where('id', '=', $id)->first();
        if( !$comment->parent_id ) {
            $this->comments = $this->comments->prepend($comment);
        }
    }

    #[On('commentDeleted')]
    public function commentDeleted( int $id )
    {
        $this->comments =  $this->selectComments();
    }

    public function selectComments(){
        return Comment::where('post_id', '=', $this->post->id)
            ->with(['post', 'user'])
            ->whereNull('parent_id')
            ->orderByDesc('created_at')
            ->get();
    }
}
