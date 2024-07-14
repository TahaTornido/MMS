<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartPurchase extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['replacement_part_id', 'quantity', 'date', 'cost'];

    protected $searchableFields = ['*'];

    protected $table = 'part_purchases';

    protected $casts = [
        'date' => 'date',
    ];

    public function replacementPart()
    {
        return $this->belongsTo(ReplacementPart::class);
    }
}
