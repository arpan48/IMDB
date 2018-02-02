<?php

use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            'title' => 'The killing',
            'releasedate' => '2016-11-02',
            'trailer' => 'UPSCH9y2NcU',
            'description' => 'A police investigation, the saga of a grieving family, and a Seattle mayoral campaign all interlock after the body of 17-year-old Rosie Larsen is found in the trunk of a submerged car.',
            'storyline' => 'In Seattle, Det. Sarah Linden is on what is supposed to be her last day on the job. She and her son Jack are supposed to leave that evening to join her fiancé in Sonoma. Her replacement, Det. Stephen Holder, is ready to take over but they answer a call from a patrol car who have found a bloodied sweater in a field. When the missing girl, Rosie Larsen, is found in the trunk of a car at the bottom of a lake it turns out the car is registered to the campaign committee for councilman Darren Richmond, who is running for mayor. Linden delays her departure for what she hopes will be only a few days.',
            'poster' => 'thekilling.jpg'
        ]);
    }
}
