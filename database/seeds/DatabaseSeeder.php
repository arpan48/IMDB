<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
/*        $this->call(EpisodesTableSeeder::class);*/
        $this->call(RolesTableSeeder::class);
        $this->call(ActorTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ShowsTableSeeder::class);
    }
}
