<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_title',
        'book_author',
        'date_published'
    ];
}
