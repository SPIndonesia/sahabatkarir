<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaket extends Model
{
    use HasFactory;

    protected $table = '$tb_user_paket';

    #add some relation from user and this table, then add some relation from paket and this table
}
