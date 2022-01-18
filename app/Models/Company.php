<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'location',
        'status',
        'pay_date',
        'end_date'
    ];

    public function invites(){
        return $this->hasMany(Invite::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }
}
