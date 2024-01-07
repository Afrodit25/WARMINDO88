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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('username_kary');
            $table->string('full_name_kary');
            $table->string('email_kary');
            $table->string('jabatan_kary');
            $table->string('tlp_kary')->nullable();
            $table->string('alamat_kary')->nullable();
            $table->string('remarks_kary')->nullable();
            $table->text('kode_refferal')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
