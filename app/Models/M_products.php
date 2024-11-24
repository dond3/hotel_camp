<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_products extends Model
{
    use HasFactory;

    public function M_products_view() {
        return $this->hasOne('App\Models\M_products_images','product_id','id');
    }
}
