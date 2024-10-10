<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors'; // Specifica la tabella se il nome non segue la convenzione

    protected $fillable = [
        'fullname',
        'birth',
    ];

    // Relazione con il modello Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
