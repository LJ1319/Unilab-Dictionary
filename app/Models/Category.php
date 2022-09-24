<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = ['id'];

    public function words()
    {
        return $this->BelongsToMany(Word::class, 'categories_words', 'category_id', 'word_id');
    }
}
