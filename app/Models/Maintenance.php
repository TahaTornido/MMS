<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maintenance extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'malfunction_id',
        'technician_id',
        'technican_notes',
        'maint_date',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'maint_date' => 'date',
    ];

    public function malfunction()
    {
        return $this->belongsTo(Malfunction::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }
}
