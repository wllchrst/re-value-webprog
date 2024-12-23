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
        Schema::create(
            'items',
            function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->string("description");
                $table->string("image_path");
                $table->boolean("sold");
                $table->unsignedBigInteger("user_id");
                $table->unsignedBigInteger("item_type_id");
                $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
                $table->foreign("item_type_id")->references("id")->on("item_types")->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
