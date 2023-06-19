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
        Schema::create('penyanyi', function (Blueprint $table) {
            $table->id();
            $table->string('nama',20);
            $table->integer('tanggal_lahir',20);
            $table->varchar('jenis_kelamin',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyanyi');
    }
};
