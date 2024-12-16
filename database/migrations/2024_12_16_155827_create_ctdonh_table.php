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
        Schema::create('nvk_ctdonh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // Khóa chính của bảng ctdondh
            $table->char('nvkSoDH');  // Mã đơn hàng (Khóa ngoại từ bảng `nvk_dondh`)
            $table->string('nvkMaVTu'); // Mã vật tư (Khóa ngoại từ bảng `nvkvattu`)
            $table->integer('nvkSIdat'); // Số lượng đặt

            // Định nghĩa khóa chính cho bảng ctdondh (kết hợp từ `nvkSoDH` và `nvkMaVTu`)
            $table->primary(['nvkSoDH', 'nvkMaVTu']);

            // Khóa ngoại tham chiếu đến bảng `nvkdondh`
            $table->foreign('nvkSoDH')->references('nvkSoDH')->on('nvk_dondh')->onDelete('cascade');

            // Khóa ngoại tham chiếu đến bảng `nvkvattu`
            $table->foreign('nvkMaVTu')->references('nvkMaVTu')->on('nvkvattu')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctdonh');
    }
};
