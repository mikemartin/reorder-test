<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class Book extends Model
{
    use HasRunwayResource;
    
    public function title(): Attribute
    {
        return Attribute::make(
            get: function () {
                return "Book {$this->id}";
            }
        );
    }
}
