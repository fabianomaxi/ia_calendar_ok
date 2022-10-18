<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_patient';

    public $timestamps = false ;
    protected $table = 'patient';

    protected $fillable = ['id_patient','name','email','phone_number','gender','cell_phone','cep','birthdate','city','state','district','street','country','dt_registration','user_registration', 'id_company'];

}