<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;


class AddMoreLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $oldLanguages = ['ar', 'ch', 'hi', 'es', 'ru', 'pt', 'fr', 'de', 'th'];
        // $Language = new Language;
        // $Language->whereIn('code', $oldLanguages)->delete();
        $Language = new Language;
        $Language->title = "English";
        $Language->code = "en";
        $Language->direction = "ltr";
        $Language->icon = "us";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();
        
        $Language = new Language;
        $Language->title = "Vietnam";
        $Language->code = "vi";
        $Language->direction = "ltr";
        $Language->icon = "vn";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();

        $Language = new Language;
        $Language->title = "Japan";
        $Language->code = "jp";
        $Language->direction = "ltr";
        $Language->icon = "jp";
        $Language->box_status = 1;
        $Language->left = "left";
        $Language->right = "right";
        $Language->status = 1;
        $Language->created_by = 1;
        $Language->save();
    }
}
