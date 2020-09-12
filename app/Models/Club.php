<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
    'company_name',
    're_office_address',
    'type',
    'vanue_address',
    'municiplitay_province',
    'municiplitay_province_room',
    'name_surname',
    'tel_number',
    'email',
    'vat',
    'unique_code',
    'number_of_table',
    'message'
   ];
}
