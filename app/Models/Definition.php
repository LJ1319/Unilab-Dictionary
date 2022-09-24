<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'definitions';
    protected $guarded = ['id'];

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
