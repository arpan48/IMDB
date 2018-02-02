<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Deadpool',
            'releasedate' => '2016-11-02',
            'description' => 'A fast-talking mercenary with a morbid sense of humor is subjected to a rogue experiment that leaves him with accelerated healing powers and a quest for revenge.',
           'storyline' => 'This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.',
            'trailer' => 'gtTfd6tISfw',
            'poster' => 'deadpool.jpg'
        ]);
        DB::table('movies')->insert([
            'title' => 'Wonder Woman',
            'releasedate' => '2017-06-15',
            'description' => 'Before she was Wonder Woman she was Diana, princess of the Amazons, trained warrior. When a pilot crashes and tells of conflict in the outside world, she leaves home to fight a war to end all wars, discovering her full powers and true destiny.',
            'storyline' => 'Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise, when a pilot crashes on their shores and tells of a massive conflict raging in the outside world, Diana leaves her home, convinced she can stop the threat. Fighting alongside man in a war to end all wars, Diana will discover her full powers and her true destiny.',
            'trailer' => '1Q8fG0TtVAY',
            'poster' => 'wonderwomanposter.jpg'
        ]);
        DB::table('movies')->insert([
            'title' => 'Cars 3',
            'releasedate' => '2017-07-12',
            'description' => 'Lightning McQueen sets out to prove to a new generation of racers that he\'s still the best race car in the world.',
            'storyline' => 'Blindsided by a new generation of blazing-fast racers, the legendary Lightning McQueen is suddenly pushed out of the sport he loves. To get back in the game, he will need the help of an eager young race technician with her own plan to win, inspiration from the late Fabulous Hudson Hornet, and a few unexpected turns. Proving that #95 isn\'t through yet will test the heart of a champion on Piston Cup Racing\'s biggest stage!',
            'trailer' => '2LeOH9AGJQM',
            'poster' => 'carsposter.jpg'
        ]);
        DB::table('movies')->insert([
            'title' => 'All eyez on me',
            'releasedate' => '2017-07-16',
            'description' => 'Tells the true and untold story of prolific rapper, actor, poet and activist Tupac Shakur.',
            'storyline' => 'Tells the true and untold story of prolific rapper, actor, poet and activist Tupac Shakur. The film follows Shakur from his early days in New York City to his evolution into being one of the world\'s most recognized and influential voices before his untimely death at the age of 25. Against all odds, Shakur\'s raw talent, powerful lyrics and revolutionary mind-set propelled him into becoming a cultural icon whose legacy continues to grow long after his passing. ALL EYEZ ON ME stars Kat Graham, Lauren Cohan, Hill Harper, Jamal Woolard, Danai Gurira and Demetrius Shipp Jr. as Tupac Shakur.',
            'trailer' => '_YZINSZA8mQ',
            'poster' => 'alleyezonmeposter.jpg'
        ]);
    }
}
