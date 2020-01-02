<?php

use Illuminate\Database\Seeder;

class EvenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2019-12-11 21:30:00',
                'end' => '2019-12-12 21:30:00',
                'color' => '#B266FF',
                'description' => "Reunião louca"
            ],
            [
                'title' => 'Ligar para prima',
                'start' => '2019-12-13 21:30:00',
                'end' => '2019-12-13 22:30:00',
                'color' => '#FF0000',
                'description' => "aksdjnajdnjk"
            ],
            [
                'title' => 'test',
                'start' => '2019-12-4',
                'end' => '2019-12-4 ',
                'color' => '#FF0000',
                'description' => "aksdjnajdnjk"
            ]

        ]);
    }
}
