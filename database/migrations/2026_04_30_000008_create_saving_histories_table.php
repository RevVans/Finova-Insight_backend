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
        Schema::create('saving_histories', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->date('date');
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('saving_id')->constrained()->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saving_histories');
    }
};
