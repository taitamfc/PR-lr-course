<?php
namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Repositories\Interfaces\CourseInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CourseRepository extends EloquentRepository implements CourseInterface
{

    public function getModel()
    {
        return Course::class;
    }

    public function getAll($request){
        $result = $this->model->paginate(10);
        return $result;
    }
    public function findBySlug($slug){
        $result = $this->model::with('will_learns','requirements','tracks')->where('slug', $slug)->first();
        foreach ($result->tracks as $key => $track) {
            foreach ($track->track_steps as $key2 => $track_step) {
                $track->track_steps[$key2]->step = $track_step->step;
            }
            $result->tracks[$key]->track_steps = $track->track_steps;
        }
        return $result;
    }
    public function findById($id){
        $result = $this->model::with('will_learns','requirements','tracks')->where('id', $id)->first();
        foreach ($result->tracks as $key => $track) {
            foreach ($track->track_steps as $key2 => $track_step) {
                $track->track_steps[$key2]->step = $track_step->step;
            }
            $result->tracks[$key]->track_steps = $track->track_steps;
        }
        return $result;
    }
}