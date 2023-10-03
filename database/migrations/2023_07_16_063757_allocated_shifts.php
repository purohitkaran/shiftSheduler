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
        Schema::create('allocated_shifts', function (Blueprint $table) {
            $table->id();
            $table->date('shiftdate');
            $table->string('shift');
            $table->string('empid');
            $table->string('empname');
            $table->string('role');
            $table->timestamps();
        });

        DB::table('allocated_shifts')->insert(
        array(
            [
                'shiftdate'=>'2023-07-28',
                'shift'=>"09:00am - 05:00pm",
                'empid'=>'E001',
                'empname'=>'Ravneet Kaur',
                'role'=>'Chef'
            ],
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
