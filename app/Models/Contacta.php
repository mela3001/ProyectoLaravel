<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Contacta extends Model
{
    use HasFactory;

    protected $table = "contacta";
    protected function name():Attribute
    {
        return new Attribute(
            //al mostrar pone primera en mayúscula y el resto en minúscula
            get: fn($value) => ucwords($value),
            //al guardarlo se guarda en minúscula todo
            set: fn($value) => strtolower($value)
            
        );
    }
}
