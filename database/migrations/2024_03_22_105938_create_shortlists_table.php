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
        Schema::create('shortlists', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',200)->nullable();
            $table->string('user_email',200)->nullable();
            $table->string('job_title',200)->nullable();
            $table->string('job_type',100)->nullable();
            $table->string('location',200)->nullable();
            $table->string('compa_name',200)->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('jobspost_id');
            $table->foreign('jobspost_id')->references('id')->on('postjobs')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->restrictOnDelete()
            ->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortlists');
    }
};
