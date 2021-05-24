<?php

use Illuminate\Database\Seeder;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airlines')->insert([
            'id' => '1',
            'name' => '全日空',
            'name_en' => 'ANA',
            'photo' => '/images/ana_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '2',
            'name' => '日本航空',
            'name_en' => 'JAL',
            'photo' => '/images/jal_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '3',
            'name' => 'スカイマーク',
            'name_en' => 'SKYMARK',
            'photo' => '/images/skymark_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '4',
            'name' => 'ジェットスター',
            'name_en' => 'Jetstar',
            'photo' => '/images/jetstar_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '5',
            'name' => 'スターフライヤー',
            'name_en' => 'Starflyer',
            'photo' => '/images/starflyer_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '6',
            'name' => 'ソラシドエア',
            'name_en' => 'Solaseed Air',
            'photo' => '/images/solaseedair_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '7',
            'name' => 'ピーチ',
            'name_en' => 'Peach',
            'photo' => '/images/peach_logo.jpg'
        ]);
        
        DB::table('airlines')->insert([
            'id' => '8',
            'name' => 'エア・ドゥ',
            'name_en' => 'AIR DO',
            'photo' => '/images/airdo_logo.jpg'
        ]);
    }
}
