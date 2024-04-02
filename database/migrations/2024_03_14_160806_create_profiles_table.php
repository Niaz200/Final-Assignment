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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',100)->nullable();
            $table->string('mobile',100)->nullable();
            $table->integer('age')->nullable();
            $table->string('gender',50)->nullable();
            $table->string('job_title',50)->nullable();
            $table->json('work_type')->nullable();
            $table->string('website',50)->nullable();
            $table->string('Total_experience',50)->nullable();
            $table->date('birthday')->format('d/m/Y')->nullable();
            $table->longText('address')->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('country',100)->nullable();
            $table->integer('postcode')->nullable();
            $table->json('language')->nullable();
            $table->string('education',400)->nullable();
            $table->longText('info')->nullable();
            $table->json('skills')->nullable();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')
            ->restrictOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger('cats_id');
            $table->foreign('cats_id')->references('id')->on('categories')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
