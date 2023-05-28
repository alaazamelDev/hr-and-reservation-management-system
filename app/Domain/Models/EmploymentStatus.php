<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmploymentStatus extends Model
{
    use HasFactory;
    protected $primaryKey = 'emp_status_id';
    protected $fillable = ['name', 'description'];


    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_statuses', 'emp_status_id', 'emp_id',
            'emp_status_id','emp_id')
            ->withPivot('start_date', 'end_date');
    }


}
