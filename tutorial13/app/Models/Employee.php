<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'usertype',
        'name',
        'E-mail',
        'Password ',
        'Mobile',
        'Whatsapp',
        'Enrollment',
        'Branch',
        'P_mobile',
        'Room_no.',
        'Status',
    ];
}
