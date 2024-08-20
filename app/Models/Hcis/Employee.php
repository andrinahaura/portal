<?php

namespace App\Models\Hcis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $connection = 'pgsql_hcis';
    protected $table = 'portal_emp';
}
