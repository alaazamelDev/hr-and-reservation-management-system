<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $primaryKey = 'leave_id';
    protected $fillable = ['emp_id', 'uid', 'state', 'leave_time', 'leave_date', 'status', 'type'];
    protected $timestamps = true;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id', 'emp_id');
    }
}
