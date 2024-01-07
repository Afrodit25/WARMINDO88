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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rekening');
            $table->string('no_rekening');
            $table->string('type_bank_accounts')->nullable();
            $table->text('remarks_bank_accounts')->nullable();
            $table->timestamps();

            $table->foreignId('bank_id')->constrained();
            $table->foreignId('member_id')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
