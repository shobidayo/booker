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
        Schema::create('hotels', function (Blueprint $table) {
             $table->id();
             $table->string('name',30);
             $table->string('description',255);
             $table->string('room_type',255);
             $table->string('event',255);
             $table->string('information',255);
             $table->string('FAQ',255);
             $table->timestamps();
             $table->softDeletes();
                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
