<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title'         => 'IL Racconto di Bruno',
                'description'   => 'Un racconto.',
                'pages'         => 100,
                'author_id'     => 1,
                'category_id'   => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'La Magia del Tempo',
                'description'   => 'Un viaggio attraverso le epoche.',
                'pages'         => 250,
                'author_id'     => 2,
                'category_id'   => 2,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Avventure nel Blu',
                'description'   => 'Storie di mare e avventura.',
                'pages'         => 150,
                'author_id'     => 3,
                'category_id'   => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'La Foresta Incantata',
                'description'   => 'Un racconto di fantasia e mistero.',
                'pages'         => 200,
                'author_id'     => 1,
                'category_id'   => 3,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Il Viaggio di Marco',
                'description'   => 'Una storia di esplorazioni.',
                'pages'         => 300,
                'author_id'     => 2,
                'category_id'   => 2,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Il Segreto dei Fiori',
                'description'   => 'Un racconto sull’amore e la natura.',
                'pages'         => 120,
                'author_id'     => 3,
                'category_id'   => 3,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
