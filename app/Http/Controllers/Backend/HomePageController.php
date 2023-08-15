<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\HomePageSetting;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\UploadHelper;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeSettings = HomePageSetting::first();
        return view('backend.pages.home.create', compact('homeSettings'));
    }

    /**
     * Update Home Page Settings.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (is_null($this->user) || !$this->user->can('page.create')) {
        //     return abort(403, 'You are not allowed to access this page !');
        // }
        //dimensions:width=500,height=500 | max:2048
        //dd($request->all());
        $request->validate([
            'banner_image_1' => 'nullable|image',
            'page_main_title_1' => [],
            'page_main_description_1' => [],
            'banner_image_2' => 'nullable|image',
            'page_main_title_2' => [],
            'page_main_description_2' => [],
            'read_more_btn_link' => [],
            'get_started_btn_link' => [],
            'main_service_title_1' => [],
            'main_service_description_1' => [],
            'main_service_icon_1' => 'nullable|image',
            'main_service_read_more_btn_link_1' => [],
            'main_service_title_2' => [],
            'main_service_description_2' => [],
            'main_service_icon_2' => 'nullable|image',
            'main_service_read_more_btn_link_2' => [],
            'main_service_title_3' => [],
            'main_service_description_3' => [],
            'main_service_icon_3' => 'nullable|image',
            'main_service_read_more_btn_link_3' => [],
            'about_us_section_banner_image' => 'nullable|image',
            'about_us_section_title' => [],
            'about_us_section_description' => [],
            'about_us_section_view_more_btn_link' => [],
            'services_section_title' => [],
            'services_section_description' => [],

            'services_section_box_1_title' => [],
            'services_section_box_1_description' => [],
            'services_section_box_1_icon' => 'nullable|image',
            'services_section_box_1_read_more_btn_link' => [],

            'services_section_box_2_title' => [],
            'services_section_box_2_description' => [],
            'services_section_box_2_icon' => 'nullable|image',
            'services_section_box_2_read_more_btn_link' => [],

            'services_section_box_3_title' => [],
            'services_section_box_3_description' => [],
            'services_section_box_3_icon' => 'nullable|image',
            'services_section_box_3_read_more_btn_link' => [],

            'services_section_box_4_title' => [],
            'services_section_box_4_description' => [],
            'services_section_box_4_icon' => 'nullable|image',
            'services_section_box_4_read_more_btn_link' => [],

            'services_section_box_5_title' => [],
            'services_section_box_5_description' => [],
            'services_section_box_5_icon' => 'nullable|image',
            'services_section_box_5_read_more_btn_link' => [],

            'services_section_box_6_title' => [],
            'services_section_box_6_description' => [],
            'services_section_box_6_icon' => [],
            'services_section_box_6_read_more_btn_link' => [],

            'services_section_box_7_title' => [],
            'services_section_box_7_description' => [],
            'services_section_box_7_icon' => 'nullable|image',
            'services_section_box_7_read_more_btn_link' => [],

            'services_section_box_8_title' => [],
            'services_section_box_8_description' => [],
            'services_section_box_8_icon' => 'nullable|image',
            'services_section_box_8_read_more_btn_link' => [],

            'why_choose_us_section_title' => [],
            'why_choose_us_section_description' => [],

            'why_choose_us_section_box_1_title' => [],
            'why_choose_us_section_box_1_bg_image' => 'nullable|image',
            'why_choose_us_section_box_1_description' => [],
            'why_choose_us_section_box_1_icon' => 'nullable|image',
            'why_choose_us_section_box_1_read_more_btn_link' => [],

            'why_choose_us_section_box_2_title' => [],
            'why_choose_us_section_box_2_bg_image' => 'nullable|image',
            'why_choose_us_section_box_2_description' => [],
            'why_choose_us_section_box_2_icon' => 'nullable|image',
            'why_choose_us_section_box_2_read_more_btn_link' => [],

            'why_choose_us_section_box_3_title' => [],
            'why_choose_us_section_box_3_bg_image' => 'nullable|image',
            'why_choose_us_section_box_3_description' => [],
            'why_choose_us_section_box_3_icon' => 'nullable|image',
            'why_choose_us_section_box_3_read_more_btn_link' => [],

            'what_we_do_section_title' => [],
            'what_we_do_section_description' => [],
            'what_we_do_section_bg_image' => 'nullable|image',

            'what_we_do_section_circle_1_percentage' => [],
            'what_we_do_section_circle_1_title_1' => [],
            'what_we_do_section_circle_1_title_2' => [],

            'what_we_do_section_circle_2_percentage' => [],
            'what_we_do_section_circle_2_title_1' => [],
            'what_we_do_section_circle_2_title_2' => [],

            'what_we_do_section_circle_3_percentage' => [],
            'what_we_do_section_circle_3_title_1' => [],
            'what_we_do_section_circle_3_title_2' => [],

            'what_we_do_section_circle_4_percentage' => [],
            'what_we_do_section_circle_4_title_1' => [],
            'what_we_do_section_circle_4_title_2' => [],

            'contact_banner_section_title' => [],
            'contact_banner_section_description' => [],
            'contact_banner_section_bg_image' => 'nullable|image',
            'contact_banner_section_btn_link' => [],

            'our_process_section_title' => [],
            'our_process_section_description' => [],

            'our_process_section_box_1_title' => [],
            'our_process_section_box_1_image' => 'nullable|image',
            'our_process_section_box_1_description' => [],
            'our_process_section_box_1_read_more_btn_link' => [],

            'our_process_section_box_2_title' => [],
            'our_process_section_box_2_image' => 'nullable|image',
            'our_process_section_box_2_description' => [],
            'our_process_section_box_2_read_more_btn_link' => [],

            'our_process_section_box_3_title' => [],
            'our_process_section_box_3_image' => 'nullable|image',
            'our_process_section_box_3_description' => [],
            'our_process_section_box_3_read_more_btn_link' => [],

            'our_team_section_title' => [],
            'our_team_section_description' => [],

            'our_team_section_box_1_name' => [],
            'our_team_section_box_1_image' => 'nullable|image',
            'our_team_section_box_1_designation' => [],
            'our_team_section_box_1_facebook_link' => [],
            'our_team_section_box_1_twitter_link' => [],
            'our_team_section_box_1_instagram_link' => [],
            'our_team_section_box_1_linkedin_link' => [],

            'our_team_section_box_2_name' => [],
            'our_team_section_box_2_image' => 'nullable|image',
            'our_team_section_box_2_designation' => [],
            'our_team_section_box_2_facebook_link' => [],
            'our_team_section_box_2_twitter_link' => [],
            'our_team_section_box_2_instagram_link' => [],
            'our_team_section_box_2_linkedin_link' => [],

            'our_team_section_box_3_name' => [],
            'our_team_section_box_3_image' => 'nullable|image',
            'our_team_section_box_3_designation' => [],
            'our_team_section_box_3_facebook_link' => [],
            'our_team_section_box_3_twitter_link' => [],
            'our_team_section_box_3_instagram_link' => [],
            'our_team_section_box_3_linkedin_link' => [],

            'our_team_section_box_4_name' => [],
            'our_team_section_box_4_image' => 'nullable|image',
            'our_team_section_box_4_designation' => [],
            'our_team_section_box_4_facebook_link' => [],
            'our_team_section_box_4_twitter_link' => [],
            'our_team_section_box_4_instagram_link' => [],
            'our_team_section_box_4_linkedin_link' => []
        ]);

        try {
            DB::beginTransaction();
            $homeSettingsObjCheck = HomePageSetting::first();
            if ($homeSettingsObjCheck == null) {
                $homeSettingsObj = new HomePageSetting();
            } else {
                $homeSettingsObj = $homeSettingsObjCheck;
            }

            //Image/File Uploads
           // self::fileUploads($homeSettingsObj, $request);

            //Saving Data
            if ($request->page_main_title_1 != null) {
                $homeSettingsObj->page_main_title_1 = isset($request->page_main_title_1) ? $request->page_main_title_1 : '';
            }

            if ($request->page_main_description_1 != null) {
                $homeSettingsObj->page_main_description_1 = isset($request->page_main_description_1) ? $request->page_main_description_1 : '';
            }

            if ($request->page_main_title_2 != null) {
                $homeSettingsObj->page_main_title_2 = isset($request->page_main_title_2) ? $request->page_main_title_2 : '';
            }

            if ($request->page_main_description_2 != null) {
                $homeSettingsObj->page_main_description_2 = isset($request->page_main_description_2) ? $request->page_main_description_2 : '';
            }

            if ($request->read_more_btn_link != null) {
                $homeSettingsObj->read_more_btn_link = isset($request->read_more_btn_link) ? $request->read_more_btn_link : '';
            }

            if ($request->get_started_btn_link != null) {
                $homeSettingsObj->get_started_btn_link = isset($request->get_started_btn_link) ? $request->get_started_btn_link : '';
            }

            //Main Services
            if ($request->main_service_title_1 != null) {
                $homeSettingsObj->main_service_title_1 = isset($request->main_service_title_1) ? $request->main_service_title_1 : '';
            }

            if ($request->main_service_description_1 != null) {
                $homeSettingsObj->main_service_description_1 = isset($request->main_service_description_1) ? $request->main_service_description_1 : '';
            }

            if ($request->main_service_read_more_btn_link_1 != null) {
                $homeSettingsObj->main_service_read_more_btn_link_1 = isset($request->main_service_read_more_btn_link_1) ? $request->main_service_read_more_btn_link_1 : '';
            }

            if ($request->main_service_title_2 != null) {
                $homeSettingsObj->main_service_title_2 = isset($request->main_service_title_2) ? $request->main_service_title_2 : '';
            }

            if ($request->main_service_description_2 != null) {
                $homeSettingsObj->main_service_description_2 = isset($request->main_service_description_2) ? $request->main_service_description_2 : '';
            }

            if ($request->main_service_read_more_btn_link_2 != null) {
                $homeSettingsObj->main_service_read_more_btn_link_2 = isset($request->main_service_read_more_btn_link_2) ? $request->main_service_read_more_btn_link_2 : '';
            }

            if ($request->main_service_title_3 != null) {
                $homeSettingsObj->main_service_title_3 = isset($request->main_service_title_3) ? $request->main_service_title_3 : '';
            }

            if ($request->main_service_description_3 != null) {
                $homeSettingsObj->main_service_description_3 = isset($request->main_service_description_3) ? $request->main_service_description_3 : '';
            }

            if ($request->main_service_read_more_btn_link_3 != null) {
                $homeSettingsObj->main_service_read_more_btn_link_3 = isset($request->main_service_read_more_btn_link_3) ? $request->main_service_read_more_btn_link_3 : '';
            }

            //About
            if ($request->about_us_section_title != null) {
                $homeSettingsObj->about_us_section_title = isset($request->about_us_section_title) ? $request->about_us_section_title : '';
            }

            if ($request->about_us_section_description != null) {
                $homeSettingsObj->about_us_section_description = isset($request->about_us_section_description) ? $request->about_us_section_description : '';
            }

            if ($request->about_us_section_view_more_btn_link != null) {
                $homeSettingsObj->about_us_section_view_more_btn_link = isset($request->about_us_section_view_more_btn_link) ? $request->about_us_section_view_more_btn_link : '';
            }

            //Services
            if ($request->services_section_title != null) {
                $homeSettingsObj->services_section_title = isset($request->services_section_title) ? $request->services_section_title : '';
            }

            if ($request->services_section_description != null) {
                $homeSettingsObj->services_section_description = isset($request->services_section_description) ? $request->services_section_description : '';
            }

            if ($request->services_section_box_1_title != null) {
                $homeSettingsObj->services_section_box_1_title = isset($request->services_section_box_1_title) ? $request->services_section_box_1_title : '';
            }

            if ($request->services_section_box_1_description != null) {
                $homeSettingsObj->services_section_box_1_description = isset($request->services_section_box_1_description) ? $request->services_section_box_1_description : '';
            }

            if ($request->services_section_box_1_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_1_read_more_btn_link = isset($request->services_section_box_1_read_more_btn_link) ? $request->services_section_box_1_read_more_btn_link : '';
            }

            if ($request->services_section_box_2_title != null) {
                $homeSettingsObj->services_section_box_2_title = isset($request->services_section_box_2_title) ? $request->services_section_box_2_title : '';
            }

            if ($request->services_section_box_2_description != null) {
                $homeSettingsObj->services_section_box_2_description = isset($request->services_section_box_2_description) ? $request->services_section_box_2_description : '';
            }

            if ($request->services_section_box_2_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_2_read_more_btn_link = isset($request->services_section_box_2_read_more_btn_link) ? $request->services_section_box_2_read_more_btn_link : '';
            }

            if ($request->services_section_box_3_title != null) {
                $homeSettingsObj->services_section_box_3_title = isset($request->services_section_box_3_title) ? $request->services_section_box_3_title : '';
            }

            if ($request->services_section_box_3_description != null) {
                $homeSettingsObj->services_section_box_3_description = isset($request->services_section_box_3_description) ? $request->services_section_box_3_description : '';
            }

            if ($request->services_section_box_3_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_3_read_more_btn_link = isset($request->services_section_box_3_read_more_btn_link) ? $request->services_section_box_3_read_more_btn_link : '';
            }

            if ($request->services_section_box_4_title != null) {
                $homeSettingsObj->services_section_box_4_title = isset($request->services_section_box_4_title) ? $request->services_section_box_4_title : '';
            }

            if ($request->services_section_box_4_description != null) {
                $homeSettingsObj->services_section_box_4_description = isset($request->services_section_box_4_description) ? $request->services_section_box_4_description : '';
            }

            if ($request->services_section_box_4_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_4_read_more_btn_link = isset($request->services_section_box_4_read_more_btn_link) ? $request->services_section_box_4_read_more_btn_link : '';
            }

            if ($request->services_section_box_5_title != null) {
                $homeSettingsObj->services_section_box_5_title = isset($request->services_section_box_5_title) ? $request->services_section_box_5_title : '';
            }

            if ($request->services_section_box_5_description != null) {
                $homeSettingsObj->services_section_box_5_description = isset($request->services_section_box_5_description) ? $request->services_section_box_5_description : '';
            }

            if ($request->services_section_box_5_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_5_read_more_btn_link = isset($request->services_section_box_5_read_more_btn_link) ? $request->services_section_box_5_read_more_btn_link : '';
            }

            if ($request->services_section_box_6_title != null) {
                $homeSettingsObj->services_section_box_6_title = isset($request->services_section_box_6_title) ? $request->services_section_box_6_title : '';
            }

            if ($request->services_section_box_6_description != null) {
                $homeSettingsObj->services_section_box_6_description = isset($request->services_section_box_6_description) ? $request->services_section_box_6_description : '';
            }

            if ($request->services_section_box_6_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_6_read_more_btn_link = isset($request->services_section_box_6_read_more_btn_link) ? $request->services_section_box_6_read_more_btn_link : '';
            }

            if ($request->services_section_box_7_title != null) {
                $homeSettingsObj->services_section_box_7_title = isset($request->services_section_box_7_title) ? $request->services_section_box_7_title : '';
            }

            if ($request->services_section_box_7_description != null) {
                $homeSettingsObj->services_section_box_7_description = isset($request->services_section_box_7_description) ? $request->services_section_box_7_description : '';
            }

            if ($request->services_section_box_7_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_7_read_more_btn_link = isset($request->services_section_box_7_read_more_btn_link) ? $request->services_section_box_7_read_more_btn_link : '';
            }

            if ($request->services_section_box_8_title != null) {
                $homeSettingsObj->services_section_box_8_title = isset($request->services_section_box_8_title) ? $request->services_section_box_8_title : '';
            }

            if ($request->services_section_box_8_description != null) {
                $homeSettingsObj->services_section_box_8_description = isset($request->services_section_box_8_description) ? $request->services_section_box_8_description : '';
            }

            if ($request->services_section_box_8_read_more_btn_link != null) {
                $homeSettingsObj->services_section_box_8_read_more_btn_link = isset($request->services_section_box_8_read_more_btn_link) ? $request->services_section_box_8_read_more_btn_link : '';
            }

            //Why Choose Us
            if ($request->why_choose_us_section_title != null) {
                $homeSettingsObj->why_choose_us_section_title = isset($request->why_choose_us_section_title) ? $request->why_choose_us_section_title : '';
            }

            if ($request->why_choose_us_section_description != null) {
                $homeSettingsObj->why_choose_us_section_description = isset($request->why_choose_us_section_description) ? $request->why_choose_us_section_description : '';
            }

            if ($request->why_choose_us_section_box_1_title != null) {
                $homeSettingsObj->why_choose_us_section_box_1_title = isset($request->why_choose_us_section_box_1_title) ? $request->why_choose_us_section_box_1_title : '';
            }

            if ($request->why_choose_us_section_box_1_description != null) {
                $homeSettingsObj->why_choose_us_section_box_1_description = isset($request->why_choose_us_section_box_1_description) ? $request->why_choose_us_section_box_1_description : '';
            }

            if ($request->why_choose_us_section_box_1_read_more_btn_link != null) {
                $homeSettingsObj->why_choose_us_section_box_1_read_more_btn_link = isset($request->why_choose_us_section_box_1_read_more_btn_link) ? $request->why_choose_us_section_box_1_read_more_btn_link : '';
            }

            if ($request->why_choose_us_section_box_2_title != null) {
                $homeSettingsObj->why_choose_us_section_box_2_title = isset($request->why_choose_us_section_box_2_title) ? $request->why_choose_us_section_box_2_title : '';
            }

            if ($request->why_choose_us_section_box_2_read_more_btn_link != null) {
                $homeSettingsObj->why_choose_us_section_box_2_read_more_btn_link = isset($request->why_choose_us_section_box_2_read_more_btn_link) ? $request->why_choose_us_section_box_2_read_more_btn_link : '';
            }

            if ($request->why_choose_us_section_box_3_title != null) {
                $homeSettingsObj->why_choose_us_section_box_3_title = isset($request->why_choose_us_section_box_3_title) ? $request->why_choose_us_section_box_3_title : '';
            }

            if ($request->why_choose_us_section_box_3_read_more_btn_link != null) {
                $homeSettingsObj->why_choose_us_section_box_3_read_more_btn_link = isset($request->why_choose_us_section_box_3_read_more_btn_link) ? $request->why_choose_us_section_box_3_read_more_btn_link : '';
            }

            //What We Do
            if ($request->what_we_do_section_title != null) {
                $homeSettingsObj->what_we_do_section_title = isset($request->what_we_do_section_title) ? $request->what_we_do_section_title : '';
            }

            if ($request->what_we_do_section_description != null) {
                $homeSettingsObj->what_we_do_section_description = isset($request->what_we_do_section_description) ? $request->what_we_do_section_description : '';
            }

            if ($request->what_we_do_section_circle_1_percentage != null) {
                $homeSettingsObj->what_we_do_section_circle_1_percentage = isset($request->what_we_do_section_circle_1_percentage) ? $request->what_we_do_section_circle_1_percentage : '';
            }

            if ($request->what_we_do_section_circle_1_title_1 != null) {
                $homeSettingsObj->what_we_do_section_circle_1_title_1 = isset($request->what_we_do_section_circle_1_title_1) ? $request->what_we_do_section_circle_1_title_1 : '';
            }

            if ($request->what_we_do_section_circle_1_title_2 != null) {
                $homeSettingsObj->what_we_do_section_circle_1_title_2 = isset($request->what_we_do_section_circle_1_title_2) ? $request->what_we_do_section_circle_1_title_2 : '';
            }

            if ($request->what_we_do_section_circle_2_percentage != null) {
                $homeSettingsObj->what_we_do_section_circle_2_percentage = isset($request->what_we_do_section_circle_2_percentage) ? $request->what_we_do_section_circle_2_percentage : '';
            }

            if ($request->what_we_do_section_circle_2_title_1 != null) {
                $homeSettingsObj->what_we_do_section_circle_2_title_1 = isset($request->what_we_do_section_circle_2_title_1) ? $request->what_we_do_section_circle_2_title_1 : '';
            }

            if ($request->what_we_do_section_circle_2_title_2 != null) {
                $homeSettingsObj->what_we_do_section_circle_2_title_2 = isset($request->what_we_do_section_circle_2_title_2) ? $request->what_we_do_section_circle_2_title_2 : '';
            }

            if ($request->what_we_do_section_circle_3_percentage != null) {
                $homeSettingsObj->what_we_do_section_circle_3_percentage = isset($request->what_we_do_section_circle_3_percentage) ? $request->what_we_do_section_circle_3_percentage : '';
            }

            if ($request->what_we_do_section_circle_3_title_1 != null) {
                $homeSettingsObj->what_we_do_section_circle_3_title_1 = isset($request->what_we_do_section_circle_3_title_1) ? $request->what_we_do_section_circle_3_title_1 : '';
            }

            if ($request->what_we_do_section_circle_3_title_2 != null) {
                $homeSettingsObj->what_we_do_section_circle_3_title_2 = isset($request->what_we_do_section_circle_3_title_2) ? $request->what_we_do_section_circle_3_title_2 : '';
            }

            if ($request->what_we_do_section_circle_4_percentage != null) {
                $homeSettingsObj->what_we_do_section_circle_4_percentage = isset($request->what_we_do_section_circle_4_percentage) ? $request->what_we_do_section_circle_4_percentage : '';
            }

            if ($request->what_we_do_section_circle_4_title_1 != null) {
                $homeSettingsObj->what_we_do_section_circle_4_title_1 = isset($request->what_we_do_section_circle_4_title_1) ? $request->what_we_do_section_circle_4_title_1 : '';
            }

            if ($request->what_we_do_section_circle_4_title_2 != null) {
                $homeSettingsObj->what_we_do_section_circle_4_title_2 = isset($request->what_we_do_section_circle_4_title_2) ? $request->what_we_do_section_circle_4_title_2 : '';
            }

            //Contact Banner
            if ($request->contact_banner_section_title != null) {
                $homeSettingsObj->contact_banner_section_title = isset($request->contact_banner_section_title) ? $request->contact_banner_section_title : '';
            }

            if ($request->contact_banner_section_description != null) {
                $homeSettingsObj->contact_banner_section_description = isset($request->contact_banner_section_description) ? $request->contact_banner_section_description : '';
            }

            if ($request->contact_banner_section_btn_link != null) {
                $homeSettingsObj->contact_banner_section_btn_link = isset($request->contact_banner_section_btn_link) ? $request->contact_banner_section_btn_link : '';
            }

            //Our Process
            if ($request->our_process_section_title != null) {
                $homeSettingsObj->our_process_section_title = isset($request->our_process_section_title) ? $request->our_process_section_title : '';
            }

            if ($request->our_process_section_description != null) {
                $homeSettingsObj->our_process_section_description = isset($request->our_process_section_description) ? $request->our_process_section_description : '';
            }

            if ($request->our_process_section_box_1_title != null) {
                $homeSettingsObj->our_process_section_box_1_title = isset($request->our_process_section_box_1_title) ? $request->our_process_section_box_1_title : '';
            }

            if ($request->our_process_section_box_1_description != null) {
                $homeSettingsObj->our_process_section_box_1_description = isset($request->our_process_section_box_1_description) ? $request->our_process_section_box_1_description : '';
            }

            if ($request->our_process_section_box_1_read_more_btn_link != null) {
                $homeSettingsObj->our_process_section_box_1_read_more_btn_link = isset($request->our_process_section_box_1_read_more_btn_link) ? $request->our_process_section_box_1_read_more_btn_link : '';
            }

            if ($request->our_process_section_box_2_title != null) {
                $homeSettingsObj->our_process_section_box_2_title = isset($request->our_process_section_box_2_title) ? $request->our_process_section_box_2_title : '';
            }

            if ($request->our_process_section_box_2_description != null) {
                $homeSettingsObj->our_process_section_box_2_description = isset($request->our_process_section_box_2_description) ? $request->our_process_section_box_2_description : '';
            }

            if ($request->our_process_section_box_2_read_more_btn_link != null) {
                $homeSettingsObj->our_process_section_box_2_read_more_btn_link = isset($request->our_process_section_box_2_read_more_btn_link) ? $request->our_process_section_box_2_read_more_btn_link : '';
            }


            if ($request->our_process_section_box_3_title != null) {
                $homeSettingsObj->our_process_section_box_3_title = isset($request->our_process_section_box_3_title) ? $request->our_process_section_box_3_title : '';
            }

            if ($request->our_process_section_box_3_description != null) {
                $homeSettingsObj->our_process_section_box_3_description = isset($request->our_process_section_box_3_description) ? $request->our_process_section_box_3_description : '';
            }

            if ($request->our_process_section_box_3_read_more_btn_link != null) {
                $homeSettingsObj->our_process_section_box_3_read_more_btn_link = isset($request->our_process_section_box_3_read_more_btn_link) ? $request->our_process_section_box_3_read_more_btn_link : '';
            }

            //Our Team
            if ($request->our_team_section_title != null) {
                $homeSettingsObj->our_team_section_title = isset($request->our_team_section_title) ? $request->our_team_section_title : '';
            }

            if ($request->our_team_section_description != null) {
                $homeSettingsObj->our_team_section_description = isset($request->our_team_section_description) ? $request->our_team_section_description : '';
            }


            if ($request->our_team_section_box_1_name != null) {
                $homeSettingsObj->our_team_section_box_1_name = isset($request->our_team_section_box_1_name) ? $request->our_team_section_box_1_name : '';
            }

            if ($request->our_team_section_box_1_designation != null) {
                $homeSettingsObj->our_team_section_box_1_designation = isset($request->our_team_section_box_1_designation) ? $request->our_team_section_box_1_designation : '';
            }

            if ($request->our_team_section_box_1_facebook_link != null) {
                $homeSettingsObj->our_team_section_box_1_facebook_link = isset($request->our_team_section_box_1_facebook_link) ? $request->our_team_section_box_1_facebook_link : '';
            }

            if ($request->our_team_section_box_1_twitter_link != null) {
                $homeSettingsObj->our_team_section_box_1_twitter_link = isset($request->our_team_section_box_1_twitter_link) ? $request->our_team_section_box_1_twitter_link : '';
            }

            if ($request->our_team_section_box_1_instagram_link != null) {
                $homeSettingsObj->our_team_section_box_1_instagram_link = isset($request->our_team_section_box_1_instagram_link) ? $request->our_team_section_box_1_instagram_link : '';
            }

            if ($request->our_team_section_box_1_linkedin_link != null) {
                $homeSettingsObj->our_team_section_box_1_linkedin_link = isset($request->our_team_section_box_1_linkedin_link) ? $request->our_team_section_box_1_linkedin_link : '';
            }

            if ($request->our_team_section_box_2_name != null) {
                $homeSettingsObj->our_team_section_box_2_name = isset($request->our_team_section_box_2_name) ? $request->our_team_section_box_2_name : '';
            }

            if ($request->our_team_section_box_2_designation != null) {
                $homeSettingsObj->our_team_section_box_2_designation = isset($request->our_team_section_box_2_designation) ? $request->our_team_section_box_2_designation : '';
            }

            if ($request->our_team_section_box_2_facebook_link != null) {
                $homeSettingsObj->our_team_section_box_2_facebook_link = isset($request->our_team_section_box_2_facebook_link) ? $request->our_team_section_box_2_facebook_link : '';
            }

            if ($request->our_team_section_box_2_twitter_link != null) {
                $homeSettingsObj->our_team_section_box_2_twitter_link = isset($request->our_team_section_box_2_twitter_link) ? $request->our_team_section_box_2_twitter_link : '';
            }

            if ($request->our_team_section_box_2_instagram_link != null) {
                $homeSettingsObj->our_team_section_box_2_instagram_link = isset($request->our_team_section_box_2_instagram_link) ? $request->our_team_section_box_2_instagram_link : '';
            }

            if ($request->our_team_section_box_2_linkedin_link != null) {
                $homeSettingsObj->our_team_section_box_2_linkedin_link = isset($request->our_team_section_box_2_linkedin_link) ? $request->our_team_section_box_2_linkedin_link : '';
            }

            if ($request->our_team_section_box_3_name != null) {
                $homeSettingsObj->our_team_section_box_3_name = isset($request->our_team_section_box_3_name) ? $request->our_team_section_box_3_name : '';
            }

            if ($request->our_team_section_box_3_designation != null) {
                $homeSettingsObj->our_team_section_box_3_designation = isset($request->our_team_section_box_3_designation) ? $request->our_team_section_box_3_designation : '';
            }

            if ($request->our_team_section_box_3_facebook_link != null) {
                $homeSettingsObj->our_team_section_box_3_facebook_link = isset($request->our_team_section_box_3_facebook_link) ? $request->our_team_section_box_3_facebook_link : '';
            }

            if ($request->our_team_section_box_3_twitter_link != null) {
                $homeSettingsObj->our_team_section_box_3_twitter_link = isset($request->our_team_section_box_3_twitter_link) ? $request->our_team_section_box_3_twitter_link : '';
            }

            if ($request->our_team_section_box_3_instagram_link != null) {
                $homeSettingsObj->our_team_section_box_3_instagram_link = isset($request->our_team_section_box_3_instagram_link) ? $request->our_team_section_box_3_instagram_link : '';
            }

            if ($request->our_team_section_box_3_linkedin_link != null) {
                $homeSettingsObj->our_team_section_box_3_linkedin_link = isset($request->our_team_section_box_3_linkedin_link) ? $request->our_team_section_box_3_linkedin_link : '';
            }

            if ($request->our_team_section_box_4_name != null) {
                $homeSettingsObj->our_team_section_box_4_name = isset($request->our_team_section_box_4_name) ? $request->our_team_section_box_4_name : '';
            }

            if ($request->our_team_section_box_4_designation != null) {
                $homeSettingsObj->our_team_section_box_4_designation = isset($request->our_team_section_box_4_designation) ? $request->our_team_section_box_4_designation : '';
            }

            if ($request->our_team_section_box_4_facebook_link != null) {
                $homeSettingsObj->our_team_section_box_4_facebook_link = isset($request->our_team_section_box_4_facebook_link) ? $request->our_team_section_box_4_facebook_link : '';
            }

            if ($request->our_team_section_box_4_twitter_link != null) {
                $homeSettingsObj->our_team_section_box_4_twitter_link = isset($request->our_team_section_box_4_twitter_link) ? $request->our_team_section_box_4_twitter_link : '';
            }

            if ($request->our_team_section_box_4_instagram_link != null) {
                $homeSettingsObj->our_team_section_box_4_instagram_link = isset($request->our_team_section_box_4_instagram_link) ? $request->our_team_section_box_4_instagram_link : '';
            }

            if ($request->our_team_section_box_4_linkedin_link != null) {
                $homeSettingsObj->our_team_section_box_4_linkedin_link = isset($request->our_team_section_box_4_linkedin_link) ? $request->our_team_section_box_4_linkedin_link : '';
            }

            $homeSettingsObj->save();
            DB::commit();
            session()->flash('success', 'Home Page Settings Updated Successfully !!');
            return redirect()->route('admin.page-management.home.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            DB::rollBack();
            return back();
        }

    }

    /**
     * File Uploads
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileUploads($homeSettingsObj, $request)
    {
        //Home
        if (!is_null($request->banner_image_1)) {
            $homeSettingsObj->banner_image_1 = UploadHelper::upload('banner_image_1', $request->banner_image_1, 'home' . '-' . time() . '-banner-1', 'assets/images/pages/home');
        }

        if (!is_null($request->banner_image_2)) {
            $homeSettingsObj->banner_image_2 = UploadHelper::upload('banner_image_2', $request->banner_image_2, 'home' . '-' . time() . '-banner-2', 'assets/images/pages/home');
        }

        if (!is_null($request->main_service_icon_1)) {
            $homeSettingsObj->main_service_icon_1 = UploadHelper::upload('main_service_icon_1', $request->main_service_icon_1, 'main-service'. '-' . time() . '-icon-1', 'assets/images/pages/home');
        }

        if (!is_null($request->main_service_icon_2)) {
            $homeSettingsObj->main_service_icon_2 = UploadHelper::upload('main_service_icon_2', $request->main_service_icon_2, 'main-service'. '-' . time() . '-icon-2', 'assets/images/pages/home');
        }

        if (!is_null($request->main_service_icon_2)) {
            $homeSettingsObj->main_service_icon_2 = UploadHelper::upload('main_service_icon_2', $request->main_service_icon_2, 'main-service'. '-' . time() . '-icon-2', 'assets/images/pages/home');
        }

        if (!is_null($request->main_service_icon_3)) {
            $homeSettingsObj->main_service_icon_3 = UploadHelper::upload('main_service_icon_3', $request->main_service_icon_3, 'main-service'. '-' . time() . '-icon-3', 'assets/images/pages/home');
        }

        //About
        if (!is_null($request->about_us_section_banner_image)) {
            $homeSettingsObj->about_us_section_banner_image = UploadHelper::upload('about_us_section_banner_image', $request->about_us_section_banner_image, 'about-section'. '-' . time() . '-banner', 'assets/images/pages/home');
        }

        //Services
        if (!is_null($request->services_section_box_1_icon)) {
            $homeSettingsObj->services_section_box_1_icon = UploadHelper::upload('services_section_box_1_icon', $request->services_section_box_1_icon, 'services-section-box-1'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_2_icon)) {
            $homeSettingsObj->services_section_box_2_icon = UploadHelper::upload('services_section_box_2_icon', $request->services_section_box_2_icon, 'services-section-box-2'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_3_icon)) {
            $homeSettingsObj->services_section_box_3_icon = UploadHelper::upload('services_section_box_3_icon', $request->services_section_box_3_icon, 'services-section-box-3'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_4_icon)) {
            $homeSettingsObj->services_section_box_4_icon = UploadHelper::upload('services_section_box_4_icon', $request->services_section_box_4_icon, 'services-section-box-4'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_5_icon)) {
            $homeSettingsObj->services_section_box_5_icon = UploadHelper::upload('services_section_box_5_icon', $request->services_section_box_5_icon, 'services-section-box-5'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_6_icon)) {
            $homeSettingsObj->services_section_box_6_icon = UploadHelper::upload('services_section_box_6_icon', $request->services_section_box_6_icon, 'services-section-box-6'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_7_icon)) {
            $homeSettingsObj->services_section_box_7_icon = UploadHelper::upload('services_section_box_7_icon', $request->services_section_box_7_icon, 'services-section-box-7'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->services_section_box_8_icon)) {
            $homeSettingsObj->services_section_box_8_icon = UploadHelper::upload('services_section_box_8_icon', $request->services_section_box_8_icon, 'services-section-box-8'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        //Why choose us
        if (!is_null($request->why_choose_us_section_box_1_bg_image)) {
            $homeSettingsObj->why_choose_us_section_box_1_bg_image = UploadHelper::upload('why_choose_us_section_box_1_bg_image', $request->why_choose_us_section_box_1_bg_image, 'why-choose-box-1'. '-' . time() . '-bg-image', 'assets/images/pages/home');
        }

        if (!is_null($request->why_choose_us_section_box_2_bg_image)) {
            $homeSettingsObj->why_choose_us_section_box_2_bg_image = UploadHelper::upload('why_choose_us_section_box_2_bg_image', $request->why_choose_us_section_box_2_bg_image, 'why-choose-box-2'. '-' . time() . '-bg-image', 'assets/images/pages/home');
        }

        if (!is_null($request->why_choose_us_section_box_3_bg_image)) {
            $homeSettingsObj->why_choose_us_section_box_3_bg_image = UploadHelper::upload('why_choose_us_section_box_3_bg_image', $request->why_choose_us_section_box_3_bg_image, 'why-choose-box-3'. '-' . time() . '-bg-image', 'assets/images/pages/home');
        }

        if (!is_null($request->why_choose_us_section_box_1_icon)) {
            $homeSettingsObj->why_choose_us_section_box_1_icon = UploadHelper::upload('why_choose_us_section_box_1_icon', $request->why_choose_us_section_box_1_icon, 'why-choose-box-1'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->why_choose_us_section_box_2_icon)) {
            $homeSettingsObj->why_choose_us_section_box_2_icon = UploadHelper::upload('why_choose_us_section_box_2_icon', $request->why_choose_us_section_box_2_icon, 'why-choose-box-2'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        if (!is_null($request->why_choose_us_section_box_3_icon)) {
            $homeSettingsObj->why_choose_us_section_box_3_icon = UploadHelper::upload('why_choose_us_section_box_3_icon', $request->why_choose_us_section_box_3_icon, 'why-choose-box-3'. '-' . time() . '-icon', 'assets/images/pages/home');
        }

        //What we do
        if (!is_null($request->what_we_do_section_bg_image)) {
            $homeSettingsObj->what_we_do_section_bg_image = UploadHelper::upload('what_we_do_section_bg_image', $request->what_we_do_section_bg_image, 'what-we-do'. '-' . time() . '-bg-image', 'assets/images/pages/home');
        }

        //Contact Banner
        if (!is_null($request->contact_banner_section_bg_image)) {
            $homeSettingsObj->contact_banner_section_bg_image = UploadHelper::upload('contact_banner_section_bg_image', $request->contact_banner_section_bg_image, 'contact-banner'. '-' . time() . '-bg-image', 'assets/images/pages/home');
        }

        //Our Process
        if (!is_null($request->our_process_section_box_1_image)) {
            $homeSettingsObj->our_process_section_box_1_image = UploadHelper::upload('our_process_section_box_1_image', $request->our_process_section_box_1_image, 'our-process-box-1'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        if (!is_null($request->our_process_section_box_2_image)) {
            $homeSettingsObj->our_process_section_box_2_image = UploadHelper::upload('our_process_section_box_2_image', $request->our_process_section_box_2_image, 'our-process-box-2'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        if (!is_null($request->our_process_section_box_3_image)) {
            $homeSettingsObj->our_process_section_box_3_image = UploadHelper::upload('our_process_section_box_3_image', $request->our_process_section_box_3_image, 'our-process-box-3'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        //Our Team
        if (!is_null($request->our_team_section_box_1_image)) {
            $homeSettingsObj->our_team_section_box_1_image = UploadHelper::upload('our_team_section_box_1_image', $request->our_team_section_box_1_image, 'our-team-box-1'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        if (!is_null($request->our_team_section_box_2_image)) {
            $homeSettingsObj->our_team_section_box_2_image = UploadHelper::upload('our_team_section_box_2_image', $request->our_team_section_box_2_image, 'our-team-box-2'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        if (!is_null($request->our_team_section_box_3_image)) {
            $homeSettingsObj->our_team_section_box_3_image = UploadHelper::upload('our_team_section_box_3_image', $request->our_team_section_box_3_image, 'our-team-box-3'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        if (!is_null($request->our_team_section_box_4_image)) {
            $homeSettingsObj->our_team_section_box_4_image = UploadHelper::upload('our_team_section_box_4_image', $request->our_team_section_box_4_image, 'our-team-box-4'. '-' . time() . '-image', 'assets/images/pages/home');
        }

        return true;
    }
}
