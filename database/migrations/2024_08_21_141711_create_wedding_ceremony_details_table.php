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
        Schema::create('wedding_ceremony_details', function (Blueprint $table) {
            $table->id();
            $table->string('wedding_planning_id')->nullable();
            $table->string('sound')->nullable();
            $table->string('service')->nullable();
            $table->string('officiantname')->nullable();
            $table->string('officiantphone')->nullable();
            $table->string('processionalsong')->nullable();
            $table->string('processionalsong2')->nullable();
            $table->string('processionalsong3')->nullable();
            $table->string('recessionalsong')->nullable();
            $table->string('recessionalsong2')->nullable();
            $table->string('recessionalsong3')->nullable();
            $table->string('prelude')->nullable();
            $table->string('postlude')->nullable();
            $table->longtext('ceremony')->nullable();
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
        Schema::dropIfExists('wedding_ceremony_details');
    }
};
