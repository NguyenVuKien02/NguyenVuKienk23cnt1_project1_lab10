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
        Schema::create('nvktonkho', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // Cột khóa chính kép
            $table->string('nvkNamThang');   // Năm Tháng (không giới hạn độ dài)
            $table->string('nvkMavtu');      // Mã vật tư (tham chiếu nvkvattu)

            // Các cột dữ liệu khác
            $table->integer('nvkSLDau')->nullable();   // Số lượng đầu kỳ
            $table->integer('nvkTongSLN')->nullable(); // Tổng số lượng nhập
            $table->integer('nvkTongSLX')->nullable(); // Tổng số lượng xuất
            $table->integer('nvkSLCuoi')->nullable();  // Số lượng cuối kỳ

            // Khóa chính tổng hợp
            $table->primary(['nvkNamThang', 'nvkMavtu']);

            // Khóa ngoại
            $table->foreign('nvkMavtu')->references('nvkMaVTu')->on('nvkvattu');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tonkho');
    }
};
