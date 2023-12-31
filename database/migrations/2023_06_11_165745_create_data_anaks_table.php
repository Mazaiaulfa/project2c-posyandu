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
        Schema::create('data_anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('nama_ortu');
            $table->decimal('berat', 8, 2)->comment('Berat dalam kg')->change();
            $table->decimal('tinggi_badan', 8, 2)->comment('Tinggi badan dalam cm')->change();
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_anaks');
    }
};
