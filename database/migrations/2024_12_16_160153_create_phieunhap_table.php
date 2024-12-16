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
        Schema::create('nvkphieunhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPn');         // Mã phiếu nhập
            $table->dateTime('nvkNgayNhap');  // Ngày phiếu nhập
            $table->string('nvksoDH');           // Mã đơn hàng (không phải khóa ngoại)

            // Định nghĩa khóa chính
            $table->primary('nvkSoPn');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieunhap');
    }
};
