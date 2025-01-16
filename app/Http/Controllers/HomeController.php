<?php

namespace App\Http\Controllers;
use App\Models\SectionWiseData;



use DB;

class HomeController extends Controller
{

    public function index()
    {

        $get_data_section_1 = SectionWiseData::where('section', 1)->where('status', 0)->first();
        $get_data_section_2 = SectionWiseData::where('section', 2)->where('status', 0)->first();
        $get_data_section_3 = SectionWiseData::where('section', 3)

            ->orderBy('created_at', 'desc') // Explicitly order by 'created_at' in descending order
            ->first();
        $get_data_section_4 = SectionWiseData::where('section', 4)->orderBy('created_at', 'desc')->first();
        $get_data_section_6 = SectionWiseData::where('section', 6)->where('status', 0)->first();
        $get_data_section_7 = SectionWiseData::where('section', 7)->orderBy('created_at', 'desc') // Explicitly order by 'created_at' in descending order
            ->first();
        $get_data_section_10 = SectionWiseData::where('section', 10)->where('status', 0)->first();
        $get_data_section_8 = SectionWiseData::where('section', 8)->where('status', 0)->first();
        $get_data_section_9 = SectionWiseData::where('section', 9)->where('status', 0)->first();

        // dd($get_data_section_2);
        $link_project = DB::table('site_variable')->where('site_key', 'main_link')->first();

        return view('welcome', compact('get_data_section_8', 'get_data_section_10', 'get_data_section_7', 'get_data_section_1', 'get_data_section_2', 'get_data_section_4', 'get_data_section_3', 'link_project', 'get_data_section_6', 'get_data_section_8', 'get_data_section_9'));
    }
    public function new()
    {
        $get_data_section_1 = SectionWiseData::where('section', 1)->where('status', 0)->first();
        $get_data_section_2 = SectionWiseData::where('section', 2)->where('status', 0)->first();
        $get_data_section_3 = SectionWiseData::where('section', 3)

            ->orderBy('created_at', 'desc') // Explicitly order by 'created_at' in descending order
            ->first();
        $get_data_section_4 = SectionWiseData::where('section', 4)->orderBy('created_at', 'desc')->first();
        $get_data_section_6 = SectionWiseData::where('section', 6)->where('status', 0)->first();
        $get_data_section_7 = SectionWiseData::where('section', 7)->orderBy('created_at', 'desc') // Explicitly order by 'created_at' in descending order
            ->first();
        $get_data_section_10 = SectionWiseData::where('section', 10)->where('status', 0)->first();
        $get_data_section_8 = SectionWiseData::where('section', 8)->where('status', 0)->first();
        $get_data_section_9 = SectionWiseData::where('section', 9)->where('status', 0)->first();

        // dd($get_data_section_2);
        $link_project = DB::table('site_variable')->where('site_key', 'main_link')->first();

        // above fields will not be required once we remove that
        // on frontend you will get section  data in collection you can choose ID wise
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

        // dd($data);

        return view('welcome', compact('data', 'get_data_section_8', 'get_data_section_10', 'get_data_section_7', 'get_data_section_1', 'get_data_section_2', 'get_data_section_4', 'get_data_section_3', 'link_project', 'get_data_section_6', 'get_data_section_8', 'get_data_section_9'));
    }
}
