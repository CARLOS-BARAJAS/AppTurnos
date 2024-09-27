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
        Schema::create('shitfs', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('shitf',10);
            $table->string('place',30);
            $table->boolean('state',1);
            $table->unsignedBigInteger('client_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shitfs');
    }
};
