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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->date('event_date')->nullable(); // Change to date data type
            $table->decimal('price', 10, 2)->nullable(); // Assuming price is a decimal value, adjust precision and scale as needed
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('venue')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('no_of_guest')->nullable();
            $table->string('microphone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('speaker_name')->nullable();
            $table->string('speach_time')->nullable();
            $table->longtext('music_style')->nullable();
            $table->longtext('song_requests')->nullable();
            $table->longtext('additional_details')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('events');
    }
};
