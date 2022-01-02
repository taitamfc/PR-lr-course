<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\WillLearn;
use App\Models\Requirement;
use App\Models\Track;

class Course extends Model
{
    use HasFactory;

    public function will_learns(){
        return $this->hasMany(WillLearn::class,'course_id','id');
    }
    public function requirements(){
        return $this->hasMany(Requirement::class,'course_id','id');
    }
    public function tracks(){
        return $this->hasMany(Track::class,'course_id','id');
    }

}
