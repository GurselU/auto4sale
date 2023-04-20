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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained()->onDelete('cascade');
            $table->integer('categorie_id')->default(2);
            $table->integer('chassi_id')->default(1);
            $table->string('emission_lass_id')->default(1);
            $table->string('gearbox_id')->default(1);
            $table->string('carOrigin_id')->default(1);
            $table->string('mark')->nullable();
            $table->string('model')->nullable();
            $table->date('registration')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('power')->nullable();
            $table->integer('engineSize')->nullable();
            $table->string('description', 5000)->nullable();
            $table->string('miniDescription')->nullable();
            $table->integer('maxPrice')->default(30000);
            $table->integer('oldPrice')->nullable();
            $table->integer('price')->nullable();
            $table->string('status')->default('available');
            $table->string('archived')->default('no');
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
        Schema::dropIfExists('cars');
    }
};
