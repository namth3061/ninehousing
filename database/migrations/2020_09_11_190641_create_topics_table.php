<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_jp')->nullable();

            $table->longText('details_vi')->nullable();
            $table->longText('details_jp')->nullable();
            $table->longText('details_en')->nullable();

            $table->date('date')->nullable();
            $table->date('expire_date')->nullable();
            $table->tinyInteger('video_type')->nullable();
            $table->string('photo_file')->nullable();
            $table->string('attach_file')->nullable();
            $table->text('video_file')->nullable();
            $table->string('audio_file')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('status');
            $table->integer('visits');
            $table->integer('webmaster_id');
            $table->integer('section_id');
            $table->integer('row_no');

            $table->integer('form_id')->nullable();
            $table->integer('topic_id')->nullable();

            $table->string('seo_title_jp')->nullable();
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_vi')->nullable();

            $table->string('seo_description_jp')->nullable();
            $table->string('seo_description_en')->nullable();
            $table->string('seo_description_vi')->nullable();

            $table->string('seo_keywords_jp')->nullable();
            $table->string('seo_keywords_en')->nullable();
            $table->string('seo_keywords_vi')->nullable();

            $table->string('seo_url_slug_vi')->nullable();
            $table->string('seo_url_slug_en')->nullable();
            $table->string('seo_url_slug_jp')->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
