<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\WebmasterSection;
use App\Models\WebmasterSectionField;
use App\Models\City;
use App\Models\District;

class WebmasterSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Site pages
        $sections = new WebmasterSection();
        $sections->row_no = 1;

        $sections->title_en = "Site pages";
        $sections->title_vi = "Site pages";
        $sections->title_jp = "Site pages";

        $sections->seo_title_en = "Site pages";
        $sections->seo_title_vi = "Site pages";
        $sections->seo_title_jp = "Site pages";

        $sections->seo_url_slug_en = "sitepages";
        $sections->seo_url_slug_vi = "sitepages";
        $sections->seo_url_slug_jp = "sitepages";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 1;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 1;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // // Services
        // $sections = new WebmasterSection();
        // $sections->row_no = 2;

        // $sections->title_en = "Services";
        // $sections->title_vi = "Services";
        // $sections->title_jp = "Services";

        // $sections->seo_title_en = "Services";
        // $sections->seo_title_vi = "Services";
        // $sections->seo_title_jp = "Services";

        // $sections->seo_url_slug_en = "services";
        // $sections->seo_url_slug_jp = "services";
        // $sections->seo_url_slug_vi = "services";

        // $sections->type = 0;
        // $sections->sections_status = 0;
        // $sections->comments_status = 0;
        // $sections->date_status = 0;
        // $sections->longtext_status = 1;
        // $sections->editor_status = 1;
        // $sections->attach_file_status = 1;
        // $sections->multi_images_status = 1;
        // $sections->section_icon_status = 1;
        // $sections->icon_status = 0;
        // $sections->maps_status = 0;
        // $sections->order_status = 1;
        // $sections->related_status = 1;
        // $sections->expire_date_status = 0;
        // $sections->extra_attach_file_status = 0;
        // $sections->status = 1;
        // $sections->created_by = 1;
        // $sections->save();

        // // News
        // $sections = new WebmasterSection();
        // $sections->row_no = 3;

        // $sections->title_en = "Activity";
        // $sections->title_vi = "Hoạt động";
        // $sections->title_jp = "Activity";

        // $sections->seo_title_en = "Activity";
        // $sections->seo_title_vi = "Hoạt động";
        // $sections->seo_title_jp = "Activity";

        // $sections->seo_url_slug_en = "activity";
        // $sections->seo_url_slug_jp = "activity";
        // $sections->seo_url_slug_vi = "hoat-dong";

        // $sections->type = 0;
        // $sections->sections_status = 0;
        // $sections->comments_status = 1;
        // $sections->date_status = 1;
        // $sections->longtext_status = 1;
        // $sections->editor_status = 1;
        // $sections->attach_file_status = 0;
        // $sections->multi_images_status = 1;
        // $sections->section_icon_status = 1;
        // $sections->icon_status = 0;
        // $sections->maps_status = 0;
        // $sections->order_status = 0;
        // $sections->related_status = 1;
        // $sections->expire_date_status = 0;
        // $sections->extra_attach_file_status = 0;
        // $sections->status = 1;
        // $sections->created_by = 1;
        // $sections->save();

        // // Photos
        // $sections = new WebmasterSection();
        // $sections->row_no = 4;

        // $sections->title_ar = "الصور";
        // $sections->title_en = "Photos";
        // $sections->title_ch = "照片";
        // $sections->title_hi = "तस्वीरें";
        // $sections->title_es = "Fotos";
        // $sections->title_ru = "Фото";
        // $sections->title_pt = "Fotos";
        // $sections->title_fr = "Photos";
        // $sections->title_de = "Fotos";
        // $sections->title_th = "照片";

        // $sections->seo_title_ar = "الصور";
        // $sections->seo_title_en = "Photos";
        // $sections->seo_title_ch = "照片";
        // $sections->seo_title_hi = "तस्वीरें";
        // $sections->seo_title_es = "Fotos";
        // $sections->seo_title_ru = "Фото";
        // $sections->seo_title_pt = "Fotos";
        // $sections->seo_title_fr = "Photos";
        // $sections->seo_title_de = "Fotos";
        // $sections->seo_title_th = "照片";

        // $sections->seo_url_slug_ar = "photos";
        // $sections->seo_url_slug_en = "photos";
        // $sections->seo_url_slug_ch = "photos";
        // $sections->seo_url_slug_hi = "photos";
        // $sections->seo_url_slug_es = "photos";
        // $sections->seo_url_slug_ru = "photos";
        // $sections->seo_url_slug_pt = "photos";
        // $sections->seo_url_slug_fr = "photos";
        // $sections->seo_url_slug_de = "photos";
        // $sections->seo_url_slug_th = "photos";

        // $sections->type = 1;
        // $sections->sections_status = 0;
        // $sections->comments_status = 1;
        // $sections->date_status = 0;
        // $sections->longtext_status = 0;
        // $sections->editor_status = 0;
        // $sections->attach_file_status = 0;
        // $sections->multi_images_status = 1;
        // $sections->section_icon_status = 1;
        // $sections->icon_status = 0;
        // $sections->maps_status = 0;
        // $sections->order_status = 0;
        // $sections->related_status = 0;
        // $sections->expire_date_status = 0;
        // $sections->extra_attach_file_status = 0;
        // $sections->status = 1;
        // $sections->created_by = 1;
        // $sections->save();

        // // Videos
        // $sections = new WebmasterSection();
        // $sections->row_no = 5;

        // $sections->title_ar = "الفيديو";
        // $sections->title_en = "Videos";
        // $sections->title_ch = "视频";
        // $sections->title_hi = "वीडियो";
        // $sections->title_es = "Videos";
        // $sections->title_ru = "Видео";
        // $sections->title_pt = "Vídeos";
        // $sections->title_fr = "Vidéos";
        // $sections->title_de = "Videos";
        // $sections->title_th = "วิดีโอ";

        // $sections->seo_title_ar = "الفيديو";
        // $sections->seo_title_en = "Videos";
        // $sections->seo_title_ch = "视频";
        // $sections->seo_title_hi = "वीडियो";
        // $sections->seo_title_es = "Videos";
        // $sections->seo_title_ru = "Видео";
        // $sections->seo_title_pt = "Vídeos";
        // $sections->seo_title_fr = "Vidéos";
        // $sections->seo_title_de = "Videos";
        // $sections->seo_title_th = "วิดีโอ";

        // $sections->seo_url_slug_ar = "videos";
        // $sections->seo_url_slug_en = "videos";
        // $sections->seo_url_slug_ch = "videos";
        // $sections->seo_url_slug_hi = "videos";
        // $sections->seo_url_slug_es = "videos";
        // $sections->seo_url_slug_ru = "videos";
        // $sections->seo_url_slug_pt = "videos";
        // $sections->seo_url_slug_fr = "videos";
        // $sections->seo_url_slug_de = "videos";
        // $sections->seo_url_slug_th = "videos";

        // $sections->type = 2;
        // $sections->sections_status = 1;
        // $sections->comments_status = 1;
        // $sections->date_status = 0;
        // $sections->longtext_status = 0;
        // $sections->editor_status = 0;
        // $sections->attach_file_status = 0;
        // $sections->multi_images_status = 0;
        // $sections->section_icon_status = 1;
        // $sections->icon_status = 0;
        // $sections->maps_status = 0;
        // $sections->order_status = 0;
        // $sections->related_status = 1;
        // $sections->expire_date_status = 0;
        // $sections->extra_attach_file_status = 0;
        // $sections->status = 1;
        // $sections->created_by = 1;
        // $sections->save();

        // // Sounds
        // $sections = new WebmasterSection();
        // $sections->row_no = 6;

        // $sections->title_ar = "الصوتيات";
        // $sections->title_en = "Audio";
        // $sections->title_ch = "声音的";
        // $sections->title_hi = "ऑडियो";
        // $sections->title_es = "Audio";
        // $sections->title_ru = "Аудио";
        // $sections->title_pt = "Áudio";
        // $sections->title_fr = "l'audio";
        // $sections->title_de = "Audio";
        // $sections->title_th = "เครื่องเสียง";

        // $sections->seo_title_ar = "الصوتيات";
        // $sections->seo_title_en = "Audio";
        // $sections->seo_title_ch = "Audio";
        // $sections->seo_title_hi = "ऑडियो";
        // $sections->seo_title_es = "Audio";
        // $sections->seo_title_ru = "Аудио";
        // $sections->seo_title_pt = "Áudio";
        // $sections->seo_title_fr = "l'audio";
        // $sections->seo_title_de = "Audio";
        // $sections->seo_title_th = "เครื่องเสียง";

        // $sections->seo_url_slug_ar = "audio";
        // $sections->seo_url_slug_en = "audio";
        // $sections->seo_url_slug_ch = "audio";
        // $sections->seo_url_slug_hi = "audio";
        // $sections->seo_url_slug_es = "audio";
        // $sections->seo_url_slug_ru = "audio";
        // $sections->seo_url_slug_pt = "audio";
        // $sections->seo_url_slug_fr = "audio";
        // $sections->seo_url_slug_de = "audio";
        // $sections->seo_url_slug_th = "audio";

        // $sections->type = 3;
        // $sections->sections_status = 1;
        // $sections->comments_status = 1;
        // $sections->date_status = 0;
        // $sections->longtext_status = 0;
        // $sections->editor_status = 0;
        // $sections->attach_file_status = 0;
        // $sections->multi_images_status = 0;
        // $sections->section_icon_status = 1;
        // $sections->icon_status = 0;
        // $sections->maps_status = 0;
        // $sections->order_status = 0;
        // $sections->related_status = 1;
        // $sections->expire_date_status = 0;
        // $sections->extra_attach_file_status = 0;
        // $sections->status = 1;
        // $sections->created_by = 1;
        // $sections->save();

        // Articles
        $sections = new WebmasterSection();
        $sections->row_no = 7;

        $sections->title_en = "Blog";
        $sections->title_vi = "Blog";
        $sections->title_jp = "Blog";

        $sections->seo_title_en = "Blog";
        $sections->seo_title_vi = "Blog";
        $sections->seo_title_jp = "Blog";

        $sections->seo_url_slug_en = "blog";
        $sections->seo_url_slug_vi = "blog";
        $sections->seo_url_slug_jp = "blog";

        $sections->type = 0;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Articles
        $sections = new WebmasterSection();
        $sections->row_no = 6;

        $sections->title_en = "Activity";
        $sections->title_vi = "Activity";
        $sections->title_jp = "Activity";

        $sections->seo_title_en = "Activity";
        $sections->seo_title_vi = "Activity";
        $sections->seo_title_jp = "Activity";

        $sections->seo_url_slug_en = "Activity";
        $sections->seo_url_slug_vi = "Activity";
        $sections->seo_url_slug_jp = "Activity";

        $sections->type = 0;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();


        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 9;

        $sections->title_en = "Partners";
        $sections->title_vi = "Đối tác";
        $sections->title_jp = "Partners";

        $sections->seo_title_en = "Partners";
        $sections->seo_title_vi = "Đối tác";
        $sections->seo_title_jp = "Partners";

        $sections->seo_url_slug_en = "partners";
        $sections->seo_url_slug_vi = "partners";
        $sections->seo_url_slug_jp = "doi-tac";

        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();



        // Products
        $apartments = new WebmasterSection();
        $apartments->row_no = 8;

        $apartments->title_en = "Apartment";
        $apartments->title_jp = "Apartment";
        $apartments->title_vi = "Căn hộ";

        $apartments->seo_title_en = "Apartment";
        $apartments->seo_title_vi = "Căn hộ";
        $apartments->seo_title_jp = "Apartment";

        $apartments->seo_url_slug_en = "Apartment";
        $apartments->seo_url_slug_jp = "Apartment";
        $apartments->seo_url_slug_vi = "can-ho";

        $apartments->type = 0;
        $apartments->sections_status = 2;
        $apartments->comments_status = 0;
        $apartments->date_status = 1;
        $apartments->longtext_status = 1;
        $apartments->editor_status = 1;
        $apartments->attach_file_status = 0;
        $apartments->multi_images_status = 1;
        $apartments->section_icon_status = 1;
        $apartments->icon_status = 0;
        $apartments->maps_status = 1;
        $apartments->order_status = 1;
        $apartments->related_status = 0;
        $apartments->expire_date_status = 1;
        $apartments->extra_attach_file_status = 0;
        $apartments->status = 1;
        $apartments->created_by = 1;
        $apartments->save();


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://provinces.open-api.vn/api/?depth=2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            dd("cURL Error #:" . $err);
        }

        $cities = json_decode($response);
        $districts = collect($cities)->pluck('districts')->flatten()->implode('name', PHP_EOL);
        

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 6;
        $sectionField->title_jp = 'City';
        $sectionField->title_vi = 'Thành phố';
        $sectionField->title_en = 'City';
        $sectionField->details_jp = collect($cities)->implode('name', PHP_EOL);
        $sectionField->details_vi = collect($cities)->implode('name', PHP_EOL);
        $sectionField->details_en = collect($cities)->implode('name', PHP_EOL);
        $sectionField->row_no = 1;
        $sectionField->status = 1;
        $sectionField->required = 1;
        $sectionField->in_table = 1;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 6;
        $sectionField->title_jp = 'District';
        $sectionField->title_vi = 'Quận huyện';
        $sectionField->title_en = 'District';
        $sectionField->details_jp = $districts;
        $sectionField->details_vi = $districts;
        $sectionField->details_en = $districts;
        $sectionField->row_no = 2;
        $sectionField->status = 1;
        $sectionField->required = 1;
        $sectionField->in_table = 1;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 0;
        $sectionField->title_jp = 'Address';
        $sectionField->title_vi = 'Địa chỉ';
        $sectionField->title_en = 'Address';
        $sectionField->row_no = 3;
        $sectionField->status = 1;
        $sectionField->required = 1;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 2;
        $sectionField->title_jp = 'Price';
        $sectionField->title_vi = 'Giá';
        $sectionField->title_en = 'Price';
        $sectionField->row_no = 4;
        $sectionField->status = 1;
        $sectionField->required = 1;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 6;
        $sectionField->title_jp = 'Per';
        $sectionField->title_vi = 'Theo';
        $sectionField->title_en = 'Per';
        $sectionField->details_jp = implode(PHP_EOL, ['Year', 'Month', 'Day']);
        $sectionField->details_vi = implode(PHP_EOL, ['Năm', 'Tháng', 'Ngày']);
        $sectionField->details_en = implode(PHP_EOL, ['Year', 'Month', 'Day']);
        $sectionField->row_no = 5;
        $sectionField->status = 1;
        $sectionField->required = 1;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();


        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 1;
        $sectionField->title_jp = 'Total Area';
        $sectionField->title_vi = 'Diện tích';
        $sectionField->title_en = 'Total Area';
        $sectionField->row_no = 6;
        $sectionField->status = 1;
        $sectionField->required = 0;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();


        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 2;
        $sectionField->title_jp = 'Total Room ';
        $sectionField->title_vi = 'Số  phòng';
        $sectionField->title_en = 'Total Room ';
        $sectionField->row_no = 7;
        $sectionField->status = 1;
        $sectionField->required = 0;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();


        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 2;
        $sectionField->title_jp = 'Total Bedroom';
        $sectionField->title_vi = 'Số  phòng ngủ';
        $sectionField->title_en = 'Total Bedroom';
        $sectionField->row_no = 8;
        $sectionField->status = 1;
        $sectionField->required = 0;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();

        $sectionField = new WebmasterSectionField();
        $sectionField->webmaster_id = $apartments->id;
        $sectionField->type = 2;
        $sectionField->title_jp = 'Total Bathroom';
        $sectionField->title_vi = 'Số  phòng tắm';
        $sectionField->title_en = 'Total Bathroom';
        $sectionField->row_no = 9;
        $sectionField->status = 1;
        $sectionField->required = 0;
        $sectionField->in_table = 0;
        $sectionField->lang_code = 'all';
        $sectionField->created_by = '1';
        $sectionField->view_permission_groups = 0;
        $sectionField->add_permission_groups = 0;
        $sectionField->edit_permission_groups = 0;
        $sectionField->save();



        // $sectionField = new WebmasterSectionField();
        // $sectionField->webmaster_id = $apartments->id;
        // $sectionField->type = 1;
        // $sectionField->title_jp = 'Aminities';
        // $sectionField->title_vi = 'Tiện ích';
        // $sectionField->title_en = 'Aminities';
        // $sectionField->row_no = 10;
        // $sectionField->status = 1;
        // $sectionField->required = 0;
        // $sectionField->in_table = 0;
        // $sectionField->lang_code = 'all';
        // $sectionField->created_by = '1';
        // $sectionField->view_permission_groups = 0;
        // $sectionField->add_permission_groups = 0;
        // $sectionField->edit_permission_groups = 0;
        // $sectionField->save();


        // foreach($cities as $city) {
        //     $newCity = new City();
        //     $newCity->code = $city->codename;
        //     $newCity->title_vi = $city->name;
        //     $newCity->title_en = $city->name;
        //     $newCity->title_jp = $city->name;
        //     $newCity->save();
        // }

        // foreach($city->districts as $district) {
        //     $newDistrict = new District();
        //     $newDistrict->city_id = $newCity->id;
        //     $newDistrict->code = $district->codename;
        //     $newDistrict->title_vi = $district->name;
        //     $newDistrict->title_en = $district->name;
        //     $newDistrict->title_jp = $district->name;
        //     $newDistrict->save();
        // }
    }
}
