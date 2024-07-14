<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodecure extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['procedure', 'details'];

    protected $searchableFields = ['*'];

    public function malfunctions()
    {
        return $this->hasMany(Malfunction::class);
    }
}
