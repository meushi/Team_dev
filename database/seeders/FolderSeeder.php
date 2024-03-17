<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('folders')->insert([
        'title'=>'〇〇組',
        'school_id'=>1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
            ]);
         DB::table('folders')->insert([
        'title'=>'〇〇組',
        'school_id'=>1,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
            ]);
    }
}
