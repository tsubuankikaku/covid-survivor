<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'job' => 'サービス業',
            'number' => 1
        ]);
        DB::table('jobs')->insert([
            'job' => '医療関係者',
            'number' => 1
        ]);
        DB::table('jobs')->insert([
            'job' => '学生',
            'number' => 1
        ]);
         DB::table('jobs')->insert([
            'job' => '教育関係者',
            'number' => 1
        ]);
    }
}
