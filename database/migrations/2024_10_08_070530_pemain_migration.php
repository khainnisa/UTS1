<?php
// id nama pemain no punggung posisi        
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
        Schema::create('pemain_mu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->integer('nomor_punggung');
            $table->integer('posisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
