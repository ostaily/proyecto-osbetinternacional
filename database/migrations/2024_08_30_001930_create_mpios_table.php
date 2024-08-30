<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mpios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->integer('estado');
            $table->integer('tmax');
            $table->char('danem', 4);

            //llave foranea con dptos
            $table->unsignedBigInteger('id_dpto');
            $table->foreign('id_dpto')->references('id')->on('dptos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpios');
    }
};
