<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('names')->nullable();
            $table->string('company')->nullable();
            $table->string('tag')->nullable();
            $table->integer('identity')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->unique();
            $table->string('job_title')->nullable();
            $table->string('bank_branch')->nullable();
            $table->BigInteger('account')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
