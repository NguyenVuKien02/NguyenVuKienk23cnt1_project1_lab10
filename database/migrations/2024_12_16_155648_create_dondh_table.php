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
        Schema::create('nvk_dondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->char('nvkSoDH', 4); // Mã đơn hàng, khóa chính
            $table->dateTime('nvkNgayDH'); // Ngày đơn hàng
            $table->string('nvkMaNCC'); // Thay đổi thành string cho phù hợp với bảng nvknhacc

            // Định nghĩa khóa chính
            $table->primary('nvkSoDH');

            // Định nghĩa khóa ngoại
            $table->foreign('nvkMaNCC')->references('nvkMaNCC')->on('nvknhacc')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dondh');
    }
};
