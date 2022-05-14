<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapsuleDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capsule_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_facture_id');
            $table->foreignId('capsule_id');
            $table->text('descriptif');
            $table->date('date_data');
            $table->binary('data');
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
        Schema::dropIfExists('capsule_data');
    }
}
