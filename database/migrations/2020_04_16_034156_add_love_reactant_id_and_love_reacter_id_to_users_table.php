<?php

/*
 * This file is part of Laravel Love.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('love_reactant_id')
                  ->nullable()
                  ->constrained();
            $table->foreignId('love_reacter_id')
                  ->nullable()
                  ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['love_reactant_id']);
            $table->dropColumn('love_reactant_id');
            $table->dropForeign(['love_reacter_id']);
            $table->dropColumn('love_reacter_id');
        });
    }
};
