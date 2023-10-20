<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table ="contact"; 
    public  $primaryKey = "id";
    public  $timestamps = true;  
    protected $fillable = ['id', 'name_con','tele_con','address_con','car_con','date_con','decription_con'];
}
