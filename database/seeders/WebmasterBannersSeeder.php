<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\WebmasterBanner;

class WebmasterBannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Home Banners Settings
        $settings = new WebmasterBanner();
        $settings->row_no = 1;
        $settings->title_en = "Home Banners";
        $settings->title_vi = "Home Banners";
        $settings->title_jp = "Banners Trang chủ";
        $settings->width = 1600;
        $settings->height = 500;
        $settings->desc_status = 1;
        $settings->link_status = 1;
        $settings->icon_status = 0;
        $settings->type = 1;
        $settings->status = 1;
        $settings->created_by = 1;
        $settings->save();


        //  Text Banners Settings
        $settings = new WebmasterBanner();
        $settings->row_no = 2;
        $settings->title_en = "Text Banners";
        $settings->title_vi = "Nội dung Banners";
        $settings->title_jp = "Text Banners";
        $settings->width = 330;
        $settings->height = 330;
        $settings->desc_status = 1;
        $settings->link_status = 1;
        $settings->icon_status = 1;
        $settings->type = 0;
        $settings->status = 1;
        $settings->created_by = 1;
        $settings->save();

        //  Side Banners Settings
        $settings = new WebmasterBanner();
        $settings->row_no = 3;
        $settings->title_en = "Customer said Banners";
        $settings->title_vi = "Banner bình luân của khách hàng";
        $settings->title_jp = "Customer said Banners";
        $settings->width = 330;
        $settings->height = 330;
        $settings->desc_status = 0;
        $settings->link_status = 1;
        $settings->icon_status = 0;
        $settings->type = 1;
        $settings->status = 1;
        $settings->created_by = 1;
        $settings->save();

    }
}
