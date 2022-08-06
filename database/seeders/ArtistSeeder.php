<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists =[
            [
                'name' => 'Kim Taehyung',
                'born' => 'December 30, 1995',
                'nationality' => 'Korean',
                'overview' => 'Also known as V is a South Korean singer and song writer and member of BTS. '
            ],
            [
                'name' => 'Tom Holland',
                'born' => 'June 1, 1996',
                'nationality' => 'English',
                'overview' => 'Is an English actor.'
            ],
            [
                'name' => 'Kylie Jenner',
                'born' => 'August 10, 1997',
                'nationality' => 'American',
                'overview' => 'Is an American media personality, social lite, model and businesswoman.'
            ],
            [
                'name' => 'Jackie Chan',
                'born' => 'April 7, 1954',
                'nationality' => 'Chinese',
                'overview' => 'A Hongkong actor, film maker, martial artist and stuntman.'
            ],
            [
                'name' => 'Alden Richards',
                'born' => 'January 2, 1992',
                'nationality' => 'Filipino',
                'overview' => 'Is a Filipino actor, host, singer and entrepeneur.'
            ]
        ];

        foreach($artists as $a){
            Artist::create($a);
        }
    }
}
