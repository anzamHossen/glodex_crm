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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id');
            $table->string('university_name', 255);
            $table->string('university_city', 150)->nullable();
            $table->string('admission_email', 255)->nullable();
            $table->string('admission_phone', 20)->nullable();  
            $table->string('website_link')->nullable();
            $table->text('address')->nullable();
            $table->string('commission')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('cover_image')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 = Active, 0 = Inactive');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
