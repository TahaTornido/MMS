<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'name_ar', 'details'];

    protected $searchableFields = ['*'];

    protected $table = 'part_categories';

    public function replacementParts()
    {
        return $this->hasMany(ReplacementPart::class);
    }

    public function requiredParts()
    {
        return $this->hasMany(RequiredPart::class);
    }
}
