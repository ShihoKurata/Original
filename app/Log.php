<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'place' => 'required',
        'category' => 'required',
        'title' => 'required',
        'body' => 'required',
    );

    public function histories()
    {
        return $this->hasMany('App\History');

    }
    
    
}
