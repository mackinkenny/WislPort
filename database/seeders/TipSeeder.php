<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tips')->truncate();

        $tipsEn = json_decode(file_get_contents(public_path('js/en/tips.json')), true);
        $tipsPt = json_decode(file_get_contents(public_path('js/pt/tips.json')), true);
        $tipsEs = json_decode(file_get_contents(public_path('js/es/tips.json')), true);
        $tipsFr = json_decode(file_get_contents(public_path('js/fr/tips.json')), true);

        $tips = [];

        for ($i = 0; $i < count($tipsEn); $i++) {
            $tips[] = [
                'title' => json_encode([
                    'en' => $tipsEn[$i]['title'],
                    'es' => $tipsEs[$i]['title'],
                    'fr' => $tipsFr[$i]['title'],
                    'pt' => $tipsPt[$i]['title'],
                ]),
                'flag' => $tipsEn[$i]['flag'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('tips')->insert($tips);
    }
}
