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
        Schema::create('postjobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title',100)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('status')->nullable();
            $table->longText('job_des')->nullable();
            $table->string('job_type',100)->nullable(); 
            $table->string('job_level',100)->nullable();
            $table->string('experience',150)->nullable(); 
            $table->string('qualification',150)->nullable(); 
            $table->string('gender',150)->nullable(); 
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();
            $table->date('job_exp_date')->format('d/m/Y');
            $table->string('job_fee_type',100)->nullable(); 
            $table->longText('requiremment')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->json('skills')->nullable();
            $table->string('website')->nullable();  
            $table->text('address')->nullable();
            $table->string('city',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('state',100)->nullable();
            $table->integer('postcode')->nullable();
            $table->string('location',400)->nullable();
           
            
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('postjobs');
    }
};
