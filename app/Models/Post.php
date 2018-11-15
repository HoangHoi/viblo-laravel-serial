<?php

namespace App\Models;

use App\Models\User;
use App\Models\Traits\Cacheable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Cacheable;

    protected $cacheTime = 1;
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
