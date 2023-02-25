<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\WebmasterSection;

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

        // Services
        $sections = new WebmasterSection();
        $sections->row_no = 2;

        $sections->title_en = "Services";
        $sections->title_vi = "Services";
        $sections->title_jp = "Services";

        $sections->seo_title_en = "Services";
        $sections->seo_title_vi = "Services";
        $sections->seo_title_jp = "Services";

        $sections->seo_url_slug_en = "services";
        $sections->seo_url_slug_jp = "services";
        $sections->seo_url_slug_vi = "services";

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
        $sections->maps_status = 0;
        $sections->order_status = 1;
        $sections->related_status = 1;
        $sections->expire_date_status = 0;
        $sections->extra_attach_file_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // News
        $sections = new WebmasterSection();
        $sections->row_no = 3;

        $sections->title_en = "Activity";
        $sections->title_vi = "Hoạt động";
        $sections->title_jp = "Activity";

        $sections->seo_title_en = "Activity";
        $sections->seo_title_vi = "Hoạt động";
        $sections->seo_title_jp = "Activity";

        $sections->seo_url_slug_en = "activity";
        $sections->seo_url_slug_jp = "activity";
        $sections->seo_url_slug_vi = "hoat-dong";

        $sections->type = 0;
        $sections->sections_status = 0;
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

        // Products
        $sections = new WebmasterSection();
        $sections->row_no = 8;

        $sections->title_en = "Apartment";
        $sections->title_jp = "Apartment";
        $sections->title_vi = "Căn hộ";

        $sections->seo_title_en = "Apartment";
        $sections->seo_title_vi = "Căn hộ";
        $sections->seo_title_jp = "Apartment";

        $sections->seo_url_slug_en = "Apartment";
        $sections->seo_url_slug_jp = "Apartment";
        $sections->seo_url_slug_vi = "can-ho";

        $sections->type = 0;
        $sections->sections_status = 2;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 1;
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

    }
}
