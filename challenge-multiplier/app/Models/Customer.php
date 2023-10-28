<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fantasy_name',
        'cnpj',
        'street_name',
        'city',
        'state',
        'country',
        'phone',
        'email',
        'cnae',
        'corporate_structure'
    ];
}
