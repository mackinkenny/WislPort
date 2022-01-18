<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->truncate();

        $answersEn = json_decode(file_get_contents(public_path('js/en/answers.json')), true);
        $answersPt = json_decode(file_get_contents(public_path('js/pt/answers.json')), true);
        $answersEs = json_decode(file_get_contents(public_path('js/es/answers.json')), true);
        $answersFr = json_decode(file_get_contents(public_path('js/fr/answers.json')), true);

        $answers = [];

        for ($i = 0; $i < count($answersEn); $i++) {
            $answers[] = [
                'title' => json_encode([
                    'en' => $answersEn[$i]['title'],
                    'es' => $answersEs[$i]['title'],
                    'fr' => $answersFr[$i]['title'],
                    'pt' => $answersPt[$i]['title'],
                ]),
                'question_id' => $answersEn[$i]['question_id'],
                'score' => $answersEn[$i]['score'],
                'color' => $answersEn[$i]['color'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('answers')->insert($answers);
    }
}
