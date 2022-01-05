<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PriceLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generatePriceLevel(): string
    {
        static $priceLevelArr = array(
            '低',
            '中',
            '高'
        );
        $priceLevel = $priceLevelArr[rand(0, count($priceLevelArr)-1)];
        array_splice($priceLevelArr, array_search($priceLevel, $priceLevelArr), 1);
        return $priceLevel;
    }

    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            $priceLevel = $this->generatePriceLevel();
            $randomDateTime = Carbon::now()->subMinutes(rand(1, 30));
            DB::table('price_levels')->insert([
                'price_level' => $priceLevel,
                'created_at' => $randomDateTime,
                'updated_at' => $randomDateTime
            ]);
        }
    }
}
