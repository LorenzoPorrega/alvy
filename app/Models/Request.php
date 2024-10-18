<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'method_id',  // Changed from 'method' to 'method_id'
        'url',
        'query_params',
        'headers',
        'body',
        'list_id'
    ];

    // Many-to-one relationship: a Request belongs to a Method
    public function method()
    {
        return $this->belongsTo(Method::class);
    }

    // Optional many-to-one relationship: a Request may belong to a List
    public function list()
    {
        return $this->belongsTo(RequestList::class);
    }
}
