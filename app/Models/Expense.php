<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = ['title', 'description', 'amount', 'date'];
}
