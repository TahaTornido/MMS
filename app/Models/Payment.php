<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['deliverable_id', 'ammount', 'date', 'notes'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function deliverable()
    {
        return $this->belongsTo(Deliverable::class);
    }
}
