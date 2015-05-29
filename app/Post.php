<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

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

    public function htmlStory()
    {
        return Parsedown::instance()->text($this->story);
    }

    public function createdTime()
    {
        return $this->created_at->format("Y年m月d日 H:i");
    }

}
