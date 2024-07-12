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
        Schema::create('slips', function (Blueprint $table) {
            $table->id();
            $table->integer('ref_id');
            $table->string('title');
            $table->string('dep');
            $table->integer('vat')->nullable();
            $table->string('address')->comment('ทีอยู่ออกใบกำกับ');
            $table->integer('recieve')->comment('1:หน้างาน 2:ไปรษณีย์');
            $table->string('comment')->nullable()->comment('ที่อยู่รับไปรษณีย์');
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slips');
    }
};
