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
            $table->integer('reg');
            $table->string('intro');
            $table->string('name');
            $table->string('surname');
            $table->string('pos');
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->integer('member');
            $table->integer('uni');
            $table->string('dep');
            $table->string('branch')->nullable();
            $table->integer('dinner');
            $table->integer('tour');
            $table->integer('food');
            $table->string('comment')->nullable();
            $table->integer('trip');
            $table->timestamps();
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
