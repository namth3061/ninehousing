<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\District;

class CityDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        foreach($cities as $city) {
            $newCity = new City();
            $newCity->code = $city->codename;
            $newCity->title_vi = $city->name;
            $newCity->title_en = $city->name;
            $newCity->title_jp = $city->name;
            $newCity->save();

            foreach($city->districts as $district) {
                $newDistrict = new District();
                $newDistrict->city_id = $newCity->id;
                $newDistrict->code = $district->codename;
                $newDistrict->title_vi = $district->name;
                $newDistrict->title_en = $district->name;
                $newDistrict->title_jp = $district->name;
                $newDistrict->save();
            }
        }
    }
}
