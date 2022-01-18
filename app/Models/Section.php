<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title'];

    public function blocks() {
        return $this->hasMany(Block::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
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
