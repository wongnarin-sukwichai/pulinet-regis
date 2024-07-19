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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('ref_id');
            $table->string('title');
            $table->string('dep');
            $table->string('vat')->nullable();
            $table->longText('address');
            $table->string('slip');
            $table->string('bank');
            $table->date('date');
            $table->string('time');
            $table->integer('price');
            $table->string('comment')->nullable();
            $table->string('confirmed_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
