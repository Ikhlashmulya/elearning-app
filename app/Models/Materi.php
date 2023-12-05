<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $guarded = [];

    public function MataKuliah(): BelongsTo {
        return $this->belongsTo(MataKuliah::class);
    }
}
