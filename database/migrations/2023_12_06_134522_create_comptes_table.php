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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email')->unique();
            $table->foreignId('clients_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comptes', function (Blueprint $table) {
            $table->foreignId('clients_id');

        });
        Schema::dropIfExists('comptes');
    }
};
