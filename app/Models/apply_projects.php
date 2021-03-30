<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apply_projects extends Model
{
    use HasFactory;



    protected $fillable = [
        'free_id',
        'project_id',
        'resume_path',
        'ctext',
        'price',
        'status',
    ];


   
    protected $table = 'apply_projects';
    public $timestamps = true;
}
