<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    public mixed $id;
    protected $table = 'contacts';

    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'genre',
        'note',
    ];

    protected array $dates = [
        'birthdate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'genre' => 'string',
    ];

    // Relationships
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function emails(): HasMany
    {
        return $this->hasMany(Email::class);
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
