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
        Schema::create('with_draws', function (Blueprint $table) {
            $table->id();
            $table->string('berita_withdraw');
            $table->bigInteger('nominal_withdraw');
            $table->string('status_withdraw');
            $table->text('remarks_withdraw')->nullable();
            $table->timestamps();
            $table->string('updateBy');

            $table->foreignId('bank_account_id')->constrained();
            $table->foreignId('member_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('with_draws');
    }
};
