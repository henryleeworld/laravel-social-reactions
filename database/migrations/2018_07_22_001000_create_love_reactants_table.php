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

use Cog\Laravel\Love\Reactant\Models\Reactant;
use Cog\Laravel\Love\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->schema->create((new Reactant())->getTable(), function (Blueprint $table) {
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
        $this->schema->dropIfExists((new Reactant())->getTable());
    }
};
