<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalog_id',
        'brand_id',
        'content',
        'desc',
        'name',
        'price',
        'status',
        'image'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
