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
        Schema::create('courriers_entrants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_courrier_id');
            $table->unsignedBigInteger('service_traitant_id');
            $table->unsignedBigInteger('client_id');

            $table->string('agent')->nullable();
            $table->string('reference');
            $table->string('date_courrier');
            $table->string('date_arriver');
            $table->text('objet');
            $table->string('file');
            $table->string('action')->nullable();

            $table->foreign('type_courrier_id')->references('id')->on('type_courriers')->onDelete('cascade');
            $table->foreign('service_traitant_id')->references('id')->on('service_traitants')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courriers_entrants');
    }
};
