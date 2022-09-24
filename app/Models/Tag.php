<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = ['id'];

    public function words()
    {
        return $this->BelongsToMany(Word::class, 'tag_words', 'tag_id', 'word_id');
    }
}
