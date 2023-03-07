<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Main Menu
        $Menu1 = new Menu();
        $Menu1->row_no = 1;
        $Menu1->father_id = 0;

        $Menu1->title_en = "Main Menu";
        $Menu1->title_jp = "Main Menu";
        $Menu1->title_vi = "Menu Chính";

        $Menu1->status = 1;
        $Menu1->type = 0;
        $Menu1->cat_id = 0;
        $Menu1->link = "";
        $Menu1->created_by = 1;
        $Menu1->save();

        // Footer Menu
        $Menu2 = new Menu();
        $Menu2->row_no = 2;
        $Menu2->father_id = 0;

        $Menu2->title_en = "Quick Links";
        $Menu2->title_jp = "Quick Links";
        $Menu2->title_vi = "Links Nhanh";

        $Menu2->status = 1;
        $Menu2->type = 0;
        $Menu2->cat_id = 0;
        $Menu2->link = "";
        $Menu2->created_by = 1;
        $Menu2->save();

        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Home";
        $Menu->title_jp = "Home";
        $Menu->title_vi = "Trang chủ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "About";
        $Menu->title_jp = "About";
        $Menu->title_vi = "About";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Services
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Services";
        $Menu->title_vi = "Services";
        $Menu->title_jp = "Services";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 2;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // News
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Activity";
        $Menu->title_jp = "Activity";
        $Menu->title_vi = "Hoạt động";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 3;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Products
        $Menu = new Menu();
        $Menu->row_no = 8;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Apartment";
        $Menu->title_jp = "Apartment";
        $Menu->title_vi = "Căn hộ";

        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 8;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 9;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Blog";
        $Menu->title_jp = "Blog";
        $Menu->title_vi = "Blog";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 10;
        $Menu->father_id = $Menu1->id;

        $Menu->title_en = "Contact";
        $Menu->title_jp = "Contact";
        $Menu->title_vi = "Liên hệ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();

        // Footer Menu Sub links
        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "Home";
        $Menu->title_vi = "Home";
        $Menu->title_jp = "Trang chủ";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "About";
        $Menu->title_vi = "About";
        $Menu->title_jp = "About";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "Blog";
        $Menu->title_vi = "Blog";
        $Menu->title_jp = "Blog";

        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Privacy
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "Privacy";
        $Menu->title_vi = "Privacy";
        $Menu->title_jp = "Privacy";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/privacy";
        $Menu->created_by = 1;
        $Menu->save();
        // Terms
        $Menu = new Menu();
        $Menu->row_no = 5;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "Terms & Conditions";
        $Menu->title_jp = "Terms & Conditions";
        $Menu->title_vi = "Terms & Conditions";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/terms";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 6;
        $Menu->father_id = $Menu2->id;

        $Menu->title_en = "Contact";
        $Menu->title_jp = "Contact";
        $Menu->title_vi = "Contact";

        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();
        
    }
}
