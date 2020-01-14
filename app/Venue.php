<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    // As the ID is auto-incremented we don't want it to be 'fillable' so we leave out below.
    // When using a model the fillable variable defines the fields that can be created or filled by mass-assignment.  
    protected $fillable = ['name', 'about','biography','mapLat','mapLon','fbLink','siteLink','emailLink','indexImgSrc','profileImgSrc'];
    
    // Overriding the Laravel Route Model Binding getRouteKeyName() method, which changes the route for showing a particular Venue to a specified database 
    // attribute instead of the Venue ID.  
    // In this case the 'name' attribute of the Venue is used e.g. '/venues/Beaverworks'
    public function getRouteKeyName()
    {
        return 'name';
    }
    
    // Venues have many events.
    // Currently only defining in the MySQL database.
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
