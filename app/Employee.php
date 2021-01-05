<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable = ['id','names', 'company', 'tag', 'identity', 'phone', 'email','job_title','bank_branch', 'account'];

    public function payrolls()
    {
        return $this->hasMany('App\Payroll');
    }
}
