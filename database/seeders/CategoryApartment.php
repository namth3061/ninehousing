<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
use Helper;

class CategoryApartment extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CategoryApartment
     * @return void
     *
     */
    public function run()
    {

        $apartmentId = 5;

        $categories = ['Property Type', 'General Amenities', 'Outdoor Facilities'];

        foreach($categories as $k => $category) {
            $Section = new Section;
            $Section->row_no = $k+=1;

            foreach (Helper::languagesList() as $ActiveLanguage) {
                $Section->{"title_" . $ActiveLanguage->code} = $category;
                // meta info
                $Section->{"seo_title_" . $ActiveLanguage->code} = $category;
                $Section->{"seo_url_slug_" . $ActiveLanguage->code} = Helper::URLSlug($category);
            }

            $Section->webmaster_id = $apartmentId;
            $Section->father_id = 0;
            $Section->visits = 0;
            $Section->status = 1;
            $Section->created_by = 1;

            $Section->save();
        }

    }
}
