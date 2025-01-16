<?php

namespace App\Http\Controllers;

use App\Models\SectionWiseData;
use DB;

class HomeController extends Controller
{


    public function new()
    {

        $website_id = 2;
        $section_ids = \DB::table('website_wise_section')->where('website_id', $website_id)->pluck('section_id');
        $data = \DB::table('section_wise_details')->whereIn('id', $section_ids)->get();
        $main_url = DB::table('site_variable')->where('site_key', 'main_link')->pluck('site_value');
        foreach ($data as $list) {
            $list->rules = json_decode($list->rules, true);
            $list->text_details = json_decode($list->text_details);
            $list->image_details = json_decode($list->image_details);
            $list->button_details = json_decode($list->button_details);
            $list->video_details = json_decode($list->video_details);
            $list->key_value_pair = json_decode($list->key_value_pair);
            $list->main_url = $main_url;
        }
        dd($data);
        return view('welcome', compact('data'));
    }
}
