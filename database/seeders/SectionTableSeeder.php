<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->truncate();

        $sectionsEn = json_decode(file_get_contents(public_path('js/en/sections.json')), true);
        $sectionsPt = json_decode(file_get_contents(public_path('js/pt/sections.json')), true);
        $sectionsEs = json_decode(file_get_contents(public_path('js/es/sections.json')), true);
        $sectionsFr = json_decode(file_get_contents(public_path('js/fr/sections.json')), true);

        $sections = [];

        for ($i = 0; $i < count($sectionsEn); $i++) {
            $sections[] = [
                'title' => json_encode([
                    'en' => $sectionsEn[$i]['title'],
                    'es' => $sectionsEs[$i]['title'],
                    'fr' => $sectionsFr[$i]['title'],
                    'pt' => $sectionsPt[$i]['title'],
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('sections')->insert($sections);
    }
}
