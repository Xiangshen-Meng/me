<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable = ['name', 'slogan', 'url', 'image', 'description', 'content'];

}
