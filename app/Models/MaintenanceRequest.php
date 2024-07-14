<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaintenanceRequest extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'customer_id',
        'reason',
        'device_company',
        'device_mark',
        'device_model',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'maintenance_requests';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function receipt()
    {
        return $this->hasOne(Receipt::class);
    }
}
