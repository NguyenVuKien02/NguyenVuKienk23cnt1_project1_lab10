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
        Schema::create('nvkctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // Cột khóa chính kép (nvkSoPn và nvkMavtu)
            $table->string('nvkSoPn');       // Tham chiếu nvkphieunhap (nvkSoPn)
            $table->string('nvkMavtu');      // Tham chiếu nvkvattu (nvkMaVTu)

            // Các cột dữ liệu khác
            $table->integer('nvkSLNhap')->nullable(); // Số lượng nhập
            $table->float('nvkDGNhap')->nullable();   // Đơn giá nhập

            // Các cột tham chiếu khác
            $table->string('nvkVattu_Mavtu');      // Tham chiếu bổ sung cho mã vật tư
            $table->string('nvkPnhap_SoPn');       // Tham chiếu bổ sung cho mã phiếu nhập

            // Khóa chính tổng hợp
            $table->primary(['nvkSoPn', 'nvkMavtu']);

            // Khóa ngoại
            $table->foreign('nvkSoPn')->references('nvkSoPn')->on('nvkphieunhap'); // Liên kết nvkphieunhap
            $table->foreign('nvkMavtu')->references('nvkMaVTu')->on('nvkvattu');   // Liên kết nvkvattu
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpnhap');
    }
};
