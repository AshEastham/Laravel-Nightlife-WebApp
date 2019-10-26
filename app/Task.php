<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function complete()
    {
        $this->update(['completed' => true]);
    }
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
