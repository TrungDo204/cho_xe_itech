<?php   //app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table ="product"; 
    public  $primaryKey = "id";
    public  $timestamps = true;  
    protected $fillable = ['id', 'name_pro','price_pro','decription_pro','company','type_pro','year_created','traveled','fuel','image'];
}
