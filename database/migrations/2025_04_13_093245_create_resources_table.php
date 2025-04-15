<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('resources', function (Blueprint $table) {
        $table->id();
        $table->foreignId('village_id')->constrained()->onDelete('cascade');
        $table->integer('wood')->default(100);
        $table->integer('clay')->default(100);
        $table->integer('iron')->default(100);
        $table->integer('crop')->default(100);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
