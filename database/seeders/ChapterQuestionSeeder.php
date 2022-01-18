<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapter_question')->truncate();


        DB::table('chapter_question')->insert([
            //1section
            //1block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 1
            ],

            [
                'chapter_id' => 4,
                'question_id' => 1
            ],

            [
                'chapter_id' => 5,
                'question_id' => 1
            ],

            [
                'chapter_id' => 8,
                'question_id' => 1
            ],

            [
                'chapter_id' => 10,
                'question_id' => 1
            ],

            [
                'chapter_id' => 12,
                'question_id' => 1
            ],

            [
                'chapter_id' => 14,
                'question_id' => 1
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 2
            ],

            [
                'chapter_id' => 4,
                'question_id' => 2
            ],

            [
                'chapter_id' => 5,
                'question_id' => 2
            ],

            [
                'chapter_id' => 8,
                'question_id' => 2
            ],

            [
                'chapter_id' => 10,
                'question_id' => 2
            ],

            [
                'chapter_id' => 12,
                'question_id' => 2
            ],

            [
                'chapter_id' => 14,
                'question_id' => 2
            ],

            //3
            [
                'chapter_id' => 1,
                'question_id' => 3
            ],

            [
                'chapter_id' => 4,
                'question_id' => 3
            ],

            [
                'chapter_id' => 5,
                'question_id' => 3
            ],

            [
                'chapter_id' => 8,
                'question_id' => 3
            ],

            [
                'chapter_id' => 10,
                'question_id' => 3
            ],

            [
                'chapter_id' => 12,
                'question_id' => 3
            ],

            [
                'chapter_id' => 14,
                'question_id' => 3
            ],
            //2block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 4
            ],

            [
                'chapter_id' => 4,
                'question_id' => 4
            ],

            [
                'chapter_id' => 6,
                'question_id' => 4
            ],

            [
                'chapter_id' => 8,
                'question_id' => 4
            ],

            [
                'chapter_id' => 10,
                'question_id' => 4
            ],

            [
                'chapter_id' => 12,
                'question_id' => 4
            ],

            [
                'chapter_id' => 14,
                'question_id' => 4
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 5
            ],

            [
                'chapter_id' => 4,
                'question_id' => 5
            ],

            [
                'chapter_id' => 6,
                'question_id' => 5
            ],

            [
                'chapter_id' => 8,
                'question_id' => 5
            ],

            [
                'chapter_id' => 10,
                'question_id' => 5
            ],

            [
                'chapter_id' => 12,
                'question_id' => 5
            ],

            [
                'chapter_id' => 14,
                'question_id' => 5
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 6
            ],

            [
                'chapter_id' => 4,
                'question_id' => 6
            ],

            [
                'chapter_id' => 6,
                'question_id' => 6
            ],

            [
                'chapter_id' => 8,
                'question_id' => 6
            ],

            [
                'chapter_id' => 10,
                'question_id' => 6
            ],

            [
                'chapter_id' => 12,
                'question_id' => 6
            ],

            [
                'chapter_id' => 14,
                'question_id' => 6
            ],

            //3block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 7
            ],

            [
                'chapter_id' => 4,
                'question_id' => 7
            ],

            [
                'chapter_id' => 6,
                'question_id' => 7
            ],

            [
                'chapter_id' => 8,
                'question_id' => 7
            ],

            [
                'chapter_id' => 10,
                'question_id' => 7
            ],

            [
                'chapter_id' => 12,
                'question_id' => 7
            ],

            [
                'chapter_id' => 14,
                'question_id' => 7
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 8
            ],

            [
                'chapter_id' => 4,
                'question_id' => 8
            ],

            [
                'chapter_id' => 6,
                'question_id' => 8
            ],

            [
                'chapter_id' => 8,
                'question_id' => 8
            ],

            [
                'chapter_id' => 10,
                'question_id' => 8
            ],

            [
                'chapter_id' => 12,
                'question_id' => 8
            ],

            [
                'chapter_id' => 14,
                'question_id' => 8
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 9
            ],

            [
                'chapter_id' => 4,
                'question_id' => 9
            ],

            [
                'chapter_id' => 6,
                'question_id' => 9
            ],

            [
                'chapter_id' => 8,
                'question_id' => 9
            ],

            [
                'chapter_id' => 10,
                'question_id' => 9
            ],

            [
                'chapter_id' => 12,
                'question_id' => 9
            ],

            [
                'chapter_id' => 14,
                'question_id' => 9
            ],
            //4block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 10
            ],

            [
                'chapter_id' => 4,
                'question_id' => 10
            ],

            [
                'chapter_id' => 6,
                'question_id' => 10
            ],

            [
                'chapter_id' => 8,
                'question_id' => 10
            ],

            [
                'chapter_id' => 10,
                'question_id' => 10
            ],

            [
                'chapter_id' => 12,
                'question_id' => 10
            ],

            [
                'chapter_id' => 14,
                'question_id' => 10
            ],

            //2
            [
                'chapter_id' => 1,
                'question_id' => 11
            ],

            [
                'chapter_id' => 4,
                'question_id' => 11
            ],

            [
                'chapter_id' => 6,
                'question_id' => 11
            ],

            [
                'chapter_id' => 8,
                'question_id' => 11
            ],

            [
                'chapter_id' => 10,
                'question_id' => 11
            ],

            [
                'chapter_id' => 12,
                'question_id' => 11
            ],

            [
                'chapter_id' => 14,
                'question_id' => 11
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 12
            ],

            [
                'chapter_id' => 4,
                'question_id' => 12
            ],

            [
                'chapter_id' => 6,
                'question_id' => 12
            ],

            [
                'chapter_id' => 8,
                'question_id' => 12
            ],

            [
                'chapter_id' => 10,
                'question_id' => 12
            ],

            [
                'chapter_id' => 12,
                'question_id' => 12
            ],

            [
                'chapter_id' => 14,
                'question_id' => 12
            ],
            //5block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 13
            ],

            [
                'chapter_id' => 4,
                'question_id' => 13
            ],

            [
                'chapter_id' => 6,
                'question_id' => 13
            ],

            [
                'chapter_id' => 8,
                'question_id' => 13
            ],

            [
                'chapter_id' => 10,
                'question_id' => 13
            ],

            [
                'chapter_id' => 12,
                'question_id' => 13
            ],

            [
                'chapter_id' => 14,
                'question_id' => 13
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 14
            ],

            [
                'chapter_id' => 4,
                'question_id' => 14
            ],

            [
                'chapter_id' => 6,
                'question_id' => 14
            ],

            [
                'chapter_id' => 8,
                'question_id' => 14
            ],

            [
                'chapter_id' => 10,
                'question_id' => 14
            ],

            [
                'chapter_id' => 12,
                'question_id' => 14
            ],

            [
                'chapter_id' => 14,
                'question_id' => 14
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 15
            ],

            [
                'chapter_id' => 4,
                'question_id' => 15
            ],

            [
                'chapter_id' => 6,
                'question_id' => 15
            ],

            [
                'chapter_id' => 8,
                'question_id' => 15
            ],

            [
                'chapter_id' => 10,
                'question_id' => 15
            ],

            [
                'chapter_id' => 12,
                'question_id' => 15
            ],

            [
                'chapter_id' => 14,
                'question_id' => 15
            ],
            //4
            [
                'chapter_id' => 1,
                'question_id' => 16
            ],

            [
                'chapter_id' => 4,
                'question_id' => 16
            ],

            [
                'chapter_id' => 6,
                'question_id' => 16
            ],

            [
                'chapter_id' => 8,
                'question_id' => 16
            ],

            [
                'chapter_id' => 10,
                'question_id' => 16
            ],

            [
                'chapter_id' => 12,
                'question_id' => 16
            ],

            [
                'chapter_id' => 14,
                'question_id' => 16
            ],
            //5
            [
                'chapter_id' => 1,
                'question_id' => 17
            ],

            [
                'chapter_id' => 4,
                'question_id' => 17
            ],

            [
                'chapter_id' => 6,
                'question_id' => 17
            ],

            [
                'chapter_id' => 8,
                'question_id' => 17
            ],

            [
                'chapter_id' => 10,
                'question_id' => 17
            ],

            [
                'chapter_id' => 12,
                'question_id' => 17
            ],

            [
                'chapter_id' => 14,
                'question_id' => 17
            ],
            //6
            [
                'chapter_id' => 1,
                'question_id' => 18
            ],

            [
                'chapter_id' => 4,
                'question_id' => 18
            ],

            [
                'chapter_id' => 6,
                'question_id' => 18
            ],

            [
                'chapter_id' => 8,
                'question_id' => 18
            ],

            [
                'chapter_id' => 10,
                'question_id' => 18
            ],

            [
                'chapter_id' => 12,
                'question_id' => 18
            ],

            [
                'chapter_id' => 14,
                'question_id' => 18
            ],
            //6block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 19
            ],

            [
                'chapter_id' => 4,
                'question_id' => 19
            ],

            [
                'chapter_id' => 6,
                'question_id' => 19
            ],

            [
                'chapter_id' => 8,
                'question_id' => 19
            ],

            [
                'chapter_id' => 10,
                'question_id' => 19
            ],

            [
                'chapter_id' => 12,
                'question_id' => 19
            ],

            [
                'chapter_id' => 14,
                'question_id' => 19
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 20
            ],

            [
                'chapter_id' => 4,
                'question_id' => 20
            ],

            [
                'chapter_id' => 6,
                'question_id' => 20
            ],

            [
                'chapter_id' => 8,
                'question_id' => 20
            ],

            [
                'chapter_id' => 10,
                'question_id' => 20
            ],

            [
                'chapter_id' => 12,
                'question_id' => 20
            ],

            [
                'chapter_id' => 14,
                'question_id' => 20
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 21
            ],

            [
                'chapter_id' => 4,
                'question_id' => 21
            ],

            [
                'chapter_id' => 6,
                'question_id' => 21
            ],

            [
                'chapter_id' => 8,
                'question_id' => 21
            ],

            [
                'chapter_id' => 10,
                'question_id' => 21
            ],

            [
                'chapter_id' => 12,
                'question_id' => 21
            ],

            [
                'chapter_id' => 14,
                'question_id' => 21
            ],
            //4
            [
                'chapter_id' => 1,
                'question_id' => 22
            ],

            [
                'chapter_id' => 4,
                'question_id' => 22
            ],

            [
                'chapter_id' => 6,
                'question_id' => 22
            ],

            [
                'chapter_id' => 8,
                'question_id' => 22
            ],

            [
                'chapter_id' => 10,
                'question_id' => 22
            ],

            [
                'chapter_id' => 12,
                'question_id' => 22
            ],

            [
                'chapter_id' => 14,
                'question_id' => 22
            ],
            //5
            [
                'chapter_id' => 1,
                'question_id' => 23
            ],

            [
                'chapter_id' => 4,
                'question_id' => 23
            ],

            [
                'chapter_id' => 6,
                'question_id' => 23
            ],

            [
                'chapter_id' => 8,
                'question_id' => 23
            ],

            [
                'chapter_id' => 10,
                'question_id' => 23
            ],

            [
                'chapter_id' => 12,
                'question_id' => 23
            ],

            [
                'chapter_id' => 14,
                'question_id' => 23
            ],
            //6
            [
                'chapter_id' => 1,
                'question_id' => 24
            ],

            [
                'chapter_id' => 4,
                'question_id' => 24
            ],

            [
                'chapter_id' => 6,
                'question_id' => 24
            ],

            [
                'chapter_id' => 8,
                'question_id' => 24
            ],

            [
                'chapter_id' => 10,
                'question_id' => 24
            ],

            [
                'chapter_id' => 12,
                'question_id' => 24
            ],

            [
                'chapter_id' => 14,
                'question_id' => 24
            ],
            //7
            [
                'chapter_id' => 1,
                'question_id' => 25
            ],

            [
                'chapter_id' => 4,
                'question_id' => 25
            ],

            [
                'chapter_id' => 6,
                'question_id' => 25
            ],

            [
                'chapter_id' => 8,
                'question_id' => 25
            ],

            [
                'chapter_id' => 10,
                'question_id' => 25
            ],

            [
                'chapter_id' => 12,
                'question_id' => 25
            ],

            [
                'chapter_id' => 14,
                'question_id' => 25
            ],
            //7block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 26
            ],

            [
                'chapter_id' => 4,
                'question_id' => 26
            ],

            [
                'chapter_id' => 6,
                'question_id' => 26
            ],

            [
                'chapter_id' => 8,
                'question_id' => 26
            ],

            [
                'chapter_id' => 10,
                'question_id' => 26
            ],

            [
                'chapter_id' => 12,
                'question_id' => 26
            ],

            [
                'chapter_id' => 14,
                'question_id' => 26
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 27
            ],

            [
                'chapter_id' => 4,
                'question_id' => 27
            ],

            [
                'chapter_id' => 6,
                'question_id' => 27
            ],

            [
                'chapter_id' => 8,
                'question_id' => 27
            ],

            [
                'chapter_id' => 10,
                'question_id' => 27
            ],

            [
                'chapter_id' => 12,
                'question_id' => 27
            ],

            [
                'chapter_id' => 14,
                'question_id' => 27
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 28
            ],

            [
                'chapter_id' => 4,
                'question_id' => 28
            ],

            [
                'chapter_id' => 6,
                'question_id' => 28
            ],

            [
                'chapter_id' => 8,
                'question_id' => 28
            ],

            [
                'chapter_id' => 10,
                'question_id' => 28
            ],

            [
                'chapter_id' => 12,
                'question_id' => 28
            ],

            [
                'chapter_id' => 14,
                'question_id' => 28
            ],
            //8block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 29
            ],

            [
                'chapter_id' => 4,
                'question_id' => 29
            ],

            [
                'chapter_id' => 6,
                'question_id' => 29
            ],

            [
                'chapter_id' => 8,
                'question_id' => 29
            ],

            [
                'chapter_id' => 10,
                'question_id' => 29
            ],

            [
                'chapter_id' => 12,
                'question_id' => 29
            ],

            [
                'chapter_id' => 14,
                'question_id' => 29
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 30
            ],

            [
                'chapter_id' => 4,
                'question_id' => 30
            ],

            [
                'chapter_id' => 6,
                'question_id' => 30
            ],

            [
                'chapter_id' => 8,
                'question_id' => 30
            ],

            [
                'chapter_id' => 10,
                'question_id' => 30
            ],

            [
                'chapter_id' => 12,
                'question_id' => 30
            ],

            [
                'chapter_id' => 14,
                'question_id' => 30
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 31
            ],

            [
                'chapter_id' => 4,
                'question_id' => 31
            ],

            [
                'chapter_id' => 6,
                'question_id' => 31
            ],

            [
                'chapter_id' => 8,
                'question_id' => 31
            ],

            [
                'chapter_id' => 10,
                'question_id' => 31
            ],

            [
                'chapter_id' => 12,
                'question_id' => 31
            ],

            [
                'chapter_id' => 14,
                'question_id' => 31
            ],
            //9block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 32
            ],

            [
                'chapter_id' => 4,
                'question_id' => 32
            ],

            [
                'chapter_id' => 6,
                'question_id' => 32
            ],

            [
                'chapter_id' => 8,
                'question_id' => 32
            ],

            [
                'chapter_id' => 10,
                'question_id' => 32
            ],

            [
                'chapter_id' => 12,
                'question_id' => 32
            ],

            [
                'chapter_id' => 14,
                'question_id' => 32
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 33
            ],

            [
                'chapter_id' => 4,
                'question_id' => 33
            ],

            [
                'chapter_id' => 6,
                'question_id' => 33
            ],

            [
                'chapter_id' => 8,
                'question_id' => 33
            ],

            [
                'chapter_id' => 10,
                'question_id' => 33
            ],

            [
                'chapter_id' => 12,
                'question_id' => 33
            ],

            [
                'chapter_id' => 14,
                'question_id' => 33
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 34
            ],

            [
                'chapter_id' => 4,
                'question_id' => 34
            ],

            [
                'chapter_id' => 6,
                'question_id' => 34
            ],

            [
                'chapter_id' => 8,
                'question_id' => 34
            ],

            [
                'chapter_id' => 10,
                'question_id' => 34
            ],

            [
                'chapter_id' => 12,
                'question_id' => 34
            ],

            [
                'chapter_id' => 14,
                'question_id' => 34
            ],
            //10block
            //1
            [
                'chapter_id' => 1,
                'question_id' => 35
            ],

            [
                'chapter_id' => 4,
                'question_id' => 35
            ],

            [
                'chapter_id' => 6,
                'question_id' => 35
            ],

            [
                'chapter_id' => 8,
                'question_id' => 35
            ],

            [
                'chapter_id' => 10,
                'question_id' => 35
            ],

            [
                'chapter_id' => 12,
                'question_id' => 35
            ],

            [
                'chapter_id' => 14,
                'question_id' => 35
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 36
            ],

            [
                'chapter_id' => 4,
                'question_id' => 36
            ],

            [
                'chapter_id' => 6,
                'question_id' => 36
            ],

            [
                'chapter_id' => 8,
                'question_id' => 36
            ],

            [
                'chapter_id' => 10,
                'question_id' => 36
            ],

            [
                'chapter_id' => 12,
                'question_id' => 36
            ],

            [
                'chapter_id' => 14,
                'question_id' => 36
            ],
            //3
            [
                'chapter_id' => 1,
                'question_id' => 37
            ],

            [
                'chapter_id' => 4,
                'question_id' => 37
            ],

            [
                'chapter_id' => 6,
                'question_id' => 37
            ],

            [
                'chapter_id' => 8,
                'question_id' => 37
            ],

            [
                'chapter_id' => 10,
                'question_id' => 37
            ],

            [
                'chapter_id' => 12,
                'question_id' => 37
            ],

            [
                'chapter_id' => 14,
                'question_id' => 37
            ],
            //11block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 38
            ],

            [
                'chapter_id' => 3,
                'question_id' => 38
            ],

            [
                'chapter_id' => 6,
                'question_id' => 38
            ],

            [
                'chapter_id' => 8,
                'question_id' => 38
            ],

            [
                'chapter_id' => 10,
                'question_id' => 38
            ],

            [
                'chapter_id' => 12,
                'question_id' => 38
            ],

            [
                'chapter_id' => 14,
                'question_id' => 38
            ],
            //2
            [
                'chapter_id' => 1,
                'question_id' => 39
            ],

            [
                'chapter_id' => 3,
                'question_id' => 39
            ],

            [
                'chapter_id' => 6,
                'question_id' => 39
            ],

            [
                'chapter_id' => 8,
                'question_id' => 39
            ],

            [
                'chapter_id' => 10,
                'question_id' => 39
            ],

            [
                'chapter_id' => 12,
                'question_id' => 39
            ],

            [
                'chapter_id' => 14,
                'question_id' => 39
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 40
            ],

            [
                'chapter_id' => 3,
                'question_id' => 40
            ],

            [
                'chapter_id' => 6,
                'question_id' => 40
            ],

            [
                'chapter_id' => 8,
                'question_id' => 40
            ],

            [
                'chapter_id' => 10,
                'question_id' => 40
            ],

            [
                'chapter_id' => 12,
                'question_id' => 40
            ],

            [
                'chapter_id' => 14,
                'question_id' => 40
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 41
            ],

            [
                'chapter_id' => 3,
                'question_id' => 41
            ],

            [
                'chapter_id' => 6,
                'question_id' => 41
            ],

            [
                'chapter_id' => 8,
                'question_id' => 41
            ],

            [
                'chapter_id' => 10,
                'question_id' => 41
            ],

            [
                'chapter_id' => 12,
                'question_id' => 41
            ],

            [
                'chapter_id' => 14,
                'question_id' => 41
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 42
            ],

            [
                'chapter_id' => 3,
                'question_id' => 42
            ],

            [
                'chapter_id' => 6,
                'question_id' => 42
            ],

            [
                'chapter_id' => 8,
                'question_id' => 42
            ],

            [
                'chapter_id' => 10,
                'question_id' => 42
            ],

            [
                'chapter_id' => 12,
                'question_id' => 42
            ],

            [
                'chapter_id' => 14,
                'question_id' => 42
            ],
            //6
            [
                'chapter_id' => 1,
                'question_id' => 43
            ],

            [
                'chapter_id' => 3,
                'question_id' => 43
            ],

            [
                'chapter_id' => 6,
                'question_id' => 43
            ],

            [
                'chapter_id' => 8,
                'question_id' => 43
            ],

            [
                'chapter_id' => 10,
                'question_id' => 43
            ],

            [
                'chapter_id' => 12,
                'question_id' => 43
            ],

            [
                'chapter_id' => 14,
                'question_id' => 43
            ],
            //7
            [
                'chapter_id' => 1,
                'question_id' => 44
            ],

            [
                'chapter_id' => 3,
                'question_id' => 44
            ],

            [
                'chapter_id' => 6,
                'question_id' => 44
            ],

            [
                'chapter_id' => 8,
                'question_id' => 44
            ],

            [
                'chapter_id' => 10,
                'question_id' => 44
            ],

            [
                'chapter_id' => 12,
                'question_id' => 44
            ],

            [
                'chapter_id' => 14,
                'question_id' => 44
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 45
            ],

            [
                'chapter_id' => 3,
                'question_id' => 45
            ],

            [
                'chapter_id' => 6,
                'question_id' => 45
            ],

            [
                'chapter_id' => 8,
                'question_id' => 45
            ],

            [
                'chapter_id' => 10,
                'question_id' => 45
            ],

            [
                'chapter_id' => 12,
                'question_id' => 45
            ],

            [
                'chapter_id' => 14,
                'question_id' => 45
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 46
            ],

            [
                'chapter_id' => 3,
                'question_id' => 46
            ],

            [
                'chapter_id' => 6,
                'question_id' => 46
            ],

            [
                'chapter_id' => 8,
                'question_id' => 46
            ],

            [
                'chapter_id' => 10,
                'question_id' => 46
            ],

            [
                'chapter_id' => 12,
                'question_id' => 46
            ],

            [
                'chapter_id' => 14,
                'question_id' => 46
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 47
            ],

            [
                'chapter_id' => 3,
                'question_id' => 47
            ],

            [
                'chapter_id' => 6,
                'question_id' => 47
            ],

            [
                'chapter_id' => 8,
                'question_id' => 47
            ],

            [
                'chapter_id' => 9,
                'question_id' => 47
            ],

            [
                'chapter_id' => 12,
                'question_id' => 47
            ],

            [
                'chapter_id' => 14,
                'question_id' => 47
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 48
            ],

            [
                'chapter_id' => 3,
                'question_id' => 48
            ],

            [
                'chapter_id' => 6,
                'question_id' => 48
            ],

            [
                'chapter_id' => 8,
                'question_id' => 48
            ],

            [
                'chapter_id' => 9,
                'question_id' => 48
            ],

            [
                'chapter_id' => 12,
                'question_id' => 48
            ],

            [
                'chapter_id' => 14,
                'question_id' => 48
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 49
            ],

            [
                'chapter_id' => 3,
                'question_id' => 49
            ],

            [
                'chapter_id' => 6,
                'question_id' => 49
            ],

            [
                'chapter_id' => 8,
                'question_id' => 49
            ],

            [
                'chapter_id' => 9,
                'question_id' => 49
            ],

            [
                'chapter_id' => 12,
                'question_id' => 49
            ],

            [
                'chapter_id' => 14,
                'question_id' => 49
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 50
            ],

            [
                'chapter_id' => 3,
                'question_id' => 50
            ],

            [
                'chapter_id' => 6,
                'question_id' => 50
            ],

            [
                'chapter_id' => 8,
                'question_id' => 50
            ],

            [
                'chapter_id' => 10,
                'question_id' => 50
            ],

            [
                'chapter_id' => 12,
                'question_id' => 50
            ],

            [
                'chapter_id' => 14,
                'question_id' => 50
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 51
            ],

            [
                'chapter_id' => 3,
                'question_id' => 51
            ],

            [
                'chapter_id' => 6,
                'question_id' => 51
            ],

            [
                'chapter_id' => 8,
                'question_id' => 51
            ],

            [
                'chapter_id' => 10,
                'question_id' => 51
            ],

            [
                'chapter_id' => 12,
                'question_id' => 51
            ],

            [
                'chapter_id' => 14,
                'question_id' => 51
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 52
            ],

            [
                'chapter_id' => 3,
                'question_id' => 52
            ],

            [
                'chapter_id' => 6,
                'question_id' => 52
            ],

            [
                'chapter_id' => 8,
                'question_id' => 52
            ],

            [
                'chapter_id' => 10,
                'question_id' => 52
            ],

            [
                'chapter_id' => 12,
                'question_id' => 52
            ],

            [
                'chapter_id' => 14,
                'question_id' => 52
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 53
            ],

            [
                'chapter_id' => 3,
                'question_id' => 53
            ],

            [
                'chapter_id' => 6,
                'question_id' => 53
            ],

            [
                'chapter_id' => 8,
                'question_id' => 53
            ],

            [
                'chapter_id' => 9,
                'question_id' => 53
            ],

            [
                'chapter_id' => 12,
                'question_id' => 53
            ],

            [
                'chapter_id' => 14,
                'question_id' => 53
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 54
            ],

            [
                'chapter_id' => 3,
                'question_id' => 54
            ],

            [
                'chapter_id' => 6,
                'question_id' => 54
            ],

            [
                'chapter_id' => 8,
                'question_id' => 54
            ],

            [
                'chapter_id' => 10,
                'question_id' => 54
            ],

            [
                'chapter_id' => 12,
                'question_id' => 54
            ],

            [
                'chapter_id' => 14,
                'question_id' => 54
            ],
            //18
            [
                'chapter_id' => 2,
                'question_id' => 55
            ],

            [
                'chapter_id' => 3,
                'question_id' => 55
            ],

            [
                'chapter_id' => 6,
                'question_id' => 55
            ],

            [
                'chapter_id' => 8,
                'question_id' => 55
            ],

            [
                'chapter_id' => 9,
                'question_id' => 55
            ],

            [
                'chapter_id' => 12,
                'question_id' => 55
            ],

            [
                'chapter_id' => 14,
                'question_id' => 55
            ],
            //19
            [
                'chapter_id' => 2,
                'question_id' => 56
            ],

            [
                'chapter_id' => 3,
                'question_id' => 56
            ],

            [
                'chapter_id' => 6,
                'question_id' => 56
            ],

            [
                'chapter_id' => 8,
                'question_id' => 56
            ],

            [
                'chapter_id' => 9,
                'question_id' => 56
            ],

            [
                'chapter_id' => 12,
                'question_id' => 56
            ],

            [
                'chapter_id' => 14,
                'question_id' => 56
            ],
            //20
            [
                'chapter_id' => 2,
                'question_id' => 57
            ],

            [
                'chapter_id' => 3,
                'question_id' => 57
            ],

            [
                'chapter_id' => 6,
                'question_id' => 57
            ],

            [
                'chapter_id' => 8,
                'question_id' => 57
            ],

            [
                'chapter_id' => 9,
                'question_id' => 57
            ],

            [
                'chapter_id' => 12,
                'question_id' => 57
            ],

            [
                'chapter_id' => 14,
                'question_id' => 57
            ],
            //21
            [
                'chapter_id' => 2,
                'question_id' => 58
            ],

            [
                'chapter_id' => 3,
                'question_id' => 58
            ],

            [
                'chapter_id' => 6,
                'question_id' => 58
            ],

            [
                'chapter_id' => 8,
                'question_id' => 58
            ],

            [
                'chapter_id' => 10,
                'question_id' => 58
            ],

            [
                'chapter_id' => 12,
                'question_id' => 58
            ],

            [
                'chapter_id' => 14,
                'question_id' => 58
            ],
            //22
            [
                'chapter_id' => 2,
                'question_id' => 59
            ],

            [
                'chapter_id' => 3,
                'question_id' => 59
            ],

            [
                'chapter_id' => 6,
                'question_id' => 59
            ],

            [
                'chapter_id' => 8,
                'question_id' => 59
            ],

            [
                'chapter_id' => 10,
                'question_id' => 59
            ],

            [
                'chapter_id' => 12,
                'question_id' => 59
            ],

            [
                'chapter_id' => 14,
                'question_id' => 59
            ],
            //23
            [
                'chapter_id' => 2,
                'question_id' => 60
            ],

            [
                'chapter_id' => 3,
                'question_id' => 60
            ],

            [
                'chapter_id' => 6,
                'question_id' => 60
            ],

            [
                'chapter_id' => 8,
                'question_id' => 60
            ],

            [
                'chapter_id' => 9,
                'question_id' => 60
            ],

            [
                'chapter_id' => 12,
                'question_id' => 60
            ],

            [
                'chapter_id' => 14,
                'question_id' => 60
            ],
            //24
            [
                'chapter_id' => 2,
                'question_id' => 61
            ],

            [
                'chapter_id' => 3,
                'question_id' => 61
            ],

            [
                'chapter_id' => 6,
                'question_id' => 61
            ],

            [
                'chapter_id' => 8,
                'question_id' => 61
            ],

            [
                'chapter_id' => 10,
                'question_id' => 61
            ],

            [
                'chapter_id' => 12,
                'question_id' => 61
            ],

            [
                'chapter_id' => 14,
                'question_id' => 61
            ],
            //25
            [
                'chapter_id' => 2,
                'question_id' => 62
            ],

            [
                'chapter_id' => 3,
                'question_id' => 62
            ],

            [
                'chapter_id' => 6,
                'question_id' => 62
            ],

            [
                'chapter_id' => 8,
                'question_id' => 62
            ],

            [
                'chapter_id' => 9,
                'question_id' => 62
            ],

            [
                'chapter_id' => 12,
                'question_id' => 62
            ],

            [
                'chapter_id' => 14,
                'question_id' => 62
            ],
            //26
            [
                'chapter_id' => 2,
                'question_id' => 63
            ],

            [
                'chapter_id' => 3,
                'question_id' => 63
            ],

            [
                'chapter_id' => 6,
                'question_id' => 63
            ],

            [
                'chapter_id' => 8,
                'question_id' => 63
            ],

            [
                'chapter_id' => 10,
                'question_id' => 63
            ],

            [
                'chapter_id' => 12,
                'question_id' => 63
            ],

            [
                'chapter_id' => 14,
                'question_id' => 63
            ],
            //27
            [
                'chapter_id' => 2,
                'question_id' => 64
            ],

            [
                'chapter_id' => 3,
                'question_id' => 64
            ],

            [
                'chapter_id' => 6,
                'question_id' => 64
            ],

            [
                'chapter_id' => 8,
                'question_id' => 64
            ],

            [
                'chapter_id' => 10,
                'question_id' => 64
            ],

            [
                'chapter_id' => 12,
                'question_id' => 64
            ],

            [
                'chapter_id' => 14,
                'question_id' => 64
            ],
            //28
            [
                'chapter_id' => 2,
                'question_id' => 65
            ],

            [
                'chapter_id' => 3,
                'question_id' => 65
            ],

            [
                'chapter_id' => 6,
                'question_id' => 65
            ],

            [
                'chapter_id' => 8,
                'question_id' => 65
            ],

            [
                'chapter_id' => 10,
                'question_id' => 65
            ],

            [
                'chapter_id' => 12,
                'question_id' => 65
            ],

            [
                'chapter_id' => 14,
                'question_id' => 65
            ],
            //2section
            //1block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 66
            ],

            [
                'chapter_id' => 4,
                'question_id' => 66
            ],

            [
                'chapter_id' => 5,
                'question_id' => 66
            ],

            [
                'chapter_id' => 8,
                'question_id' => 66
            ],

            [
                'chapter_id' => 10,
                'question_id' => 66
            ],

            [
                'chapter_id' => 12,
                'question_id' => 66
            ],

            [
                'chapter_id' => 14,
                'question_id' => 66
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 67
            ],

            [
                'chapter_id' => 4,
                'question_id' => 67
            ],

            [
                'chapter_id' => 5,
                'question_id' => 67
            ],

            [
                'chapter_id' => 8,
                'question_id' => 67
            ],

            [
                'chapter_id' => 10,
                'question_id' => 67
            ],

            [
                'chapter_id' => 12,
                'question_id' => 67
            ],

            [
                'chapter_id' => 14,
                'question_id' => 67
            ],
            //3

            [
                'chapter_id' => 2,
                'question_id' => 68
            ],

            [
                'chapter_id' => 4,
                'question_id' => 68
            ],

            [
                'chapter_id' => 5,
                'question_id' => 68
            ],

            [
                'chapter_id' => 8,
                'question_id' => 68
            ],

            [
                'chapter_id' => 10,
                'question_id' => 68
            ],

            [
                'chapter_id' => 11,
                'question_id' => 68
            ],

            [
                'chapter_id' => 14,
                'question_id' => 68
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 69
            ],

            [
                'chapter_id' => 4,
                'question_id' => 69
            ],

            [
                'chapter_id' => 5,
                'question_id' => 69
            ],

            [
                'chapter_id' => 8,
                'question_id' => 69
            ],

            [
                'chapter_id' => 10,
                'question_id' => 69
            ],

            [
                'chapter_id' => 11,
                'question_id' => 69
            ],

            [
                'chapter_id' => 14,
                'question_id' => 69
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 70
            ],

            [
                'chapter_id' => 4,
                'question_id' => 70
            ],

            [
                'chapter_id' => 5,
                'question_id' => 70
            ],

            [
                'chapter_id' => 8,
                'question_id' => 70
            ],

            [
                'chapter_id' => 10,
                'question_id' => 70
            ],

            [
                'chapter_id' => 11,
                'question_id' => 70
            ],

            [
                'chapter_id' => 14,
                'question_id' => 70
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 71
            ],

            [
                'chapter_id' => 4,
                'question_id' => 71
            ],

            [
                'chapter_id' => 5,
                'question_id' => 71
            ],

            [
                'chapter_id' => 8,
                'question_id' => 71
            ],

            [
                'chapter_id' => 10,
                'question_id' => 71
            ],

            [
                'chapter_id' => 11,
                'question_id' => 71
            ],

            [
                'chapter_id' => 14,
                'question_id' => 71
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 72
            ],

            [
                'chapter_id' => 4,
                'question_id' => 72
            ],

            [
                'chapter_id' => 5,
                'question_id' => 72
            ],

            [
                'chapter_id' => 8,
                'question_id' => 72
            ],

            [
                'chapter_id' => 10,
                'question_id' => 72
            ],

            [
                'chapter_id' => 11,
                'question_id' => 72
            ],

            [
                'chapter_id' => 14,
                'question_id' => 72
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 73
            ],

            [
                'chapter_id' => 4,
                'question_id' => 73
            ],

            [
                'chapter_id' => 5,
                'question_id' => 73
            ],

            [
                'chapter_id' => 8,
                'question_id' => 73
            ],

            [
                'chapter_id' => 10,
                'question_id' => 73
            ],

            [
                'chapter_id' => 11,
                'question_id' => 73
            ],

            [
                'chapter_id' => 13,
                'question_id' => 73
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 74
            ],

            [
                'chapter_id' => 4,
                'question_id' => 74
            ],

            [
                'chapter_id' => 5,
                'question_id' => 74
            ],

            [
                'chapter_id' => 8,
                'question_id' => 74
            ],

            [
                'chapter_id' => 10,
                'question_id' => 74
            ],

            [
                'chapter_id' => 11,
                'question_id' => 74
            ],

            [
                'chapter_id' => 13,
                'question_id' => 74
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 75
            ],

            [
                'chapter_id' => 4,
                'question_id' => 75
            ],

            [
                'chapter_id' => 5,
                'question_id' => 75
            ],

            [
                'chapter_id' => 8,
                'question_id' => 75
            ],

            [
                'chapter_id' => 10,
                'question_id' => 75
            ],

            [
                'chapter_id' => 11,
                'question_id' => 75
            ],

            [
                'chapter_id' => 13,
                'question_id' => 75
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 76
            ],

            [
                'chapter_id' => 4,
                'question_id' => 76
            ],

            [
                'chapter_id' => 5,
                'question_id' => 76
            ],

            [
                'chapter_id' => 8,
                'question_id' => 76
            ],

            [
                'chapter_id' => 10,
                'question_id' => 76
            ],

            [
                'chapter_id' => 11,
                'question_id' => 76
            ],

            [
                'chapter_id' => 13,
                'question_id' => 76
            ],
            //2block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 77
            ],

            [
                'chapter_id' => 4,
                'question_id' => 77
            ],

            [
                'chapter_id' => 5,
                'question_id' => 77
            ],

            [
                'chapter_id' => 8,
                'question_id' => 77
            ],

            [
                'chapter_id' => 10,
                'question_id' => 77
            ],

            [
                'chapter_id' => 12,
                'question_id' => 77
            ],

            [
                'chapter_id' => 14,
                'question_id' => 77
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 78
            ],

            [
                'chapter_id' => 4,
                'question_id' => 78
            ],

            [
                'chapter_id' => 5,
                'question_id' => 78
            ],

            [
                'chapter_id' => 8,
                'question_id' => 78
            ],

            [
                'chapter_id' => 10,
                'question_id' => 78
            ],

            [
                'chapter_id' => 12,
                'question_id' => 78
            ],

            [
                'chapter_id' => 14,
                'question_id' => 78
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 79
            ],

            [
                'chapter_id' => 4,
                'question_id' => 79
            ],

            [
                'chapter_id' => 5,
                'question_id' => 79
            ],

            [
                'chapter_id' => 8,
                'question_id' => 79
            ],

            [
                'chapter_id' => 10,
                'question_id' => 79
            ],

            [
                'chapter_id' => 12,
                'question_id' => 79
            ],

            [
                'chapter_id' => 14,
                'question_id' => 79
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 80
            ],

            [
                'chapter_id' => 4,
                'question_id' => 80
            ],

            [
                'chapter_id' => 5,
                'question_id' => 80
            ],

            [
                'chapter_id' => 8,
                'question_id' => 80
            ],

            [
                'chapter_id' => 10,
                'question_id' => 80
            ],

            [
                'chapter_id' => 12,
                'question_id' => 80
            ],

            [
                'chapter_id' => 14,
                'question_id' => 80
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 81
            ],

            [
                'chapter_id' => 4,
                'question_id' => 81
            ],

            [
                'chapter_id' => 5,
                'question_id' => 81
            ],

            [
                'chapter_id' => 8,
                'question_id' => 81
            ],

            [
                'chapter_id' => 10,
                'question_id' => 81
            ],

            [
                'chapter_id' => 12,
                'question_id' => 81
            ],

            [
                'chapter_id' => 14,
                'question_id' => 81
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 82
            ],

            [
                'chapter_id' => 4,
                'question_id' => 82
            ],

            [
                'chapter_id' => 5,
                'question_id' => 82
            ],

            [
                'chapter_id' => 8,
                'question_id' => 82
            ],

            [
                'chapter_id' => 10,
                'question_id' => 82
            ],

            [
                'chapter_id' => 12,
                'question_id' => 82
            ],

            [
                'chapter_id' => 14,
                'question_id' => 82
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 83
            ],

            [
                'chapter_id' => 4,
                'question_id' => 83
            ],

            [
                'chapter_id' => 5,
                'question_id' => 83
            ],

            [
                'chapter_id' => 8,
                'question_id' => 83
            ],

            [
                'chapter_id' => 10,
                'question_id' => 83
            ],

            [
                'chapter_id' => 12,
                'question_id' => 83
            ],

            [
                'chapter_id' => 14,
                'question_id' => 83
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 84
            ],

            [
                'chapter_id' => 4,
                'question_id' => 84
            ],

            [
                'chapter_id' => 5,
                'question_id' => 84
            ],

            [
                'chapter_id' => 8,
                'question_id' => 84
            ],

            [
                'chapter_id' => 10,
                'question_id' => 84
            ],

            [
                'chapter_id' => 12,
                'question_id' => 84
            ],

            [
                'chapter_id' => 14,
                'question_id' => 84
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 85
            ],

            [
                'chapter_id' => 4,
                'question_id' => 85
            ],

            [
                'chapter_id' => 5,
                'question_id' => 85
            ],

            [
                'chapter_id' => 8,
                'question_id' => 85
            ],

            [
                'chapter_id' => 10,
                'question_id' => 85
            ],

            [
                'chapter_id' => 12,
                'question_id' => 85
            ],

            [
                'chapter_id' => 14,
                'question_id' => 85
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 86
            ],

            [
                'chapter_id' => 4,
                'question_id' => 86
            ],

            [
                'chapter_id' => 5,
                'question_id' => 86
            ],

            [
                'chapter_id' => 8,
                'question_id' => 86
            ],

            [
                'chapter_id' => 10,
                'question_id' => 86
            ],

            [
                'chapter_id' => 12,
                'question_id' => 86
            ],

            [
                'chapter_id' => 14,
                'question_id' => 86
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 87
            ],

            [
                'chapter_id' => 4,
                'question_id' => 87
            ],

            [
                'chapter_id' => 5,
                'question_id' => 87
            ],

            [
                'chapter_id' => 8,
                'question_id' => 87
            ],

            [
                'chapter_id' => 10,
                'question_id' => 87
            ],

            [
                'chapter_id' => 12,
                'question_id' => 87
            ],

            [
                'chapter_id' => 14,
                'question_id' => 87
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 88
            ],

            [
                'chapter_id' => 4,
                'question_id' => 88
            ],

            [
                'chapter_id' => 5,
                'question_id' => 88
            ],

            [
                'chapter_id' => 8,
                'question_id' => 88
            ],

            [
                'chapter_id' => 10,
                'question_id' => 88
            ],

            [
                'chapter_id' => 12,
                'question_id' => 88
            ],

            [
                'chapter_id' => 14,
                'question_id' => 88
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 89
            ],

            [
                'chapter_id' => 4,
                'question_id' => 89
            ],

            [
                'chapter_id' => 5,
                'question_id' => 89
            ],

            [
                'chapter_id' => 8,
                'question_id' => 89
            ],

            [
                'chapter_id' => 10,
                'question_id' => 89
            ],

            [
                'chapter_id' => 12,
                'question_id' => 89
            ],

            [
                'chapter_id' => 14,
                'question_id' => 89
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 90
            ],

            [
                'chapter_id' => 4,
                'question_id' => 90
            ],

            [
                'chapter_id' => 5,
                'question_id' => 90
            ],

            [
                'chapter_id' => 8,
                'question_id' => 90
            ],

            [
                'chapter_id' => 10,
                'question_id' => 90
            ],

            [
                'chapter_id' => 11,
                'question_id' => 90
            ],

            [
                'chapter_id' => 13,
                'question_id' => 90
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 91
            ],

            [
                'chapter_id' => 4,
                'question_id' => 91
            ],

            [
                'chapter_id' => 5,
                'question_id' => 91
            ],

            [
                'chapter_id' => 8,
                'question_id' => 91
            ],

            [
                'chapter_id' => 10,
                'question_id' => 91
            ],

            [
                'chapter_id' => 11,
                'question_id' => 91
            ],

            [
                'chapter_id' => 13,
                'question_id' => 91
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 92
            ],

            [
                'chapter_id' => 4,
                'question_id' => 92
            ],

            [
                'chapter_id' => 5,
                'question_id' => 92
            ],

            [
                'chapter_id' => 8,
                'question_id' => 92
            ],

            [
                'chapter_id' => 10,
                'question_id' => 92
            ],

            [
                'chapter_id' => 12,
                'question_id' => 92
            ],

            [
                'chapter_id' => 14,
                'question_id' => 92
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 93
            ],

            [
                'chapter_id' => 4,
                'question_id' => 93
            ],

            [
                'chapter_id' => 5,
                'question_id' => 93
            ],

            [
                'chapter_id' => 8,
                'question_id' => 93
            ],

            [
                'chapter_id' => 10,
                'question_id' => 93
            ],

            [
                'chapter_id' => 12,
                'question_id' => 93
            ],

            [
                'chapter_id' => 14,
                'question_id' => 93
            ],
            //3block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 94
            ],

            [
                'chapter_id' => 4,
                'question_id' => 94
            ],

            [
                'chapter_id' => 6,
                'question_id' => 94
            ],

            [
                'chapter_id' => 7,
                'question_id' => 94
            ],

            [
                'chapter_id' => 10,
                'question_id' => 94
            ],

            [
                'chapter_id' => 12,
                'question_id' => 94
            ],

            [
                'chapter_id' => 14,
                'question_id' => 94
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 95
            ],

            [
                'chapter_id' => 4,
                'question_id' => 95
            ],

            [
                'chapter_id' => 6,
                'question_id' => 95
            ],

            [
                'chapter_id' => 7,
                'question_id' => 95
            ],

            [
                'chapter_id' => 10,
                'question_id' => 95
            ],

            [
                'chapter_id' => 12,
                'question_id' => 95
            ],

            [
                'chapter_id' => 14,
                'question_id' => 95
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 96
            ],

            [
                'chapter_id' => 4,
                'question_id' => 96
            ],

            [
                'chapter_id' => 6,
                'question_id' => 96
            ],

            [
                'chapter_id' => 7,
                'question_id' => 96
            ],

            [
                'chapter_id' => 10,
                'question_id' => 96
            ],

            [
                'chapter_id' => 12,
                'question_id' => 96
            ],

            [
                'chapter_id' => 14,
                'question_id' => 96
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 97
            ],

            [
                'chapter_id' => 4,
                'question_id' => 97
            ],

            [
                'chapter_id' => 6,
                'question_id' => 97
            ],

            [
                'chapter_id' => 7,
                'question_id' => 97
            ],

            [
                'chapter_id' => 10,
                'question_id' => 97
            ],

            [
                'chapter_id' => 11,
                'question_id' => 97
            ],

            [
                'chapter_id' => 14,
                'question_id' => 97
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 98
            ],

            [
                'chapter_id' => 4,
                'question_id' => 98
            ],

            [
                'chapter_id' => 6,
                'question_id' => 98
            ],

            [
                'chapter_id' => 7,
                'question_id' => 98
            ],

            [
                'chapter_id' => 10,
                'question_id' => 98
            ],

            [
                'chapter_id' => 11,
                'question_id' => 98
            ],

            [
                'chapter_id' => 14,
                'question_id' => 98
            ],

            //4block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 99
            ],

            [
                'chapter_id' => 4,
                'question_id' => 99
            ],

            [
                'chapter_id' => 6,
                'question_id' => 99
            ],

            [
                'chapter_id' => 7,
                'question_id' => 99
            ],

            [
                'chapter_id' => 10,
                'question_id' => 99
            ],

            [
                'chapter_id' => 12,
                'question_id' => 99
            ],

            [
                'chapter_id' => 14,
                'question_id' => 99
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 100
            ],

            [
                'chapter_id' => 4,
                'question_id' => 100
            ],

            [
                'chapter_id' => 6,
                'question_id' => 100
            ],

            [
                'chapter_id' => 7,
                'question_id' => 100
            ],

            [
                'chapter_id' => 10,
                'question_id' => 100
            ],

            [
                'chapter_id' => 12,
                'question_id' => 100
            ],

            [
                'chapter_id' => 14,
                'question_id' => 100
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 101
            ],

            [
                'chapter_id' => 4,
                'question_id' => 101
            ],

            [
                'chapter_id' => 6,
                'question_id' => 101
            ],

            [
                'chapter_id' => 7,
                'question_id' => 101
            ],

            [
                'chapter_id' => 10,
                'question_id' => 101
            ],

            [
                'chapter_id' => 12,
                'question_id' => 101
            ],

            [
                'chapter_id' => 14,
                'question_id' => 101
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 102
            ],

            [
                'chapter_id' => 4,
                'question_id' => 102
            ],

            [
                'chapter_id' => 6,
                'question_id' => 102
            ],

            [
                'chapter_id' => 7,
                'question_id' => 102
            ],

            [
                'chapter_id' => 10,
                'question_id' => 102
            ],

            [
                'chapter_id' => 12,
                'question_id' => 102
            ],

            [
                'chapter_id' => 14,
                'question_id' => 102
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 103
            ],

            [
                'chapter_id' => 4,
                'question_id' => 103
            ],

            [
                'chapter_id' => 6,
                'question_id' => 103
            ],

            [
                'chapter_id' => 7,
                'question_id' => 103
            ],

            [
                'chapter_id' => 10,
                'question_id' => 103
            ],

            [
                'chapter_id' => 12,
                'question_id' => 103
            ],

            [
                'chapter_id' => 14,
                'question_id' => 103
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 104
            ],

            [
                'chapter_id' => 4,
                'question_id' => 104
            ],

            [
                'chapter_id' => 6,
                'question_id' => 104
            ],

            [
                'chapter_id' => 7,
                'question_id' => 104
            ],

            [
                'chapter_id' => 10,
                'question_id' => 104
            ],

            [
                'chapter_id' => 12,
                'question_id' => 104
            ],

            [
                'chapter_id' => 14,
                'question_id' => 104
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 105
            ],

            [
                'chapter_id' => 4,
                'question_id' => 105
            ],

            [
                'chapter_id' => 6,
                'question_id' => 105
            ],

            [
                'chapter_id' => 7,
                'question_id' => 105
            ],

            [
                'chapter_id' => 10,
                'question_id' => 105
            ],

            [
                'chapter_id' => 12,
                'question_id' => 105
            ],

            [
                'chapter_id' => 14,
                'question_id' => 105
            ],
            //5block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 106
            ],

            [
                'chapter_id' => 4,
                'question_id' => 106
            ],

            [
                'chapter_id' => 6,
                'question_id' => 106
            ],

            [
                'chapter_id' => 7,
                'question_id' => 106
            ],

            [
                'chapter_id' => 10,
                'question_id' => 106
            ],

            [
                'chapter_id' => 12,
                'question_id' => 106
            ],

            [
                'chapter_id' => 14,
                'question_id' => 106
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 107
            ],

            [
                'chapter_id' => 4,
                'question_id' => 107
            ],

            [
                'chapter_id' => 6,
                'question_id' => 107
            ],

            [
                'chapter_id' => 7,
                'question_id' => 107
            ],

            [
                'chapter_id' => 10,
                'question_id' => 107
            ],

            [
                'chapter_id' => 12,
                'question_id' => 107
            ],

            [
                'chapter_id' => 14,
                'question_id' => 107
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 108
            ],

            [
                'chapter_id' => 4,
                'question_id' => 108
            ],

            [
                'chapter_id' => 6,
                'question_id' => 108
            ],

            [
                'chapter_id' => 7,
                'question_id' => 108
            ],

            [
                'chapter_id' => 10,
                'question_id' => 108
            ],

            [
                'chapter_id' => 12,
                'question_id' => 108
            ],

            [
                'chapter_id' => 14,
                'question_id' => 108
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 109
            ],

            [
                'chapter_id' => 4,
                'question_id' => 109
            ],

            [
                'chapter_id' => 6,
                'question_id' => 109
            ],

            [
                'chapter_id' => 7,
                'question_id' => 109
            ],

            [
                'chapter_id' => 10,
                'question_id' => 109
            ],

            [
                'chapter_id' => 12,
                'question_id' => 109
            ],

            [
                'chapter_id' => 14,
                'question_id' => 109
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 110
            ],

            [
                'chapter_id' => 4,
                'question_id' => 110
            ],

            [
                'chapter_id' => 6,
                'question_id' => 110
            ],

            [
                'chapter_id' => 7,
                'question_id' => 110
            ],

            [
                'chapter_id' => 10,
                'question_id' => 110
            ],

            [
                'chapter_id' => 12,
                'question_id' => 110
            ],

            [
                'chapter_id' => 14,
                'question_id' => 110
            ],
            //6block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 111
            ],

            [
                'chapter_id' => 4,
                'question_id' => 111
            ],

            [
                'chapter_id' => 6,
                'question_id' => 111
            ],

            [
                'chapter_id' => 7,
                'question_id' => 111
            ],

            [
                'chapter_id' => 10,
                'question_id' => 111
            ],

            [
                'chapter_id' => 12,
                'question_id' => 111
            ],

            [
                'chapter_id' => 14,
                'question_id' => 111
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 112
            ],

            [
                'chapter_id' => 4,
                'question_id' => 112
            ],

            [
                'chapter_id' => 6,
                'question_id' => 112
            ],

            [
                'chapter_id' => 7,
                'question_id' => 112
            ],

            [
                'chapter_id' => 10,
                'question_id' => 112
            ],

            [
                'chapter_id' => 12,
                'question_id' => 112
            ],

            [
                'chapter_id' => 14,
                'question_id' => 112
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 113
            ],

            [
                'chapter_id' => 4,
                'question_id' => 113
            ],

            [
                'chapter_id' => 6,
                'question_id' => 113
            ],

            [
                'chapter_id' => 7,
                'question_id' => 113
            ],

            [
                'chapter_id' => 10,
                'question_id' => 113
            ],

            [
                'chapter_id' => 12,
                'question_id' => 113
            ],

            [
                'chapter_id' => 14,
                'question_id' => 113
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 114
            ],

            [
                'chapter_id' => 4,
                'question_id' => 114
            ],

            [
                'chapter_id' => 6,
                'question_id' => 114
            ],

            [
                'chapter_id' => 7,
                'question_id' => 114
            ],

            [
                'chapter_id' => 10,
                'question_id' => 114
            ],

            [
                'chapter_id' => 12,
                'question_id' => 114
            ],

            [
                'chapter_id' => 14,
                'question_id' => 114
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 115
            ],

            [
                'chapter_id' => 4,
                'question_id' => 115
            ],

            [
                'chapter_id' => 6,
                'question_id' => 115
            ],

            [
                'chapter_id' => 7,
                'question_id' => 115
            ],

            [
                'chapter_id' => 10,
                'question_id' => 115
            ],

            [
                'chapter_id' => 12,
                'question_id' => 115
            ],

            [
                'chapter_id' => 14,
                'question_id' => 115
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 116
            ],

            [
                'chapter_id' => 4,
                'question_id' => 116
            ],

            [
                'chapter_id' => 6,
                'question_id' => 116
            ],

            [
                'chapter_id' => 7,
                'question_id' => 116
            ],

            [
                'chapter_id' => 10,
                'question_id' => 116
            ],

            [
                'chapter_id' => 12,
                'question_id' => 116
            ],

            [
                'chapter_id' => 14,
                'question_id' => 116
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 110
            ],

            [
                'chapter_id' => 4,
                'question_id' => 117
            ],

            [
                'chapter_id' => 6,
                'question_id' => 117
            ],

            [
                'chapter_id' => 7,
                'question_id' => 117
            ],

            [
                'chapter_id' => 10,
                'question_id' => 117
            ],

            [
                'chapter_id' => 12,
                'question_id' => 117
            ],

            [
                'chapter_id' => 14,
                'question_id' => 117
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 118
            ],

            [
                'chapter_id' => 4,
                'question_id' => 118
            ],

            [
                'chapter_id' => 6,
                'question_id' => 118
            ],

            [
                'chapter_id' => 7,
                'question_id' => 118
            ],

            [
                'chapter_id' => 10,
                'question_id' => 118
            ],

            [
                'chapter_id' => 12,
                'question_id' => 118
            ],

            [
                'chapter_id' => 14,
                'question_id' => 118
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 119
            ],

            [
                'chapter_id' => 4,
                'question_id' => 119
            ],

            [
                'chapter_id' => 6,
                'question_id' => 119
            ],

            [
                'chapter_id' => 7,
                'question_id' => 119
            ],

            [
                'chapter_id' => 10,
                'question_id' => 119
            ],

            [
                'chapter_id' => 12,
                'question_id' => 119
            ],

            [
                'chapter_id' => 14,
                'question_id' => 119
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 120
            ],

            [
                'chapter_id' => 4,
                'question_id' => 120
            ],

            [
                'chapter_id' => 6,
                'question_id' => 120
            ],

            [
                'chapter_id' => 7,
                'question_id' => 120
            ],

            [
                'chapter_id' => 10,
                'question_id' => 120
            ],

            [
                'chapter_id' => 12,
                'question_id' => 120
            ],

            [
                'chapter_id' => 14,
                'question_id' => 120
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 121
            ],

            [
                'chapter_id' => 4,
                'question_id' => 121
            ],

            [
                'chapter_id' => 6,
                'question_id' => 121
            ],

            [
                'chapter_id' => 7,
                'question_id' => 121
            ],

            [
                'chapter_id' => 10,
                'question_id' => 121
            ],

            [
                'chapter_id' => 12,
                'question_id' => 121
            ],

            [
                'chapter_id' => 14,
                'question_id' => 121
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 122
            ],

            [
                'chapter_id' => 4,
                'question_id' => 122
            ],

            [
                'chapter_id' => 6,
                'question_id' => 122
            ],

            [
                'chapter_id' => 7,
                'question_id' => 122
            ],

            [
                'chapter_id' => 10,
                'question_id' => 122
            ],

            [
                'chapter_id' => 12,
                'question_id' => 122
            ],

            [
                'chapter_id' => 13,
                'question_id' => 122
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 123
            ],

            [
                'chapter_id' => 4,
                'question_id' => 123
            ],

            [
                'chapter_id' => 6,
                'question_id' => 123
            ],

            [
                'chapter_id' => 7,
                'question_id' => 123
            ],

            [
                'chapter_id' => 10,
                'question_id' => 123
            ],

            [
                'chapter_id' => 12,
                'question_id' => 123
            ],

            [
                'chapter_id' => 14,
                'question_id' => 123
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 124
            ],

            [
                'chapter_id' => 4,
                'question_id' => 124
            ],

            [
                'chapter_id' => 6,
                'question_id' => 124
            ],

            [
                'chapter_id' => 7,
                'question_id' => 124
            ],

            [
                'chapter_id' => 10,
                'question_id' => 124
            ],

            [
                'chapter_id' => 12,
                'question_id' => 124
            ],

            [
                'chapter_id' => 14,
                'question_id' => 124
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 125
            ],

            [
                'chapter_id' => 4,
                'question_id' => 125
            ],

            [
                'chapter_id' => 6,
                'question_id' => 125
            ],

            [
                'chapter_id' => 7,
                'question_id' => 125
            ],

            [
                'chapter_id' => 10,
                'question_id' => 125
            ],

            [
                'chapter_id' => 12,
                'question_id' => 125
            ],

            [
                'chapter_id' => 14,
                'question_id' => 125
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 126
            ],

            [
                'chapter_id' => 3,
                'question_id' => 126
            ],

            [
                'chapter_id' => 6,
                'question_id' => 126
            ],

            [
                'chapter_id' => 7,
                'question_id' => 126
            ],

            [
                'chapter_id' => 10,
                'question_id' => 126
            ],

            [
                'chapter_id' => 12,
                'question_id' => 126
            ],

            [
                'chapter_id' => 14,
                'question_id' => 126
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 127
            ],

            [
                'chapter_id' => 4,
                'question_id' => 127
            ],

            [
                'chapter_id' => 6,
                'question_id' => 127
            ],

            [
                'chapter_id' => 7,
                'question_id' => 127
            ],

            [
                'chapter_id' => 10,
                'question_id' => 127
            ],

            [
                'chapter_id' => 12,
                'question_id' => 127
            ],

            [
                'chapter_id' => 14,
                'question_id' => 127
            ],
            //18
            [
                'chapter_id' => 2,
                'question_id' => 128
            ],

            [
                'chapter_id' => 4,
                'question_id' => 128
            ],

            [
                'chapter_id' => 6,
                'question_id' => 128
            ],

            [
                'chapter_id' => 7,
                'question_id' => 128
            ],

            [
                'chapter_id' => 10,
                'question_id' => 128
            ],

            [
                'chapter_id' => 12,
                'question_id' => 128
            ],

            [
                'chapter_id' => 14,
                'question_id' => 128
            ],
            //19
            [
                'chapter_id' => 2,
                'question_id' => 129
            ],

            [
                'chapter_id' => 4,
                'question_id' => 129
            ],

            [
                'chapter_id' => 6,
                'question_id' => 129
            ],

            [
                'chapter_id' => 7,
                'question_id' => 129
            ],

            [
                'chapter_id' => 10,
                'question_id' => 129
            ],

            [
                'chapter_id' => 12,
                'question_id' => 129
            ],

            [
                'chapter_id' => 14,
                'question_id' => 129
            ],
            //20
            [
                'chapter_id' => 2,
                'question_id' => 130
            ],

            [
                'chapter_id' => 4,
                'question_id' => 130
            ],

            [
                'chapter_id' => 6,
                'question_id' => 130
            ],

            [
                'chapter_id' => 7,
                'question_id' => 130
            ],

            [
                'chapter_id' => 10,
                'question_id' => 130
            ],

            [
                'chapter_id' => 12,
                'question_id' => 130
            ],

            [
                'chapter_id' => 14,
                'question_id' => 130
            ],
            //21
            [
                'chapter_id' => 2,
                'question_id' => 131
            ],

            [
                'chapter_id' => 4,
                'question_id' => 131
            ],

            [
                'chapter_id' => 6,
                'question_id' => 131
            ],

            [
                'chapter_id' => 7,
                'question_id' => 131
            ],

            [
                'chapter_id' => 10,
                'question_id' => 131
            ],

            [
                'chapter_id' => 12,
                'question_id' => 131
            ],

            [
                'chapter_id' => 14,
                'question_id' => 131
            ],
            //22
            [
                'chapter_id' => 2,
                'question_id' => 132
            ],

            [
                'chapter_id' => 4,
                'question_id' => 132
            ],

            [
                'chapter_id' => 6,
                'question_id' => 132
            ],

            [
                'chapter_id' => 7,
                'question_id' => 132
            ],

            [
                'chapter_id' => 10,
                'question_id' => 132
            ],

            [
                'chapter_id' => 12,
                'question_id' => 132
            ],

            [
                'chapter_id' => 14,
                'question_id' => 132
            ],
            //7block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 133
            ],

            [
                'chapter_id' => 4,
                'question_id' => 133
            ],

            [
                'chapter_id' => 6,
                'question_id' => 133
            ],

            [
                'chapter_id' => 7,
                'question_id' => 133
            ],

            [
                'chapter_id' => 10,
                'question_id' => 133
            ],

            [
                'chapter_id' => 12,
                'question_id' => 133
            ],

            [
                'chapter_id' => 14,
                'question_id' => 133
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 134
            ],

            [
                'chapter_id' => 4,
                'question_id' => 134
            ],

            [
                'chapter_id' => 6,
                'question_id' => 134
            ],

            [
                'chapter_id' => 7,
                'question_id' => 134
            ],

            [
                'chapter_id' => 10,
                'question_id' => 134
            ],

            [
                'chapter_id' => 12,
                'question_id' => 134
            ],

            [
                'chapter_id' => 14,
                'question_id' => 134
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 135
            ],

            [
                'chapter_id' => 4,
                'question_id' => 135
            ],

            [
                'chapter_id' => 6,
                'question_id' => 135
            ],

            [
                'chapter_id' => 7,
                'question_id' => 135
            ],

            [
                'chapter_id' => 10,
                'question_id' => 135
            ],

            [
                'chapter_id' => 12,
                'question_id' => 135
            ],

            [
                'chapter_id' => 14,
                'question_id' => 135
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 136
            ],

            [
                'chapter_id' => 4,
                'question_id' => 136
            ],

            [
                'chapter_id' => 6,
                'question_id' => 136
            ],

            [
                'chapter_id' => 7,
                'question_id' => 136
            ],

            [
                'chapter_id' => 10,
                'question_id' => 136
            ],

            [
                'chapter_id' => 12,
                'question_id' => 136
            ],

            [
                'chapter_id' => 14,
                'question_id' => 136
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 137
            ],

            [
                'chapter_id' => 4,
                'question_id' => 137
            ],

            [
                'chapter_id' => 6,
                'question_id' => 137
            ],

            [
                'chapter_id' => 7,
                'question_id' => 137
            ],

            [
                'chapter_id' => 10,
                'question_id' => 137
            ],

            [
                'chapter_id' => 12,
                'question_id' => 137
            ],

            [
                'chapter_id' => 14,
                'question_id' => 137
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 138
            ],

            [
                'chapter_id' => 4,
                'question_id' => 138
            ],

            [
                'chapter_id' => 6,
                'question_id' => 138
            ],

            [
                'chapter_id' => 7,
                'question_id' => 138
            ],

            [
                'chapter_id' => 9,
                'question_id' => 138
            ],

            [
                'chapter_id' => 12,
                'question_id' => 138
            ],

            [
                'chapter_id' => 14,
                'question_id' => 138
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 139
            ],

            [
                'chapter_id' => 4,
                'question_id' => 139
            ],

            [
                'chapter_id' => 6,
                'question_id' => 139
            ],

            [
                'chapter_id' => 7,
                'question_id' => 139
            ],

            [
                'chapter_id' => 9,
                'question_id' => 139
            ],

            [
                'chapter_id' => 12,
                'question_id' => 139
            ],

            [
                'chapter_id' => 14,
                'question_id' => 139
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 140
            ],

            [
                'chapter_id' => 4,
                'question_id' => 140
            ],

            [
                'chapter_id' => 6,
                'question_id' => 140
            ],

            [
                'chapter_id' => 7,
                'question_id' => 140
            ],

            [
                'chapter_id' => 9,
                'question_id' => 140
            ],

            [
                'chapter_id' => 12,
                'question_id' => 140
            ],

            [
                'chapter_id' => 14,
                'question_id' => 140
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 141
            ],

            [
                'chapter_id' => 4,
                'question_id' => 141
            ],

            [
                'chapter_id' => 6,
                'question_id' => 141
            ],

            [
                'chapter_id' => 7,
                'question_id' => 141
            ],

            [
                'chapter_id' => 9,
                'question_id' => 141
            ],

            [
                'chapter_id' => 12,
                'question_id' => 141
            ],

            [
                'chapter_id' => 14,
                'question_id' => 141
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 142
            ],

            [
                'chapter_id' => 4,
                'question_id' => 142
            ],

            [
                'chapter_id' => 6,
                'question_id' => 142
            ],

            [
                'chapter_id' => 7,
                'question_id' => 142
            ],

            [
                'chapter_id' => 9,
                'question_id' => 142
            ],

            [
                'chapter_id' => 12,
                'question_id' => 142
            ],

            [
                'chapter_id' => 14,
                'question_id' => 142
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 143
            ],

            [
                'chapter_id' => 4,
                'question_id' => 143
            ],

            [
                'chapter_id' => 6,
                'question_id' => 143
            ],

            [
                'chapter_id' => 7,
                'question_id' => 143
            ],

            [
                'chapter_id' => 9,
                'question_id' => 143
            ],

            [
                'chapter_id' => 12,
                'question_id' => 143
            ],

            [
                'chapter_id' => 14,
                'question_id' => 143
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 144
            ],

            [
                'chapter_id' => 4,
                'question_id' => 144
            ],

            [
                'chapter_id' => 6,
                'question_id' => 144
            ],

            [
                'chapter_id' => 7,
                'question_id' => 144
            ],

            [
                'chapter_id' => 9,
                'question_id' => 144
            ],

            [
                'chapter_id' => 12,
                'question_id' => 144
            ],

            [
                'chapter_id' => 14,
                'question_id' => 144
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 145
            ],

            [
                'chapter_id' => 4,
                'question_id' => 145
            ],

            [
                'chapter_id' => 6,
                'question_id' => 145
            ],

            [
                'chapter_id' => 7,
                'question_id' => 145
            ],

            [
                'chapter_id' => 9,
                'question_id' => 145
            ],

            [
                'chapter_id' => 12,
                'question_id' => 145
            ],

            [
                'chapter_id' => 14,
                'question_id' => 145
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 146
            ],

            [
                'chapter_id' => 4,
                'question_id' => 146
            ],

            [
                'chapter_id' => 6,
                'question_id' => 146
            ],

            [
                'chapter_id' => 7,
                'question_id' => 146
            ],

            [
                'chapter_id' => 9,
                'question_id' => 146
            ],

            [
                'chapter_id' => 12,
                'question_id' => 146
            ],

            [
                'chapter_id' => 14,
                'question_id' => 146
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 147
            ],

            [
                'chapter_id' => 4,
                'question_id' => 147
            ],

            [
                'chapter_id' => 6,
                'question_id' => 147
            ],

            [
                'chapter_id' => 7,
                'question_id' => 147
            ],

            [
                'chapter_id' => 9,
                'question_id' => 147
            ],

            [
                'chapter_id' => 12,
                'question_id' => 147
            ],

            [
                'chapter_id' => 14,
                'question_id' => 147
            ],

            //8block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 148
            ],

            [
                'chapter_id' => 4,
                'question_id' => 148
            ],

            [
                'chapter_id' => 6,
                'question_id' => 148
            ],

            [
                'chapter_id' => 7,
                'question_id' => 148
            ],

            [
                'chapter_id' => 10,
                'question_id' => 148
            ],

            [
                'chapter_id' => 12,
                'question_id' => 148
            ],

            [
                'chapter_id' => 14,
                'question_id' => 148
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 149
            ],

            [
                'chapter_id' => 4,
                'question_id' => 149
            ],

            [
                'chapter_id' => 6,
                'question_id' => 149
            ],

            [
                'chapter_id' => 7,
                'question_id' => 149
            ],

            [
                'chapter_id' => 10,
                'question_id' => 149
            ],

            [
                'chapter_id' => 12,
                'question_id' => 149
            ],

            [
                'chapter_id' => 14,
                'question_id' => 149
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 150
            ],

            [
                'chapter_id' => 4,
                'question_id' => 150
            ],

            [
                'chapter_id' => 6,
                'question_id' => 150
            ],

            [
                'chapter_id' => 7,
                'question_id' => 150
            ],

            [
                'chapter_id' => 9,
                'question_id' => 150
            ],

            [
                'chapter_id' => 12,
                'question_id' => 150
            ],

            [
                'chapter_id' => 14,
                'question_id' => 150
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 151
            ],

            [
                'chapter_id' => 4,
                'question_id' => 151
            ],

            [
                'chapter_id' => 6,
                'question_id' => 151
            ],

            [
                'chapter_id' => 7,
                'question_id' => 151
            ],

            [
                'chapter_id' => 9,
                'question_id' => 151
            ],

            [
                'chapter_id' => 12,
                'question_id' => 151
            ],

            [
                'chapter_id' => 14,
                'question_id' => 151
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 152
            ],

            [
                'chapter_id' => 4,
                'question_id' => 152
            ],

            [
                'chapter_id' => 6,
                'question_id' => 152
            ],

            [
                'chapter_id' => 7,
                'question_id' => 152
            ],

            [
                'chapter_id' => 9,
                'question_id' => 152
            ],

            [
                'chapter_id' => 12,
                'question_id' => 152
            ],

            [
                'chapter_id' => 14,
                'question_id' => 152
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 153
            ],

            [
                'chapter_id' => 4,
                'question_id' => 153
            ],

            [
                'chapter_id' => 6,
                'question_id' => 153
            ],

            [
                'chapter_id' => 7,
                'question_id' => 153
            ],

            [
                'chapter_id' => 9,
                'question_id' => 153
            ],

            [
                'chapter_id' => 12,
                'question_id' => 153
            ],

            [
                'chapter_id' => 14,
                'question_id' => 153
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 154
            ],

            [
                'chapter_id' => 4,
                'question_id' => 154
            ],

            [
                'chapter_id' => 6,
                'question_id' => 154
            ],

            [
                'chapter_id' => 7,
                'question_id' => 154
            ],

            [
                'chapter_id' => 9,
                'question_id' => 154
            ],

            [
                'chapter_id' => 12,
                'question_id' => 154
            ],

            [
                'chapter_id' => 14,
                'question_id' => 154
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 155
            ],

            [
                'chapter_id' => 4,
                'question_id' => 155
            ],

            [
                'chapter_id' => 6,
                'question_id' => 155
            ],

            [
                'chapter_id' => 7,
                'question_id' => 155
            ],

            [
                'chapter_id' => 9,
                'question_id' => 155
            ],

            [
                'chapter_id' => 12,
                'question_id' => 155
            ],

            [
                'chapter_id' => 14,
                'question_id' => 155
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 156
            ],

            [
                'chapter_id' => 4,
                'question_id' => 156
            ],

            [
                'chapter_id' => 6,
                'question_id' => 156
            ],

            [
                'chapter_id' => 7,
                'question_id' => 156
            ],

            [
                'chapter_id' => 9,
                'question_id' => 156
            ],

            [
                'chapter_id' => 12,
                'question_id' => 156
            ],

            [
                'chapter_id' => 14,
                'question_id' => 156
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 157
            ],

            [
                'chapter_id' => 4,
                'question_id' => 157
            ],

            [
                'chapter_id' => 6,
                'question_id' => 157
            ],

            [
                'chapter_id' => 7,
                'question_id' => 157
            ],

            [
                'chapter_id' => 9,
                'question_id' => 157
            ],

            [
                'chapter_id' => 12,
                'question_id' => 157
            ],

            [
                'chapter_id' => 14,
                'question_id' => 157
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 158
            ],

            [
                'chapter_id' => 4,
                'question_id' => 158
            ],

            [
                'chapter_id' => 6,
                'question_id' => 158
            ],

            [
                'chapter_id' => 7,
                'question_id' => 158
            ],

            [
                'chapter_id' => 9,
                'question_id' => 158
            ],

            [
                'chapter_id' => 12,
                'question_id' => 158
            ],

            [
                'chapter_id' => 14,
                'question_id' => 158
            ],


            //9block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 159
            ],

            [
                'chapter_id' => 4,
                'question_id' => 159
            ],

            [
                'chapter_id' => 6,
                'question_id' => 159
            ],

            [
                'chapter_id' => 7,
                'question_id' => 159
            ],

            [
                'chapter_id' => 10,
                'question_id' => 159
            ],

            [
                'chapter_id' => 12,
                'question_id' => 159
            ],

            [
                'chapter_id' => 14,
                'question_id' => 159
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 160
            ],

            [
                'chapter_id' => 4,
                'question_id' => 160
            ],

            [
                'chapter_id' => 6,
                'question_id' => 160
            ],

            [
                'chapter_id' => 7,
                'question_id' => 160
            ],

            [
                'chapter_id' => 10,
                'question_id' => 160
            ],

            [
                'chapter_id' => 12,
                'question_id' => 160
            ],

            [
                'chapter_id' => 14,
                'question_id' => 160
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 161
            ],

            [
                'chapter_id' => 4,
                'question_id' => 161
            ],

            [
                'chapter_id' => 6,
                'question_id' => 161
            ],

            [
                'chapter_id' => 7,
                'question_id' => 161
            ],

            [
                'chapter_id' => 9,
                'question_id' => 161
            ],

            [
                'chapter_id' => 12,
                'question_id' => 161
            ],

            [
                'chapter_id' => 14,
                'question_id' => 161
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 162
            ],

            [
                'chapter_id' => 4,
                'question_id' => 162
            ],

            [
                'chapter_id' => 6,
                'question_id' => 162
            ],

            [
                'chapter_id' => 7,
                'question_id' => 162
            ],

            [
                'chapter_id' => 9,
                'question_id' => 162
            ],

            [
                'chapter_id' => 12,
                'question_id' => 162
            ],

            [
                'chapter_id' => 14,
                'question_id' => 162
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 163
            ],

            [
                'chapter_id' => 4,
                'question_id' => 163
            ],

            [
                'chapter_id' => 6,
                'question_id' => 163
            ],

            [
                'chapter_id' => 7,
                'question_id' => 163
            ],

            [
                'chapter_id' => 9,
                'question_id' => 163
            ],

            [
                'chapter_id' => 12,
                'question_id' => 163
            ],

            [
                'chapter_id' => 14,
                'question_id' => 163
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 164
            ],

            [
                'chapter_id' => 4,
                'question_id' => 164
            ],

            [
                'chapter_id' => 6,
                'question_id' => 164
            ],

            [
                'chapter_id' => 7,
                'question_id' => 164
            ],

            [
                'chapter_id' => 9,
                'question_id' => 164
            ],

            [
                'chapter_id' => 12,
                'question_id' => 164
            ],

            [
                'chapter_id' => 14,
                'question_id' => 164
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 165
            ],

            [
                'chapter_id' => 4,
                'question_id' => 165
            ],

            [
                'chapter_id' => 6,
                'question_id' => 165
            ],

            [
                'chapter_id' => 7,
                'question_id' => 165
            ],

            [
                'chapter_id' => 9,
                'question_id' => 165
            ],

            [
                'chapter_id' => 12,
                'question_id' => 165
            ],

            [
                'chapter_id' => 14,
                'question_id' => 165
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 166
            ],

            [
                'chapter_id' => 4,
                'question_id' => 166
            ],

            [
                'chapter_id' => 6,
                'question_id' => 166
            ],

            [
                'chapter_id' => 7,
                'question_id' => 166
            ],

            [
                'chapter_id' => 9,
                'question_id' => 166
            ],

            [
                'chapter_id' => 12,
                'question_id' => 166
            ],

            [
                'chapter_id' => 14,
                'question_id' => 166
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 167
            ],

            [
                'chapter_id' => 4,
                'question_id' => 167
            ],

            [
                'chapter_id' => 6,
                'question_id' => 167
            ],

            [
                'chapter_id' => 7,
                'question_id' => 167
            ],

            [
                'chapter_id' => 9,
                'question_id' => 167
            ],

            [
                'chapter_id' => 12,
                'question_id' => 167
            ],

            [
                'chapter_id' => 14,
                'question_id' => 167
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 168
            ],

            [
                'chapter_id' => 4,
                'question_id' => 168
            ],

            [
                'chapter_id' => 6,
                'question_id' => 168
            ],

            [
                'chapter_id' => 7,
                'question_id' => 168
            ],

            [
                'chapter_id' => 9,
                'question_id' => 168
            ],

            [
                'chapter_id' => 12,
                'question_id' => 168
            ],

            [
                'chapter_id' => 14,
                'question_id' => 168
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 169
            ],

            [
                'chapter_id' => 4,
                'question_id' => 169
            ],

            [
                'chapter_id' => 6,
                'question_id' => 169
            ],

            [
                'chapter_id' => 7,
                'question_id' => 169
            ],

            [
                'chapter_id' => 9,
                'question_id' => 169
            ],

            [
                'chapter_id' => 12,
                'question_id' => 169
            ],

            [
                'chapter_id' => 14,
                'question_id' => 169
            ],

            //10block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 170
            ],

            [
                'chapter_id' => 4,
                'question_id' => 170
            ],

            [
                'chapter_id' => 6,
                'question_id' => 170
            ],

            [
                'chapter_id' => 7,
                'question_id' => 170
            ],

            [
                'chapter_id' => 10,
                'question_id' => 170
            ],

            [
                'chapter_id' => 12,
                'question_id' => 170
            ],

            [
                'chapter_id' => 14,
                'question_id' => 170
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 171
            ],

            [
                'chapter_id' => 4,
                'question_id' => 171
            ],

            [
                'chapter_id' => 6,
                'question_id' => 171
            ],

            [
                'chapter_id' => 7,
                'question_id' => 171
            ],

            [
                'chapter_id' => 10,
                'question_id' => 171
            ],

            [
                'chapter_id' => 12,
                'question_id' => 171
            ],

            [
                'chapter_id' => 14,
                'question_id' => 171
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 172
            ],

            [
                'chapter_id' => 4,
                'question_id' => 172
            ],

            [
                'chapter_id' => 6,
                'question_id' => 172
            ],

            [
                'chapter_id' => 7,
                'question_id' => 172
            ],

            [
                'chapter_id' => 10,
                'question_id' => 172
            ],

            [
                'chapter_id' => 12,
                'question_id' => 172
            ],

            [
                'chapter_id' => 14,
                'question_id' => 172
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 173
            ],

            [
                'chapter_id' => 4,
                'question_id' => 173
            ],

            [
                'chapter_id' => 6,
                'question_id' => 173
            ],

            [
                'chapter_id' => 7,
                'question_id' => 173
            ],

            [
                'chapter_id' => 10,
                'question_id' => 173
            ],

            [
                'chapter_id' => 12,
                'question_id' => 173
            ],

            [
                'chapter_id' => 14,
                'question_id' => 173
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 174
            ],

            [
                'chapter_id' => 4,
                'question_id' => 174
            ],

            [
                'chapter_id' => 6,
                'question_id' => 174
            ],

            [
                'chapter_id' => 7,
                'question_id' => 174
            ],

            [
                'chapter_id' => 10,
                'question_id' => 174
            ],

            [
                'chapter_id' => 12,
                'question_id' => 174
            ],

            [
                'chapter_id' => 14,
                'question_id' => 174
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 175
            ],

            [
                'chapter_id' => 4,
                'question_id' => 175
            ],

            [
                'chapter_id' => 6,
                'question_id' => 175
            ],

            [
                'chapter_id' => 7,
                'question_id' => 175
            ],

            [
                'chapter_id' => 10,
                'question_id' => 175
            ],

            [
                'chapter_id' => 11,
                'question_id' => 175
            ],

            [
                'chapter_id' => 14,
                'question_id' => 175
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 176
            ],

            [
                'chapter_id' => 4,
                'question_id' => 176
            ],

            [
                'chapter_id' => 6,
                'question_id' => 176
            ],

            [
                'chapter_id' => 7,
                'question_id' => 176
            ],

            [
                'chapter_id' => 10,
                'question_id' => 176
            ],

            [
                'chapter_id' => 11,
                'question_id' => 176
            ],

            [
                'chapter_id' => 14,
                'question_id' => 176
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 177
            ],

            [
                'chapter_id' => 4,
                'question_id' => 177
            ],

            [
                'chapter_id' => 6,
                'question_id' => 177
            ],

            [
                'chapter_id' => 7,
                'question_id' => 177
            ],

            [
                'chapter_id' => 10,
                'question_id' => 177
            ],

            [
                'chapter_id' => 12,
                'question_id' => 177
            ],

            [
                'chapter_id' => 14,
                'question_id' => 177
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 178
            ],

            [
                'chapter_id' => 4,
                'question_id' => 178
            ],

            [
                'chapter_id' => 6,
                'question_id' => 178
            ],

            [
                'chapter_id' => 7,
                'question_id' => 178
            ],

            [
                'chapter_id' => 10,
                'question_id' => 178
            ],

            [
                'chapter_id' => 12,
                'question_id' => 178
            ],

            [
                'chapter_id' => 14,
                'question_id' => 178
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 179
            ],

            [
                'chapter_id' => 3,
                'question_id' => 179
            ],

            [
                'chapter_id' => 6,
                'question_id' => 179
            ],

            [
                'chapter_id' => 7,
                'question_id' => 179
            ],

            [
                'chapter_id' => 10,
                'question_id' => 179
            ],

            [
                'chapter_id' => 12,
                'question_id' => 179
            ],

            [
                'chapter_id' => 14,
                'question_id' => 179
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 180
            ],

            [
                'chapter_id' => 4,
                'question_id' => 180
            ],

            [
                'chapter_id' => 6,
                'question_id' => 180
            ],

            [
                'chapter_id' => 7,
                'question_id' => 180
            ],

            [
                'chapter_id' => 9,
                'question_id' => 180
            ],

            [
                'chapter_id' => 12,
                'question_id' => 180
            ],

            [
                'chapter_id' => 14,
                'question_id' => 180
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 181
            ],

            [
                'chapter_id' => 4,
                'question_id' => 181
            ],

            [
                'chapter_id' => 6,
                'question_id' => 181
            ],

            [
                'chapter_id' => 7,
                'question_id' => 181
            ],

            [
                'chapter_id' => 10,
                'question_id' => 181
            ],

            [
                'chapter_id' => 12,
                'question_id' => 181
            ],

            [
                'chapter_id' => 14,
                'question_id' => 181
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 182
            ],

            [
                'chapter_id' => 4,
                'question_id' => 182
            ],

            [
                'chapter_id' => 6,
                'question_id' => 182
            ],

            [
                'chapter_id' => 7,
                'question_id' => 182
            ],

            [
                'chapter_id' => 10,
                'question_id' => 182
            ],

            [
                'chapter_id' => 12,
                'question_id' => 182
            ],

            [
                'chapter_id' => 14,
                'question_id' => 182
            ],

            //11block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 183
            ],

            [
                'chapter_id' => 4,
                'question_id' => 183
            ],

            [
                'chapter_id' => 6,
                'question_id' => 183
            ],

            [
                'chapter_id' => 7,
                'question_id' => 183
            ],

            [
                'chapter_id' => 9,
                'question_id' => 183
            ],

            [
                'chapter_id' => 12,
                'question_id' => 183
            ],

            [
                'chapter_id' => 14,
                'question_id' => 183
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 184
            ],

            [
                'chapter_id' => 4,
                'question_id' => 184
            ],

            [
                'chapter_id' => 6,
                'question_id' => 184
            ],

            [
                'chapter_id' => 7,
                'question_id' => 184
            ],

            [
                'chapter_id' => 9,
                'question_id' => 184
            ],

            [
                'chapter_id' => 12,
                'question_id' => 184
            ],

            [
                'chapter_id' => 14,
                'question_id' => 184
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 185
            ],

            [
                'chapter_id' => 4,
                'question_id' => 185
            ],

            [
                'chapter_id' => 6,
                'question_id' => 185
            ],

            [
                'chapter_id' => 7,
                'question_id' => 185
            ],

            [
                'chapter_id' => 9,
                'question_id' => 185
            ],

            [
                'chapter_id' => 12,
                'question_id' => 185
            ],

            [
                'chapter_id' => 14,
                'question_id' => 185
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 186
            ],

            [
                'chapter_id' => 4,
                'question_id' => 186
            ],

            [
                'chapter_id' => 6,
                'question_id' => 186
            ],

            [
                'chapter_id' => 7,
                'question_id' => 186
            ],

            [
                'chapter_id' => 9,
                'question_id' => 186
            ],

            [
                'chapter_id' => 12,
                'question_id' => 186
            ],

            [
                'chapter_id' => 14,
                'question_id' => 186
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 187
            ],

            [
                'chapter_id' => 4,
                'question_id' => 187
            ],

            [
                'chapter_id' => 6,
                'question_id' => 187
            ],

            [
                'chapter_id' => 7,
                'question_id' => 187
            ],

            [
                'chapter_id' => 9,
                'question_id' => 187
            ],

            [
                'chapter_id' => 12,
                'question_id' => 187
            ],

            [
                'chapter_id' => 14,
                'question_id' => 187
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 188
            ],

            [
                'chapter_id' => 4,
                'question_id' => 188
            ],

            [
                'chapter_id' => 6,
                'question_id' => 188
            ],

            [
                'chapter_id' => 7,
                'question_id' => 188
            ],

            [
                'chapter_id' => 9,
                'question_id' => 188
            ],

            [
                'chapter_id' => 12,
                'question_id' => 188
            ],

            [
                'chapter_id' => 14,
                'question_id' => 188
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 189
            ],

            [
                'chapter_id' => 4,
                'question_id' => 189
            ],

            [
                'chapter_id' => 6,
                'question_id' => 189
            ],

            [
                'chapter_id' => 7,
                'question_id' => 189
            ],

            [
                'chapter_id' => 9,
                'question_id' => 189
            ],

            [
                'chapter_id' => 12,
                'question_id' => 189
            ],

            [
                'chapter_id' => 14,
                'question_id' => 189
            ],


            //12block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 190
            ],

            [
                'chapter_id' => 4,
                'question_id' => 190
            ],

            [
                'chapter_id' => 6,
                'question_id' => 190
            ],

            [
                'chapter_id' => 7,
                'question_id' => 190
            ],

            [
                'chapter_id' => 9,
                'question_id' => 190
            ],

            [
                'chapter_id' => 12,
                'question_id' => 190
            ],

            [
                'chapter_id' => 14,
                'question_id' => 190
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 191
            ],

            [
                'chapter_id' => 4,
                'question_id' => 191
            ],

            [
                'chapter_id' => 6,
                'question_id' => 191
            ],

            [
                'chapter_id' => 7,
                'question_id' => 191
            ],

            [
                'chapter_id' => 9,
                'question_id' => 191
            ],

            [
                'chapter_id' => 12,
                'question_id' => 191
            ],

            [
                'chapter_id' => 14,
                'question_id' => 191
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 192
            ],

            [
                'chapter_id' => 4,
                'question_id' => 192
            ],

            [
                'chapter_id' => 6,
                'question_id' => 192
            ],

            [
                'chapter_id' => 7,
                'question_id' => 192
            ],

            [
                'chapter_id' => 9,
                'question_id' => 192
            ],

            [
                'chapter_id' => 12,
                'question_id' => 192
            ],

            [
                'chapter_id' => 14,
                'question_id' => 192
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 193
            ],

            [
                'chapter_id' => 4,
                'question_id' => 193
            ],

            [
                'chapter_id' => 6,
                'question_id' => 193
            ],

            [
                'chapter_id' => 7,
                'question_id' => 193
            ],

            [
                'chapter_id' => 9,
                'question_id' => 193
            ],

            [
                'chapter_id' => 12,
                'question_id' => 193
            ],

            [
                'chapter_id' => 14,
                'question_id' => 193
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 194
            ],

            [
                'chapter_id' => 4,
                'question_id' => 194
            ],

            [
                'chapter_id' => 6,
                'question_id' => 194
            ],

            [
                'chapter_id' => 7,
                'question_id' => 194
            ],

            [
                'chapter_id' => 9,
                'question_id' => 194
            ],

            [
                'chapter_id' => 12,
                'question_id' => 194
            ],

            [
                'chapter_id' => 14,
                'question_id' => 194
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 195
            ],

            [
                'chapter_id' => 4,
                'question_id' => 195
            ],

            [
                'chapter_id' => 6,
                'question_id' => 195
            ],

            [
                'chapter_id' => 7,
                'question_id' => 195
            ],

            [
                'chapter_id' => 9,
                'question_id' => 195
            ],

            [
                'chapter_id' => 12,
                'question_id' => 195
            ],

            [
                'chapter_id' => 14,
                'question_id' => 195
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 196
            ],

            [
                'chapter_id' => 4,
                'question_id' => 196
            ],

            [
                'chapter_id' => 6,
                'question_id' => 196
            ],

            [
                'chapter_id' => 7,
                'question_id' => 196
            ],

            [
                'chapter_id' => 9,
                'question_id' => 196
            ],

            [
                'chapter_id' => 12,
                'question_id' => 196
            ],

            [
                'chapter_id' => 14,
                'question_id' => 196
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 197
            ],

            [
                'chapter_id' => 4,
                'question_id' => 197
            ],

            [
                'chapter_id' => 6,
                'question_id' => 197
            ],

            [
                'chapter_id' => 7,
                'question_id' => 197
            ],

            [
                'chapter_id' => 9,
                'question_id' => 197
            ],

            [
                'chapter_id' => 12,
                'question_id' => 197
            ],

            [
                'chapter_id' => 14,
                'question_id' => 197
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 198
            ],

            [
                'chapter_id' => 4,
                'question_id' => 198
            ],

            [
                'chapter_id' => 6,
                'question_id' => 198
            ],

            [
                'chapter_id' => 7,
                'question_id' => 198
            ],

            [
                'chapter_id' => 9,
                'question_id' => 198
            ],

            [
                'chapter_id' => 12,
                'question_id' => 198
            ],

            [
                'chapter_id' => 14,
                'question_id' => 198
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 199
            ],

            [
                'chapter_id' => 4,
                'question_id' => 199
            ],

            [
                'chapter_id' => 6,
                'question_id' => 199
            ],

            [
                'chapter_id' => 7,
                'question_id' => 199
            ],

            [
                'chapter_id' => 9,
                'question_id' => 199
            ],

            [
                'chapter_id' => 12,
                'question_id' => 199
            ],

            [
                'chapter_id' => 14,
                'question_id' => 199
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 200
            ],

            [
                'chapter_id' => 4,
                'question_id' => 200
            ],

            [
                'chapter_id' => 6,
                'question_id' => 200
            ],

            [
                'chapter_id' => 7,
                'question_id' => 200
            ],

            [
                'chapter_id' => 9,
                'question_id' => 200
            ],

            [
                'chapter_id' => 12,
                'question_id' => 200
            ],

            [
                'chapter_id' => 14,
                'question_id' => 200
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 201
            ],

            [
                'chapter_id' => 4,
                'question_id' => 201
            ],

            [
                'chapter_id' => 6,
                'question_id' => 201
            ],

            [
                'chapter_id' => 7,
                'question_id' => 201
            ],

            [
                'chapter_id' => 9,
                'question_id' => 201
            ],

            [
                'chapter_id' => 12,
                'question_id' => 201
            ],

            [
                'chapter_id' => 14,
                'question_id' => 201
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 202
            ],

            [
                'chapter_id' => 4,
                'question_id' => 202
            ],

            [
                'chapter_id' => 6,
                'question_id' => 202
            ],

            [
                'chapter_id' => 7,
                'question_id' => 202
            ],

            [
                'chapter_id' => 9,
                'question_id' => 202
            ],

            [
                'chapter_id' => 12,
                'question_id' => 202
            ],

            [
                'chapter_id' => 14,
                'question_id' => 202
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 203
            ],

            [
                'chapter_id' => 4,
                'question_id' => 203
            ],

            [
                'chapter_id' => 6,
                'question_id' => 203
            ],

            [
                'chapter_id' => 7,
                'question_id' => 203
            ],

            [
                'chapter_id' => 9,
                'question_id' => 203
            ],

            [
                'chapter_id' => 12,
                'question_id' => 203
            ],

            [
                'chapter_id' => 14,
                'question_id' => 203
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 204
            ],

            [
                'chapter_id' => 4,
                'question_id' => 204
            ],

            [
                'chapter_id' => 6,
                'question_id' => 204
            ],

            [
                'chapter_id' => 7,
                'question_id' => 204
            ],

            [
                'chapter_id' => 9,
                'question_id' => 204
            ],

            [
                'chapter_id' => 12,
                'question_id' => 204
            ],

            [
                'chapter_id' => 14,
                'question_id' => 204
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 205
            ],

            [
                'chapter_id' => 4,
                'question_id' => 205
            ],

            [
                'chapter_id' => 6,
                'question_id' => 205
            ],

            [
                'chapter_id' => 7,
                'question_id' => 205
            ],

            [
                'chapter_id' => 9,
                'question_id' => 205
            ],

            [
                'chapter_id' => 12,
                'question_id' => 205
            ],

            [
                'chapter_id' => 14,
                'question_id' => 205
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 206
            ],

            [
                'chapter_id' => 4,
                'question_id' => 206
            ],

            [
                'chapter_id' => 6,
                'question_id' => 206
            ],

            [
                'chapter_id' => 7,
                'question_id' => 206
            ],

            [
                'chapter_id' => 9,
                'question_id' => 206
            ],

            [
                'chapter_id' => 12,
                'question_id' => 206
            ],

            [
                'chapter_id' => 14,
                'question_id' => 206
            ],
            //13block
            //1

            [
                'chapter_id' => 2,
                'question_id' => 207
            ],

            [
                'chapter_id' => 4,
                'question_id' => 207
            ],

            [
                'chapter_id' => 6,
                'question_id' => 207
            ],

            [
                'chapter_id' => 7,
                'question_id' => 207
            ],

            [
                'chapter_id' => 9,
                'question_id' => 207
            ],

            [
                'chapter_id' => 12,
                'question_id' => 207
            ],

            [
                'chapter_id' => 14,
                'question_id' => 207
            ],

            //2
            [
                'chapter_id' => 2,
                'question_id' => 208
            ],

            [
                'chapter_id' => 4,
                'question_id' => 208
            ],

            [
                'chapter_id' => 6,
                'question_id' => 208
            ],

            [
                'chapter_id' => 7,
                'question_id' => 208
            ],

            [
                'chapter_id' => 9,
                'question_id' => 208
            ],

            [
                'chapter_id' => 12,
                'question_id' => 208
            ],

            [
                'chapter_id' => 14,
                'question_id' => 208
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 209
            ],

            [
                'chapter_id' => 4,
                'question_id' => 209
            ],

            [
                'chapter_id' => 6,
                'question_id' => 209
            ],

            [
                'chapter_id' => 7,
                'question_id' => 209
            ],

            [
                'chapter_id' => 9,
                'question_id' => 209
            ],

            [
                'chapter_id' => 12,
                'question_id' => 209
            ],

            [
                'chapter_id' => 14,
                'question_id' => 209
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 210
            ],

            [
                'chapter_id' => 4,
                'question_id' => 210
            ],

            [
                'chapter_id' => 6,
                'question_id' => 210
            ],

            [
                'chapter_id' => 7,
                'question_id' => 210
            ],

            [
                'chapter_id' => 9,
                'question_id' => 210
            ],

            [
                'chapter_id' => 12,
                'question_id' => 210
            ],

            [
                'chapter_id' => 14,
                'question_id' => 210
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 211
            ],

            [
                'chapter_id' => 4,
                'question_id' => 211
            ],

            [
                'chapter_id' => 6,
                'question_id' => 211
            ],

            [
                'chapter_id' => 7,
                'question_id' => 211
            ],

            [
                'chapter_id' => 9,
                'question_id' => 211
            ],

            [
                'chapter_id' => 12,
                'question_id' => 211
            ],

            [
                'chapter_id' => 14,
                'question_id' => 211
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 212
            ],

            [
                'chapter_id' => 4,
                'question_id' => 212
            ],

            [
                'chapter_id' => 6,
                'question_id' => 212
            ],

            [
                'chapter_id' => 7,
                'question_id' => 212
            ],

            [
                'chapter_id' => 9,
                'question_id' => 212
            ],

            [
                'chapter_id' => 12,
                'question_id' => 212
            ],

            [
                'chapter_id' => 14,
                'question_id' => 212
            ],


            //3section
            //1block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 213
            ],

            [
                'chapter_id' => 4,
                'question_id' => 213
            ],

            [
                'chapter_id' => 6,
                'question_id' => 213
            ],

            [
                'chapter_id' => 8,
                'question_id' => 213
            ],

            [
                'chapter_id' => 9,
                'question_id' => 213
            ],

            [
                'chapter_id' => 12,
                'question_id' => 213
            ],

            [
                'chapter_id' => 14,
                'question_id' => 213
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 214
            ],

            [
                'chapter_id' => 4,
                'question_id' => 214
            ],

            [
                'chapter_id' => 6,
                'question_id' => 214
            ],

            [
                'chapter_id' => 8,
                'question_id' => 214
            ],

            [
                'chapter_id' => 9,
                'question_id' => 214
            ],

            [
                'chapter_id' => 12,
                'question_id' => 214
            ],

            [
                'chapter_id' => 14,
                'question_id' => 214
            ],
            //2block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 215
            ],

            [
                'chapter_id' => 4,
                'question_id' => 215
            ],

            [
                'chapter_id' => 6,
                'question_id' => 215
            ],

            [
                'chapter_id' => 8,
                'question_id' => 215
            ],

            [
                'chapter_id' => 9,
                'question_id' => 215
            ],

            [
                'chapter_id' => 12,
                'question_id' => 215
            ],

            [
                'chapter_id' => 14,
                'question_id' => 215
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 216
            ],

            [
                'chapter_id' => 4,
                'question_id' => 216
            ],

            [
                'chapter_id' => 6,
                'question_id' => 216
            ],

            [
                'chapter_id' => 8,
                'question_id' => 216
            ],

            [
                'chapter_id' => 9,
                'question_id' => 216
            ],

            [
                'chapter_id' => 12,
                'question_id' => 216
            ],

            [
                'chapter_id' => 14,
                'question_id' => 216
            ],

            //3block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 217
            ],

            [
                'chapter_id' => 4,
                'question_id' => 217
            ],

            [
                'chapter_id' => 6,
                'question_id' => 217
            ],

            [
                'chapter_id' => 8,
                'question_id' => 217
            ],

            [
                'chapter_id' => 9,
                'question_id' => 217
            ],

            [
                'chapter_id' => 12,
                'question_id' => 217
            ],

            [
                'chapter_id' => 14,
                'question_id' => 217
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 218
            ],

            [
                'chapter_id' => 4,
                'question_id' => 218
            ],

            [
                'chapter_id' => 6,
                'question_id' => 218
            ],

            [
                'chapter_id' => 8,
                'question_id' => 218
            ],

            [
                'chapter_id' => 9,
                'question_id' => 218
            ],

            [
                'chapter_id' => 12,
                'question_id' => 218
            ],

            [
                'chapter_id' => 14,
                'question_id' => 218
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 219
            ],

            [
                'chapter_id' => 4,
                'question_id' => 219
            ],

            [
                'chapter_id' => 6,
                'question_id' => 219
            ],

            [
                'chapter_id' => 8,
                'question_id' => 219
            ],

            [
                'chapter_id' => 9,
                'question_id' => 219
            ],

            [
                'chapter_id' => 12,
                'question_id' => 219
            ],

            [
                'chapter_id' => 14,
                'question_id' => 219
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 220
            ],

            [
                'chapter_id' => 4,
                'question_id' => 220
            ],

            [
                'chapter_id' => 6,
                'question_id' => 220
            ],

            [
                'chapter_id' => 8,
                'question_id' => 220
            ],

            [
                'chapter_id' => 9,
                'question_id' => 220
            ],

            [
                'chapter_id' => 12,
                'question_id' => 220
            ],

            [
                'chapter_id' => 14,
                'question_id' => 220
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 221
            ],

            [
                'chapter_id' => 4,
                'question_id' => 221
            ],

            [
                'chapter_id' => 6,
                'question_id' => 221
            ],

            [
                'chapter_id' => 8,
                'question_id' => 221
            ],

            [
                'chapter_id' => 9,
                'question_id' => 221
            ],

            [
                'chapter_id' => 12,
                'question_id' => 221
            ],

            [
                'chapter_id' => 14,
                'question_id' => 221
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 222
            ],

            [
                'chapter_id' => 4,
                'question_id' => 222
            ],

            [
                'chapter_id' => 6,
                'question_id' => 222
            ],

            [
                'chapter_id' => 8,
                'question_id' => 222
            ],

            [
                'chapter_id' => 9,
                'question_id' => 222
            ],

            [
                'chapter_id' => 12,
                'question_id' => 222
            ],

            [
                'chapter_id' => 14,
                'question_id' => 222
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 223
            ],

            [
                'chapter_id' => 4,
                'question_id' => 223
            ],

            [
                'chapter_id' => 6,
                'question_id' => 223
            ],

            [
                'chapter_id' => 8,
                'question_id' => 223
            ],

            [
                'chapter_id' => 9,
                'question_id' => 223
            ],

            [
                'chapter_id' => 12,
                'question_id' => 223
            ],

            [
                'chapter_id' => 14,
                'question_id' => 223
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 224
            ],

            [
                'chapter_id' => 4,
                'question_id' => 224
            ],

            [
                'chapter_id' => 6,
                'question_id' => 224
            ],

            [
                'chapter_id' => 8,
                'question_id' => 224
            ],

            [
                'chapter_id' => 9,
                'question_id' => 224
            ],

            [
                'chapter_id' => 12,
                'question_id' => 224
            ],

            [
                'chapter_id' => 14,
                'question_id' => 224
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 225
            ],

            [
                'chapter_id' => 4,
                'question_id' => 225
            ],

            [
                'chapter_id' => 6,
                'question_id' => 225
            ],

            [
                'chapter_id' => 8,
                'question_id' => 225
            ],

            [
                'chapter_id' => 9,
                'question_id' => 225
            ],

            [
                'chapter_id' => 12,
                'question_id' => 225
            ],

            [
                'chapter_id' => 14,
                'question_id' => 225
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 226
            ],

            [
                'chapter_id' => 4,
                'question_id' => 226
            ],

            [
                'chapter_id' => 6,
                'question_id' => 226
            ],

            [
                'chapter_id' => 8,
                'question_id' => 226
            ],

            [
                'chapter_id' => 9,
                'question_id' => 226
            ],

            [
                'chapter_id' => 12,
                'question_id' => 226
            ],

            [
                'chapter_id' => 14,
                'question_id' => 226
            ],

            //4block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 227
            ],

            [
                'chapter_id' => 4,
                'question_id' => 227
            ],

            [
                'chapter_id' => 6,
                'question_id' => 227
            ],

            [
                'chapter_id' => 8,
                'question_id' => 227
            ],

            [
                'chapter_id' => 9,
                'question_id' => 227
            ],

            [
                'chapter_id' => 12,
                'question_id' => 227
            ],

            [
                'chapter_id' => 14,
                'question_id' => 227
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 228
            ],

            [
                'chapter_id' => 4,
                'question_id' => 228
            ],

            [
                'chapter_id' => 6,
                'question_id' => 228
            ],

            [
                'chapter_id' => 8,
                'question_id' => 228
            ],

            [
                'chapter_id' => 9,
                'question_id' => 228
            ],

            [
                'chapter_id' => 12,
                'question_id' => 228
            ],

            [
                'chapter_id' => 14,
                'question_id' => 228
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 229
            ],

            [
                'chapter_id' => 4,
                'question_id' => 229
            ],

            [
                'chapter_id' => 6,
                'question_id' => 229
            ],

            [
                'chapter_id' => 8,
                'question_id' => 229
            ],

            [
                'chapter_id' => 9,
                'question_id' => 229
            ],

            [
                'chapter_id' => 12,
                'question_id' => 229
            ],

            [
                'chapter_id' => 14,
                'question_id' => 229
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 230
            ],

            [
                'chapter_id' => 4,
                'question_id' => 230
            ],

            [
                'chapter_id' => 6,
                'question_id' => 230
            ],

            [
                'chapter_id' => 8,
                'question_id' => 230
            ],

            [
                'chapter_id' => 9,
                'question_id' => 230
            ],

            [
                'chapter_id' => 12,
                'question_id' => 230
            ],

            [
                'chapter_id' => 14,
                'question_id' => 230
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 231
            ],

            [
                'chapter_id' => 4,
                'question_id' => 231
            ],

            [
                'chapter_id' => 6,
                'question_id' => 231
            ],

            [
                'chapter_id' => 8,
                'question_id' => 231
            ],

            [
                'chapter_id' => 9,
                'question_id' => 231
            ],

            [
                'chapter_id' => 12,
                'question_id' => 231
            ],

            [
                'chapter_id' => 14,
                'question_id' => 231
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 232
            ],

            [
                'chapter_id' => 4,
                'question_id' => 232
            ],

            [
                'chapter_id' => 6,
                'question_id' => 232
            ],

            [
                'chapter_id' => 8,
                'question_id' => 232
            ],

            [
                'chapter_id' => 9,
                'question_id' => 232
            ],

            [
                'chapter_id' => 12,
                'question_id' => 232
            ],

            [
                'chapter_id' => 14,
                'question_id' => 232
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 233
            ],

            [
                'chapter_id' => 4,
                'question_id' => 233
            ],

            [
                'chapter_id' => 6,
                'question_id' => 233
            ],

            [
                'chapter_id' => 8,
                'question_id' => 233
            ],

            [
                'chapter_id' => 9,
                'question_id' => 233
            ],

            [
                'chapter_id' => 12,
                'question_id' => 233
            ],

            [
                'chapter_id' => 14,
                'question_id' => 233
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 234
            ],

            [
                'chapter_id' => 4,
                'question_id' => 234
            ],

            [
                'chapter_id' => 6,
                'question_id' => 234
            ],

            [
                'chapter_id' => 8,
                'question_id' => 234
            ],

            [
                'chapter_id' => 9,
                'question_id' => 234
            ],

            [
                'chapter_id' => 12,
                'question_id' => 234
            ],

            [
                'chapter_id' => 14,
                'question_id' => 234
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 235
            ],

            [
                'chapter_id' => 4,
                'question_id' => 235
            ],

            [
                'chapter_id' => 6,
                'question_id' => 235
            ],

            [
                'chapter_id' => 8,
                'question_id' => 235
            ],

            [
                'chapter_id' => 9,
                'question_id' => 235
            ],

            [
                'chapter_id' => 12,
                'question_id' => 235
            ],

            [
                'chapter_id' => 14,
                'question_id' => 235
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 236
            ],

            [
                'chapter_id' => 4,
                'question_id' => 236
            ],

            [
                'chapter_id' => 6,
                'question_id' => 236
            ],

            [
                'chapter_id' => 8,
                'question_id' => 236
            ],

            [
                'chapter_id' => 9,
                'question_id' => 236
            ],

            [
                'chapter_id' => 12,
                'question_id' => 236
            ],

            [
                'chapter_id' => 14,
                'question_id' => 236
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 237
            ],

            [
                'chapter_id' => 4,
                'question_id' => 237
            ],

            [
                'chapter_id' => 6,
                'question_id' => 237
            ],

            [
                'chapter_id' => 8,
                'question_id' => 237
            ],

            [
                'chapter_id' => 9,
                'question_id' => 237
            ],

            [
                'chapter_id' => 12,
                'question_id' => 237
            ],

            [
                'chapter_id' => 14,
                'question_id' => 237
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 238
            ],

            [
                'chapter_id' => 4,
                'question_id' => 238
            ],

            [
                'chapter_id' => 6,
                'question_id' => 238
            ],

            [
                'chapter_id' => 8,
                'question_id' => 238
            ],

            [
                'chapter_id' => 9,
                'question_id' => 238
            ],

            [
                'chapter_id' => 12,
                'question_id' => 238
            ],

            [
                'chapter_id' => 14,
                'question_id' => 238
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 239
            ],

            [
                'chapter_id' => 4,
                'question_id' => 239
            ],

            [
                'chapter_id' => 6,
                'question_id' => 239
            ],

            [
                'chapter_id' => 8,
                'question_id' => 239
            ],

            [
                'chapter_id' => 9,
                'question_id' => 239
            ],

            [
                'chapter_id' => 12,
                'question_id' => 239
            ],

            [
                'chapter_id' => 14,
                'question_id' => 239
            ],

            //5block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 240
            ],

            [
                'chapter_id' => 4,
                'question_id' => 240
            ],

            [
                'chapter_id' => 6,
                'question_id' => 240
            ],

            [
                'chapter_id' => 8,
                'question_id' => 240
            ],

            [
                'chapter_id' => 9,
                'question_id' => 240
            ],

            [
                'chapter_id' => 12,
                'question_id' => 240
            ],

            [
                'chapter_id' => 14,
                'question_id' => 240
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 241
            ],

            [
                'chapter_id' => 4,
                'question_id' => 241
            ],

            [
                'chapter_id' => 6,
                'question_id' => 241
            ],

            [
                'chapter_id' => 8,
                'question_id' => 241
            ],

            [
                'chapter_id' => 9,
                'question_id' => 241
            ],

            [
                'chapter_id' => 12,
                'question_id' => 241
            ],

            [
                'chapter_id' => 14,
                'question_id' => 241
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 242
            ],

            [
                'chapter_id' => 4,
                'question_id' => 242
            ],

            [
                'chapter_id' => 6,
                'question_id' => 242
            ],

            [
                'chapter_id' => 8,
                'question_id' => 242
            ],

            [
                'chapter_id' => 9,
                'question_id' => 242
            ],

            [
                'chapter_id' => 12,
                'question_id' => 242
            ],

            [
                'chapter_id' => 14,
                'question_id' => 242
            ],


            //6block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 243
            ],

            [
                'chapter_id' => 4,
                'question_id' => 243
            ],

            [
                'chapter_id' => 6,
                'question_id' => 243
            ],

            [
                'chapter_id' => 8,
                'question_id' => 243
            ],

            [
                'chapter_id' => 9,
                'question_id' => 243
            ],

            [
                'chapter_id' => 12,
                'question_id' => 243
            ],

            [
                'chapter_id' => 14,
                'question_id' => 243
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 244
            ],

            [
                'chapter_id' => 4,
                'question_id' => 244
            ],

            [
                'chapter_id' => 6,
                'question_id' => 244
            ],

            [
                'chapter_id' => 8,
                'question_id' => 244
            ],

            [
                'chapter_id' => 9,
                'question_id' => 244
            ],

            [
                'chapter_id' => 12,
                'question_id' => 244
            ],

            [
                'chapter_id' => 14,
                'question_id' => 244
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 245
            ],

            [
                'chapter_id' => 4,
                'question_id' => 245
            ],

            [
                'chapter_id' => 6,
                'question_id' => 245
            ],

            [
                'chapter_id' => 8,
                'question_id' => 245
            ],

            [
                'chapter_id' => 9,
                'question_id' => 245
            ],

            [
                'chapter_id' => 12,
                'question_id' => 245
            ],

            [
                'chapter_id' => 14,
                'question_id' => 245
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 246
            ],

            [
                'chapter_id' => 4,
                'question_id' => 246
            ],

            [
                'chapter_id' => 6,
                'question_id' => 246
            ],

            [
                'chapter_id' => 8,
                'question_id' => 246
            ],

            [
                'chapter_id' => 9,
                'question_id' => 246
            ],

            [
                'chapter_id' => 12,
                'question_id' => 246
            ],

            [
                'chapter_id' => 14,
                'question_id' => 246
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 247
            ],

            [
                'chapter_id' => 4,
                'question_id' => 247
            ],

            [
                'chapter_id' => 6,
                'question_id' => 247
            ],

            [
                'chapter_id' => 8,
                'question_id' => 247
            ],

            [
                'chapter_id' => 9,
                'question_id' => 247
            ],

            [
                'chapter_id' => 12,
                'question_id' => 247
            ],

            [
                'chapter_id' => 14,
                'question_id' => 247
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 248
            ],

            [
                'chapter_id' => 4,
                'question_id' => 248
            ],

            [
                'chapter_id' => 6,
                'question_id' => 248
            ],

            [
                'chapter_id' => 8,
                'question_id' => 248
            ],

            [
                'chapter_id' => 9,
                'question_id' => 248
            ],

            [
                'chapter_id' => 12,
                'question_id' => 248
            ],

            [
                'chapter_id' => 14,
                'question_id' => 248
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 249
            ],

            [
                'chapter_id' => 4,
                'question_id' => 249
            ],

            [
                'chapter_id' => 6,
                'question_id' => 249
            ],

            [
                'chapter_id' => 8,
                'question_id' => 249
            ],

            [
                'chapter_id' => 9,
                'question_id' => 249
            ],

            [
                'chapter_id' => 12,
                'question_id' => 249
            ],

            [
                'chapter_id' => 14,
                'question_id' => 249
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 250
            ],

            [
                'chapter_id' => 4,
                'question_id' => 250
            ],

            [
                'chapter_id' => 6,
                'question_id' => 250
            ],

            [
                'chapter_id' => 8,
                'question_id' => 250
            ],

            [
                'chapter_id' => 9,
                'question_id' => 250
            ],

            [
                'chapter_id' => 12,
                'question_id' => 250
            ],

            [
                'chapter_id' => 14,
                'question_id' => 250
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 251
            ],

            [
                'chapter_id' => 4,
                'question_id' => 251
            ],

            [
                'chapter_id' => 6,
                'question_id' => 251
            ],

            [
                'chapter_id' => 8,
                'question_id' => 251
            ],

            [
                'chapter_id' => 9,
                'question_id' => 251
            ],

            [
                'chapter_id' => 12,
                'question_id' => 251
            ],

            [
                'chapter_id' => 14,
                'question_id' => 251
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 252
            ],

            [
                'chapter_id' => 4,
                'question_id' => 252
            ],

            [
                'chapter_id' => 6,
                'question_id' => 252
            ],

            [
                'chapter_id' => 8,
                'question_id' => 252
            ],

            [
                'chapter_id' => 9,
                'question_id' => 252
            ],

            [
                'chapter_id' => 12,
                'question_id' => 252
            ],

            [
                'chapter_id' => 14,
                'question_id' => 252
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 253
            ],

            [
                'chapter_id' => 4,
                'question_id' => 253
            ],

            [
                'chapter_id' => 6,
                'question_id' => 253
            ],

            [
                'chapter_id' => 8,
                'question_id' => 253
            ],

            [
                'chapter_id' => 9,
                'question_id' => 253
            ],

            [
                'chapter_id' => 12,
                'question_id' => 253
            ],

            [
                'chapter_id' => 14,
                'question_id' => 253
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 254
            ],

            [
                'chapter_id' => 4,
                'question_id' => 254
            ],

            [
                'chapter_id' => 6,
                'question_id' => 254
            ],

            [
                'chapter_id' => 8,
                'question_id' => 254
            ],

            [
                'chapter_id' => 9,
                'question_id' => 254
            ],

            [
                'chapter_id' => 12,
                'question_id' => 254
            ],

            [
                'chapter_id' => 14,
                'question_id' => 254
            ],

            //7block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 255
            ],

            [
                'chapter_id' => 4,
                'question_id' => 255
            ],

            [
                'chapter_id' => 6,
                'question_id' => 255
            ],

            [
                'chapter_id' => 8,
                'question_id' => 255
            ],

            [
                'chapter_id' => 9,
                'question_id' => 255
            ],

            [
                'chapter_id' => 12,
                'question_id' => 255
            ],

            [
                'chapter_id' => 14,
                'question_id' => 255
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 256
            ],

            [
                'chapter_id' => 4,
                'question_id' => 256
            ],

            [
                'chapter_id' => 6,
                'question_id' => 256
            ],

            [
                'chapter_id' => 8,
                'question_id' => 256
            ],

            [
                'chapter_id' => 9,
                'question_id' => 256
            ],

            [
                'chapter_id' => 12,
                'question_id' => 256
            ],

            [
                'chapter_id' => 14,
                'question_id' => 256
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 257
            ],

            [
                'chapter_id' => 4,
                'question_id' => 257
            ],

            [
                'chapter_id' => 6,
                'question_id' => 257
            ],

            [
                'chapter_id' => 8,
                'question_id' => 257
            ],

            [
                'chapter_id' => 9,
                'question_id' => 257
            ],

            [
                'chapter_id' => 12,
                'question_id' => 257
            ],

            [
                'chapter_id' => 14,
                'question_id' => 257
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 258
            ],

            [
                'chapter_id' => 4,
                'question_id' => 258
            ],

            [
                'chapter_id' => 6,
                'question_id' => 258
            ],

            [
                'chapter_id' => 8,
                'question_id' => 258
            ],

            [
                'chapter_id' => 9,
                'question_id' => 258
            ],

            [
                'chapter_id' => 12,
                'question_id' => 258
            ],

            [
                'chapter_id' => 14,
                'question_id' => 258
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 259
            ],

            [
                'chapter_id' => 4,
                'question_id' => 259
            ],

            [
                'chapter_id' => 6,
                'question_id' => 259
            ],

            [
                'chapter_id' => 8,
                'question_id' => 259
            ],

            [
                'chapter_id' => 9,
                'question_id' => 259
            ],

            [
                'chapter_id' => 12,
                'question_id' => 259
            ],

            [
                'chapter_id' => 14,
                'question_id' => 259
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 260
            ],

            [
                'chapter_id' => 4,
                'question_id' => 260
            ],

            [
                'chapter_id' => 6,
                'question_id' => 260
            ],

            [
                'chapter_id' => 8,
                'question_id' => 260
            ],

            [
                'chapter_id' => 9,
                'question_id' => 260
            ],

            [
                'chapter_id' => 12,
                'question_id' => 260
            ],

            [
                'chapter_id' => 14,
                'question_id' => 260
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 261
            ],

            [
                'chapter_id' => 4,
                'question_id' => 261
            ],

            [
                'chapter_id' => 6,
                'question_id' => 261
            ],

            [
                'chapter_id' => 8,
                'question_id' => 261
            ],

            [
                'chapter_id' => 9,
                'question_id' => 261
            ],

            [
                'chapter_id' => 12,
                'question_id' => 261
            ],

            [
                'chapter_id' => 14,
                'question_id' => 261
            ],

            //8block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 262
            ],

            [
                'chapter_id' => 4,
                'question_id' => 262
            ],

            [
                'chapter_id' => 6,
                'question_id' => 262
            ],

            [
                'chapter_id' => 8,
                'question_id' => 262
            ],

            [
                'chapter_id' => 9,
                'question_id' => 262
            ],

            [
                'chapter_id' => 12,
                'question_id' => 262
            ],

            [
                'chapter_id' => 14,
                'question_id' => 262
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 263
            ],

            [
                'chapter_id' => 4,
                'question_id' => 263
            ],

            [
                'chapter_id' => 6,
                'question_id' => 263
            ],

            [
                'chapter_id' => 8,
                'question_id' => 263
            ],

            [
                'chapter_id' => 9,
                'question_id' => 263
            ],

            [
                'chapter_id' => 12,
                'question_id' => 263
            ],

            [
                'chapter_id' => 14,
                'question_id' => 263
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 264
            ],

            [
                'chapter_id' => 4,
                'question_id' => 264
            ],

            [
                'chapter_id' => 6,
                'question_id' => 264
            ],

            [
                'chapter_id' => 8,
                'question_id' => 264
            ],

            [
                'chapter_id' => 9,
                'question_id' => 264
            ],

            [
                'chapter_id' => 12,
                'question_id' => 264
            ],

            [
                'chapter_id' => 14,
                'question_id' => 264
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 265
            ],

            [
                'chapter_id' => 4,
                'question_id' => 265
            ],

            [
                'chapter_id' => 6,
                'question_id' => 265
            ],

            [
                'chapter_id' => 8,
                'question_id' => 265
            ],

            [
                'chapter_id' => 9,
                'question_id' => 265
            ],

            [
                'chapter_id' => 12,
                'question_id' => 265
            ],

            [
                'chapter_id' => 14,
                'question_id' => 265
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 266
            ],

            [
                'chapter_id' => 4,
                'question_id' => 266
            ],

            [
                'chapter_id' => 6,
                'question_id' => 266
            ],

            [
                'chapter_id' => 8,
                'question_id' => 266
            ],

            [
                'chapter_id' => 9,
                'question_id' => 266
            ],

            [
                'chapter_id' => 12,
                'question_id' => 266
            ],

            [
                'chapter_id' => 14,
                'question_id' => 266
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 267
            ],

            [
                'chapter_id' => 4,
                'question_id' => 267
            ],

            [
                'chapter_id' => 6,
                'question_id' => 267
            ],

            [
                'chapter_id' => 8,
                'question_id' => 267
            ],

            [
                'chapter_id' => 9,
                'question_id' => 267
            ],

            [
                'chapter_id' => 12,
                'question_id' => 267
            ],

            [
                'chapter_id' => 14,
                'question_id' => 267
            ],

            //7
            [
                'chapter_id' => 2,
                'question_id' => 268
            ],

            [
                'chapter_id' => 4,
                'question_id' => 268
            ],

            [
                'chapter_id' => 6,
                'question_id' => 268
            ],

            [
                'chapter_id' => 8,
                'question_id' => 268
            ],

            [
                'chapter_id' => 9,
                'question_id' => 268
            ],

            [
                'chapter_id' => 12,
                'question_id' => 268
            ],

            [
                'chapter_id' => 14,
                'question_id' => 268
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 269
            ],

            [
                'chapter_id' => 4,
                'question_id' => 269
            ],

            [
                'chapter_id' => 6,
                'question_id' => 269
            ],

            [
                'chapter_id' => 8,
                'question_id' => 269
            ],

            [
                'chapter_id' => 9,
                'question_id' => 269
            ],

            [
                'chapter_id' => 12,
                'question_id' => 269
            ],

            [
                'chapter_id' => 14,
                'question_id' => 269
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 270
            ],

            [
                'chapter_id' => 4,
                'question_id' => 270
            ],

            [
                'chapter_id' => 6,
                'question_id' => 270
            ],

            [
                'chapter_id' => 8,
                'question_id' => 270
            ],

            [
                'chapter_id' => 9,
                'question_id' => 270
            ],

            [
                'chapter_id' => 12,
                'question_id' => 270
            ],

            [
                'chapter_id' => 14,
                'question_id' => 270
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 271
            ],

            [
                'chapter_id' => 4,
                'question_id' => 271
            ],

            [
                'chapter_id' => 6,
                'question_id' => 271
            ],

            [
                'chapter_id' => 8,
                'question_id' => 271
            ],

            [
                'chapter_id' => 9,
                'question_id' => 271
            ],

            [
                'chapter_id' => 12,
                'question_id' => 271
            ],

            [
                'chapter_id' => 14,
                'question_id' => 271
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 272
            ],

            [
                'chapter_id' => 4,
                'question_id' => 272
            ],

            [
                'chapter_id' => 6,
                'question_id' => 272
            ],

            [
                'chapter_id' => 8,
                'question_id' => 272
            ],

            [
                'chapter_id' => 9,
                'question_id' => 272
            ],

            [
                'chapter_id' => 12,
                'question_id' => 272
            ],

            [
                'chapter_id' => 14,
                'question_id' => 272
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 273
            ],

            [
                'chapter_id' => 4,
                'question_id' => 273
            ],

            [
                'chapter_id' => 6,
                'question_id' => 273
            ],

            [
                'chapter_id' => 8,
                'question_id' => 273
            ],

            [
                'chapter_id' => 9,
                'question_id' => 273
            ],

            [
                'chapter_id' => 12,
                'question_id' => 273
            ],

            [
                'chapter_id' => 14,
                'question_id' => 273
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 274
            ],

            [
                'chapter_id' => 4,
                'question_id' => 274
            ],

            [
                'chapter_id' => 6,
                'question_id' => 274
            ],

            [
                'chapter_id' => 8,
                'question_id' => 274
            ],

            [
                'chapter_id' => 9,
                'question_id' => 274
            ],

            [
                'chapter_id' => 12,
                'question_id' => 274
            ],

            [
                'chapter_id' => 14,
                'question_id' => 274
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 275
            ],

            [
                'chapter_id' => 4,
                'question_id' => 275
            ],

            [
                'chapter_id' => 6,
                'question_id' => 275
            ],

            [
                'chapter_id' => 8,
                'question_id' => 275
            ],

            [
                'chapter_id' => 9,
                'question_id' => 275
            ],

            [
                'chapter_id' => 12,
                'question_id' => 275
            ],

            [
                'chapter_id' => 14,
                'question_id' => 275
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 276
            ],

            [
                'chapter_id' => 4,
                'question_id' => 276
            ],

            [
                'chapter_id' => 6,
                'question_id' => 276
            ],

            [
                'chapter_id' => 8,
                'question_id' => 276
            ],

            [
                'chapter_id' => 9,
                'question_id' => 276
            ],

            [
                'chapter_id' => 12,
                'question_id' => 276
            ],

            [
                'chapter_id' => 14,
                'question_id' => 276
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 277
            ],

            [
                'chapter_id' => 4,
                'question_id' => 277
            ],

            [
                'chapter_id' => 6,
                'question_id' => 277
            ],

            [
                'chapter_id' => 8,
                'question_id' => 277
            ],

            [
                'chapter_id' => 9,
                'question_id' => 277
            ],

            [
                'chapter_id' => 12,
                'question_id' => 277
            ],

            [
                'chapter_id' => 14,
                'question_id' => 277
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 278
            ],

            [
                'chapter_id' => 4,
                'question_id' => 278
            ],

            [
                'chapter_id' => 6,
                'question_id' => 278
            ],

            [
                'chapter_id' => 8,
                'question_id' => 278
            ],

            [
                'chapter_id' => 9,
                'question_id' => 278
            ],

            [
                'chapter_id' => 12,
                'question_id' => 278
            ],

            [
                'chapter_id' => 14,
                'question_id' => 278
            ],
            //18
            [
                'chapter_id' => 2,
                'question_id' => 279
            ],

            [
                'chapter_id' => 4,
                'question_id' => 279
            ],

            [
                'chapter_id' => 6,
                'question_id' => 279
            ],

            [
                'chapter_id' => 8,
                'question_id' => 279
            ],

            [
                'chapter_id' => 9,
                'question_id' => 279
            ],

            [
                'chapter_id' => 12,
                'question_id' => 279
            ],

            [
                'chapter_id' => 14,
                'question_id' => 279
            ],
            //19
            [
                'chapter_id' => 2,
                'question_id' => 280
            ],

            [
                'chapter_id' => 4,
                'question_id' => 280
            ],

            [
                'chapter_id' => 6,
                'question_id' => 280
            ],

            [
                'chapter_id' => 8,
                'question_id' => 280
            ],

            [
                'chapter_id' => 9,
                'question_id' => 280
            ],

            [
                'chapter_id' => 12,
                'question_id' => 280
            ],

            [
                'chapter_id' => 14,
                'question_id' => 280
            ],
            //20
            [
                'chapter_id' => 2,
                'question_id' => 281
            ],

            [
                'chapter_id' => 4,
                'question_id' => 281
            ],

            [
                'chapter_id' => 6,
                'question_id' => 281
            ],

            [
                'chapter_id' => 8,
                'question_id' => 281
            ],

            [
                'chapter_id' => 9,
                'question_id' => 281
            ],

            [
                'chapter_id' => 12,
                'question_id' => 281
            ],

            [
                'chapter_id' => 14,
                'question_id' => 281
            ],
            //21
            [
                'chapter_id' => 2,
                'question_id' => 282
            ],

            [
                'chapter_id' => 4,
                'question_id' => 282
            ],

            [
                'chapter_id' => 6,
                'question_id' => 282
            ],

            [
                'chapter_id' => 8,
                'question_id' => 282
            ],

            [
                'chapter_id' => 9,
                'question_id' => 282
            ],

            [
                'chapter_id' => 12,
                'question_id' => 282
            ],

            [
                'chapter_id' => 14,
                'question_id' => 282
            ],
            //22
            [
                'chapter_id' => 2,
                'question_id' => 283
            ],

            [
                'chapter_id' => 4,
                'question_id' => 283
            ],

            [
                'chapter_id' => 6,
                'question_id' => 283
            ],

            [
                'chapter_id' => 8,
                'question_id' => 283
            ],

            [
                'chapter_id' => 9,
                'question_id' => 283
            ],

            [
                'chapter_id' => 12,
                'question_id' => 283
            ],

            [
                'chapter_id' => 14,
                'question_id' => 283
            ],

            //9block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 284
            ],

            [
                'chapter_id' => 4,
                'question_id' => 284
            ],

            [
                'chapter_id' => 6,
                'question_id' => 284
            ],

            [
                'chapter_id' => 8,
                'question_id' => 284
            ],

            [
                'chapter_id' => 9,
                'question_id' => 284
            ],

            [
                'chapter_id' => 12,
                'question_id' => 284
            ],

            [
                'chapter_id' => 14,
                'question_id' => 284
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 285
            ],

            [
                'chapter_id' => 4,
                'question_id' => 285
            ],

            [
                'chapter_id' => 6,
                'question_id' => 285
            ],

            [
                'chapter_id' => 8,
                'question_id' => 285
            ],

            [
                'chapter_id' => 9,
                'question_id' => 285
            ],

            [
                'chapter_id' => 12,
                'question_id' => 285
            ],

            [
                'chapter_id' => 14,
                'question_id' => 285
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 286
            ],

            [
                'chapter_id' => 4,
                'question_id' => 286
            ],

            [
                'chapter_id' => 6,
                'question_id' => 286
            ],

            [
                'chapter_id' => 8,
                'question_id' => 286
            ],

            [
                'chapter_id' => 9,
                'question_id' => 286
            ],

            [
                'chapter_id' => 12,
                'question_id' => 286
            ],

            [
                'chapter_id' => 14,
                'question_id' => 286
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 287
            ],

            [
                'chapter_id' => 4,
                'question_id' => 287
            ],

            [
                'chapter_id' => 6,
                'question_id' => 287
            ],

            [
                'chapter_id' => 8,
                'question_id' => 287
            ],

            [
                'chapter_id' => 9,
                'question_id' => 287
            ],

            [
                'chapter_id' => 12,
                'question_id' => 287
            ],

            [
                'chapter_id' => 14,
                'question_id' => 287
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 288
            ],

            [
                'chapter_id' => 4,
                'question_id' => 288
            ],

            [
                'chapter_id' => 6,
                'question_id' => 288
            ],

            [
                'chapter_id' => 8,
                'question_id' => 288
            ],

            [
                'chapter_id' => 9,
                'question_id' => 288
            ],

            [
                'chapter_id' => 12,
                'question_id' => 288
            ],

            [
                'chapter_id' => 14,
                'question_id' => 288
            ],

            //10block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 289
            ],

            [
                'chapter_id' => 4,
                'question_id' => 289
            ],

            [
                'chapter_id' => 6,
                'question_id' => 289
            ],

            [
                'chapter_id' => 8,
                'question_id' => 289
            ],

            [
                'chapter_id' => 9,
                'question_id' => 289
            ],

            [
                'chapter_id' => 12,
                'question_id' => 289
            ],

            [
                'chapter_id' => 14,
                'question_id' => 289
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 290
            ],

            [
                'chapter_id' => 4,
                'question_id' => 290
            ],

            [
                'chapter_id' => 6,
                'question_id' => 290
            ],

            [
                'chapter_id' => 8,
                'question_id' => 290
            ],

            [
                'chapter_id' => 9,
                'question_id' => 290
            ],

            [
                'chapter_id' => 12,
                'question_id' => 290
            ],

            [
                'chapter_id' => 14,
                'question_id' => 290
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 291
            ],

            [
                'chapter_id' => 4,
                'question_id' => 291
            ],

            [
                'chapter_id' => 6,
                'question_id' => 291
            ],

            [
                'chapter_id' => 8,
                'question_id' => 291
            ],

            [
                'chapter_id' => 9,
                'question_id' => 291
            ],

            [
                'chapter_id' => 12,
                'question_id' => 291
            ],

            [
                'chapter_id' => 14,
                'question_id' => 291
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 292
            ],

            [
                'chapter_id' => 4,
                'question_id' => 292
            ],

            [
                'chapter_id' => 6,
                'question_id' => 292
            ],

            [
                'chapter_id' => 8,
                'question_id' => 292
            ],

            [
                'chapter_id' => 9,
                'question_id' => 292
            ],

            [
                'chapter_id' => 12,
                'question_id' => 292
            ],

            [
                'chapter_id' => 14,
                'question_id' => 292
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 293
            ],

            [
                'chapter_id' => 4,
                'question_id' => 293
            ],

            [
                'chapter_id' => 6,
                'question_id' => 293
            ],

            [
                'chapter_id' => 8,
                'question_id' => 293
            ],

            [
                'chapter_id' => 9,
                'question_id' => 293
            ],

            [
                'chapter_id' => 12,
                'question_id' => 293
            ],

            [
                'chapter_id' => 14,
                'question_id' => 293
            ],
            //11block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 294
            ],

            [
                'chapter_id' => 4,
                'question_id' => 294
            ],

            [
                'chapter_id' => 6,
                'question_id' => 294
            ],

            [
                'chapter_id' => 8,
                'question_id' => 294
            ],

            [
                'chapter_id' => 9,
                'question_id' => 294
            ],

            [
                'chapter_id' => 12,
                'question_id' => 294
            ],

            [
                'chapter_id' => 14,
                'question_id' => 294
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 295
            ],

            [
                'chapter_id' => 4,
                'question_id' => 295
            ],

            [
                'chapter_id' => 6,
                'question_id' => 295
            ],

            [
                'chapter_id' => 8,
                'question_id' => 295
            ],

            [
                'chapter_id' => 9,
                'question_id' => 295
            ],

            [
                'chapter_id' => 12,
                'question_id' => 295
            ],

            [
                'chapter_id' => 14,
                'question_id' => 295
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 296
            ],

            [
                'chapter_id' => 4,
                'question_id' => 296
            ],

            [
                'chapter_id' => 6,
                'question_id' => 296
            ],

            [
                'chapter_id' => 8,
                'question_id' => 296
            ],

            [
                'chapter_id' => 9,
                'question_id' => 296
            ],

            [
                'chapter_id' => 12,
                'question_id' => 296
            ],

            [
                'chapter_id' => 14,
                'question_id' => 296
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 297
            ],

            [
                'chapter_id' => 4,
                'question_id' => 297
            ],

            [
                'chapter_id' => 6,
                'question_id' => 297
            ],

            [
                'chapter_id' => 8,
                'question_id' => 297
            ],

            [
                'chapter_id' => 9,
                'question_id' => 297
            ],

            [
                'chapter_id' => 12,
                'question_id' => 297
            ],

            [
                'chapter_id' => 14,
                'question_id' => 297
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 298
            ],

            [
                'chapter_id' => 4,
                'question_id' => 298
            ],

            [
                'chapter_id' => 6,
                'question_id' => 298
            ],

            [
                'chapter_id' => 8,
                'question_id' => 298
            ],

            [
                'chapter_id' => 9,
                'question_id' => 298
            ],

            [
                'chapter_id' => 12,
                'question_id' => 298
            ],

            [
                'chapter_id' => 14,
                'question_id' => 298
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 299
            ],

            [
                'chapter_id' => 4,
                'question_id' => 299
            ],

            [
                'chapter_id' => 6,
                'question_id' => 299
            ],

            [
                'chapter_id' => 8,
                'question_id' => 299
            ],

            [
                'chapter_id' => 9,
                'question_id' => 299
            ],

            [
                'chapter_id' => 12,
                'question_id' => 299
            ],

            [
                'chapter_id' => 14,
                'question_id' => 299
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 300
            ],

            [
                'chapter_id' => 4,
                'question_id' => 300
            ],

            [
                'chapter_id' => 6,
                'question_id' => 300
            ],

            [
                'chapter_id' => 8,
                'question_id' => 300
            ],

            [
                'chapter_id' => 9,
                'question_id' => 300
            ],

            [
                'chapter_id' => 12,
                'question_id' => 300
            ],

            [
                'chapter_id' => 14,
                'question_id' => 300
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 301
            ],

            [
                'chapter_id' => 4,
                'question_id' => 301
            ],

            [
                'chapter_id' => 6,
                'question_id' => 301
            ],

            [
                'chapter_id' => 8,
                'question_id' => 301
            ],

            [
                'chapter_id' => 9,
                'question_id' => 301
            ],

            [
                'chapter_id' => 12,
                'question_id' => 301
            ],

            [
                'chapter_id' => 14,
                'question_id' => 301
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 302
            ],

            [
                'chapter_id' => 4,
                'question_id' => 302
            ],

            [
                'chapter_id' => 6,
                'question_id' => 302
            ],

            [
                'chapter_id' => 8,
                'question_id' => 302
            ],

            [
                'chapter_id' => 9,
                'question_id' => 302
            ],

            [
                'chapter_id' => 12,
                'question_id' => 302
            ],

            [
                'chapter_id' => 14,
                'question_id' => 302
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 303
            ],

            [
                'chapter_id' => 4,
                'question_id' => 303
            ],

            [
                'chapter_id' => 6,
                'question_id' => 303
            ],

            [
                'chapter_id' => 8,
                'question_id' => 303
            ],

            [
                'chapter_id' => 9,
                'question_id' => 303
            ],

            [
                'chapter_id' => 12,
                'question_id' => 303
            ],

            [
                'chapter_id' => 14,
                'question_id' => 303
            ],

            //12block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 304
            ],

            [
                'chapter_id' => 4,
                'question_id' => 304
            ],

            [
                'chapter_id' => 6,
                'question_id' => 304
            ],

            [
                'chapter_id' => 8,
                'question_id' => 304
            ],

            [
                'chapter_id' => 9,
                'question_id' => 304
            ],

            [
                'chapter_id' => 12,
                'question_id' => 304
            ],

            [
                'chapter_id' => 14,
                'question_id' => 304
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 305
            ],

            [
                'chapter_id' => 4,
                'question_id' => 305
            ],

            [
                'chapter_id' => 6,
                'question_id' => 305
            ],

            [
                'chapter_id' => 8,
                'question_id' => 305
            ],

            [
                'chapter_id' => 9,
                'question_id' => 305
            ],

            [
                'chapter_id' => 12,
                'question_id' => 305
            ],

            [
                'chapter_id' => 14,
                'question_id' => 305
            ],

            //3
            [
                'chapter_id' => 2,
                'question_id' => 306
            ],

            [
                'chapter_id' => 4,
                'question_id' => 306
            ],

            [
                'chapter_id' => 6,
                'question_id' => 306
            ],

            [
                'chapter_id' => 8,
                'question_id' => 306
            ],

            [
                'chapter_id' => 9,
                'question_id' => 306
            ],

            [
                'chapter_id' => 12,
                'question_id' => 306
            ],

            [
                'chapter_id' => 14,
                'question_id' => 306
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 307
            ],

            [
                'chapter_id' => 4,
                'question_id' => 307
            ],

            [
                'chapter_id' => 6,
                'question_id' => 307
            ],

            [
                'chapter_id' => 8,
                'question_id' => 307
            ],

            [
                'chapter_id' => 9,
                'question_id' => 307
            ],

            [
                'chapter_id' => 12,
                'question_id' => 307
            ],

            [
                'chapter_id' => 14,
                'question_id' => 307
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 308
            ],

            [
                'chapter_id' => 4,
                'question_id' => 308
            ],

            [
                'chapter_id' => 6,
                'question_id' => 308
            ],

            [
                'chapter_id' => 8,
                'question_id' => 308
            ],

            [
                'chapter_id' => 9,
                'question_id' => 308
            ],

            [
                'chapter_id' => 12,
                'question_id' => 308
            ],

            [
                'chapter_id' => 14,
                'question_id' => 308
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 309
            ],

            [
                'chapter_id' => 4,
                'question_id' => 309
            ],

            [
                'chapter_id' => 6,
                'question_id' => 309
            ],

            [
                'chapter_id' => 8,
                'question_id' => 309
            ],

            [
                'chapter_id' => 9,
                'question_id' => 309
            ],

            [
                'chapter_id' => 12,
                'question_id' => 309
            ],

            [
                'chapter_id' => 14,
                'question_id' => 309
            ],

            //13block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 310
            ],

            [
                'chapter_id' => 4,
                'question_id' => 310
            ],

            [
                'chapter_id' => 6,
                'question_id' => 310
            ],

            [
                'chapter_id' => 8,
                'question_id' => 310
            ],

            [
                'chapter_id' => 9,
                'question_id' => 310
            ],

            [
                'chapter_id' => 12,
                'question_id' => 310
            ],

            [
                'chapter_id' => 14,
                'question_id' => 310
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 311
            ],

            [
                'chapter_id' => 4,
                'question_id' => 311
            ],

            [
                'chapter_id' => 6,
                'question_id' => 311
            ],

            [
                'chapter_id' => 8,
                'question_id' => 311
            ],

            [
                'chapter_id' => 9,
                'question_id' => 311
            ],

            [
                'chapter_id' => 12,
                'question_id' => 311
            ],

            [
                'chapter_id' => 14,
                'question_id' => 311
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 312
            ],

            [
                'chapter_id' => 4,
                'question_id' => 312
            ],

            [
                'chapter_id' => 6,
                'question_id' => 312
            ],

            [
                'chapter_id' => 8,
                'question_id' => 312
            ],

            [
                'chapter_id' => 9,
                'question_id' => 312
            ],

            [
                'chapter_id' => 12,
                'question_id' => 312
            ],

            [
                'chapter_id' => 14,
                'question_id' => 312
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 313
            ],

            [
                'chapter_id' => 4,
                'question_id' => 313
            ],

            [
                'chapter_id' => 6,
                'question_id' => 313
            ],

            [
                'chapter_id' => 8,
                'question_id' => 313
            ],

            [
                'chapter_id' => 9,
                'question_id' => 313
            ],

            [
                'chapter_id' => 12,
                'question_id' => 313
            ],

            [
                'chapter_id' => 14,
                'question_id' => 313
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 314
            ],

            [
                'chapter_id' => 4,
                'question_id' => 314
            ],

            [
                'chapter_id' => 6,
                'question_id' => 314
            ],

            [
                'chapter_id' => 8,
                'question_id' => 314
            ],

            [
                'chapter_id' => 9,
                'question_id' => 314
            ],

            [
                'chapter_id' => 12,
                'question_id' => 314
            ],

            [
                'chapter_id' => 14,
                'question_id' => 314
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 315
            ],

            [
                'chapter_id' => 4,
                'question_id' => 315
            ],

            [
                'chapter_id' => 6,
                'question_id' => 315
            ],

            [
                'chapter_id' => 8,
                'question_id' => 315
            ],

            [
                'chapter_id' => 9,
                'question_id' => 315
            ],

            [
                'chapter_id' => 12,
                'question_id' => 315
            ],

            [
                'chapter_id' => 14,
                'question_id' => 315
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 316
            ],

            [
                'chapter_id' => 4,
                'question_id' => 316
            ],

            [
                'chapter_id' => 6,
                'question_id' => 316
            ],

            [
                'chapter_id' => 8,
                'question_id' => 316
            ],

            [
                'chapter_id' => 9,
                'question_id' => 316
            ],

            [
                'chapter_id' => 12,
                'question_id' => 316
            ],

            [
                'chapter_id' => 14,
                'question_id' => 316
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 317
            ],

            [
                'chapter_id' => 4,
                'question_id' => 317
            ],

            [
                'chapter_id' => 6,
                'question_id' => 317
            ],

            [
                'chapter_id' => 8,
                'question_id' => 317
            ],

            [
                'chapter_id' => 9,
                'question_id' => 317
            ],

            [
                'chapter_id' => 12,
                'question_id' => 317
            ],

            [
                'chapter_id' => 14,
                'question_id' => 317
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 318
            ],

            [
                'chapter_id' => 4,
                'question_id' => 318
            ],

            [
                'chapter_id' => 6,
                'question_id' => 318
            ],

            [
                'chapter_id' => 8,
                'question_id' => 318
            ],

            [
                'chapter_id' => 9,
                'question_id' => 318
            ],

            [
                'chapter_id' => 12,
                'question_id' => 318
            ],

            [
                'chapter_id' => 13,
                'question_id' => 318
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 319
            ],

            [
                'chapter_id' => 4,
                'question_id' => 319
            ],

            [
                'chapter_id' => 6,
                'question_id' => 319
            ],

            [
                'chapter_id' => 8,
                'question_id' => 319
            ],

            [
                'chapter_id' => 9,
                'question_id' => 319
            ],

            [
                'chapter_id' => 12,
                'question_id' => 319
            ],

            [
                'chapter_id' => 13,
                'question_id' => 319
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 320
            ],

            [
                'chapter_id' => 4,
                'question_id' => 320
            ],

            [
                'chapter_id' => 6,
                'question_id' => 320
            ],

            [
                'chapter_id' => 8,
                'question_id' => 320
            ],

            [
                'chapter_id' => 9,
                'question_id' => 320
            ],

            [
                'chapter_id' => 12,
                'question_id' => 320
            ],

            [
                'chapter_id' => 14,
                'question_id' => 320
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 321
            ],

            [
                'chapter_id' => 4,
                'question_id' => 321
            ],

            [
                'chapter_id' => 6,
                'question_id' => 321
            ],

            [
                'chapter_id' => 8,
                'question_id' => 321
            ],

            [
                'chapter_id' => 9,
                'question_id' => 321
            ],

            [
                'chapter_id' => 12,
                'question_id' => 321
            ],

            [
                'chapter_id' => 14,
                'question_id' => 321
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 322
            ],

            [
                'chapter_id' => 4,
                'question_id' => 322
            ],

            [
                'chapter_id' => 6,
                'question_id' => 322
            ],

            [
                'chapter_id' => 8,
                'question_id' => 322
            ],

            [
                'chapter_id' => 9,
                'question_id' => 322
            ],

            [
                'chapter_id' => 12,
                'question_id' => 322
            ],

            [
                'chapter_id' => 14,
                'question_id' => 322
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 323
            ],

            [
                'chapter_id' => 4,
                'question_id' => 323
            ],

            [
                'chapter_id' => 6,
                'question_id' => 323
            ],

            [
                'chapter_id' => 8,
                'question_id' => 323
            ],

            [
                'chapter_id' => 9,
                'question_id' => 323
            ],

            [
                'chapter_id' => 12,
                'question_id' => 323
            ],

            [
                'chapter_id' => 14,
                'question_id' => 323
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 324
            ],

            [
                'chapter_id' => 4,
                'question_id' => 324
            ],

            [
                'chapter_id' => 6,
                'question_id' => 324
            ],

            [
                'chapter_id' => 8,
                'question_id' => 324
            ],

            [
                'chapter_id' => 9,
                'question_id' => 324
            ],

            [
                'chapter_id' => 12,
                'question_id' => 324
            ],

            [
                'chapter_id' => 14,
                'question_id' => 324
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 325
            ],

            [
                'chapter_id' => 4,
                'question_id' => 325
            ],

            [
                'chapter_id' => 6,
                'question_id' => 325
            ],

            [
                'chapter_id' => 8,
                'question_id' => 325
            ],

            [
                'chapter_id' => 9,
                'question_id' => 325
            ],

            [
                'chapter_id' => 12,
                'question_id' => 325
            ],

            [
                'chapter_id' => 14,
                'question_id' => 325
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 326
            ],

            [
                'chapter_id' => 4,
                'question_id' => 326
            ],

            [
                'chapter_id' => 6,
                'question_id' => 326
            ],

            [
                'chapter_id' => 8,
                'question_id' => 326
            ],

            [
                'chapter_id' => 9,
                'question_id' => 326
            ],

            [
                'chapter_id' => 12,
                'question_id' => 326
            ],

            [
                'chapter_id' => 14,
                'question_id' => 326
            ],


            //4section
            //1block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 327
            ],

            [
                'chapter_id' => 4,
                'question_id' => 327
            ],

            [
                'chapter_id' => 6,
                'question_id' => 327
            ],

            [
                'chapter_id' => 8,
                'question_id' => 327
            ],

            [
                'chapter_id' => 10,
                'question_id' => 327
            ],

            [
                'chapter_id' => 11,
                'question_id' => 327
            ],

            [
                'chapter_id' => 13,
                'question_id' => 327
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 328
            ],

            [
                'chapter_id' => 3,
                'question_id' => 328
            ],

            [
                'chapter_id' => 6,
                'question_id' => 328
            ],

            [
                'chapter_id' => 8,
                'question_id' => 328
            ],

            [
                'chapter_id' => 10,
                'question_id' => 328
            ],

            [
                'chapter_id' => 11,
                'question_id' => 328
            ],

            [
                'chapter_id' => 13,
                'question_id' => 328
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 329
            ],

            [
                'chapter_id' => 4,
                'question_id' => 329
            ],

            [
                'chapter_id' => 6,
                'question_id' => 329
            ],

            [
                'chapter_id' => 8,
                'question_id' => 329
            ],

            [
                'chapter_id' => 10,
                'question_id' => 329
            ],

            [
                'chapter_id' => 12,
                'question_id' => 329
            ],

            [
                'chapter_id' => 13,
                'question_id' => 329
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 330
            ],

            [
                'chapter_id' => 4,
                'question_id' => 330
            ],

            [
                'chapter_id' => 6,
                'question_id' => 330
            ],

            [
                'chapter_id' => 8,
                'question_id' => 330
            ],

            [
                'chapter_id' => 10,
                'question_id' => 330
            ],

            [
                'chapter_id' => 12,
                'question_id' => 330
            ],

            [
                'chapter_id' => 14,
                'question_id' => 330
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 331
            ],

            [
                'chapter_id' => 3,
                'question_id' => 331
            ],

            [
                'chapter_id' => 6,
                'question_id' => 331
            ],

            [
                'chapter_id' => 8,
                'question_id' => 331
            ],

            [
                'chapter_id' => 10,
                'question_id' => 331
            ],

            [
                'chapter_id' => 12,
                'question_id' => 331
            ],

            [
                'chapter_id' => 14,
                'question_id' => 331
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 332
            ],

            [
                'chapter_id' => 4,
                'question_id' => 332
            ],

            [
                'chapter_id' => 6,
                'question_id' => 332
            ],

            [
                'chapter_id' => 8,
                'question_id' => 332
            ],

            [
                'chapter_id' => 10,
                'question_id' => 332
            ],

            [
                'chapter_id' => 12,
                'question_id' => 332
            ],

            [
                'chapter_id' => 13,
                'question_id' => 332
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 333
            ],

            [
                'chapter_id' => 4,
                'question_id' => 333
            ],

            [
                'chapter_id' => 6,
                'question_id' => 333
            ],

            [
                'chapter_id' => 8,
                'question_id' => 333
            ],

            [
                'chapter_id' => 10,
                'question_id' => 333
            ],

            [
                'chapter_id' => 12,
                'question_id' => 333
            ],

            [
                'chapter_id' => 13,
                'question_id' => 333
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 334
            ],

            [
                'chapter_id' => 4,
                'question_id' => 334
            ],

            [
                'chapter_id' => 6,
                'question_id' => 334
            ],

            [
                'chapter_id' => 8,
                'question_id' => 334
            ],

            [
                'chapter_id' => 10,
                'question_id' => 334
            ],

            [
                'chapter_id' => 12,
                'question_id' => 334
            ],

            [
                'chapter_id' => 13,
                'question_id' => 334
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 335
            ],

            [
                'chapter_id' => 4,
                'question_id' => 335
            ],

            [
                'chapter_id' => 6,
                'question_id' => 335
            ],

            [
                'chapter_id' => 8,
                'question_id' => 335
            ],

            [
                'chapter_id' => 10,
                'question_id' => 335
            ],

            [
                'chapter_id' => 12,
                'question_id' => 335
            ],

            [
                'chapter_id' => 13,
                'question_id' => 335
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 336
            ],

            [
                'chapter_id' => 4,
                'question_id' => 336
            ],

            [
                'chapter_id' => 6,
                'question_id' => 336
            ],

            [
                'chapter_id' => 8,
                'question_id' => 336
            ],

            [
                'chapter_id' => 10,
                'question_id' => 336
            ],

            [
                'chapter_id' => 12,
                'question_id' => 336
            ],

            [
                'chapter_id' => 13,
                'question_id' => 336
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 337
            ],

            [
                'chapter_id' => 4,
                'question_id' => 337
            ],

            [
                'chapter_id' => 6,
                'question_id' => 337
            ],

            [
                'chapter_id' => 8,
                'question_id' => 337
            ],

            [
                'chapter_id' => 10,
                'question_id' => 337
            ],

            [
                'chapter_id' => 12,
                'question_id' => 337
            ],

            [
                'chapter_id' => 13,
                'question_id' => 337
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 338
            ],

            [
                'chapter_id' => 4,
                'question_id' => 338
            ],

            [
                'chapter_id' => 6,
                'question_id' => 338
            ],

            [
                'chapter_id' => 8,
                'question_id' => 338
            ],

            [
                'chapter_id' => 10,
                'question_id' => 338
            ],

            [
                'chapter_id' => 12,
                'question_id' => 338
            ],

            [
                'chapter_id' => 13,
                'question_id' => 338
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 339
            ],

            [
                'chapter_id' => 4,
                'question_id' => 339
            ],

            [
                'chapter_id' => 6,
                'question_id' => 339
            ],

            [
                'chapter_id' => 8,
                'question_id' => 339
            ],

            [
                'chapter_id' => 10,
                'question_id' => 339
            ],

            [
                'chapter_id' => 12,
                'question_id' => 339
            ],

            [
                'chapter_id' => 13,
                'question_id' => 339
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 340
            ],

            [
                'chapter_id' => 3,
                'question_id' => 340
            ],

            [
                'chapter_id' => 6,
                'question_id' => 340
            ],

            [
                'chapter_id' => 8,
                'question_id' => 340
            ],

            [
                'chapter_id' => 10,
                'question_id' => 340
            ],

            [
                'chapter_id' => 12,
                'question_id' => 340
            ],

            [
                'chapter_id' => 13,
                'question_id' => 340
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 341
            ],

            [
                'chapter_id' => 3,
                'question_id' => 341
            ],

            [
                'chapter_id' => 6,
                'question_id' => 341
            ],

            [
                'chapter_id' => 8,
                'question_id' => 341
            ],

            [
                'chapter_id' => 10,
                'question_id' => 341
            ],

            [
                'chapter_id' => 12,
                'question_id' => 341
            ],

            [
                'chapter_id' => 13,
                'question_id' => 341
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 342
            ],

            [
                'chapter_id' => 4,
                'question_id' => 342
            ],

            [
                'chapter_id' => 6,
                'question_id' => 342
            ],

            [
                'chapter_id' => 8,
                'question_id' => 342
            ],

            [
                'chapter_id' => 10,
                'question_id' => 342
            ],

            [
                'chapter_id' => 12,
                'question_id' => 342
            ],

            [
                'chapter_id' => 13,
                'question_id' => 342
            ],
            //17
            [
                'chapter_id' => 2,
                'question_id' => 343
            ],

            [
                'chapter_id' => 4,
                'question_id' => 343
            ],

            [
                'chapter_id' => 6,
                'question_id' => 343
            ],

            [
                'chapter_id' => 8,
                'question_id' => 343
            ],

            [
                'chapter_id' => 10,
                'question_id' => 343
            ],

            [
                'chapter_id' => 11,
                'question_id' => 343
            ],

            [
                'chapter_id' => 13,
                'question_id' => 343
            ],


            //2block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 344
            ],

            [
                'chapter_id' => 4,
                'question_id' => 344
            ],

            [
                'chapter_id' => 6,
                'question_id' => 344
            ],

            [
                'chapter_id' => 8,
                'question_id' => 344
            ],

            [
                'chapter_id' => 10,
                'question_id' => 344
            ],

            [
                'chapter_id' => 11,
                'question_id' => 344
            ],

            [
                'chapter_id' => 14,
                'question_id' => 344
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 345
            ],

            [
                'chapter_id' => 4,
                'question_id' => 345
            ],

            [
                'chapter_id' => 6,
                'question_id' => 345
            ],

            [
                'chapter_id' => 8,
                'question_id' => 345
            ],

            [
                'chapter_id' => 10,
                'question_id' => 345
            ],

            [
                'chapter_id' => 11,
                'question_id' => 345
            ],

            [
                'chapter_id' => 14,
                'question_id' => 345
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 346
            ],

            [
                'chapter_id' => 4,
                'question_id' => 346
            ],

            [
                'chapter_id' => 6,
                'question_id' => 346
            ],

            [
                'chapter_id' => 8,
                'question_id' => 346
            ],

            [
                'chapter_id' => 10,
                'question_id' => 346
            ],

            [
                'chapter_id' => 11,
                'question_id' => 346
            ],

            [
                'chapter_id' => 14,
                'question_id' => 346
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 347
            ],

            [
                'chapter_id' => 4,
                'question_id' => 347
            ],

            [
                'chapter_id' => 6,
                'question_id' => 347
            ],

            [
                'chapter_id' => 8,
                'question_id' => 347
            ],

            [
                'chapter_id' => 10,
                'question_id' => 347
            ],

            [
                'chapter_id' => 11,
                'question_id' => 347
            ],

            [
                'chapter_id' => 14,
                'question_id' => 347
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 348
            ],

            [
                'chapter_id' => 4,
                'question_id' => 348
            ],

            [
                'chapter_id' => 6,
                'question_id' => 348
            ],

            [
                'chapter_id' => 8,
                'question_id' => 348
            ],

            [
                'chapter_id' => 10,
                'question_id' => 348
            ],

            [
                'chapter_id' => 11,
                'question_id' => 348
            ],

            [
                'chapter_id' => 14,
                'question_id' => 348
            ],
            //6
            [
                'chapter_id' => 2,
                'question_id' => 349
            ],

            [
                'chapter_id' => 4,
                'question_id' => 349
            ],

            [
                'chapter_id' => 6,
                'question_id' => 349
            ],

            [
                'chapter_id' => 8,
                'question_id' => 349
            ],

            [
                'chapter_id' => 10,
                'question_id' => 349
            ],

            [
                'chapter_id' => 11,
                'question_id' => 349
            ],

            [
                'chapter_id' => 14,
                'question_id' => 349
            ],
            //7
            [
                'chapter_id' => 2,
                'question_id' => 350
            ],

            [
                'chapter_id' => 4,
                'question_id' => 350
            ],

            [
                'chapter_id' => 6,
                'question_id' => 350
            ],

            [
                'chapter_id' => 8,
                'question_id' => 350
            ],

            [
                'chapter_id' => 10,
                'question_id' => 350
            ],

            [
                'chapter_id' => 11,
                'question_id' => 350
            ],

            [
                'chapter_id' => 14,
                'question_id' => 350
            ],
            //8
            [
                'chapter_id' => 2,
                'question_id' => 351
            ],

            [
                'chapter_id' => 4,
                'question_id' => 351
            ],

            [
                'chapter_id' => 6,
                'question_id' => 351
            ],

            [
                'chapter_id' => 8,
                'question_id' => 351
            ],

            [
                'chapter_id' => 10,
                'question_id' => 351
            ],

            [
                'chapter_id' => 11,
                'question_id' => 351
            ],

            [
                'chapter_id' => 14,
                'question_id' => 351
            ],
            //9
            [
                'chapter_id' => 2,
                'question_id' => 352
            ],

            [
                'chapter_id' => 4,
                'question_id' => 352
            ],

            [
                'chapter_id' => 6,
                'question_id' => 352
            ],

            [
                'chapter_id' => 8,
                'question_id' => 352
            ],

            [
                'chapter_id' => 10,
                'question_id' => 352
            ],

            [
                'chapter_id' => 11,
                'question_id' => 352
            ],

            [
                'chapter_id' => 14,
                'question_id' => 352
            ],
            //10
            [
                'chapter_id' => 2,
                'question_id' => 353
            ],

            [
                'chapter_id' => 4,
                'question_id' => 353
            ],

            [
                'chapter_id' => 6,
                'question_id' => 353
            ],

            [
                'chapter_id' => 8,
                'question_id' => 353
            ],

            [
                'chapter_id' => 10,
                'question_id' => 353
            ],

            [
                'chapter_id' => 11,
                'question_id' => 353
            ],

            [
                'chapter_id' => 14,
                'question_id' => 353
            ],
            //11
            [
                'chapter_id' => 2,
                'question_id' => 354
            ],

            [
                'chapter_id' => 4,
                'question_id' => 354
            ],

            [
                'chapter_id' => 6,
                'question_id' => 354
            ],

            [
                'chapter_id' => 8,
                'question_id' => 354
            ],

            [
                'chapter_id' => 10,
                'question_id' => 354
            ],

            [
                'chapter_id' => 11,
                'question_id' => 354
            ],

            [
                'chapter_id' => 14,
                'question_id' => 354
            ],
            //12
            [
                'chapter_id' => 2,
                'question_id' => 355
            ],

            [
                'chapter_id' => 4,
                'question_id' => 355
            ],

            [
                'chapter_id' => 6,
                'question_id' => 355
            ],

            [
                'chapter_id' => 8,
                'question_id' => 355
            ],

            [
                'chapter_id' => 10,
                'question_id' => 355
            ],

            [
                'chapter_id' => 11,
                'question_id' => 355
            ],

            [
                'chapter_id' => 14,
                'question_id' => 355
            ],
            //13
            [
                'chapter_id' => 2,
                'question_id' => 356
            ],

            [
                'chapter_id' => 4,
                'question_id' => 356
            ],

            [
                'chapter_id' => 6,
                'question_id' => 356
            ],

            [
                'chapter_id' => 8,
                'question_id' => 356
            ],

            [
                'chapter_id' => 10,
                'question_id' => 356
            ],

            [
                'chapter_id' => 11,
                'question_id' => 356
            ],

            [
                'chapter_id' => 14,
                'question_id' => 356
            ],
            //14
            [
                'chapter_id' => 2,
                'question_id' => 357
            ],

            [
                'chapter_id' => 4,
                'question_id' => 357
            ],

            [
                'chapter_id' => 6,
                'question_id' => 357
            ],

            [
                'chapter_id' => 8,
                'question_id' => 357
            ],

            [
                'chapter_id' => 10,
                'question_id' => 357
            ],

            [
                'chapter_id' => 11,
                'question_id' => 357
            ],

            [
                'chapter_id' => 14,
                'question_id' => 357
            ],
            //15
            [
                'chapter_id' => 2,
                'question_id' => 358
            ],

            [
                'chapter_id' => 4,
                'question_id' => 358
            ],

            [
                'chapter_id' => 6,
                'question_id' => 358
            ],

            [
                'chapter_id' => 8,
                'question_id' => 358
            ],

            [
                'chapter_id' => 10,
                'question_id' => 358
            ],

            [
                'chapter_id' => 11,
                'question_id' => 358
            ],

            [
                'chapter_id' => 14,
                'question_id' => 358
            ],
            //16
            [
                'chapter_id' => 2,
                'question_id' => 359
            ],

            [
                'chapter_id' => 4,
                'question_id' => 359
            ],

            [
                'chapter_id' => 6,
                'question_id' => 359
            ],

            [
                'chapter_id' => 8,
                'question_id' => 359
            ],

            [
                'chapter_id' => 10,
                'question_id' => 359
            ],

            [
                'chapter_id' => 11,
                'question_id' => 359
            ],

            [
                'chapter_id' => 13,
                'question_id' => 359
            ],

            //3block
            //1
            [
                'chapter_id' => 2,
                'question_id' => 360
            ],

            [
                'chapter_id' => 4,
                'question_id' => 360
            ],

            [
                'chapter_id' => 6,
                'question_id' => 360
            ],

            [
                'chapter_id' => 8,
                'question_id' => 360
            ],

            [
                'chapter_id' => 10,
                'question_id' => 360
            ],

            [
                'chapter_id' => 11,
                'question_id' => 360
            ],

            [
                'chapter_id' => 14,
                'question_id' => 360
            ],
            //2
            [
                'chapter_id' => 2,
                'question_id' => 361
            ],

            [
                'chapter_id' => 4,
                'question_id' => 361
            ],

            [
                'chapter_id' => 6,
                'question_id' => 361
            ],

            [
                'chapter_id' => 8,
                'question_id' => 361
            ],

            [
                'chapter_id' => 10,
                'question_id' => 361
            ],

            [
                'chapter_id' => 11,
                'question_id' => 361
            ],

            [
                'chapter_id' => 14,
                'question_id' => 361
            ],
            //3
            [
                'chapter_id' => 2,
                'question_id' => 362
            ],

            [
                'chapter_id' => 4,
                'question_id' => 362
            ],

            [
                'chapter_id' => 6,
                'question_id' => 362
            ],

            [
                'chapter_id' => 8,
                'question_id' => 362
            ],

            [
                'chapter_id' => 10,
                'question_id' => 362
            ],

            [
                'chapter_id' => 11,
                'question_id' => 362
            ],

            [
                'chapter_id' => 14,
                'question_id' => 362
            ],
            //4
            [
                'chapter_id' => 2,
                'question_id' => 363
            ],

            [
                'chapter_id' => 4,
                'question_id' => 363
            ],

            [
                'chapter_id' => 6,
                'question_id' => 363
            ],

            [
                'chapter_id' => 8,
                'question_id' => 363
            ],

            [
                'chapter_id' => 10,
                'question_id' => 363
            ],

            [
                'chapter_id' => 11,
                'question_id' => 363
            ],

            [
                'chapter_id' => 14,
                'question_id' => 363
            ],
            //5
            [
                'chapter_id' => 2,
                'question_id' => 364
            ],

            [
                'chapter_id' => 3,
                'question_id' => 364
            ],

            [
                'chapter_id' => 6,
                'question_id' => 364
            ],

            [
                'chapter_id' => 8,
                'question_id' => 364
            ],

            [
                'chapter_id' => 10,
                'question_id' => 364
            ],

            [
                'chapter_id' => 11,
                'question_id' => 364
            ],

            [
                'chapter_id' => 14,
                'question_id' => 364
            ],

        ]);
    }
}
