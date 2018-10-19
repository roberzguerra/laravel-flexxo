<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;
    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    public function getName()
    {
        return "{$this->id} - {$this->name}";
    }
}
