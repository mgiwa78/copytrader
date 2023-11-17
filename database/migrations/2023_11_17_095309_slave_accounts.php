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
        Schema::create('slave_accounts', function (Blueprint $table) {
            $table->id(); // Adds an auto-incrementing primary key column
            $table->integer('user_id');
            $table->integer('account_id');
            $table->string('password');
            $table->string('server');
            $table->integer('subscription');
            // Add more columns as needed
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
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
