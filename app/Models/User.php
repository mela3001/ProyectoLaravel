<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";

    /* LA FORMA DE GUARDAR EL NOMBRE INTRODUCIDO AL REGISTRAR */
    protected function name():Attribute
    {
        return new Attribute(
            //al mostrar pone primera en mayúscula y el resto en minúscula
            get: fn($value) => ucwords($value),
            //al guardarlo se guarda en minúscula todo
            set: fn($value) => strtolower($value)
            
        );
    }

    protected function apellido():Attribute
    {
        return new Attribute(
            //al mostrar pone primera en mayúscula y el resto en minúscula
            get: fn($value) => ucwords($value),
            //al guardarlo se guarda en minúscula todo
            set: fn($value) => strtolower($value)
            
        );
    }



//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array<string, string>
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
 }
