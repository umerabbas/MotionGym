<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:50:57
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 20:25:59
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'purchase_price',
        'sale_price',
        'amount'
    ];

    public function detail()
    {
        return $this->hasOne('Detail');
    }

    public function product_category()
    {
        return $this->hasOne('Product_category');
    }
}