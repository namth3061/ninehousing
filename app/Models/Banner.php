<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public function getBannersBySectionIds($sectionIds) {
        $banners = Banner::whereIn('section_id', $sectionIds)
            ->where('status', 1)
            ->orderby('row_no', 'asc')
            ->get();

        return $banners;
    }

    public function webmasterBanner()
    {
        return $this->belongsTo('App\Models\WebmasterBanner', 'section_id');
    }
}
