<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $primaryKey = 'perm_id';
    protected $fillable = ['name', 'description'];
    protected $timestamps = true;

    public function staffings(){
        return $this->belongsToMany(Staffing::class,'staff_permissions','perm_id','staff_id',
            'perm_id','staff_id');
    }

    public function jobTitles(){
        return $this->belongsToMany(JobTitle::class,'job_title_permissions','perm_id','job_title_id',
            'perm_id','job_title_id');
    }
}
