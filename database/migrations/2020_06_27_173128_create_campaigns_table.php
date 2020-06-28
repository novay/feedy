<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->integer('user_id')->unsigned()->nullable();

            $table->string('name')->nullable();
            $table->boolean('private')->default(0);

            $table->string('title')->default('How are we doing?');
            $table->string('subtitle', 1000)->default("Leave us feedback so we know how we are doing.");

            $table->string('confirm_title')->default('Thank you!');
            $table->string('confirm_subtitle', 1000)->default("Thanks for your feedback. We will continue to improve, based on your suggestions.");

            $table->string('widget_color')->default('#03b7f0');
            $table->enum('widget_position', ['Right', 'Left'])->default('Right');
            $table->enum('widget_type', ['Floating', 'Sidebar', 'Fullscreen'])->default('Floating');
            $table->string('widget_button')->default('Leave Feedback');
            
            $table->boolean('enable_email')->default(0);
            $table->boolean('enable_rating')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
