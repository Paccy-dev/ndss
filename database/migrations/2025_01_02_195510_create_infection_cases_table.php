<?php

use App\Models\Patient;
use App\Models\Pandemic;
use App\Models\HealthCenter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infection_cases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Pandemic::class);
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(HealthCenter::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_infection_cases');
    }
};
