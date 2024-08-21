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
        Schema::create('wedding_cocktail_hour_highlights', function (Blueprint $table) {
            $table->id();
            $table->string('wedding_planning_id')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
            $table->string('coctail')->nullable();
            $table->string('power')->nullable();
            $table->string('coctailmusic')->nullable();
            $table->string('coctailstyle')->nullable();
            $table->string('cocktaildetails')->nullable();
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
        Schema::dropIfExists('wedding_cocktail_hour_highlights');
    }
};
