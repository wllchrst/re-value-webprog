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
        if(!Schema::hasTable("transactions")) return;

        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            // transaction
            $table->unsignedBigInteger("transaction_id");
            $table->foreign("transaction_id")->references("id")->on("transactions")->onDelete("cascade");

            // products
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");

            $table->integer("amount")->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};
