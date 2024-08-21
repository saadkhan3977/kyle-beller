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
        Schema::create('wedding_bridal_party_introductions', function (Blueprint $table) {
            $table->id();
            $table->string('wedding_planning_id')->nullable();
            $table->string('parentsbride')->nullable();
            $table->string('parentsgroom')->nullable();
            $table->string('usher')->nullable();
            $table->string('bridesmaid')->nullable();
            $table->string('bridesmaid2')->nullable();
            $table->string('bridesmaid3')->nullable();
            $table->string('bridesmaid4')->nullable();
            $table->string('bridesmaid5')->nullable();
            $table->string('bridesmaid6')->nullable();
            $table->string('bridesmaid7')->nullable();
            $table->string('bridesmaid8')->nullable();
            $table->string('bridesmaid9')->nullable();
            $table->string('bridesmaid10')->nullable();
            $table->string('mainhonor')->nullable();
            $table->string('flowergirl')->nullable();
            $table->string('bridegroom')->nullable();
            $table->string('bridal_pary_specialintro')->nullable();
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
        Schema::dropIfExists('wedding_bridal_party_introductions');
    }
};
