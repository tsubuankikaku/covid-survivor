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
            
        ]);
        DB::table('jobs')->insert([
            'job' => '医療従事者',
            
        ]);
        DB::table('jobs')->insert([
            'job' => '学生'
        ]);
    }
}
