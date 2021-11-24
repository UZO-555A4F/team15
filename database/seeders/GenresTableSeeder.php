<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            $randomDateTime = Carbon::now()->subMinutes(rand(1, 30));
            DB::table('genres')->insert([
                'genre' => rand(1, 8),
                'created_at' => $randomDateTime,
                'updated_at' => $randomDateTime
            ]);
        }
    }
}
