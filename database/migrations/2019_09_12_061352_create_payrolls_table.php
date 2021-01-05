<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')
                ->references('id')->on('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('salary_for')->index();
            $table->double('salary_arrears', 12, 2)->nullable();
            $table->double('daily_rewards', 12, 2)->nullable();
            $table->double('performance_bonus', 12, 2)->nullable();
            $table->double('overtime', 12, 2)->nullable();
            $table->double('team_leader', 12, 2)->nullable();
            $table->double('extra_tole', 12, 2)->nullable();
            $table->double('training', 12, 2)->nullable();

            $table->double('extra_bonus', 12, 2)->nullable();
            $table->double('year_bonus', 12, 2)->nullable();
            $table->double('basic_salary', 12, 2)->nullable();
            $table->double('gross_pay', 12, 2);
            $table->double('paye', 12, 2)->nullable();
            $table->double('nhif', 12, 2)->nullable();
            $table->double('nssf', 12, 2)->nullable();
            $table->double('total_deductions', 12, 2)->nullable();
            $table->double('net_amount', 12, 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
