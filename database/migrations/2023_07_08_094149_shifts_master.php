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
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('shiftfrom');
            $table->string('shiftto');
            $table->timestamps();
        });

        DB::table('shifts')->insert(
        array(
            [
            'day'=>'Mon',
            'shiftfrom' => '09AM',
            'shiftto' => '05PM'
            ],
             [
            'day'=>'Mon',
            'shiftfrom' => '11AM',
            'shiftto' => '07PM'
            ],
             [
            'day'=>'Mon',
            'shiftfrom' => '1PM',
            'shiftto' => '11PM'
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
        Schema::dropIfExists('shifts');
    }
};
