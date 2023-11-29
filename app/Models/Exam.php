<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Exam extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'class',
        'exam'
    ];
    protected $table="exams";
}