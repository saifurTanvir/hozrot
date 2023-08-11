<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notices';
    protected $guarded = [];

    public function createdUser(){
        return $this->belongsTo(AdminUser::class, 'created_by', 'id');
    }

    public function updatedUser(){
        return $this->belongsTo(AdminUser::class, 'updated_by', 'id');
    }

    public function getCreatedAtAttribute($createdAt){
        return Carbon::parse($createdAt)->diffForHumans();
    }

    public function getUpdatedAtAttribute($updatedAt){
        return Carbon::parse($updatedAt)->diffForHumans();
    }

}
