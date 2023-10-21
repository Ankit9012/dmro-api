<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'station_names',
            function (Blueprint $table) {
                $table->uuid('id')->primary()->default(DB::raw('UUID()'));
                $table->string('stationName')->nullable(false)->comment('Station Name');
                $table->string('line')->nullable(false)->comment('Station line name');
                $table->string('latitude')->nullable(true)->default(0)->comment('Station latitude');
                $table->string('longitude')->nullable(true)->default(0)->comment('Station longitude');
                $table->enum('status', ['active', 'disable'])->default('active');
                $table->timestamps();
            }
        );

        Artisan::call(
            'db:seed',
            [
                '--class' => 'DelhiMetroSeeder',
                '--force' => 'true',
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_names');
    }
};
