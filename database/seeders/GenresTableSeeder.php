<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PhpOption\None;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateGenre(): string
    {
        static $genreArr = array(
            '速食',
            '滷味',
            '中式早餐',
            '西式早餐',
            '中式午晚餐',
            '義式',
            '火鍋',
            '排餐'
        );
        $genre = $genreArr[rand(0, count($genreArr)-1)];
        array_splice($genreArr, array_search($genre, $genreArr), 1);
        return $genre;
    }

    public function run()
    {
        for ($i = 0; $i < 8; $i++) {
            $genre = $this->generateGenre();
            $randomDateTime = Carbon::now()->subMinutes(rand(1, 30));
            DB::table('genres')->insert([
                'genre' => $genre,
                'created_at' => $randomDateTime,
                'updated_at' => $randomDateTime
            ]);
        }
    }
}
