<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Web Design',
            'icon' => 'fa-paint-brush',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);

        DB::table('services')->insert([
            'title' => 'Brand Building',
            'icon' => 'fa-podcast',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);

        DB::table('services')->insert([
            'title' => 'App Dev',
            'icon' => 'fa-podcast',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);

        DB::table('services')->insert([
            'title' => 'Web Design',
            'icon' => 'fa-paint-brush',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);

        DB::table('services')->insert([
            'title' => 'Brand Building',
            'icon' => 'fa-podcast',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);

        DB::table('services')->insert([
            'title' => 'App Dev',
            'icon' => 'fa-podcast',
            'description' => 'Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. '
        ]);
    }
}
