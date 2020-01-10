<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = ['name', 'about','biography','mapLat','mapLon','fbLink','siteLink','emailLink','indexImgSrc','profileImgSrc'];
    
    public function getRouteKeyName()
    {
        return 'name';
    }
}
