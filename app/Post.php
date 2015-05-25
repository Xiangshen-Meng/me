<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = ['title', 'image', 'description', 'story'];

    /**
     * The creator of the Post.
     *
     * @var User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
