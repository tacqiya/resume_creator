<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeModel extends Model
{
    use HasFactory;
    public $table = 'resume';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'jobtitle',
        'phone',
        'country',
        'province',
        'zipcode',
        'experiences',
        'educations',
        'certifications',
        'skills',
        'career_objective',
        'references',
        'languages',
        'additional_info'
    ];
    protected $casts = [
        'experiences' => 'array',
        'educations' => 'array',
        'certifications' => 'array',
        'skills' => 'array',
        'references' => 'array',
        'languages' => 'array'
    ];
}
