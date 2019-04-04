<?php

use Csteamengine\ProjectManager\Models\ProjectImage;
use Illuminate\Database\Seeder;

class ProjectImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectImage::create([
            'project_id'    => 1,
            'image_id'    => 1,
            'description' => 'Project 1 - Image 1',
            'order'    => 1,
            'variable_name' => 'imgvar_1_1',
        ]);

        ProjectImage::create([
            'project_id'    => 1,
            'image_id'    => 2,
            'description' => 'Project 1 - Image 2',
            'order'    => 2,
            'variable_name' => 'imgvar_1_2',
        ]);

        ProjectImage::create([
            'project_id'    => 2,
            'image_id'    => 1,
            'description' => 'Project 2 - Image 1',
            'order'    => 1,
            'variable_name' => 'imgvar_2_1',
        ]);

        ProjectImage::create([
            'project_id'    => 2,
            'image_id'    => 2,
            'description' => 'Project 2 - Image 2',
            'order'    => 2,
            'variable_name' => 'imgvar_2_2',
        ]);
    }
}
