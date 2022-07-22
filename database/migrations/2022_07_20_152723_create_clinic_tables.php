<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('customer_name');
            $table->text('addressline');
            $table->text('phone');
            $table->text('img_path') -> default('default_customer.png');
            // $table->text('status') -> default('ACTIVE');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('pets', function ($table) {
            $table->increments('id');
            $table->text('pet_name');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->text('age');
            $table->text('img_path') -> default('default_pet.png');
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('employees', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('employee_name');
            $table->text('addressline');
            $table->text('phone');
            $table->text('img_path') -> default('default_employee.png');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('groom_services', function ($table) {
            $table->increments('id');
            $table->text('groom_name');
            $table->float('price');
            $table->text('description');
            $table->text('img_path') -> default('default_service.png');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('groom_services');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('pets');
    }
};
