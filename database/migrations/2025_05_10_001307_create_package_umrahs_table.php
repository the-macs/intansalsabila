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
        Schema::create('package_umrahs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brochure'); // Image filename
            $table->date('embarkation'); // Keberangkatan
            $table->string('starting_price'); // Harga Mulai
            $table->text('detail_package'); // HTML content
            $table->text('incl_package')->nullable(); // HTML content
            $table->text('excl_package')->nullable(); // HTML content
            $table->text('incl_equipment')->nullable(); // HTML content
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_umrahs');
    }
};
