<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table ='doctor';
    protected $primaryKey ='id_doctor'; 
    protected $fillable= [
        'nombre',
        'ap_pat',
        'ap_mat',
        'telefono',
        'email',
        'password'
    ];
}
