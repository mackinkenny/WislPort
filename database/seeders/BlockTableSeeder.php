<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->truncate();

        $blocksEn = json_decode(file_get_contents(public_path('js/en/blocks.json')), true);
        $blocksPt = json_decode(file_get_contents(public_path('js/pt/blocks.json')), true);
        $blocksEs = json_decode(file_get_contents(public_path('js/es/blocks.json')), true);
        $blocksFr = json_decode(file_get_contents(public_path('js/fr/blocks.json')), true);

        $blocks = [];

        for ($i = 0; $i < count($blocksEn); $i++) {
            $blocks[] = [
                'title' => json_encode([
                    'en' => $blocksEn[$i]['title'],
                    'es' => $blocksEs[$i]['title'],
                    'fr' => $blocksFr[$i]['title'],
                    'pt' => $blocksPt[$i]['title'],
                ]),
                'section_id' => $blocksEn[$i]['section_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('blocks')->insert($blocks);

    }
}
