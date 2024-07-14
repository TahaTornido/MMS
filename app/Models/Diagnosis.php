<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosis extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'receipt_id',
        'status',
        'transfer_date',
        'technician_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'transfer_date' => 'date',
    ];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function malfunctions()
    {
        return $this->hasMany(Malfunction::class);
    }
}
