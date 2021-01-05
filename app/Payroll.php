<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    public $fillable = [

        'id',
        'employee_id',
        'salary_arrears',
        'daily_rewards',
        'performance_bonus',
        'overtime',
        'team_leader',
        'training',
        // 'extra_bonus',
        'basic_salary',
        'gross_pay',
        'paye',
        'nhif',
        'nssf',
        'total_deductions',
        'net_amount',
        'salary_for',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
