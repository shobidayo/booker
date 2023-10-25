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
        Schema::create('plan_reservation', function (Blueprint $table) {
             $table->foreignId('reservation_id')->constrained();
             $table->foreignId('plan_id')->constrained();
             $table->primary(['plan_id', 'reservation_id']);
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
        Schema::dropIfExists('plan_reservation');
    }
};
