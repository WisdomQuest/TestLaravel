<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        //наблюдатель будет вызвана при создании нового поста
        echo 'created: ' . $post->id . '<br>';
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
        echo 'updated: ' . $post->id . '<br>';
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
        echo 'deleted: ' . $post->id . '<br>';
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //восстановление после удаления
        echo 'restored: ' . $post->id . '<br>';
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //окончательное удаление
        echo 'forceDeleted: ' . $post->id . '<br>';
    }
}
