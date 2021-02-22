<?php

use Illuminate\Database\Seeder;
use App\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects_list = config('projects');

        foreach ($projects_list as $project) {
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->logo = $project['logo'];
            $newProject->link = $project['link'];
            $newProject->save();
        }
    }
}
