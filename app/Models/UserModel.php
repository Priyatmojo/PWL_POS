<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';            //Mendefiniskan nama table yang digunakan oleh model ini
    protected $primaryKey = 'user_id';      //Mendefinisikan primary key dari table yang digunakan

    /**
     * The attributes are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama'];
}
