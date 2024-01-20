<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // ! kolom yang boleh diisi
    protected $fillable=['title', 'description'];
    // ! disabled inserting timestamp to database karena default nya updated_at nya itu true
    public $timestamps = false;
}
