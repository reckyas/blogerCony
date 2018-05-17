<?php

namespace App\Repositories\Backend\Post;

use App\Repositories\BaseRepository;
use App\Models\Post\Post;

/**
 * Class PostRepository.
 */
class PostRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Post::class;
    }
}
