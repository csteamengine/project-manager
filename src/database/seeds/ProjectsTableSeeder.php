<?php

use Csteamengine\ProjectManager\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        Project::create([
            'title'              => 'Project 1',
            'description'       => 'Long Description of Project 1',
            'short_description'       => 'Short -- Project 1',
            'image_id'           => 1,
            'date_started'     => '2019',
            'date_completed'    => '2019',
            'medium'          => 'Porcelain, pit fired',
            'is_active' => 1
        ]);

        Project::create([
            'title'              => 'Project 2',
            'description'       => 'Long Description of Project 2',
            'short_description'       => 'Short -- Project 2',
            'image_id'           => 1,
            'date_started'     => '2016',
            'date_completed'    => '2017',
            'medium'          => 'Stoneware, electric kiln',
            'is_active' => 1
        ]);
    }
}
