<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequiredPart extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['part_category_id', 'malfunction_id', 'details'];

    protected $searchableFields = ['*'];

    protected $table = 'required_parts';

    public function partCategory()
    {
        return $this->belongsTo(PartCategory::class);
    }

    public function malfunction()
    {
        return $this->belongsTo(Malfunction::class);
    }

    public function partOptions()
    {
        return $this->hasMany(PartOption::class);
    }
}
