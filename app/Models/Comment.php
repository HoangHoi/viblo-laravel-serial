<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use App\Models\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Cacheable;

    protected $cacheTime = 0;
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
