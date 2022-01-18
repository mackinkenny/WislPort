<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();

        $questionsEn = json_decode(file_get_contents(public_path('js/en/questions.json')), true);
        $questionsPt = json_decode(file_get_contents(public_path('js/pt/questions.json')), true);
        $questionsEs = json_decode(file_get_contents(public_path('js/es/questions.json')), true);
        $questionsFr = json_decode(file_get_contents(public_path('js/fr/questions.json')), true);

        $questions = [];

        for ($i = 0; $i < count($questionsEn); $i++) {
            $questions[] = [
                'title' => json_encode([
                    'en' => $questionsEn[$i]['title'],
                    'es' => $questionsEs[$i]['title'],
                    'fr' => $questionsFr[$i]['title'],
                    'pt' => $questionsPt[$i]['title'],
                ]),
                'block_id' => $questionsEn[$i]['block_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('questions')->insert($questions);
    }
}
