<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Spatie\Translatable\HasTranslations;

class Answer extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title'];

    public function Question() {
        return $this->belongsTo(Question::class);
    }
    public function reports() {
        return $this->belongsToMany(Report::class);
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
