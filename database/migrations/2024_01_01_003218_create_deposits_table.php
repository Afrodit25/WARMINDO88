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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('berita_deposit');
            $table->float('nominal_deposit');
            $table->float('saldo_deposit');
            $table->string('status_deposit');
            $table->text('img_bukti_pembayaran');
            $table->text('remarks_deposit')->nullable();
            $table->timestamps();

            $table->foreignId('bank_account_id')->constrained();
            $table->foreignId('bank_account_pemilik_id')->constrained();
            $table->foreignId('member_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('bonus_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
