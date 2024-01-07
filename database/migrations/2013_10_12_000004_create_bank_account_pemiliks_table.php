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
        Schema::create('bank_account_pemiliks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rekening_bank_account_pemilik');
            $table->string('no_rekening_bank_account_pemilik');
            $table->string('min_depo')->nullable();
            $table->string('max_depo')->nullable();
            $table->string('type_bank_account_pemilik')->nullable();
            $table->text('remarks_bank_account_pemilik')->nullable();
            $table->timestamps();

            $table->foreignId('bank_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_account_pemiliks');
    }
};
