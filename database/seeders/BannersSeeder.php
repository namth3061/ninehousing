<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 1;

        $Banner->title_vi = "Banner #1";
        $Banner->title_en = "Banner #1";
        $Banner->title_jp = "Banner #1";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_jp = "noimg.png";
        $Banner->file_en = "noimg.png";
        $Banner->file_vi = "noimg.png";

        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 1;

        $Banner->title_en = "Banner #2";
        $Banner->title_vi = "Banner #2";
        $Banner->title_jp = "Banner #2";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_en = "noimg.png";
        $Banner->file_jp = "noimg.png";
        $Banner->file_vi = "noimg.png";

        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 2;

        $Banner->title_en = "Responsive Design";
        $Banner->title_vi = "Responsive Design";
        $Banner->title_jp = "Responsive Design";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_en = "";
        $Banner->file_jp = "";
        $Banner->file_vi = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-object-group";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 2;

        $Banner->title_en = "HTML5 & CSS3";
        $Banner->title_vi = "HTML5 & CSS3";
        $Banner->title_jp = "HTML5 & CSS3";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_en = "";
        $Banner->file_vi = "";
        $Banner->file_jp = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-html5";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 3;
        $Banner->section_id = 2;

        $Banner->title_en = "Bootstrap Used";
        $Banner->title_vi = "Bootstrap Used";
        $Banner->title_jp = "Bootstrap Used";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_en = "";
        $Banner->file_vi = "";
        $Banner->file_jp = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-code";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 4;
        $Banner->section_id = 2;

        $Banner->title_en = "Classic Design";
        $Banner->title_vi = "Classic Design";
        $Banner->title_jp = "Classic Design";

        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_jp = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_vi = "It is a long established fact that a reader will be distracted by the readable content of a page.";

        $Banner->file_en = "";
        $Banner->file_vi = "";
        $Banner->file_jp = "";

        $Banner->link_url = "#";
        $Banner->icon = "fa-laptop";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

    }
}
