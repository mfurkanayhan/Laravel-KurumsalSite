<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'rate',
        'contents_id',
        'userid',
        'ip',
        'status',
        'timestamps',
        'relation_id'
    ];
    public function contents()
    {
        return $this->belongsTo(Contents::class);
    }
    public function use()
    {
        return $this->hasMany(Contents::class);
    }
}
