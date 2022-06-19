<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Service extends Model
{
     //use HasFactory;
     use softDeletes;

     public $table = 'service';
 
     protected $dates = [
         'updated_at',
         'created_at',
         'deleted_at',
     ];
 
     protected $fillable = [
         'users_id',
         'title',
         'description',
         'delivery_time',
         'revision_limit',
         'price',
         'note',
         'updated_at',
         'created_at',
         'deleted_at',
     ];


     // belongs to dari users (one to many)
     public function user()
     {
        return $this->belongsTo('App/Models/User', 'users_id', 'id');
     }

     // one to many
     public function order()
     {
        return $this->hasMany('App\Models\Order', 'service_id');
     }

     // one to many
     public function advantage_user()
     {
        return $this->hasMany('App\Models\AdavantageUser', 'service_id');
     }

     // one to many
     public function tagline()
     {
        return $this->hasMany('App\Models\Tagline', 'service_id');
     }

     // one to many
     public function advantage_service()
     {
        return $this->hasMany('App\Models\AdvantageService', 'service_id');
     }

     //one to many
     public function thumbnail_service()
     {
        return $this->hasMany('App\Models\ThumbnailService', 'service_id');
     }
}
