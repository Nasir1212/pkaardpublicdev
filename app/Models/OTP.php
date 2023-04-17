<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model
{
    use HasFactory;
    public $table='otp_expired';
    public $incrementing = true;
    public $keyType = 'int';
    public $primaryKey = 'id';
    public $timestamps = false;
}
