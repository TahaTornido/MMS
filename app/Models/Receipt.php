<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipt extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'maintenance_request_id',
        'device_company',
        'device_mark',
        'device_model',
        'details',
        'is_boxed',
        'broken',
        'imei1',
        'imei2',
        'receipt_date',
        'type_receipt',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'is_boxed' => 'boolean',
        'broken' => 'boolean',
        'receipt_date' => 'date',
    ];

    public function maintenanceRequest()
    {
        return $this->belongsTo(MaintenanceRequest::class);
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }

    public function deliverable()
    {
        return $this->hasOne(Deliverable::class);
    }
}
