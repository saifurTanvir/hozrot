<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategory';
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
