<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'photographer', 'customer'])->default('customer');
            $table->timestamps();
            
        });
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable(); 
            $table->string('cover_image')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Perbaikan foreign key
            $table->boolean('is_featured')->default(false); 
            $table->timestamps();
            
        });
        Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');         // Contoh: "Paket Prewedding"
        $table->string('slug')->unique(); // Untuk URL
        $table->text('description');    // Deskripsi layanan
        $table->decimal('price', 10, 2); // Harga
        $table->integer('duration');    // Durasi (menit)
        $table->timestamps();
        });
        
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->timestamps();
            
        });
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_path');
            $table->string('image_size')->nullable();
            $table->string('image_dimensions');
            $table->foreignId('gallery_id')->constrained()->onDelete('cascade'); // Perbaikan foreign key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Perbaikan foreign key dan spasi
            $table->boolean('is_featured')->default(false); 
            $table->timestamps();
            
        });
        Schema::create('category_photo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')->constrained()->onDelete('cascade'); // Perbaikan foreign key
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();
            
        });
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('jenis_foto');
            $table->text('massage');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('gallery_id')->nullable()->constrained()->onDelete('cascade');
            $table->date('booking_date')->nullable();  // Tambahan untuk tanggal reservasi
            $table->time('booking_time')->nullable();  // Tambahan untuk waktu reservasi
            $table->enum('status', ['pending', 'confirmed', 'rejected'])->default('pending'); // Untuk tracking
            $table->boolean('is_read')->default(false); 
            $table->timestamps();
        });
    }
    public function down(): void
    {
     
        Schema::dropIfExists('user');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('photos');
        Schema::dropIfExists('category_photo');
        Schema::dropIfExists('contact');
    }
};
  

