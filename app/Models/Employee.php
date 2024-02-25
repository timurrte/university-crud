<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employee";
    protected $primaryKey = "person_id";
    protected $fillable = ['person_id', 'name', 'phone', 'picture', 'speciality', 'post_id', 'comment'];
}
