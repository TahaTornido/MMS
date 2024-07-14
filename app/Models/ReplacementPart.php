<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReplacementPart extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'name_ar',
        'details',
        'quantity',
        'cost',
        'price',
        'part_category_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'replacement_parts';

    public function partCategory()
    {
        return $this->belongsTo(PartCategory::class);
    }

    public function partPurchases()
    {
        return $this->hasMany(PartPurchase::class);
    }

    public function partOptions()
    {
        return $this->hasMany(PartOption::class);
    }
}
