<?php

namespace Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{

    use TransformableTrait;
    use SoftDeletes;
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
    ];

}
