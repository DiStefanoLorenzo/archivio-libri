<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'pages',
        'author_id',
        'category_id',
    ];

    // Relazione con il modello Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relazione con il modello Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
