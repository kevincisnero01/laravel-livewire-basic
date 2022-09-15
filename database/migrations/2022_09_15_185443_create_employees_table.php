<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('code',50);
            $table->float('salary',8,2);
            $table->string('address');
            $table->string('phone_number',20)->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('employee_status_id')->nullable();
            $table->timestamps();

            $table->foreign('employee_status_id')->references('id')->on('employee_statuses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
