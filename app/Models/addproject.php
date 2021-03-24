<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproject extends Model
{

    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pname',
        'pcat',
        'dis',
        'price',
        'status',
        'emp_id',
    ];


   
    protected $table = 'projects';
    public $timestamps = false;
}
