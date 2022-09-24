<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Word extends Model
{
    use HasFactory;
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    public const PAGINATE = 5;

    protected $table = 'words';
    protected $guarded = ['id'];

    /**
     * When the word is deleted, the photo is also deleted from the folder
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            Storage::disk('public')->delete($obj->image);
        });
    }

    public function categories()
    {
        return $this->BelongsToMany(Category::class, 'categories_words', 'word_id', 'category_id');
    }

    public function tags()
    {
        return $this->BelongsToMany(Tag::class, 'tag_words', 'word_id', 'tag_id');
    }

    public function definitions()
    {
        return $this->hasMany(Definition::class);
    }

    /**
     * @see https://backpackforlaravel.com/docs/5.x/crud-fields#upload-1
     *
     * @param $value
     * @return void
     */
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "thumbnails";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$destination_path}]; // uncomment if this is a translatable field
    }
}
