<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_products_images extends Model
{
    use HasFactory;

    public function M_products() {
        return $this->hasOne('App\Models\M_products','product_id','id');
    }
}
