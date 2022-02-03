<?php

use Illuminate\Database\Seeder;
use App\Survey;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for( $cnt = 1; $cnt <= 50; $cnt++ ) { 
	      $faker = Faker\Factory::create('ja_JP');
	 
	      Survey::create([
	      'job' => $faker->randomElement($array = ['サービス業', '医療関係者','主婦','学生','教育関連']),
	      'route' => $faker->randomElement($array = ['職場', '家庭内', '不明','会食']),
	      'symptom' => $faker->randomElement($array = ['無症状','咳', '発熱', '息切れ','肺炎','胃腸症状','味覚嗅覚障害','風邪のような症状','全て','その他']),
	      'level' => $faker->randomElement($array = ['軽症', '中等症', '重症']),
	      'duration'=>$faker->randomElement($array = ['2週間以内', '1ヶ月以内', '２ヶ月以内','3ヶ月以上','闘病中']),
	      'after_effect'=>$faker->randomElement($array = ['有り','無し']),
	      'symptom_after'=>$faker->randomElement($array = ['味覚嗅覚障害', '息切れ', '疲労感','全て','その他']),
	      
	      ]);
    }
    }
}
