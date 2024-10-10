<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestList extends Model
{
    use HasFactory;

    protected $table = 'requests_lists';
    protected $fillable = ['name', 'description'];

    // One to Many relation: one List can have multiple Requests
    public function requests()
    {
        return $this->hasMany(Request::class, 'requests_list_id');
    }
}
