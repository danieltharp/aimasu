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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('timezone')->default('UTC');
            $table->string('locale')->default('en');
            $table->unsignedTinyInteger('proficiency_english')->default(0);
            $table->unsignedTinyInteger('proficiency_japanese')->default(0);
            $table->string('wants_to_learn')->default('japanese');
            $table->string('wants_to_teach')->default('english');
            $table->unsignedTinyInteger('connections')->default(0);
            $table->unsignedTinyInteger('connections_limit')->default(5);
            $table->string('discord');
            $table->string('bio');
            $table->boolean('voice_chat')->default(false);
            $table->boolean('messaging')->default(false);
            $table->boolean('video_chat')->default(false);
            $table->timeTz('sunday_start')->nullable();
            $table->timeTz('sunday_end')->nullable();
            $table->timeTz('monday_start')->nullable();
            $table->timeTz('monday_end')->nullable();
            $table->timeTz('tuesday_start')->nullable();
            $table->timeTz('tuesday_end')->nullable();
            $table->timeTz('wednesday_start')->nullable();
            $table->timeTz('wednesday_end')->nullable();
            $table->timeTz('thursday_start')->nullable();
            $table->timeTz('thursday_end')->nullable();
            $table->timeTz('friday_start')->nullable();
            $table->timeTz('friday_end')->nullable();
            $table->timeTz('saturday_start')->nullable();
            $table->timeTz('saturday_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
