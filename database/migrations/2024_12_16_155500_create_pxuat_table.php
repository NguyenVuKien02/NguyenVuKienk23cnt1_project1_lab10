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
        Schema::create('nvkpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPx', 4)->primary();  // Mã phiếu xuất
            $table->dateTime('nvkNgayXuat');  // Ngày xuất (DATETIME)
            $table->string('nvkTenKH', 100);  // Tên khách hàng (VARCHAR(100))
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pxuat');
    }
};
