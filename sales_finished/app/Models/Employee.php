<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'birthDate',
        'city',
        'address',
        'photo',
        'userId'
    ];
    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

    use \Eloquence\Behaviours\CamelCasing;
}
