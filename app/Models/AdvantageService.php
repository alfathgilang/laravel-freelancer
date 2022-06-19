<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class AdvantageService extends Model
{
    //use HasFactory;
    use softDeletes;

    public $table = 'advantage_service';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'advantage',
        'updated_at',
        'created_at',
        'deleted_at',
    ];


    // belongs to dari service(one to many)
    public function service()
    {
        return $this->belongsTo('App/Models/Service', 'service_id', 'id');
    }
}
