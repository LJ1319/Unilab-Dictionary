<?php

namespace App\Services;

use App\Models\Word;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FilteringService
{
    public $word;
    public $category;
    public $letter;
    public $sortBy;

    public function __construct($query)
    {
        if ($this->validate($query)) {
            $this->word = $query["word"] ?? null;
            $this->category = $query["category"] ?? null;
            $this->letter = $query["letter"] ?? null;
            $this->sortBy = $query["sortBy"] ?? null;
        }
    }

    public function validate($query)
    {
        $validator = Validator::make($query, [
            "word" => "nullable|string",
            "category" => "nullable|numeric",
            "sortBy" => [
                "nullable",
                Rule::in(["azASC", "azDESC", "popularity", "dateASC", "dateDESC"])
            ],
            "letter" => "nullable|string",
        ]);

        if ($validator->fails()) {
            return false;
        }

        return true;
    }

    public function filter()
    {
        $data = Word::query();

        if ($this->word) {
            $data = $data->where("word", "like", "%" . $this->word . "%");
        }

        if ($this->category) {
            $category = $this->category;
            $data = $data->whereHas("categories", function ($query) use ($category) {
                $query->where("id", $category);
            });
        }

        if ($this->letter) {
            $data = $data->where("word", "like", $this->letter . "%");
        }

        if ($this->sortBy === "azASC") {
            $data = $data->orderBy("word", "ASC");
        }

        if ($this->sortBy === "azDESC") {
            $data = $data->orderBy("word", "DESC");
        }

        if ($this->sortBy === "dateASC") {
            $data = $data->orderBy("created_at", "ASC");
        }

        if ($this->sortBy === "dateDESC") {
            $data = $data->orderBy("created_at", "DESC");
        }

        if (count($data->get())) {
            return $data->paginate(Word::PAGINATE)->withQueryString();
        }

        return [];
    }
}
