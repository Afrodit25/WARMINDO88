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
        Schema::create('history_deposits', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('saldo_sebelumnya');
            $table->string('saldo_update');
            $table->string('status_deposit');
            $table->string('website_ref');
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->string('deposit_id')->nullable();
            $table->string('user_update');
            // $table->foreign('deposit_id')->references('id')->on('deposits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_deposits');
    }
};
