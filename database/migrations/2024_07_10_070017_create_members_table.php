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
            $table->string('pos')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('member');
            $table->string('uni');
            $table->string('dep');
            $table->string('branch')->nullable();
            $table->integer('dinner');
            $table->integer('trip');
            $table->integer('food');
            $table->string('comment')->nullable();
            $table->integer('tour')->comment('0=ไม่เข้าร่วม');
            $table->string('step_1')->nullable()->comment('ลงทะเบียน');
            $table->string('step_2')->nullable()->comment('1=รอชำระ, 2=ชำระแล้ว');
            $table->string('step_3')->nullable()->comment('1=รอตรวจสอบ, 2=เจ้าหน้าที่ยืนยัน');       
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
