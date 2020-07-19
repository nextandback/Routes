<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //protected $fillable = ['content','active','header'];
    protected $guarded = ['id'];
    protected $table = 'sayfalar';
    public $timestamps = false;
}
