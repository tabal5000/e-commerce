<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable =
        ['title','description','price','stock','img_url'
    ];

    public function inStock() {
      return true;
    }
}
