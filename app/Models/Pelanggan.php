<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD

class Pelanggan extends Model
{
    protected $table        ='pelanggan';
    protected $primaryKey   ='pelanggan_id';
    protected $fillable     =[
=======
class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
>>>>>>> febebc3eec5116bead928ac63d6d352fab8ccdf4
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
