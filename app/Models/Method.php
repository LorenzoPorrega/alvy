<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bg_color',
        'text_color',
        'dark_bg_color',
        'dark_text_color'
    ];

    // One to Many relation: one Method has multiple Requests
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
