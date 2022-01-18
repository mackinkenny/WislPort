<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $casts = [
        'questions' => 'array',
        'scores' => 'array',
        'points' => 'array'
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function block() {
        return $this->belongsTo(Block::class);
    }

    public function question() {
        return $this->hasOne(Question::class);
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function answer() {
        return $this->hasOne(Answer::class);
    }

    public function formula(){
        $ids = collect();
        $trust = collect();
        $impartiality = collect();
        $protection = collect();
        foreach ($this->questions as $question){
            if ($question['answer'] != null){
                $ids->push($question['answer']);
                $quest = Question::find($question['question']);
                foreach ($quest->tips as $tip) {

                    if ($tip->flag == 1)
                    {
                        if (json_decode($tip->attributes['title'])->en === 'Trust') {
                            $trust->push($question['answer']);
                        } elseif (json_decode($tip->attributes['title'])->en === 'Impartiality') {
                            $impartiality->push($question['answer']);
                        } elseif (json_decode($tip->attributes['title'])->en === 'Protection') {
                            $protection->push($question['answer']);
                        }
                    }
                }
            }
        }
        $answers = Answer::find($ids);
        $trust_answers = Answer::find($trust);
        $impartiality_answers = Answer::find($impartiality);
        $protection_answers = Answer::find($protection);
        $score = 0;
        $count = 0;
        foreach ($answers as $answer){
            if ($answer->score != 'N/A'){
                $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
        $scores = $this->scores;
        $points = $this->points;
        $scores['main']['scores'] = $score != 0 ? (($score / ((count($answers) - $count) * 5)) * 100): null;
        $points['main']['scores']['actual'] = $score;
        $points['main']['scores']['total'] = (count($answers) - $count) * 5;
        $this->points = $points;
        $this->scores = $scores;

        $score = 0;
        $count = 0;
        foreach ($trust_answers as $answer) {
            if ($answer->score != 'N/A'){
                $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
            $scores = $this->scores;
        $points = $this->points;
            $scores['main']['trust'] = $score != 0 ? (($score / ((count($trust_answers) - $count) * 5)) * 100): null;
        $points['main']['trust']['actual'] = $score;
        $points['main']['trust']['total'] = (count($trust_answers) - $count) * 5;
            $this->scores = $scores;
        $this->points = $points;
        $score = 0;
        $count = 0;
        foreach ($impartiality_answers as $answer) {
            if ($answer->score != 'N/A'){
                $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
            $scores = $this->scores;
            $points = $this->points;
            $scores['main']['impartiality'] = $score != 0 ? (($score / ((count($impartiality_answers) - $count) * 5)) * 100):null;
            $points['main']['impartiality']['actual'] = $score;
            $points['main']['impartiality']['total'] = (count($impartiality_answers) - $count) * 5;
            $this->scores = $scores;
        $this->points = $points;
        $score = 0;
        $count = 0;
        foreach ($protection_answers as $answer) {
            if ($answer->score != 'N/A'){
                $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
//        dd(count($protection_answers), $count);
            $scores = $this->scores;
            $points = $this->points;
            $scores['main']['protection'] = $score != 0 ? (($score / ((count($protection_answers) - $count)  * 5)) * 100): null;
            $points['main']['protection']['actual'] = $score;
            $points['main']['protection']['total'] = (count($protection_answers) - $count) * 5;
            $this->scores = $scores;
            $this->points = $points;
        $this->save();
        $this->chapter($oc = 'oc',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'ls',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'pl',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'sp',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'op',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'pe',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->chapter($oc = 'ci',$answers, $trust_answers, $impartiality_answers, $protection_answers);
        $this->save();
    }


    public function chapter($oc, $answers, $trust_answers, $impartiality_answers, $protection_answers){
        $chapter = ['scores' => null, 'trust' => null, 'impartiality' => null, 'protection' => null];
        $point = ['scores' => ['total' => 0, 'actual' => 0], 'trust' => ['total' => 0, 'actual' => 0], 'impartiality' => ['total' => 0, 'actual' => 0], 'protection' => ['total' => 0, 'actual' => 0]];
        $scores = collect($this->scores);
        $scores[$oc] = $chapter;
        $points = array($this->points);
        $points[$oc] = $point;

        $score = 0;
        $count = 0;
        foreach ($answers as $answer){
            if ($answer->score != 'N/A' && $answer->question->chapters->where('short', $oc)->first() && $answer->question->chapters->where('short', $oc)->first()->flag != '0'){
                    $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
//        dd($points);/
        $scores = $this->scores;
        $points = $this->points;
        $scores[$oc]['scores'] = $score != 0 ?(($score / ((count($answers) - $count) * 5)) * 100): null;
        $points[$oc]['scores']['actual'] = $score;
        $points[$oc]['scores']['total'] = (count($answers) - $count) * 5;

        $this->scores = $scores;
        $this->points = $points;
        $score = 0;
        $count = 0;
        foreach ($trust_answers as $answer){
            if ($answer->score != 'N/A' && $answer->question->chapters->where('short', $oc)->first() && $answer->question->chapters->where('short', $oc)->first()->flag != '0'){
                    $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
        $scores = $this->scores;
        $scores[$oc]['trust'] = $score != 0 ?(($score / ((count($trust_answers) - $count) * 5)) * 100): null;
        $points[$oc]['trust']['actual'] = $score;
        $points[$oc]['trust']['total'] = (count($trust_answers) - $count) * 5;
        $this->scores = $scores;
        $this->points = $points;
//        if ($oc == 'ls'){
//            dd($trust_answers);
//        }
        $score = 0;
        $count = 0;
        foreach ($impartiality_answers as $answer){
            if ($answer->score != 'N/A' && $answer->question->chapters->where('short', $oc)->first() && $answer->question->chapters->where('short', $oc)->first()->flag != '0'){
                    $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
        $scores = $this->scores;
        $points = $this->points;
        $scores[$oc]['impartiality'] = $score != 0 ?(($score / ((count($impartiality_answers) - $count) * 5)) * 100):null;
        $points[$oc]['impartiality']['actual'] = $score;
        $points[$oc]['impartiality']['total'] = (count($impartiality_answers) - $count) * 5;
        $this->scores = $scores;
        $this->points = $points;

        $score = 0;
        $count = 0;
        foreach ($protection_answers as $answer){
            if ($answer->score != 'N/A' && $answer->question->chapters->where('short', $oc)->first() && $answer->question->chapters->where('short', $oc)->first()->flag != '0'){
                    $score = $score + $answer->score;
            }
            else{
                $count = $count + 1;
            }
        }
        $scores = $this->scores;
        $points = $this->points;
        $scores[$oc]['protection'] = $score != 0 ?(($score / ((count($protection_answers) - $count) * 5)) * 100):null;
        $points[$oc]['protection']['actual'] = $score;
        $points[$oc]['protection']['total'] = (count($protection_answers) - $count) * 5;
        $this->scores = $scores;
        $this->points = $points;

    }



    static function overall($id, $version = null){
        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }
        $reports = $reportQuery->where('company_id',$id)->get();
        $sections = Section::all();
        $overalls = array();
        $numbs = array();
        foreach ($sections as $section){
            $overalls[$section->title] = ['score' => ['total'=>0,'actual' =>0], 'trust' => ['total'=>0,'actual' =>0], 'impartiality' => ['total'=>0,'actual' =>0], 'protection' => ['total'=>0,'actual' =>0]];
        }
        foreach ($reports as $report){
            foreach ($overalls as $key => $overall){
                if ($key == $report->section->title) {
                    if ($report->points['main']['scores']['total']){
                        $overalls[$key]['score']['total'] = $overalls[$key]['score']['total'] + $report->points['main']['scores']['total'];
                        $overalls[$key]['score']['actual'] = $overalls[$key]['score']['actual'] + $report->points['main']['scores']['actual'];
                    }
                    if ($report->points['main']['trust']['total']){
                        $overalls[$key]['trust']['total'] = $overalls[$key]['trust']['total'] + $report->points['main']['trust']['total'];
                        $overalls[$key]['trust']['actual'] = $overalls[$key]['trust']['actual'] + $report->points['main']['trust']['actual'];
                    }
                    if ($report->points['main']['impartiality']['total']){
                        $overalls[$key]['impartiality']['total'] = $overalls[$key]['impartiality']['total'] + $report->points['main']['impartiality']['total'];
                        $overalls[$key]['impartiality']['actual'] = $overalls[$key]['impartiality']['actual'] + $report->points['main']['impartiality']['actual'];
                    }
                    if ($report->points['main']['protection']['total']){
                        $overalls[$key]['protection']['total'] = $overalls[$key]['protection']['total'] + $report->points['main']['protection']['total'];
                        $overalls[$key]['protection']['actual'] = $overalls[$key]['protection']['actual'] + $report->points['main']['protection']['actual'];
                    }
                }
            }
        }
        foreach ($sections as $section){
            if ($overalls[$section->title]['score']['total']) {
                $overalls[$section->title]['score'] = $overalls[$section->title]['score']['actual'] / $overalls[$section->title]['score']['total'] * 100;
            }
            else if($overalls[$section->title]['score']['total'] == 0){
                $overalls[$section->title]['score'] = 0;
            }
            if ($overalls[$section->title]['trust']['total']) {
                $overalls[$section->title]['trust'] = $overalls[$section->title]['trust']['actual'] / $overalls[$section->title]['trust']['total'] * 100;
            }
            else if($overalls[$section->title]['trust']['total'] == 0){
                $overalls[$section->title]['trust'] = 0;
            }
            if ($overalls[$section->title]['impartiality']['total']) {
                $overalls[$section->title]['impartiality'] = $overalls[$section->title]['impartiality']['actual'] / $overalls[$section->title]['impartiality']['total'] * 100;
            }
            else if($overalls[$section->title]['impartiality']['total'] == 0){
                $overalls[$section->title]['impartiality'] = 0;
            }
            if ($overalls[$section->title]['protection']['total']) {
                $overalls[$section->title]['protection'] = $overalls[$section->title]['protection']['actual'] / $overalls[$section->title]['protection']['total'] * 100;
            }
            else if($overalls[$section->title]['protection']['total'] == 0){
                $overalls[$section->title]['protection'] = 0;
            }
        }

        return $overalls;
    }


    static function overall_chapters($id, $version = null){
        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }
        $reports = $reportQuery->where('company_id',$id)->get();
        $chapters = Chapter::where('flag',1)->get();
        $overalls = array();
        $numbs = array();
        foreach ($chapters as $chapter){
            $overalls[$chapter->short] = ['score' => ['total'=>0,'actual' =>0], 'trust' => ['total'=>0,'actual' =>0], 'impartiality' => ['total'=>0,'actual' =>0], 'protection' => ['total'=>0,'actual' =>0]];
        }
        foreach ($reports as $report){
            if ($report->scores['main']['scores'] != null){
            foreach ($overalls as $key => $overall){
                    if ($report->points[$key]['scores']['total']){
                        $overalls[$key]['score']['total'] = $overalls[$key]['score']['total'] + $report->points[$key]['scores']['total'];
                        $overalls[$key]['score']['actual'] = $overalls[$key]['score']['actual'] + $report->points[$key]['scores']['actual'];
                    }
                    if ($report->points[$key]['trust']['total']){
                        $overalls[$key]['trust']['total'] = $overalls[$key]['trust']['total'] + $report->points[$key]['trust']['total'];
                        $overalls[$key]['trust']['actual'] = $overalls[$key]['trust']['actual'] + $report->points[$key]['trust']['actual'];
                    }
                    if ($report->points[$key]['impartiality']['total']){
                        $overalls[$key]['impartiality']['total'] = $overalls[$key]['impartiality']['total'] + $report->points[$key]['impartiality']['total'];
                        $overalls[$key]['impartiality']['actual'] = $overalls[$key]['impartiality']['actual'] + $report->points[$key]['impartiality']['actual'];
                    }
                    if ($report->points[$key]['protection']['total']){
                        $overalls[$key]['protection']['total'] = $overalls[$key]['protection']['total'] + $report->points[$key]['protection']['total'];
                        $overalls[$key]['protection']['actual'] = $overalls[$key]['protection']['actual'] + $report->points[$key]['protection']['actual'];
                    }
            }
            }
        }

        foreach ($chapters as $chapter){
            if ($overalls[$chapter->short]['score']['total']) {
                $overalls[$chapter->short]['score'] = $overalls[$chapter->short]['score']['actual'] / $overalls[$chapter->short]['score']['total'] * 100;
            }
            else if($overalls[$chapter->short]['score']['total'] == 0){
                $overalls[$chapter->short]['score'] = 0;
            }
            if ($overalls[$chapter->short]['trust']['total']) {
                $overalls[$chapter->short]['trust'] = $overalls[$chapter->short]['trust']['actual'] / $overalls[$chapter->short]['trust']['total'] * 100;
            }
            else if($overalls[$chapter->short]['trust']['total'] == 0){
                $overalls[$chapter->short]['trust'] = 0;
            }
            if ($overalls[$chapter->short]['impartiality']['total']) {
                $overalls[$chapter->short]['impartiality'] = $overalls[$chapter->short]['impartiality']['actual'] / $overalls[$chapter->short]['impartiality']['total'] * 100;
            }
            else if($overalls[$chapter->short]['impartiality']['total'] == 0){
                $overalls[$chapter->short]['impartiality'] = 0;
            }
            if ($overalls[$chapter->short]['protection']['total']) {
                $overalls[$chapter->short]['protection'] = $overalls[$chapter->short]['protection']['actual'] / $overalls[$chapter->short]['protection']['total'] * 100;
            }
            else if($overalls[$chapter->short]['protection']['total'] == 0){
                $overalls[$chapter->short]['protection'] = 0;
            }
        }

        return $overalls;
    }
}
