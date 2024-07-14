<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deliverable extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'receipt_id',
        'warranty_time',
        'warranty_details',
        'date',
        'invoice_ammount',
        'discount_ammount',
        'total_ammount',
        'notes',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
