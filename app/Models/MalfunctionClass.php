<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MalfunctionClass extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'name_ar', 'details'];

    protected $searchableFields = ['*'];

    protected $table = 'malfunction_classes';

    public function malfunctions()
    {
        return $this->hasMany(Malfunction::class);
    }
}
