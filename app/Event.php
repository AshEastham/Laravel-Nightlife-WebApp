<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'biography','vidLink', 'fbLink','emailLink','indexImgSrc','profileImgSrc'];
    
    public function getRouteKeyName()
    {
        return 'name';
    }
}
