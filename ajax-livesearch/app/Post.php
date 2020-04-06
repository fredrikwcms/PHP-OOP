<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Searchable
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getSearchResult(): SearchResult {

        $url = route('post', $this->id);

        return new SearchResult(
            $this, 
            $this->title, 
            $url
        );
    }
}