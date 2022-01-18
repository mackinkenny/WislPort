<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Spatie\Translatable\HasTranslations;

class Question extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title'];

    public function block(){
        return $this->belongsTo(Block::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function reports(){
        return $this->belongsToMany(Report::class);
    }

    public function tips() {
        return $this->belongsToMany(Tip::class);
    }

    public function chapters() {
        return $this->belongsToMany(Chapter::class);
    }

    public function toArray()
    {
        $attributes = parent::toArray();
        foreach ($this->getTranslatableAttributes() as $field) {
            $attributes[$field] = $this->getTranslation($field, App::getLocale());
        }
        return $attributes;
    }
}
