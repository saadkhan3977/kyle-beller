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
        Schema::create('wedding_receptions', function (Blueprint $table) {
            $table->id();
            $table->string('wedding_planning_id')->nullable();
            $table->string('recstartingtime')->nullable();
            $table->string('recendingtime')->nullable();
            $table->string('introduction')->nullable();
            $table->string('couple')->nullable();
            $table->string('newintro')->nullable();
            $table->string('specialintro')->nullable();
            $table->string('toast')->nullable();
            $table->string('toastby')->nullable();
            $table->string('speakeradd')->nullable();
            $table->string('speakeradd2')->nullable();
            $table->string('blessing')->nullable();
            $table->string('blessingby')->nullable();
            $table->string('dinnerstyle')->nullable();
            $table->string('dinnerserved')->nullable();
            $table->string('style')->nullable();
            $table->string('bridegroomdance')->nullable();
            $table->string('birdegroomsong')->nullable();
            $table->string('bridefatherdance')->nullable();
            $table->string('birdefathersong')->nullable();
            $table->string('groommotherdance')->nullable();
            $table->string('birdemothersong')->nullable();
            $table->string('bridalpartdance')->nullable();
            $table->string('birdalparysong')->nullable();
            $table->string('cakecutting')->nullable();
            $table->string('cakesong')->nullable();
            $table->string('bonquettoss')->nullable();
            $table->string('banquetsong')->nullable();
            $table->string('gartertoss')->nullable();
            $table->string('songgarter')->nullable();
            $table->string('songgarterlad')->nullable();
            $table->string('lastdance')->nullable();
            $table->string('lastsong')->nullable();
            $table->string('specialityexit')->nullable();
            $table->string('specialexitdet')->nullable();
            $table->string('recdetails')->nullable();
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
        Schema::dropIfExists('wedding_receptions');
    }
};
