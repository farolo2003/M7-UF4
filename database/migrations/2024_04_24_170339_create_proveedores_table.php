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
    Schema::create('proveedores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre'); // Nombre del proveedor
        $table->string('telefono')->nullable(); // Teléfono del proveedor
        $table->string('direccion')->nullable(); // Dirección del proveedor
        $table->string('ciudad')->nullable(); // Ciudad del proveedor
        $table->string('pais')->nullable(); // País del proveedor
        $table->string('cp')->nullable(); // Código postal del proveedor
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
