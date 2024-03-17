<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
        'name'=>'東京大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'埼玉大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'千葉大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'神奈川大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'群馬大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'栃木大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'茨城大学',
        'password'=>'test',
            ]);
         DB::table('schools')->insert([
        'name'=>'山梨大学',
        'password'=>'test',
            ]);
    }
}
