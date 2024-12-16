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
        Schema::create('nvkctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPx', 4);  // Mã phiếu xuất, khóa chính là kết hợp của `nvkSoPx` và `nvkMaVTu`
            $table->string('nvkMaVTu');     // Mã vật tư, khóa ngoại tham chiếu từ bảng `nvkvattu`
            $table->integer('nvkSoLuong');  // Số lượng xuất (INTEGER)

            // Định nghĩa khóa chính kết hợp giữa `nvkSoPx` và `nvkMaVTu`
            $table->primary(['nvkSoPx', 'nvkMaVTu']);

            // Định nghĩa khóa ngoại tham chiếu đến bảng `nvkpxuat`
            $table->foreign('nvkSoPx')->references('nvkSoPx')->on('nvkpxuat')->onDelete('cascade');

            // Định nghĩa khóa ngoại tham chiếu đến bảng `nvkvattu`
            $table->foreign('nvkMaVTu')->references('nvkMaVTu')->on('nvkvattu')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
    }
};
