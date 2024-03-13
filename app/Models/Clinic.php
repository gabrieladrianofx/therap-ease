<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'CNPJ',
        'name_clinic',
        'email',
        'street_address',
        'city',
        'zip_code',
        'uf',
        'ddd'
    ];
}
