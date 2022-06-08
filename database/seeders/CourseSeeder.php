<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://api-gateway.fullstack.edu.vn/api/combined-courses';
        $data = file_get_contents($url);
        $data = json_decode($data);
        $items = $data->data->free_courses;

        DB::table('courses')->truncate();
        DB::table('tracks')->truncate();
        DB::table('will_learns')->truncate();
        DB::table('requirements')->truncate();
        DB::table('track_steps')->truncate();
        DB::table('steps')->truncate();

        foreach( $items as $item ){
            $data = (array)$item;
            $data['level'] = 1;
            $data['created_at'] = date('Y-m-d h:i:s',strtotime($data['created_at']));
            $data['updated_at'] = date('Y-m-d h:i:s',strtotime($data['updated_at']));
            DB::table('courses')->insert($data);

            $this->seedTracks($data['slug']);
        }
    }

    private function seedTracks($course_slug){
        $data = file_get_contents('https://api-gateway.fullstack.edu.vn/api/courses/'.$course_slug);
        $data = json_decode($data);
        $data = $data->data;
        $course = $data->course;
        $tracks = $data->tracks;

        $will_learns = $course->will_learns;
        $requirements = $course->requirements;

        foreach( $will_learns as $will_learn ){
            $data = (array)$will_learn;
            DB::table('will_learns')->insert($data);
        }
        foreach( $requirements as $requirement ){
            $data = (array)$requirement;
            DB::table('requirements')->insert($data);
        }
        $steps = [];
        foreach( $tracks as $track ){
            $data = (array)$track;

            $track_steps = $data['track_steps'];
            unset($data['track_steps']);

            DB::table('tracks')->insert($data);

            foreach($track_steps as $track_step){
                $data = (array)$track_step;
                $step = (array)$data['step'];
                $steps[$step['id']] = $step;
                unset($data['step']);
                DB::table('track_steps')->insert($data);
            }
            
        }

        foreach($steps as $step){
            $data = (array)$step;
            $check = DB::table('steps')->where('id', $data["id"])->first();
            if(!$check){
                DB::table('steps')->insert($data);
            }
            
        }
    }
 
}
