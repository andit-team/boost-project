<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Agent extends Model
{
    protected $fillable = ['company_name','type','municipality','province','name_surame','tel_number','email','coverage_area','agent_number','customer_package','message'];
}
