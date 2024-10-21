<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashsale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'original_price',
        'discount_price',
        'discount_percentage',
        'start_time',
        'end_time',
        'stock',
        'status',
        'image'        
    ];

    public function getDiscountPercentageAttribute() {
        if ($this->original_price > 0) {
            return (($this->original_price - $this->discount_price) / $this->original_price) * 100;
        }
        return 0;
    }
    
}
