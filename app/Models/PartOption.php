<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartOption extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'required_part_id',
        'replacement_part_id',
        'details',
        'choosen',
        'warranty_time',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'part_options';

    protected $casts = [
        'choosen' => 'boolean',
    ];

    public function requiredPart()
    {
        return $this->belongsTo(RequiredPart::class);
    }

    public function replacementPart()
    {
        return $this->belongsTo(ReplacementPart::class);
    }
}
