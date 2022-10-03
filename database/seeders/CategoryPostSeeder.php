<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('category_posts')->insert([
            'nama' => 'Saudi',
            'slug' => 'saudi',
        ],
        );

        DB::table('category_posts')->insert([
            'nama' => 'Tour Internasional',
            'slug' => 'tour-internasional',
        ],
        );

        DB::table('category_posts')->insert([
            'nama' => 'Umroh',
            'slug' => 'umroh',
        ],
        );

        DB::table('category_posts')->insert([
            'nama' => 'Haji',
            'slug' => 'haji',
        ],
        );
    }
}
