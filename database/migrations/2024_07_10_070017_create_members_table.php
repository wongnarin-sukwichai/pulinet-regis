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
            $table->string('member');
            $table->string('uni');
            $table->string('dep');
            $table->string('branch')->nullable();
            $table->integer('dinner');
            $table->integer('tour');
            $table->integer('food');
            $table->string('comment')->nullable();
            $table->integer('trip');
            $table->string('step_1')->nullable()->comment('ลงทะเบียน');
            $table->string('step_2')->nullable()->comment('ชำระ');
            $table->integer('price')->nullable()->comment('ยอดเงิน');
            $table->integer('pay')->nullable()->comment('ชำระเงิน');
            $table->string('img')->nullable()->comment('รูปถ่าย');
            $table->integer('step_3')->nullable()->comment('เจ้าหน้าที่ยืนยัน');
            $table->string('confirmed_by')->nullable();
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
