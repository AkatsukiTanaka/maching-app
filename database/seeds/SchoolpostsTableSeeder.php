<?php

use Illuminate\Database\Seeder;

use App\Schoolpost;

class SchoolpostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoolposts = [
          [
            'name'          => '大西K10ゴルフアカデミー',
            'image_top'     => 'image/0024.jpg',
            'access_postal' => '252-0328',
            'access'        => '神奈川県相模原市麻溝台5丁目10-36',
            'area_code'     => 1,
            'station'       => '相模大野',
            'station_time'  => 10,
            'reviews'       => 3,
            'rating'        => 5,
            'comment'       => 'テキサス州出身のK10先生がインド流しごきで鍛えて差し上げます！',
          ],
          [
            'name'          => '湘南◯GPゴルフスクール',
            'image_top'     => 'image/mgp.jpg',
            'access_postal' => '251-0035',
            'access'        => '神奈川県藤沢市片瀬海岸2丁目17-27',
            'area_code'     => 1,
            'station'       => '片瀬海岸',
            'station_time'  => 5,
            'reviews'       => 2,
            'rating'        => 4,
            'comment'       => '顔がでかいぞ！！！！！',
          ],
        ];

        foreach ($schoolposts as $schoolpost) {
          Schoolpost::create($schoolpost);
        }
    }
}
