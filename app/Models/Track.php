<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TrackStep;

class Track extends Model
{
    use HasFactory;

    public function track_steps(){
        return $this->hasMany(TrackStep::class,'track_id','id');
    }

}
