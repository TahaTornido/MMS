<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerService extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'email',
        'password',
        'phone',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'customer_services';

    protected $hidden = ['password'];

    protected $casts = [
        'birthdate' => 'date',
    ];
}
