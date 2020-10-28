<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable=['prezzo','località','hotel','img','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}