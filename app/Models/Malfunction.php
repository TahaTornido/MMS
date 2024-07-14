<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Malfunction extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'malfunction_class_id',
        'diagnosis_id',
        'details',
        'date',
        'wages',
        'prodecure_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function malfunctionClass()
    {
        return $this->belongsTo(MalfunctionClass::class);
    }

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }

    public function requiredParts()
    {
        return $this->hasMany(RequiredPart::class);
    }

    public function prodecure()
    {
        return $this->belongsTo(Prodecure::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
