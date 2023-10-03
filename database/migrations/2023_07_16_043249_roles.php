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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->timestamps();
        });

        DB::table('roles')->insert(
        array(
            [
                'role'=>'Chef',
            ],
            [
              'role'=>'Cook'
            ],
            [
              'role'=>'Housekeeping Supervisor'
            ],
            [
              'role'=>'Supervisor'
            ],
            [
              'role'=>'Bar tender'
            ],
            [
              'role'=>'Waiter'
            ],
            [
              'role'=>'Receptionist'
            ],
            [
              'role'=>'Dishwasher'
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
        Schema::dropIfExists('table');
    }
};
