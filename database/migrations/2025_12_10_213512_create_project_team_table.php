<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_team', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('team_member_id');

            $table->foreign('project_id')
                  ->references('id')->on('projects')
                  ->onDelete('cascade');

            $table->foreign('team_member_id')
                  ->references('id')->on('team_members')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_team');
    }
};
