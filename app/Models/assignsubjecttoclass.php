<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignsubjecttoclass extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'subject_id',
        'status_id',
    ];

   public function class()
     {
    return $this->belongsTo(classes::class, 'class_id');
     }

   public function subject()
     {
    return $this->belongsTo(subject::class, 'subject_id');
     }

}
