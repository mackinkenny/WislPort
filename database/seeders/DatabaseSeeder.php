<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BlockTableSeeder::class);
        $this->call(SectionTableSeeder::class);
//        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);
        $this->call(TipSeeder::class);
        $this->call(TipQuestionSeeder::class);
        $this->call(ChapterTableSeeder::class);
        $this->call(ChapterQuestionSeeder::class);

        Model::reguard();
    }
}
