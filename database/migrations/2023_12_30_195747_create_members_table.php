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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('username_member')->unique();
            $table->string('full_name_member');
            $table->string('email_member')->unique();
            $table->string('tlp_member')->nullable();
            $table->bigInteger('saldo_deposit');
            $table->string('website_ref');
            $table->text('remarks_member')->nullable();
            $table->text('kode_refferal')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')->constrained();

            // $table->bigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
