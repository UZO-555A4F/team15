<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandomName(): string
    {
        $foodArr = [
            '香香',
            '好吃',
            '美味',
            '擱再來',
            '呵呷',
            '龍華',
            '迴龍',
            '新莊'
        ];
        $styleArr = [
            '美式炸雞',
            '義式料理',
            '日式食堂',
            '快炒店',
            '早餐店',
            '自助餐',
            '滷味'
        ];
        $food = $foodArr[rand(0, count($foodArr)-1)];
        $style = $styleArr[rand(0, count($styleArr)-1)];
        return $food . $style;
    }

    public function generateRandomTelephoneNumber(): string
    {
        $telephoneNumber = '0';
        $telephoneNumber .= rand(1, 9);
        for ($i = 0; $i < 8; $i++) {
            $telephoneNumber .= rand(0, 9);
        }
        return $telephoneNumber;
    }

    public function generateRandomAddress(): string
    {
        $addressNum = rand(1,500);
        return '桃園市龜山區萬壽路' . $addressNum . '號';
    }

    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            $name = $this->generateRandomName();
            $address = $this->generateRandomAddress();
            $telephone = $this->generateRandomTelephoneNumber();
            $randomDateTime = Carbon::now()->subMinutes(rand(1, 30));
            DB::table('restaurants')->insert([
                'name' => $name,
                'address' => $address,
                'gid' => rand(1, 8),
                'pid' => rand(1, 3),
                'telephone' => $telephone,
                'created_at' => $randomDateTime,
                'updated_at' => $randomDateTime
            ]);
        }
    }
}
