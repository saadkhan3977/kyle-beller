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
        Schema::create('wedding_planning_questionnaires', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('bride')->nullable();
            $table->string('groom')->nullable();
            $table->string('phone')->nullable();
            $table->string('altphone')->nullable();
            $table->string('timecall')->nullable();
            $table->string('email')->nullable();
            $table->string('wed_date')->nullable();
            $table->string('venue_rec')->nullable();
            $table->string('banq_ven')->nullable();
            $table->string('numberguest')->nullable();
            $table->string('contact_persom')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('ven_contact')->nullable();
            $table->string('ven_cont_person')->nullable();
            $table->string('guest_arrival')->nullable();
            $table->string('wed_party')->nullable();
            $table->string('photographer')->nullable();
            $table->string('videographer')->nullable();
            $table->string('setting')->nullable();
            $table->string('elevator')->nullable();
            $table->string('songsnot')->nullable();
            $table->string('songtobe')->nullable();
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
        Schema::dropIfExists('wedding_planning_questionnaires');
    }
};
