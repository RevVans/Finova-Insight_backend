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
        Schema::create('investment_histories', function (Blueprint $table) {
            $table->id();
            $table->decimal('recorded_return_rate',8,2);
            $table->date('date');
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('investment_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_histories');
    }
};
