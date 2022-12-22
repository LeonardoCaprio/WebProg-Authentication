<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckUser extends Model
{
    use HasFactory;

    public $table = "check_users";

    public $fillable = [
        'user_id',
        'token'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
