<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
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

    protected $hidden = ['password'];

    protected $casts = [
        'birthdate' => 'date',
    ];

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
