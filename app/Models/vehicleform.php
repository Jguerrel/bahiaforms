<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleform extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'modelo', 'motor','chasis', 'anio', 'version','colorexterior', 'colorinterior', 'formname', 'formrequest','formid','formaction'];

}
