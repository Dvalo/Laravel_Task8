<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=[
    	"title", "description", "short_desc", "image", "add_date", "user_id", "category_id"
    ];
}
