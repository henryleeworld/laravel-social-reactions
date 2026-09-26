<?php

use Cog\Laravel\Love\Reacter\Models\Reacter;
use Cog\Laravel\Love\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->schema->create((new Reacter())->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();

            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->schema->dropIfExists((new Reacter())->getTable());
    }
};
