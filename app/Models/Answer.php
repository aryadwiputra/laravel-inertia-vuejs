<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'exam_id',
        'exam_session_id',
        'question_id',
        'student_id',
        'question_order',
        'answer_order',
        'answer',
        'is_correct',
    ];
}