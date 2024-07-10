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
            $table->string('ref_1')->nullable();
            $table->string('ref_2')->nullable();
            $table->integer('price')->nullable();
            $table->integer('pay')->nullable()->comment('ชำระเงิน');
            $table->string('slip')->nullable();
            $table->integer('confirm')->nullable()->comment('เจ้าหน้าที่ยืนยัน');
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
