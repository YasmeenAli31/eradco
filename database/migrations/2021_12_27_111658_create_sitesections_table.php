<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_sections', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_ar');
            $table->string('site_name_en');
             $table->int('priority');
            $table->int('statues');
            $table->string('image');
            $table->timestamps();


        });
        // AppSection::create(['name' => 'ايرادكو الزراعية', 'name_en' => 'Eradco Agricultural']);
        // AppSection::create(['name' => 'ايرادكو للصحة العامة', 'name_en' => 'Eradco Public Health']);
        // AppSection::create(['name' => 'ايرادكو للبيطره', 'name_en' => 'Eradco for veterinary']);
        // AppSection::create(['name' => 'مصنع ايرادكو', 'name_en' => 'Eradco Factory']);
        // AppSection::create(['name' => 'مشاتل ايرادكو', 'name_en' => 'Eradco Nurseries']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_sections');
    }
}
