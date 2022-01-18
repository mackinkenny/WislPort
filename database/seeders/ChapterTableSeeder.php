<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->truncate();

        $chaptersEn = json_decode(file_get_contents(public_path('js/en/chapters.json')), true);
        $chaptersPt = json_decode(file_get_contents(public_path('js/pt/chapters.json')), true);
        $chaptersEs = json_decode(file_get_contents(public_path('js/es/chapters.json')), true);
        $chaptersFr = json_decode(file_get_contents(public_path('js/fr/chapters.json')), true);

        $chapters = [];

        for ($i = 0; $i < count($chaptersEn); $i++) {
            $chapters[] = [
                'title' => json_encode([
                    'en' => $chaptersEn[$i]['title'],
                    'es' => $chaptersEs[$i]['title'],
                    'fr' => $chaptersFr[$i]['title'],
                    'pt' => $chaptersPt[$i]['title'],
                ]),
                'short' => $chaptersEn[$i]['short'],
                'flag' => $chaptersEn[$i]['flag'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('chapters')->insert($chapters);

    }
}
