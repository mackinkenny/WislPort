<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $fillable = [
        'email',
        'company_id',
        'invite_code',
        'isUser'
    ];

    protected $casts = [
        'content' => 'array',
    ];

    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
