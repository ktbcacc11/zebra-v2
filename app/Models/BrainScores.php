<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrainScores extends Model
{
    use HasFactory;

    protected $table = 'brain_scores';
    protected $primaryKey = 'id';
}
