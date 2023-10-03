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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('empid');
           $table->string('empfname');
           $table->string('emplname');
           $table->string('mobileno');
           $table->string('address');
           $table->string('province');
           $table->string('postalcode');
           $table->string('designation');
           $table->string('email');
           $table->string('password');
           $table->string('roles');
            $table->timestamps();

        });

        DB::table('employees')->insert(
        array(
            [
            'empid'=>'E0001',
            'empfname' => 'Ravneet',
            'emplname' => 'Kaur',
            'mobileno' =>'604-234-8889',
            'address' => 'Street No.10,Kitchener',
            'province' => 'Ontario',
            'postalcode' => 'N2G',
            'designation' => 'Web developer',
            'email' => 'rav@gmail.com',
            'password' => '1234',
            'roles' => 'Chef'


            ]
        ));


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
};
