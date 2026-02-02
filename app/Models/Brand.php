<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Brand extends Model
{
    protected $fillable = [
        'name',
        'description',
        'logo_url',
        'status',
        'created_by',
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
