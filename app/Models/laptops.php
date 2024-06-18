<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class laptops extends Model
{

    use SoftDeletes;
    protected $table = 'laptops';
    protected $fillable = [
        'id',
        'name',
        'brand',
        'model',
        'price',
        'processor',
        'ram',
        'operating_system',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
];

public function data_adder() {
return $this->belongsTo (User::class, 'created_at', 'id');
}

}