<?php

namespace App\Imports;

use App\Payroll;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class PayrollsImport implements ToModel, WithStartRow, WithValidation, WithCalculatedFormulas
{
    protected $payroll_date = null;

    public function __construct($value)
    {
        $this->payroll_date = $value;
    }

    public function rules(): array
    {
        return [
            '0' => Rule::exists('employees', 'id'),
        ];
    }

    public function customValidationMessages()
    {
        return [
            '0.exists' => 'There exists an employee in the Payroll who has not been registered in the system.\n<br />
             Consider registering him/ and then re upload the file. .\n<br />
             Typical Kenyans dont follow instructions. ',
        ];
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $salary_date = $this->payroll_date;

        return new Payroll([
            'employee_id' => $row[0],
            'salary_for' => $salary_date,
            'salary_arrears' => $row[1],
            'daily_rewards' => $row[2],
            'performance_bonus' => $row[3],
            'overtime' => $row[4],
            'team_leader' => $row[5],
            // 'extra_tole' => $row[6],
            'training' => $row[6],
            // 'extra_bonus' => $row[7],
            'basic_salary' => $row[7],
            'gross_pay' => $row[8],
            'paye' => $row[9],
            'nhif' => $row[10],
            'nssf' => $row[11],
            'total_deductions' => $row[12],
            'net_amount' => $row[13],
        ]);
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
}
