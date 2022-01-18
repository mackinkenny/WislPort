<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_tip')->truncate();


        DB::table('question_tip')->insert([
            //1block
            [
                'tip_id' => 1,
                'question_id' => 1,
            ],
            [
                'tip_id' => 3,
                'question_id' => 1,
            ],
            [
                'tip_id' => 5,
                'question_id' => 1,
            ],



            [
                'tip_id' => 1,
                'question_id' => 2,
            ],
            [
                'tip_id' => 3,
                'question_id' => 2,
            ],
            [
                'tip_id' => 5,
                'question_id' => 2,
            ],


            [
                'tip_id' => 1,
                'question_id' => 3,
            ],
            [
                'tip_id' => 3,
                'question_id' => 3,
            ],
            [
                'tip_id' => 5,
                'question_id' => 3,
            ],


            //2block
            [
                'tip_id' => 1,
                'question_id' => 4,
            ],
            [
                'tip_id' => 4,
                'question_id' => 4,
            ],
            [
                'tip_id' => 5,
                'question_id' => 4,
            ],

            [
                'tip_id' => 1,
                'question_id' => 5,
            ],
            [
                'tip_id' => 4,
                'question_id' => 5,
            ],
            [
                'tip_id' => 5,
                'question_id' => 5,
            ],


            [
                'tip_id' => 1,
                'question_id' => 6,
            ],
            [
                'tip_id' => 4,
                'question_id' => 6,
            ],
            [
                'tip_id' => 5,
                'question_id' => 6,
            ],

            //3block
            [
                'tip_id' => 1,
                'question_id' => 7,
            ],
            [
                'tip_id' => 4,
                'question_id' => 7,
            ],
            [
                'tip_id' => 5,
                'question_id' => 7,
            ],


            [
                'tip_id' => 1,
                'question_id' => 8,
            ],
            [
                'tip_id' => 4,
                'question_id' => 8,
            ],
            [
                'tip_id' => 5,
                'question_id' => 8,
            ],

            [
                'tip_id' => 1,
                'question_id' => 9,
            ],
            [
                'tip_id' => 4,
                'question_id' => 9,
            ],
            [
                'tip_id' => 5,
                'question_id' => 9,
            ],

            //4block

            [
                'tip_id' => 1,
                'question_id' => 10,
            ],
            [
                'tip_id' => 3,
                'question_id' => 10,
            ],
            [
                'tip_id' => 5,
                'question_id' => 10,
            ],

            [
                'tip_id' => 1,
                'question_id' => 11,
            ],
            [
                'tip_id' => 3,
                'question_id' => 11,
            ],
            [
                'tip_id' => 5,
                'question_id' => 11,
            ],

            [
                'tip_id' => 1,
                'question_id' => 12,
            ],
            [
                'tip_id' => 3,
                'question_id' => 12,
            ],
            [
                'tip_id' => 5,
                'question_id' => 12,
            ],

            //5block
            //1
            [
                'tip_id' => 1,
                'question_id' => 13,
            ],
            [
                'tip_id' => 4,
                'question_id' => 13,
            ],
            [
                'tip_id' => 5,
                'question_id' => 13,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 14,
            ],
            [
                'tip_id' => 4,
                'question_id' => 14,
            ],
            [
                'tip_id' => 5,
                'question_id' => 14,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 15,
            ],
            [
                'tip_id' => 4,
                'question_id' => 15,
            ],
            [
                'tip_id' => 5,
                'question_id' => 15,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 16,
            ],
            [
                'tip_id' => 4,
                'question_id' => 16,
            ],
            [
                'tip_id' => 5,
                'question_id' => 16,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 17,
            ],
            [
                'tip_id' => 4,
                'question_id' => 17,
            ],
            [
                'tip_id' => 5,
                'question_id' => 17,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 18,
            ],
            [
                'tip_id' => 4,
                'question_id' => 18,
            ],
            [
                'tip_id' => 5,
                'question_id' => 18,
            ],

            //6block
            //1
            [
                'tip_id' => 1,
                'question_id' => 19,
            ],
            [
                'tip_id' => 3,
                'question_id' => 19,
            ],
            [
                'tip_id' => 5,
                'question_id' => 19,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 20,
            ],
            [
                'tip_id' => 4,
                'question_id' => 20,
            ],
            [
                'tip_id' => 5,
                'question_id' => 20,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 21,
            ],
            [
                'tip_id' => 4,
                'question_id' => 21,
            ],
            [
                'tip_id' => 5,
                'question_id' => 21,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 22,
            ],
            [
                'tip_id' => 4,
                'question_id' => 22,
            ],
            [
                'tip_id' => 5,
                'question_id' => 22,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 23,
            ],
            [
                'tip_id' => 4,
                'question_id' => 23,
            ],
            [
                'tip_id' => 5,
                'question_id' => 23,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 24,
            ],
            [
                'tip_id' => 4,
                'question_id' => 24,
            ],
            [
                'tip_id' => 5,
                'question_id' => 24,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 25,
            ],
            [
                'tip_id' => 4,
                'question_id' => 25,
            ],
            [
                'tip_id' => 5,
                'question_id' => 25,
            ],

            //7block
            //1
            [
                'tip_id' => 1,
                'question_id' => 26,
            ],
            [
                'tip_id' => 3,
                'question_id' => 26,
            ],
            [
                'tip_id' => 5,
                'question_id' => 26,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 27,
            ],
            [
                'tip_id' => 3,
                'question_id' => 27,
            ],
            [
                'tip_id' => 5,
                'question_id' => 27,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 28,
            ],
            [
                'tip_id' => 3,
                'question_id' => 28,
            ],
            [
                'tip_id' => 5,
                'question_id' => 28,
            ],

            //8 block
            //1
            [
                'tip_id' => 1,
                'question_id' => 29,
            ],
            [
                'tip_id' => 4,
                'question_id' => 29,
            ],
            [
                'tip_id' => 5,
                'question_id' => 29,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 30,
            ],
            [
                'tip_id' => 4,
                'question_id' => 30,
            ],
            [
                'tip_id' => 5,
                'question_id' => 30,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 31,
            ],
            [
                'tip_id' => 4,
                'question_id' => 31,
            ],
            [
                'tip_id' => 5,
                'question_id' => 31,
            ],

            //9block
            //1
            [
                'tip_id' => 1,
                'question_id' => 32,
            ],
            [
                'tip_id' => 4,
                'question_id' => 32,
            ],
            [
                'tip_id' => 5,
                'question_id' => 32,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 33,
            ],
            [
                'tip_id' => 4,
                'question_id' => 33,
            ],
            [
                'tip_id' => 5,
                'question_id' => 33,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 34,
            ],
            [
                'tip_id' => 4,
                'question_id' => 34,
            ],
            [
                'tip_id' => 5,
                'question_id' => 34,
            ],
            //10block
            //1
            [
                'tip_id' => 1,
                'question_id' => 35,
            ],
            [
                'tip_id' => 4,
                'question_id' => 35,
            ],
            [
                'tip_id' => 5,
                'question_id' => 35,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 36,
            ],
            [
                'tip_id' => 4,
                'question_id' => 36,
            ],
            [
                'tip_id' => 5,
                'question_id' => 36,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 37,
            ],
            [
                'tip_id' => 4,
                'question_id' => 37,
            ],
            [
                'tip_id' => 5,
                'question_id' => 37,
            ],


            //11 block
            //1
            [
                'tip_id' => 1,
                'question_id' => 38,
            ],
            [
                'tip_id' => 4,
                'question_id' => 38,
            ],
            [
                'tip_id' => 5,
                'question_id' => 38,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 39,
            ],
            [
                'tip_id' => 4,
                'question_id' => 39,
            ],
            [
                'tip_id' => 5,
                'question_id' => 39,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 40,
            ],
            [
                'tip_id' => 4,
                'question_id' => 40,
            ],
            [
                'tip_id' => 5,
                'question_id' => 40,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 41,
            ],
            [
                'tip_id' => 3,
                'question_id' => 41,
            ],
            [
                'tip_id' => 5,
                'question_id' => 41,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 42,
            ],
            [
                'tip_id' => 4,
                'question_id' => 42,
            ],
            [
                'tip_id' => 5,
                'question_id' => 42,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 43,
            ],
            [
                'tip_id' => 3,
                'question_id' => 43,
            ],
            [
                'tip_id' => 5,
                'question_id' => 43,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 44,
            ],
            [
                'tip_id' => 3,
                'question_id' => 44,
            ],
            [
                'tip_id' => 5,
                'question_id' => 44,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 45,
            ],
            [
                'tip_id' => 4,
                'question_id' => 45,
            ],
            [
                'tip_id' => 5,
                'question_id' => 45,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 46,
            ],
            [
                'tip_id' => 4,
                'question_id' => 46,
            ],
            [
                'tip_id' => 5,
                'question_id' => 46,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 47,
            ],
            [
                'tip_id' => 4,
                'question_id' => 47,
            ],
            [
                'tip_id' => 5,
                'question_id' => 47,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 48,
            ],
            [
                'tip_id' => 4,
                'question_id' => 48,
            ],
            [
                'tip_id' => 5,
                'question_id' => 48,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 49,
            ],
            [
                'tip_id' => 4,
                'question_id' => 49,
            ],
            [
                'tip_id' => 5,
                'question_id' => 49,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 50,
            ],
            [
                'tip_id' => 4,
                'question_id' => 50,
            ],
            [
                'tip_id' => 5,
                'question_id' => 50,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 51,
            ],
            [
                'tip_id' => 4,
                'question_id' => 51,
            ],
            [
                'tip_id' => 5,
                'question_id' => 51,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 52,
            ],
            [
                'tip_id' => 4,
                'question_id' => 52,
            ],
            [
                'tip_id' => 5,
                'question_id' => 52,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 53,
            ],
            [
                'tip_id' => 4,
                'question_id' => 53,
            ],
            [
                'tip_id' => 5,
                'question_id' => 53,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 54,
            ],
            [
                'tip_id' => 3,
                'question_id' => 54,
            ],
            [
                'tip_id' => 5,
                'question_id' => 54,
            ],
            //18
            [
                'tip_id' => 1,
                'question_id' => 55,
            ],
            [
                'tip_id' => 4,
                'question_id' => 55,
            ],
            [
                'tip_id' => 5,
                'question_id' => 55,
            ],
            //19
            [
                'tip_id' => 1,
                'question_id' => 56,
            ],
            [
                'tip_id' => 4,
                'question_id' => 56,
            ],
            [
                'tip_id' => 5,
                'question_id' => 56,
            ],
            //20
            [
                'tip_id' => 1,
                'question_id' => 57,
            ],
            [
                'tip_id' => 4,
                'question_id' => 57,
            ],
            [
                'tip_id' => 5,
                'question_id' => 57,
            ],
            //21
            [
                'tip_id' => 1,
                'question_id' => 58,
            ],
            [
                'tip_id' => 3,
                'question_id' => 58,
            ],
            [
                'tip_id' => 5,
                'question_id' => 58,
            ],
            //22
            [
                'tip_id' => 1,
                'question_id' => 59,
            ],
            [
                'tip_id' => 3,
                'question_id' => 59,
            ],
            [
                'tip_id' => 5,
                'question_id' => 59,
            ],
            //23
            [
                'tip_id' => 2,
                'question_id' => 60,
            ],
            [
                'tip_id' => 4,
                'question_id' => 60,
            ],
            [
                'tip_id' => 6,
                'question_id' => 60,
            ],
            //24
            [
                'tip_id' => 1,
                'question_id' => 61,
            ],
            [
                'tip_id' => 4,
                'question_id' => 61,
            ],
            [
                'tip_id' => 5,
                'question_id' => 61,
            ],
            //25
            [
                'tip_id' => 1,
                'question_id' => 62,
            ],
            [
                'tip_id' => 4,
                'question_id' => 62,
            ],
            [
                'tip_id' => 5,
                'question_id' => 62,
            ],
            //26
            [
                'tip_id' => 1,
                'question_id' => 63,
            ],
            [
                'tip_id' => 4,
                'question_id' => 63,
            ],
            [
                'tip_id' => 5,
                'question_id' => 63,
            ],
            //27
            [
                'tip_id' => 1,
                'question_id' => 64,
            ],
            [
                'tip_id' => 4,
                'question_id' => 64,
            ],
            [
                'tip_id' => 5,
                'question_id' => 64,
            ],
            //28
            [
                'tip_id' => 1,
                'question_id' => 65,
            ],
            [
                'tip_id' => 4,
                'question_id' => 65,
            ],
            [
                'tip_id' => 5,
                'question_id' => 65,
            ],





            //2section
            //1block
            //1
            [
                'tip_id' => 1,
                'question_id' => 66,
            ],
            [
                'tip_id' => 3,
                'question_id' => 66,
            ],
            [
                'tip_id' => 5,
                'question_id' => 66,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 67,
            ],
            [
                'tip_id' => 4,
                'question_id' => 67,
            ],
            [
                'tip_id' => 5,
                'question_id' => 67,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 68,
            ],
            [
                'tip_id' => 4,
                'question_id' => 68,
            ],
            [
                'tip_id' => 5,
                'question_id' => 68,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 69,
            ],
            [
                'tip_id' => 4,
                'question_id' => 69,
            ],
            [
                'tip_id' => 5,
                'question_id' => 69,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 70,
            ],
            [
                'tip_id' => 4,
                'question_id' => 70,
            ],
            [
                'tip_id' => 5,
                'question_id' => 70,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 71,
            ],
            [
                'tip_id' => 4,
                'question_id' => 71,
            ],
            [
                'tip_id' => 5,
                'question_id' => 71,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 72,
            ],
            [
                'tip_id' => 4,
                'question_id' => 72,
            ],
            [
                'tip_id' => 5,
                'question_id' => 72,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 73,
            ],
            [
                'tip_id' => 4,
                'question_id' => 73,
            ],
            [
                'tip_id' => 5,
                'question_id' => 73,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 74,
            ],
            [
                'tip_id' => 4,
                'question_id' => 74,
            ],
            [
                'tip_id' => 5,
                'question_id' => 74,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 75,
            ],
            [
                'tip_id' => 4,
                'question_id' => 75,
            ],
            [
                'tip_id' => 5,
                'question_id' => 75,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 76,
            ],
            [
                'tip_id' => 4,
                'question_id' => 76,
            ],
            [
                'tip_id' => 5,
                'question_id' => 76,
            ],

            //2block
            //1
            [
                'tip_id' => 1,
                'question_id' => 77,
            ],
            [
                'tip_id' => 3,
                'question_id' => 77,
            ],
            [
                'tip_id' => 5,
                'question_id' => 77,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 78,
            ],
            [
                'tip_id' => 3,
                'question_id' => 78,
            ],
            [
                'tip_id' => 5,
                'question_id' => 78,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 79,
            ],
            [
                'tip_id' => 3,
                'question_id' => 79,
            ],
            [
                'tip_id' => 5,
                'question_id' => 79,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 80,
            ],
            [
                'tip_id' => 3,
                'question_id' => 80,
            ],
            [
                'tip_id' => 5,
                'question_id' => 80,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 81,
            ],
            [
                'tip_id' => 3,
                'question_id' => 81,
            ],
            [
                'tip_id' => 5,
                'question_id' => 81,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 82,
            ],
            [
                'tip_id' => 3,
                'question_id' => 82,
            ],
            [
                'tip_id' => 5,
                'question_id' => 82,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 83,
            ],
            [
                'tip_id' => 3,
                'question_id' => 83,
            ],
            [
                'tip_id' => 5,
                'question_id' => 83,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 84,
            ],
            [
                'tip_id' => 3,
                'question_id' => 84,
            ],
            [
                'tip_id' => 5,
                'question_id' => 84,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 85,
            ],
            [
                'tip_id' => 3,
                'question_id' => 85,
            ],
            [
                'tip_id' => 5,
                'question_id' => 85,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 86,
            ],
            [
                'tip_id' => 3,
                'question_id' => 86,
            ],
            [
                'tip_id' => 5,
                'question_id' => 86,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 87,
            ],
            [
                'tip_id' => 3,
                'question_id' => 87,
            ],
            [
                'tip_id' => 5,
                'question_id' => 87,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 88,
            ],
            [
                'tip_id' => 3,
                'question_id' => 88,
            ],
            [
                'tip_id' => 5,
                'question_id' => 88,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 89,
            ],
            [
                'tip_id' => 3,
                'question_id' => 89,
            ],
            [
                'tip_id' => 5,
                'question_id' => 89,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 90,
            ],
            [
                'tip_id' => 3,
                'question_id' => 90,
            ],
            [
                'tip_id' => 5,
                'question_id' => 90,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 91,
            ],
            [
                'tip_id' => 3,
                'question_id' => 91,
            ],
            [
                'tip_id' => 5,
                'question_id' => 91,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 92,
            ],
            [
                'tip_id' => 3,
                'question_id' => 92,
            ],
            [
                'tip_id' => 5,
                'question_id' => 92,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 93,
            ],
            [
                'tip_id' => 3,
                'question_id' => 93,
            ],
            [
                'tip_id' => 5,
                'question_id' => 93,
            ],

            //3block
//1
            [
                'tip_id' => 1,
                'question_id' => 94,
            ],
            [
                'tip_id' => 4,
                'question_id' => 94,
            ],
            [
                'tip_id' => 6,
                'question_id' => 94,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 95,
            ],
            [
                'tip_id' => 4,
                'question_id' => 95,
            ],
            [
                'tip_id' => 6,
                'question_id' => 95,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 96,
            ],
            [
                'tip_id' => 4,
                'question_id' => 96,
            ],
            [
                'tip_id' => 6,
                'question_id' => 96,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 97,
            ],
            [
                'tip_id' => 4,
                'question_id' => 97,
            ],
            [
                'tip_id' => 6,
                'question_id' => 97,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 98,
            ],
            [
                'tip_id' => 4,
                'question_id' => 98,
            ],
            [
                'tip_id' => 6,
                'question_id' => 98,
            ],
            //4block
            //1
            [
                'tip_id' => 1,
                'question_id' => 99,
            ],
            [
                'tip_id' => 4,
                'question_id' => 99,
            ],
            [
                'tip_id' => 6,
                'question_id' => 99,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 100,
            ],
            [
                'tip_id' => 4,
                'question_id' => 100,
            ],
            [
                'tip_id' => 6,
                'question_id' => 100,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 101,
            ],
            [
                'tip_id' => 4,
                'question_id' => 101,
            ],
            [
                'tip_id' => 6,
                'question_id' => 101,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 102,
            ],
            [
                'tip_id' => 4,
                'question_id' => 102,
            ],
            [
                'tip_id' => 6,
                'question_id' => 102,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 103,
            ],
            [
                'tip_id' => 4,
                'question_id' => 103,
            ],
            [
                'tip_id' => 6,
                'question_id' => 103,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 104,
            ],
            [
                'tip_id' => 4,
                'question_id' => 104,
            ],
            [
                'tip_id' => 6,
                'question_id' => 104,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 105,
            ],
            [
                'tip_id' => 4,
                'question_id' => 105,
            ],
            [
                'tip_id' => 6,
                'question_id' => 105,
            ],
            //5block
            //1
            [
                'tip_id' => 1,
                'question_id' => 106,
            ],
            [
                'tip_id' => 3,
                'question_id' => 106,
            ],
            [
                'tip_id' => 5,
                'question_id' => 106,
            ],
            //2

            [
                'tip_id' => 1,
                'question_id' => 107,
            ],
            [
                'tip_id' => 3,
                'question_id' => 107,
            ],
            [
                'tip_id' => 5,
                'question_id' => 107,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 108,
            ],
            [
                'tip_id' => 3,
                'question_id' => 108,
            ],
            [
                'tip_id' => 5,
                'question_id' => 108,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 109,
            ],
            [
                'tip_id' => 3,
                'question_id' => 109,
            ],
            [
                'tip_id' => 5,
                'question_id' => 109,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 110,
            ],
            [
                'tip_id' => 3,
                'question_id' => 110,
            ],
            [
                'tip_id' => 5,
                'question_id' => 110,
            ],

            //6block
            //1
            [
                'tip_id' => 1,
                'question_id' => 111,
            ],
            [
                'tip_id' => 3,
                'question_id' => 111,
            ],
            [
                'tip_id' => 5,
                'question_id' => 111,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 112,
            ],
            [
                'tip_id' => 3,
                'question_id' => 112,
            ],
            [
                'tip_id' => 5,
                'question_id' => 112,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 113,
            ],
            [
                'tip_id' => 3,
                'question_id' => 113,
            ],
            [
                'tip_id' => 5,
                'question_id' => 113,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 114,
            ],
            [
                'tip_id' => 4,
                'question_id' => 114,
            ],
            [
                'tip_id' => 5,
                'question_id' => 114,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 115,
            ],
            [
                'tip_id' => 3,
                'question_id' => 115,
            ],
            [
                'tip_id' => 5,
                'question_id' => 115,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 116,
            ],
            [
                'tip_id' => 4,
                'question_id' => 116,
            ],
            [
                'tip_id' => 5,
                'question_id' => 116,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 117,
            ],
            [
                'tip_id' => 3,
                'question_id' => 117,
            ],
            [
                'tip_id' => 5,
                'question_id' => 117,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 118,
            ],
            [
                'tip_id' => 4,
                'question_id' => 118,
            ],
            [
                'tip_id' => 5,
                'question_id' => 118,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 119,
            ],
            [
                'tip_id' => 3,
                'question_id' => 119,
            ],
            [
                'tip_id' => 5,
                'question_id' => 119,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 120,
            ],
            [
                'tip_id' => 4,
                'question_id' => 120,
            ],
            [
                'tip_id' => 5,
                'question_id' => 120,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 121,
            ],
            [
                'tip_id' => 3,
                'question_id' => 121,
            ],
            [
                'tip_id' => 5,
                'question_id' => 121,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 122,
            ],
            [
                'tip_id' => 4,
                'question_id' => 122,
            ],
            [
                'tip_id' => 5,
                'question_id' => 122,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 123,
            ],
            [
                'tip_id' => 3,
                'question_id' => 123,
            ],
            [
                'tip_id' => 5,
                'question_id' => 123,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 124,
            ],
            [
                'tip_id' => 3,
                'question_id' => 124,
            ],
            [
                'tip_id' => 5,
                'question_id' => 124,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 125,
            ],
            [
                'tip_id' => 3,
                'question_id' => 125,
            ],
            [
                'tip_id' => 5,
                'question_id' => 125,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 126,
            ],
            [
                'tip_id' => 3,
                'question_id' => 126,
            ],
            [
                'tip_id' => 5,
                'question_id' => 126,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 127,
            ],
            [
                'tip_id' => 3,
                'question_id' => 127,
            ],
            [
                'tip_id' => 5,
                'question_id' => 127,
            ],
            //18
            [
                'tip_id' => 1,
                'question_id' => 128,
            ],
            [
                'tip_id' => 3,
                'question_id' => 128,
            ],
            [
                'tip_id' => 5,
                'question_id' => 128,
            ],
            //19
            [
                'tip_id' => 1,
                'question_id' => 129,
            ],
            [
                'tip_id' => 3,
                'question_id' => 129,
            ],
            [
                'tip_id' => 5,
                'question_id' => 129,
            ],
            //20
            [
                'tip_id' => 1,
                'question_id' => 130,
            ],
            [
                'tip_id' => 3,
                'question_id' => 130,
            ],
            [
                'tip_id' => 5,
                'question_id' => 130,
            ],
            //21
            [
                'tip_id' => 1,
                'question_id' => 131,
            ],
            [
                'tip_id' => 3,
                'question_id' => 131,
            ],
            [
                'tip_id' => 5,
                'question_id' => 131,
            ],
            //22
            [
                'tip_id' => 1,
                'question_id' => 132,
            ],
            [
                'tip_id' => 3,
                'question_id' => 132,
            ],
            [
                'tip_id' => 5,
                'question_id' => 132,
            ],
            //7block

            //1
            [
                'tip_id' => 1,
                'question_id' => 133,
            ],
            [
                'tip_id' => 4,
                'question_id' => 133,
            ],
            [
                'tip_id' => 5,
                'question_id' => 133,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 134,
            ],
            [
                'tip_id' => 4,
                'question_id' => 134,
            ],
            [
                'tip_id' => 5,
                'question_id' => 134,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 135,
            ],
            [
                'tip_id' => 4,
                'question_id' => 135,
            ],
            [
                'tip_id' => 5,
                'question_id' => 135,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 136,
            ],
            [
                'tip_id' => 4,
                'question_id' => 136,
            ],
            [
                'tip_id' => 5,
                'question_id' => 136,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 137,
            ],
            [
                'tip_id' => 4,
                'question_id' => 137,
            ],
            [
                'tip_id' => 5,
                'question_id' => 137,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 138,
            ],
            [
                'tip_id' => 4,
                'question_id' => 138,
            ],
            [
                'tip_id' => 5,
                'question_id' => 138,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 139,
            ],
            [
                'tip_id' => 4,
                'question_id' => 139,
            ],
            [
                'tip_id' => 5,
                'question_id' => 139,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 140,
            ],
            [
                'tip_id' => 4,
                'question_id' => 140,
            ],
            [
                'tip_id' => 5,
                'question_id' => 140,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 141,
            ],
            [
                'tip_id' => 4,
                'question_id' => 141,
            ],
            [
                'tip_id' => 5,
                'question_id' => 141,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 142,
            ],
            [
                'tip_id' => 4,
                'question_id' => 142,
            ],
            [
                'tip_id' => 5,
                'question_id' => 142,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 143,
            ],
            [
                'tip_id' => 4,
                'question_id' => 143,
            ],
            [
                'tip_id' => 5,
                'question_id' => 143,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 144,
            ],
            [
                'tip_id' => 4,
                'question_id' => 144,
            ],
            [
                'tip_id' => 5,
                'question_id' => 144,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 145,
            ],
            [
                'tip_id' => 4,
                'question_id' => 145,
            ],
            [
                'tip_id' => 5,
                'question_id' => 145,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 146,
            ],
            [
                'tip_id' => 4,
                'question_id' => 146,
            ],
            [
                'tip_id' => 5,
                'question_id' => 146,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 147,
            ],
            [
                'tip_id' => 4,
                'question_id' => 147,
            ],
            [
                'tip_id' => 5,
                'question_id' => 147,
            ],

            //8block
            //1
            [
                'tip_id' => 1,
                'question_id' => 148,
            ],
            [
                'tip_id' => 3,
                'question_id' => 148,
            ],
            [
                'tip_id' => 5,
                'question_id' => 148,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 149,
            ],
            [
                'tip_id' => 3,
                'question_id' => 149,
            ],
            [
                'tip_id' => 5,
                'question_id' => 149,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 150,
            ],
            [
                'tip_id' => 3,
                'question_id' => 150,
            ],
            [
                'tip_id' => 5,
                'question_id' => 150,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 151,
            ],
            [
                'tip_id' => 3,
                'question_id' => 151,
            ],
            [
                'tip_id' => 5,
                'question_id' => 151,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 152,
            ],
            [
                'tip_id' => 3,
                'question_id' => 152,
            ],
            [
                'tip_id' => 5,
                'question_id' => 152,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 153,
            ],
            [
                'tip_id' => 3,
                'question_id' => 153,
            ],
            [
                'tip_id' => 5,
                'question_id' => 153,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 154,
            ],
            [
                'tip_id' => 3,
                'question_id' => 154,
            ],
            [
                'tip_id' => 5,
                'question_id' => 154,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 155,
            ],
            [
                'tip_id' => 3,
                'question_id' => 155,
            ],
            [
                'tip_id' => 5,
                'question_id' => 155,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 156,
            ],
            [
                'tip_id' => 3,
                'question_id' => 156,
            ],
            [
                'tip_id' => 5,
                'question_id' => 156,
            ],
//10
            [
                'tip_id' => 1,
                'question_id' => 157,
            ],
            [
                'tip_id' => 3,
                'question_id' => 157,
            ],
            [
                'tip_id' => 5,
                'question_id' => 157,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 158,
            ],
            [
                'tip_id' => 3,
                'question_id' => 158,
            ],
            [
                'tip_id' => 5,
                'question_id' => 158,
            ],

            //9block
            //1
            [
                'tip_id' => 1,
                'question_id' => 159,
            ],
            [
                'tip_id' => 3,
                'question_id' => 159,
            ],
            [
                'tip_id' => 5,
                'question_id' => 159,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 160,
            ],
            [
                'tip_id' => 3,
                'question_id' => 160,
            ],
            [
                'tip_id' => 5,
                'question_id' => 160,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 161,
            ],
            [
                'tip_id' => 3,
                'question_id' => 161,
            ],
            [
                'tip_id' => 5,
                'question_id' => 161,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 162,
            ],
            [
                'tip_id' => 3,
                'question_id' => 162,
            ],
            [
                'tip_id' => 5,
                'question_id' => 162,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 163,
            ],
            [
                'tip_id' => 3,
                'question_id' => 163,
            ],
            [
                'tip_id' => 5,
                'question_id' => 163,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 164,
            ],
            [
                'tip_id' => 3,
                'question_id' => 164,
            ],
            [
                'tip_id' => 5,
                'question_id' => 164,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 165,
            ],
            [
                'tip_id' => 3,
                'question_id' => 165,
            ],
            [
                'tip_id' => 5,
                'question_id' => 165,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 166,
            ],
            [
                'tip_id' => 3,
                'question_id' => 166,
            ],
            [
                'tip_id' => 5,
                'question_id' => 166,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 167,
            ],
            [
                'tip_id' => 3,
                'question_id' => 167,
            ],
            [
                'tip_id' => 5,
                'question_id' => 167,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 168,
            ],
            [
                'tip_id' => 3,
                'question_id' => 168,
            ],
            [
                'tip_id' => 5,
                'question_id' => 168,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 169,
            ],
            [
                'tip_id' => 3,
                'question_id' => 169,
            ],
            [
                'tip_id' => 5,
                'question_id' => 169,
            ],
            //10block
            //1
            [
                'tip_id' => 1,
                'question_id' => 170,
            ],
            [
                'tip_id' => 3,
                'question_id' => 170,
            ],
            [
                'tip_id' => 5,
                'question_id' => 170,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 171,
            ],
            [
                'tip_id' => 3,
                'question_id' => 171,
            ],
            [
                'tip_id' => 5,
                'question_id' => 171,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 172,
            ],
            [
                'tip_id' => 3,
                'question_id' => 172,
            ],
            [
                'tip_id' => 5,
                'question_id' => 172,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 173,
            ],
            [
                'tip_id' => 3,
                'question_id' => 173,
            ],
            [
                'tip_id' => 5,
                'question_id' => 173,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 174,
            ],
            [
                'tip_id' => 3,
                'question_id' => 174,
            ],
            [
                'tip_id' => 5,
                'question_id' => 174,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 175,
            ],
            [
                'tip_id' => 3,
                'question_id' => 175,
            ],
            [
                'tip_id' => 5,
                'question_id' => 175,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 176,
            ],
            [
                'tip_id' => 3,
                'question_id' => 176,
            ],
            [
                'tip_id' => 5,
                'question_id' => 176,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 177,
            ],
            [
                'tip_id' => 3,
                'question_id' => 177,
            ],
            [
                'tip_id' => 5,
                'question_id' => 177,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 178,
            ],
            [
                'tip_id' => 3,
                'question_id' => 178,
            ],
            [
                'tip_id' => 5,
                'question_id' => 178,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 179,
            ],
            [
                'tip_id' => 3,
                'question_id' => 179,
            ],
            [
                'tip_id' => 5,
                'question_id' => 179,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 180,
            ],
            [
                'tip_id' => 3,
                'question_id' => 180,
            ],
            [
                'tip_id' => 5,
                'question_id' => 180,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 181,
            ],
            [
                'tip_id' => 3,
                'question_id' => 181,
            ],
            [
                'tip_id' => 5,
                'question_id' => 181,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 182,
            ],
            [
                'tip_id' => 3,
                'question_id' => 182,
            ],
            [
                'tip_id' => 5,
                'question_id' => 182,
            ],

            //11block
            //1
            [
                'tip_id' => 1,
                'question_id' => 183,
            ],
            [
                'tip_id' => 3,
                'question_id' => 183,
            ],
            [
                'tip_id' => 5,
                'question_id' => 183,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 184,
            ],
            [
                'tip_id' => 3,
                'question_id' => 184,
            ],
            [
                'tip_id' => 5,
                'question_id' => 184,
            ],

            //3
            [
                'tip_id' => 1,
                'question_id' => 185,
            ],
            [
                'tip_id' => 4,
                'question_id' => 185,
            ],
            [
                'tip_id' => 5,
                'question_id' => 185,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 186,
            ],
            [
                'tip_id' => 4,
                'question_id' => 186,
            ],
            [
                'tip_id' => 5,
                'question_id' => 186,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 187,
            ],
            [
                'tip_id' => 3,
                'question_id' => 187,
            ],
            [
                'tip_id' => 5,
                'question_id' => 187,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 188,
            ],
            [
                'tip_id' => 4,
                'question_id' => 188,
            ],
            [
                'tip_id' => 5,
                'question_id' => 188,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 189,
            ],
            [
                'tip_id' => 4,
                'question_id' => 189,
            ],
            [
                'tip_id' => 5,
                'question_id' => 189,
            ],
            //12block

            //1
            [
                'tip_id' => 1,
                'question_id' => 190,
            ],
            [
                'tip_id' => 4,
                'question_id' => 190,
            ],
            [
                'tip_id' => 5,
                'question_id' => 190,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 191,
            ],
            [
                'tip_id' => 4,
                'question_id' => 191,
            ],
            [
                'tip_id' => 5,
                'question_id' => 191,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 192,
            ],
            [
                'tip_id' => 4,
                'question_id' => 192,
            ],
            [
                'tip_id' => 5,
                'question_id' => 192,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 193,
            ],
            [
                'tip_id' => 4,
                'question_id' => 193,
            ],
            [
                'tip_id' => 5,
                'question_id' => 193,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 194,
            ],
            [
                'tip_id' => 3,
                'question_id' => 194,
            ],
            [
                'tip_id' => 5,
                'question_id' => 194,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 195,
            ],
            [
                'tip_id' => 4,
                'question_id' => 195,
            ],
            [
                'tip_id' => 5,
                'question_id' => 195,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 196,
            ],
            [
                'tip_id' => 4,
                'question_id' => 196,
            ],
            [
                'tip_id' => 5,
                'question_id' => 196,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 197,
            ],
            [
                'tip_id' => 4,
                'question_id' => 197,
            ],
            [
                'tip_id' => 5,
                'question_id' => 197,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 198,
            ],
            [
                'tip_id' => 4,
                'question_id' => 198,
            ],
            [
                'tip_id' => 5,
                'question_id' => 198,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 199,
            ],
            [
                'tip_id' => 4,
                'question_id' => 199,
            ],
            [
                'tip_id' => 5,
                'question_id' => 199,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 200,
            ],
            [
                'tip_id' => 4,
                'question_id' => 200,
            ],
            [
                'tip_id' => 5,
                'question_id' => 200,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 201,
            ],
            [
                'tip_id' => 4,
                'question_id' => 201,
            ],
            [
                'tip_id' => 5,
                'question_id' => 201,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 202,
            ],
            [
                'tip_id' => 4,
                'question_id' => 202,
            ],
            [
                'tip_id' => 5,
                'question_id' => 202,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 203,
            ],
            [
                'tip_id' => 4,
                'question_id' => 203,
            ],
            [
                'tip_id' => 5,
                'question_id' => 203,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 204,
            ],
            [
                'tip_id' => 4,
                'question_id' => 204,
            ],
            [
                'tip_id' => 5,
                'question_id' => 204,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 205,
            ],
            [
                'tip_id' => 4,
                'question_id' => 205,
            ],
            [
                'tip_id' => 5,
                'question_id' => 205,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 206,
            ],
            [
                'tip_id' => 4,
                'question_id' => 206,
            ],
            [
                'tip_id' => 5,
                'question_id' => 206,
            ],

            //13block
            [
                'tip_id' => 1,
                'question_id' => 207,
            ],
            [
                'tip_id' => 4,
                'question_id' => 207,
            ],
            [
                'tip_id' => 5,
                'question_id' => 207,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 208,
            ],
            [
                'tip_id' => 3,
                'question_id' => 208,
            ],
            [
                'tip_id' => 5,
                'question_id' => 208,
            ],

            //3
            [
                'tip_id' => 1,
                'question_id' => 209,
            ],
            [
                'tip_id' => 3,
                'question_id' => 209,
            ],
            [
                'tip_id' => 5,
                'question_id' => 209,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 210,
            ],
            [
                'tip_id' => 3,
                'question_id' => 210,
            ],
            [
                'tip_id' => 5,
                'question_id' => 210,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 211,
            ],
            [
                'tip_id' => 3,
                'question_id' => 211,
            ],
            [
                'tip_id' => 5,
                'question_id' => 211,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 212,
            ],
            [
                'tip_id' => 4,
                'question_id' => 212,
            ],
            [
                'tip_id' => 5,
                'question_id' => 212,
            ],

            //3section
            //1block
            //1
            [
                'tip_id' => 1,
                'question_id' => 213,
            ],
            [
                'tip_id' => 3,
                'question_id' => 213,
            ],
            [
                'tip_id' => 5,
                'question_id' => 213,
            ],

            //2
            [
                'tip_id' => 1,
                'question_id' => 214,
            ],
            [
                'tip_id' => 3,
                'question_id' => 214,
            ],
            [
                'tip_id' => 5,
                'question_id' => 214,
            ],

            //2block
            //1
            [
                'tip_id' => 1,
                'question_id' => 215,
            ],
            [
                'tip_id' => 3,
                'question_id' => 215,
            ],
            [
                'tip_id' => 5,
                'question_id' => 215,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 216,
            ],
            [
                'tip_id' => 3,
                'question_id' => 216,
            ],
            [
                'tip_id' => 5,
                'question_id' => 216,
            ],

            //3block
            //1
            [
                'tip_id' => 1,
                'question_id' => 217,
            ],
            [
                'tip_id' => 3,
                'question_id' => 217,
            ],
            [
                'tip_id' => 5,
                'question_id' => 217,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 218,
            ],
            [
                'tip_id' => 3,
                'question_id' => 218,
            ],
            [
                'tip_id' => 5,
                'question_id' => 218,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 219,
            ],
            [
                'tip_id' => 3,
                'question_id' => 219,
            ],
            [
                'tip_id' => 5,
                'question_id' => 219,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 220,
            ],
            [
                'tip_id' => 3,
                'question_id' => 220,
            ],
            [
                'tip_id' => 5,
                'question_id' => 220,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 221,
            ],
            [
                'tip_id' => 3,
                'question_id' => 221,
            ],
            [
                'tip_id' => 5,
                'question_id' => 221,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 222,
            ],
            [
                'tip_id' => 3,
                'question_id' => 222,
            ],
            [
                'tip_id' => 5,
                'question_id' => 222,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 223,
            ],
            [
                'tip_id' => 4,
                'question_id' => 223,
            ],
            [
                'tip_id' => 5,
                'question_id' => 223,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 224,
            ],
            [
                'tip_id' => 4,
                'question_id' => 224,
            ],
            [
                'tip_id' => 5,
                'question_id' => 224,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 225,
            ],
            [
                'tip_id' => 3,
                'question_id' => 225,
            ],
            [
                'tip_id' => 5,
                'question_id' => 225,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 226,
            ],
            [
                'tip_id' => 3,
                'question_id' => 226,
            ],
            [
                'tip_id' => 5,
                'question_id' => 226,
            ],
            //4block
            //1
            [
                'tip_id' => 1,
                'question_id' => 227,
            ],
            [
                'tip_id' => 4,
                'question_id' => 227,
            ],
            [
                'tip_id' => 5,
                'question_id' => 227,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 228,
            ],
            [
                'tip_id' => 4,
                'question_id' => 228,
            ],
            [
                'tip_id' => 5,
                'question_id' => 228,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 229,
            ],
            [
                'tip_id' => 3,
                'question_id' => 229,
            ],
            [
                'tip_id' => 5,
                'question_id' => 229,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 230,
            ],
            [
                'tip_id' => 3,
                'question_id' => 230,
            ],
            [
                'tip_id' => 5,
                'question_id' => 230,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 231,
            ],
            [
                'tip_id' => 3,
                'question_id' => 231,
            ],
            [
                'tip_id' => 5,
                'question_id' => 231,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 232,
            ],
            [
                'tip_id' => 3,
                'question_id' => 232,
            ],
            [
                'tip_id' => 5,
                'question_id' => 232,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 233,
            ],
            [
                'tip_id' => 3,
                'question_id' => 233,
            ],
            [
                'tip_id' => 5,
                'question_id' => 233,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 234,
            ],
            [
                'tip_id' => 3,
                'question_id' => 234,
            ],
            [
                'tip_id' => 5,
                'question_id' => 234,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 235,
            ],
            [
                'tip_id' => 3,
                'question_id' => 235,
            ],
            [
                'tip_id' => 5,
                'question_id' => 235,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 236,
            ],
            [
                'tip_id' => 3,
                'question_id' => 236,
            ],
            [
                'tip_id' => 5,
                'question_id' => 236,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 237,
            ],
            [
                'tip_id' => 3,
                'question_id' => 237,
            ],
            [
                'tip_id' => 5,
                'question_id' => 237,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 238,
            ],
            [
                'tip_id' => 3,
                'question_id' => 238,
            ],
            [
                'tip_id' => 5,
                'question_id' => 238,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 239,
            ],
            [
                'tip_id' => 4,
                'question_id' => 239,
            ],
            [
                'tip_id' => 5,
                'question_id' => 239,
            ],
            //5block
            //1
            [
                'tip_id' => 1,
                'question_id' => 240,
            ],
            [
                'tip_id' => 3,
                'question_id' => 240,
            ],
            [
                'tip_id' => 5,
                'question_id' => 240,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 241,
            ],
            [
                'tip_id' => 3,
                'question_id' => 241,
            ],
            [
                'tip_id' => 5,
                'question_id' => 241,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 242,
            ],
            [
                'tip_id' => 4,
                'question_id' => 242,
            ],
            [
                'tip_id' => 5,
                'question_id' => 242,
            ],
            //6 block
            //1
            [
                'tip_id' => 1,
                'question_id' => 243,
            ],
            [
                'tip_id' => 3,
                'question_id' => 243,
            ],
            [
                'tip_id' => 5,
                'question_id' => 243,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 244,
            ],
            [
                'tip_id' => 4,
                'question_id' => 244,
            ],
            [
                'tip_id' => 5,
                'question_id' => 244,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 245,
            ],
            [
                'tip_id' => 3,
                'question_id' => 245,
            ],
            [
                'tip_id' => 5,
                'question_id' => 245,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 246,
            ],
            [
                'tip_id' => 3,
                'question_id' => 246,
            ],
            [
                'tip_id' => 5,
                'question_id' => 246,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 247,
            ],
            [
                'tip_id' => 3,
                'question_id' => 247,
            ],
            [
                'tip_id' => 5,
                'question_id' => 247,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 248,
            ],
            [
                'tip_id' => 3,
                'question_id' => 248,
            ],
            [
                'tip_id' => 5,
                'question_id' => 248,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 249,
            ],
            [
                'tip_id' => 3,
                'question_id' => 249,
            ],
            [
                'tip_id' => 5,
                'question_id' => 249,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 250,
            ],
            [
                'tip_id' => 4,
                'question_id' => 250,
            ],
            [
                'tip_id' => 5,
                'question_id' => 250,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 251,
            ],
            [
                'tip_id' => 3,
                'question_id' => 251,
            ],
            [
                'tip_id' => 5,
                'question_id' => 251,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 252,
            ],
            [
                'tip_id' => 4,
                'question_id' => 252,
            ],
            [
                'tip_id' => 5,
                'question_id' => 252,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 253,
            ],
            [
                'tip_id' => 3,
                'question_id' => 253,
            ],
            [
                'tip_id' => 5,
                'question_id' => 253,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 254,
            ],
            [
                'tip_id' => 4,
                'question_id' => 254,
            ],
            [
                'tip_id' => 5,
                'question_id' => 254,
            ],
            //7block
            //1
            [
                'tip_id' => 1,
                'question_id' => 255,
            ],
            [
                'tip_id' => 3,
                'question_id' => 255,
            ],
            [
                'tip_id' => 5,
                'question_id' => 255,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 256,
            ],
            [
                'tip_id' => 3,
                'question_id' => 256,
            ],
            [
                'tip_id' => 5,
                'question_id' => 256,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 257,
            ],
            [
                'tip_id' => 3,
                'question_id' => 257,
            ],
            [
                'tip_id' => 5,
                'question_id' => 257,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 258,
            ],
            [
                'tip_id' => 3,
                'question_id' => 258,
            ],
            [
                'tip_id' => 5,
                'question_id' => 258,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 259,
            ],
            [
                'tip_id' => 4,
                'question_id' => 259,
            ],
            [
                'tip_id' => 5,
                'question_id' => 259,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 260,
            ],
            [
                'tip_id' => 4,
                'question_id' => 260,
            ],
            [
                'tip_id' => 5,
                'question_id' => 260,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 261,
            ],
            [
                'tip_id' => 3,
                'question_id' => 261,
            ],
            [
                'tip_id' => 5,
                'question_id' => 261,
            ],
            //8block
            //1
            [
                'tip_id' => 1,
                'question_id' => 262,
            ],
            [
                'tip_id' => 3,
                'question_id' => 262,
            ],
            [
                'tip_id' => 5,
                'question_id' => 262,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 263,
            ],
            [
                'tip_id' => 3,
                'question_id' => 263,
            ],
            [
                'tip_id' => 5,
                'question_id' => 263,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 264,
            ],
            [
                'tip_id' => 3,
                'question_id' => 264,
            ],
            [
                'tip_id' => 5,
                'question_id' => 264,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 265,
            ],
            [
                'tip_id' => 3,
                'question_id' => 265,
            ],
            [
                'tip_id' => 5,
                'question_id' => 265,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 266,
            ],
            [
                'tip_id' => 3,
                'question_id' => 266,
            ],
            [
                'tip_id' => 5,
                'question_id' => 266,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 267,
            ],
            [
                'tip_id' => 3,
                'question_id' => 267,
            ],
            [
                'tip_id' => 5,
                'question_id' => 267,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 268,
            ],
            [
                'tip_id' => 3,
                'question_id' => 268,
            ],
            [
                'tip_id' => 5,
                'question_id' => 268,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 269,
            ],
            [
                'tip_id' => 3,
                'question_id' => 269,
            ],
            [
                'tip_id' => 5,
                'question_id' => 269,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 270,
            ],
            [
                'tip_id' => 3,
                'question_id' => 270,
            ],
            [
                'tip_id' => 5,
                'question_id' => 270,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 271,
            ],
            [
                'tip_id' => 3,
                'question_id' => 271,
            ],
            [
                'tip_id' => 5,
                'question_id' => 271,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 272,
            ],
            [
                'tip_id' => 3,
                'question_id' => 272,
            ],
            [
                'tip_id' => 5,
                'question_id' => 272,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 273,
            ],
            [
                'tip_id' => 3,
                'question_id' => 273,
            ],
            [
                'tip_id' => 5,
                'question_id' => 273,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 274,
            ],
            [
                'tip_id' => 3,
                'question_id' => 274,
            ],
            [
                'tip_id' => 5,
                'question_id' => 274,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 275,
            ],
            [
                'tip_id' => 3,
                'question_id' => 275,
            ],
            [
                'tip_id' => 5,
                'question_id' => 275,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 276,
            ],
            [
                'tip_id' => 3,
                'question_id' => 276,
            ],
            [
                'tip_id' => 5,
                'question_id' => 276,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 277,
            ],
            [
                'tip_id' => 3,
                'question_id' => 277,
            ],
            [
                'tip_id' => 5,
                'question_id' => 277,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 278,
            ],
            [
                'tip_id' => 3,
                'question_id' => 278,
            ],
            [
                'tip_id' => 5,
                'question_id' => 278,
            ],
            //18
            [
                'tip_id' => 1,
                'question_id' => 279,
            ],
            [
                'tip_id' => 3,
                'question_id' => 279,
            ],
            [
                'tip_id' => 5,
                'question_id' => 279,
            ],
            //19
            [
                'tip_id' => 1,
                'question_id' => 280,
            ],
            [
                'tip_id' => 3,
                'question_id' => 280,
            ],
            [
                'tip_id' => 5,
                'question_id' => 280,
            ],
            //20
            [
                'tip_id' => 1,
                'question_id' => 281,
            ],
            [
                'tip_id' => 3,
                'question_id' => 281,
            ],
            [
                'tip_id' => 5,
                'question_id' => 281,
            ],
            //21
            [
                'tip_id' => 1,
                'question_id' => 282,
            ],
            [
                'tip_id' => 3,
                'question_id' => 282,
            ],
            [
                'tip_id' => 5,
                'question_id' => 282,
            ],
            //22
            [
                'tip_id' => 1,
                'question_id' => 283,
            ],
            [
                'tip_id' => 3,
                'question_id' => 283,
            ],
            [
                'tip_id' => 5,
                'question_id' => 283,
            ],
            //9block

            //1
            [
                'tip_id' => 1,
                'question_id' => 284,
            ],
            [
                'tip_id' => 3,
                'question_id' => 284,
            ],
            [
                'tip_id' => 5,
                'question_id' => 284,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 285,
            ],
            [
                'tip_id' => 3,
                'question_id' => 285,
            ],
            [
                'tip_id' => 5,
                'question_id' => 285,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 286,
            ],
            [
                'tip_id' => 3,
                'question_id' => 286,
            ],
            [
                'tip_id' => 5,
                'question_id' => 286,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 287,
            ],
            [
                'tip_id' => 3,
                'question_id' => 287,
            ],
            [
                'tip_id' => 5,
                'question_id' => 287,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 288,
            ],
            [
                'tip_id' => 3,
                'question_id' => 288,
            ],
            [
                'tip_id' => 5,
                'question_id' => 288,
            ],
            //10block
            //1
            [
                'tip_id' => 1,
                'question_id' => 289,
            ],
            [
                'tip_id' => 3,
                'question_id' => 289,
            ],
            [
                'tip_id' => 5,
                'question_id' => 289,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 290,
            ],
            [
                'tip_id' => 3,
                'question_id' => 290,
            ],
            [
                'tip_id' => 5,
                'question_id' => 290,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 291,
            ],
            [
                'tip_id' => 3,
                'question_id' => 291,
            ],
            [
                'tip_id' => 5,
                'question_id' => 291,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 292,
            ],
            [
                'tip_id' => 3,
                'question_id' => 292,
            ],
            [
                'tip_id' => 5,
                'question_id' => 292,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 293,
            ],
            [
                'tip_id' => 3,
                'question_id' => 293,
            ],
            [
                'tip_id' => 5,
                'question_id' => 293,
            ],
            //11 block
            //1
            [
                'tip_id' => 1,
                'question_id' => 294,
            ],
            [
                'tip_id' => 3,
                'question_id' => 294,
            ],
            [
                'tip_id' => 5,
                'question_id' => 294,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 295,
            ],
            [
                'tip_id' => 3,
                'question_id' => 295,
            ],
            [
                'tip_id' => 5,
                'question_id' => 295,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 296,
            ],
            [
                'tip_id' => 3,
                'question_id' => 296,
            ],
            [
                'tip_id' => 5,
                'question_id' => 296,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 297,
            ],
            [
                'tip_id' => 3,
                'question_id' => 297,
            ],
            [
                'tip_id' => 5,
                'question_id' => 297,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 298,
            ],
            [
                'tip_id' => 3,
                'question_id' => 298,
            ],
            [
                'tip_id' => 5,
                'question_id' => 298,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 299,
            ],
            [
                'tip_id' => 3,
                'question_id' => 299,
            ],
            [
                'tip_id' => 5,
                'question_id' => 299,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 300,
            ],
            [
                'tip_id' => 3,
                'question_id' => 300,
            ],
            [
                'tip_id' => 5,
                'question_id' => 300,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 301,
            ],
            [
                'tip_id' => 3,
                'question_id' => 301,
            ],
            [
                'tip_id' => 5,
                'question_id' => 301,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 302,
            ],
            [
                'tip_id' => 3,
                'question_id' => 302,
            ],
            [
                'tip_id' => 5,
                'question_id' => 302,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 303,
            ],
            [
                'tip_id' => 3,
                'question_id' => 303,
            ],
            [
                'tip_id' => 5,
                'question_id' => 303,
            ],
            //12block
            //1
            [
                'tip_id' => 1,
                'question_id' => 304,
            ],
            [
                'tip_id' => 3,
                'question_id' => 304,
            ],
            [
                'tip_id' => 5,
                'question_id' => 304,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 305,
            ],
            [
                'tip_id' => 3,
                'question_id' => 305,
            ],
            [
                'tip_id' => 5,
                'question_id' => 305,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 306,
            ],
            [
                'tip_id' => 3,
                'question_id' => 306,
            ],
            [
                'tip_id' => 5,
                'question_id' => 306,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 307,
            ],
            [
                'tip_id' => 3,
                'question_id' => 307,
            ],
            [
                'tip_id' => 5,
                'question_id' => 307,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 308,
            ],
            [
                'tip_id' => 3,
                'question_id' => 308,
            ],
            [
                'tip_id' => 5,
                'question_id' => 308,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 309,
            ],
            [
                'tip_id' => 3,
                'question_id' => 309,
            ],
            [
                'tip_id' => 5,
                'question_id' => 309,
            ],
            //13block
            [
                'tip_id' => 1,
                'question_id' => 310,
            ],
            [
                'tip_id' => 3,
                'question_id' => 310,
            ],
            [
                'tip_id' => 5,
                'question_id' => 310,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 311,
            ],
            [
                'tip_id' => 3,
                'question_id' => 311,
            ],
            [
                'tip_id' => 5,
                'question_id' => 311,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 312,
            ],
            [
                'tip_id' => 4,
                'question_id' => 312,
            ],
            [
                'tip_id' => 5,
                'question_id' => 312,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 313,
            ],
            [
                'tip_id' => 4,
                'question_id' => 313,
            ],
            [
                'tip_id' => 5,
                'question_id' => 313,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 314,
            ],
            [
                'tip_id' => 3,
                'question_id' => 314,
            ],
            [
                'tip_id' => 5,
                'question_id' => 314,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 315,
            ],
            [
                'tip_id' => 4,
                'question_id' => 315,
            ],
            [
                'tip_id' => 5,
                'question_id' => 315,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 316,
            ],
            [
                'tip_id' => 4,
                'question_id' => 316,
            ],
            [
                'tip_id' => 5,
                'question_id' => 316,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 317,
            ],
            [
                'tip_id' => 4,
                'question_id' => 317,
            ],
            [
                'tip_id' => 5,
                'question_id' => 317,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 318,
            ],
            [
                'tip_id' => 4,
                'question_id' => 318,
            ],
            [
                'tip_id' => 5,
                'question_id' => 318,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 319,
            ],
            [
                'tip_id' => 4,
                'question_id' => 319,
            ],
            [
                'tip_id' => 5,
                'question_id' => 319,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 320,
            ],
            [
                'tip_id' => 3,
                'question_id' => 320,
            ],
            [
                'tip_id' => 5,
                'question_id' => 320,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 321,
            ],
            [
                'tip_id' => 3,
                'question_id' => 321,
            ],
            [
                'tip_id' => 5,
                'question_id' => 321,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 322,
            ],
            [
                'tip_id' => 4,
                'question_id' => 322,
            ],
            [
                'tip_id' => 5,
                'question_id' => 322,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 323,
            ],
            [
                'tip_id' => 3,
                'question_id' => 323,
            ],
            [
                'tip_id' => 5,
                'question_id' => 323,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 324,
            ],
            [
                'tip_id' => 4,
                'question_id' => 324,
            ],
            [
                'tip_id' => 5,
                'question_id' => 324,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 325,
            ],
            [
                'tip_id' => 3,
                'question_id' => 325,
            ],
            [
                'tip_id' => 5,
                'question_id' => 325,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 326,
            ],
            [
                'tip_id' => 4,
                'question_id' => 326,
            ],
            [
                'tip_id' => 5,
                'question_id' => 326,
            ],

            //4section
            //1block
            //1
            [
                'tip_id' => 1,
                'question_id' => 327,
            ],
            [
                'tip_id' => 4,
                'question_id' => 327,
            ],
            [
                'tip_id' => 5,
                'question_id' => 327,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 328,
            ],
            [
                'tip_id' => 3,
                'question_id' => 328,
            ],
            [
                'tip_id' => 5,
                'question_id' => 328,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 329,
            ],
            [
                'tip_id' => 4,
                'question_id' => 329,
            ],
            [
                'tip_id' => 5,
                'question_id' => 329,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 330,
            ],
            [
                'tip_id' => 3,
                'question_id' => 330,
            ],
            [
                'tip_id' => 5,
                'question_id' => 330,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 331,
            ],
            [
                'tip_id' => 3,
                'question_id' => 331,
            ],
            [
                'tip_id' => 5,
                'question_id' => 331,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 332,
            ],
            [
                'tip_id' => 4,
                'question_id' => 332,
            ],
            [
                'tip_id' => 5,
                'question_id' => 332,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 333,
            ],
            [
                'tip_id' => 3,
                'question_id' => 333,
            ],
            [
                'tip_id' => 5,
                'question_id' => 333,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 334,
            ],
            [
                'tip_id' => 4,
                'question_id' => 334,
            ],
            [
                'tip_id' => 5,
                'question_id' => 334,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 335,
            ],
            [
                'tip_id' => 3,
                'question_id' => 335,
            ],
            [
                'tip_id' => 5,
                'question_id' => 335,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 336,
            ],
            [
                'tip_id' => 3,
                'question_id' => 336,
            ],
            [
                'tip_id' => 5,
                'question_id' => 336,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 337,
            ],
            [
                'tip_id' => 3,
                'question_id' => 337,
            ],
            [
                'tip_id' => 5,
                'question_id' => 337,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 338,
            ],
            [
                'tip_id' => 3,
                'question_id' => 338,
            ],
            [
                'tip_id' => 5,
                'question_id' => 338,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 339,
            ],
            [
                'tip_id' => 3,
                'question_id' => 339,
            ],
            [
                'tip_id' => 5,
                'question_id' => 339,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 340,
            ],
            [
                'tip_id' => 3,
                'question_id' => 340,
            ],
            [
                'tip_id' => 5,
                'question_id' => 340,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 341,
            ],
            [
                'tip_id' => 3,
                'question_id' => 341,
            ],
            [
                'tip_id' => 5,
                'question_id' => 341,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 342,
            ],
            [
                'tip_id' => 3,
                'question_id' => 342,
            ],
            [
                'tip_id' => 5,
                'question_id' => 342,
            ],
            //17
            [
                'tip_id' => 1,
                'question_id' => 343,
            ],
            [
                'tip_id' => 3,
                'question_id' => 343,
            ],
            [
                'tip_id' => 5,
                'question_id' => 343,
            ],

            //2block
            //1
            [
                'tip_id' => 1,
                'question_id' => 344,
            ],
            [
                'tip_id' => 3,
                'question_id' => 344,
            ],
            [
                'tip_id' => 5,
                'question_id' => 344,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 345,
            ],
            [
                'tip_id' => 3,
                'question_id' => 345,
            ],
            [
                'tip_id' => 5,
                'question_id' => 345,
            ],

            //3
            [
                'tip_id' => 1,
                'question_id' => 346,
            ],
            [
                'tip_id' => 3,
                'question_id' => 346,
            ],
            [
                'tip_id' => 5,
                'question_id' => 346,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 347,
            ],
            [
                'tip_id' => 3,
                'question_id' => 347,
            ],
            [
                'tip_id' => 5,
                'question_id' => 347,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 348,
            ],
            [
                'tip_id' => 3,
                'question_id' => 348,
            ],
            [
                'tip_id' => 5,
                'question_id' => 348,
            ],
            //6
            [
                'tip_id' => 1,
                'question_id' => 349,
            ],
            [
                'tip_id' => 3,
                'question_id' => 349,
            ],
            [
                'tip_id' => 5,
                'question_id' => 349,
            ],
            //7
            [
                'tip_id' => 1,
                'question_id' => 350,
            ],
            [
                'tip_id' => 3,
                'question_id' => 350,
            ],
            [
                'tip_id' => 5,
                'question_id' => 350,
            ],
            //8
            [
                'tip_id' => 1,
                'question_id' => 351,
            ],
            [
                'tip_id' => 3,
                'question_id' => 351,
            ],
            [
                'tip_id' => 5,
                'question_id' => 351,
            ],
            //9
            [
                'tip_id' => 1,
                'question_id' => 352,
            ],
            [
                'tip_id' => 3,
                'question_id' => 352,
            ],
            [
                'tip_id' => 5,
                'question_id' => 352,
            ],
            //10
            [
                'tip_id' => 1,
                'question_id' => 353,
            ],
            [
                'tip_id' => 3,
                'question_id' => 353,
            ],
            [
                'tip_id' => 5,
                'question_id' => 353,
            ],
            //11
            [
                'tip_id' => 1,
                'question_id' => 354,
            ],
            [
                'tip_id' => 3,
                'question_id' => 354,
            ],
            [
                'tip_id' => 5,
                'question_id' => 354,
            ],
            //12
            [
                'tip_id' => 1,
                'question_id' => 355,
            ],
            [
                'tip_id' => 3,
                'question_id' => 355,
            ],
            [
                'tip_id' => 5,
                'question_id' => 355,
            ],
            //13
            [
                'tip_id' => 1,
                'question_id' => 356,
            ],
            [
                'tip_id' => 3,
                'question_id' => 356,
            ],
            [
                'tip_id' => 5,
                'question_id' => 356,
            ],
            //14
            [
                'tip_id' => 1,
                'question_id' => 357,
            ],
            [
                'tip_id' => 3,
                'question_id' => 357,
            ],
            [
                'tip_id' => 5,
                'question_id' => 357,
            ],
            //15
            [
                'tip_id' => 1,
                'question_id' => 358,
            ],
            [
                'tip_id' => 3,
                'question_id' => 358,
            ],
            [
                'tip_id' => 5,
                'question_id' => 358,
            ],
            //16
            [
                'tip_id' => 1,
                'question_id' => 359,
            ],
            [
                'tip_id' => 3,
                'question_id' => 359,
            ],
            [
                'tip_id' => 5,
                'question_id' => 359,
            ],
            //3block
            //1
            [
                'tip_id' => 1,
                'question_id' => 360,
            ],
            [
                'tip_id' => 3,
                'question_id' => 360,
            ],
            [
                'tip_id' => 5,
                'question_id' => 360,
            ],
            //2
            [
                'tip_id' => 1,
                'question_id' => 361,
            ],
            [
                'tip_id' => 3,
                'question_id' => 361,
            ],
            [
                'tip_id' => 5,
                'question_id' => 361,
            ],
            //3
            [
                'tip_id' => 1,
                'question_id' => 362,
            ],
            [
                'tip_id' => 3,
                'question_id' => 362,
            ],
            [
                'tip_id' => 5,
                'question_id' => 362,
            ],
            //4
            [
                'tip_id' => 1,
                'question_id' => 363,
            ],
            [
                'tip_id' => 3,
                'question_id' => 363,
            ],
            [
                'tip_id' => 5,
                'question_id' => 363,
            ],
            //5
            [
                'tip_id' => 1,
                'question_id' => 364,
            ],
            [
                'tip_id' => 3,
                'question_id' => 364,
            ],
            [
                'tip_id' => 5,
                'question_id' => 364,
            ],
        ]);
    }
}
