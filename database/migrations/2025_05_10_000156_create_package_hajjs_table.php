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
        Schema::create('package_hajjs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brochure'); // Image filename
            $table->string('embarkation'); // Keberangkatan
            $table->string('starting_price'); // Harga Mulai
            $table->string('sub_info');
            $table->text('detail_package'); // HTML content
            $table->text('incl_package')->nullable(); // HTML content
            $table->text('excl_package')->nullable(); // HTML content
            $table->text('incl_equipment')->nullable(); // HTML content
            $table->tinyInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_hajjs');
    }
};
