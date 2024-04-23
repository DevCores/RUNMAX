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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('rights_0')->default(0);
            $table->boolean('rights_1')->default(0);
            $table->boolean('rights_2')->default(0);
            $table->boolean('rights_3')->default(0);
            $table->boolean('rights_4')->default(0);
            $table->boolean('rights_5')->default(0);
            $table->boolean('rights_6')->default(0);
            $table->boolean('rights_7')->default(0);
            $table->boolean('rights_8')->default(0);
            $table->boolean('rights_9')->default(0);
            $table->boolean('rights_10')->default(0);
            $table->boolean('rights_11')->default(0);
            $table->boolean('rights_12')->default(0);
            $table->boolean('rights_13')->default(0);
            $table->boolean('rights_14')->default(0);
            $table->boolean('rights_15')->default(0);
            $table->boolean('rights_16')->default(0);
            $table->boolean('rights_17')->default(0);
            $table->boolean('rights_18')->default(0);
            $table->boolean('rights_19')->default(0);
            $table->boolean('rights_20')->default(0);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->boolean('superadmin')->default(0);
            $table->string('avatar')->default('/images/avatar.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('role_id')->change();
        });
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
