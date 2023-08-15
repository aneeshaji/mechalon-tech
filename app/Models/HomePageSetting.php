<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    protected $fillable = [
        'banner_image_1', // done
        'page_main_title_1', // done
        'page_main_description_1',  // done
        'banner_image_2', // done
        'page_main_title_2', // done
        'page_main_description_2', // done
        'read_more_btn_link', // done
        'get_started_btn_link', // done

        'main_service_title_1', // done
        'main_service_description_1', // done
        'main_service_icon_1', // done
        'main_service_read_more_btn_link_1', // done
        'main_service_title_2', // done
        'main_service_description_2', // done
        'main_service_icon_2', // done
        'main_service_read_more_btn_link_2', // done
        'main_service_title_3', // done
        'main_service_description_3', // done
        'main_service_icon_3', // done
        'main_service_read_more_btn_link_3', // done

        'about_us_section_banner_image', // done
        'about_us_section_title', // done
        'about_us_section_description', // done
        'about_us_section_view_more_btn_link', // done

        'services_section_title', // done
        'services_section_description', // done

        'services_section_box_1_title', // done
        'services_section_box_1_description', // done
        'services_section_box_1_icon', // done
        'services_section_box_1_read_more_btn_link', // done

        'services_section_box_2_title', // done
        'services_section_box_2_description',  // done
        'services_section_box_2_icon', // done
        'services_section_box_2_read_more_btn_link',  // done

        'services_section_box_3_title', // done
        'services_section_box_3_description', // done
        'services_section_box_3_icon', // done
        'services_section_box_3_read_more_btn_link', // done

        'services_section_box_4_title', // done
        'services_section_box_4_description', // done
        'services_section_box_4_icon', // done
        'services_section_box_4_read_more_btn_link',  // done

        'services_section_box_5_title', // done
        'services_section_box_5_description', // done
        'services_section_box_5_icon', // done
        'services_section_box_5_read_more_btn_link', // done

        'services_section_box_6_title', // done
        'services_section_box_6_description', // done
        'services_section_box_6_icon', // done
        'services_section_box_6_read_more_btn_link', // done

        'services_section_box_7_title', // done
        'services_section_box_7_description', // done
        'services_section_box_7_icon', // done
        'services_section_box_7_read_more_btn_link', // done

        'services_section_box_8_title',  // done
        'services_section_box_8_description', // done
        'services_section_box_8_icon', // done
        'services_section_box_8_read_more_btn_link', //done

        'why_choose_us_section_title', // done
        'why_choose_us_section_description', // done

        'why_choose_us_section_box_1_title', // done
        'why_choose_us_section_box_1_bg_image', // done
        'why_choose_us_section_box_1_description', // done
        'why_choose_us_section_box_1_icon', // done
        'why_choose_us_section_box_1_read_more_btn_link', // done

        'why_choose_us_section_box_2_title', // done
        'why_choose_us_section_box_2_bg_image', // done
        'why_choose_us_section_box_2_description',
        'why_choose_us_section_box_2_icon', // done
        'why_choose_us_section_box_2_read_more_btn_link', // done

        'why_choose_us_section_box_3_title', // done
        'why_choose_us_section_box_3_bg_image', // done
        'why_choose_us_section_box_3_description',
        'why_choose_us_section_box_3_icon', // done
        'why_choose_us_section_box_3_read_more_btn_link', // done

        'what_we_do_section_title', // done
        'what_we_do_section_description', // done
        'what_we_do_section_bg_image', // done

        'what_we_do_section_circle_1_percentage', // done
        'what_we_do_section_circle_1_title_1', // done
        'what_we_do_section_circle_1_title_2', // done

        'what_we_do_section_circle_2_percentage', // done
        'what_we_do_section_circle_2_title_1', // done
        'what_we_do_section_circle_2_title_2', // done

        'what_we_do_section_circle_3_percentage', // done
        'what_we_do_section_circle_3_title_1', // done
        'what_we_do_section_circle_3_title_2', // done

        'what_we_do_section_circle_4_percentage', // done
        'what_we_do_section_circle_4_title_1', // done
        'what_we_do_section_circle_4_title_2', // done

        'contact_banner_section_title', // done
        'contact_banner_section_description', // done
        'contact_banner_section_bg_image', // done
        'contact_banner_section_btn_link', // done

        'our_process_section_title', // done
        'our_process_section_description', // done

        'our_process_section_box_1_title', // done
        'our_process_section_box_1_image',  // done
        'our_process_section_box_1_description',
        'our_process_section_box_1_read_more_btn_link', // done

        'our_process_section_box_2_title', // done
        'our_process_section_box_2_image', // done
        'our_process_section_box_2_description', // done
        'our_process_section_box_2_read_more_btn_link', // done

        'our_process_section_box_3_title', // done
        'our_process_section_box_3_image', // done
        'our_process_section_box_3_description', // done
        'our_process_section_box_3_read_more_btn_link', // done

        'our_team_section_title', // done
        'our_team_section_description', // done

        'our_team_section_box_1_name',
        'our_team_section_box_1_image', // done
        'our_team_section_box_1_designation',
        'our_team_section_box_1_facebook_link',
        'our_team_section_box_1_twitter_link',
        'our_team_section_box_1_instagram_link',
        'our_team_section_box_1_linkedin_link',

        'our_team_section_box_2_name',
        'our_team_section_box_2_image', // done
        'our_team_section_box_2_designation',
        'our_team_section_box_2_facebook_link',
        'our_team_section_box_2_twitter_link',
        'our_team_section_box_2_instagram_link',
        'our_team_section_box_2_linkedin_link',

        'our_team_section_box_3_name',
        'our_team_section_box_3_image', // done
        'our_team_section_box_3_designation',
        'our_team_section_box_3_facebook_link',
        'our_team_section_box_3_twitter_link',
        'our_team_section_box_3_instagram_link',
        'our_team_section_box_3_linkedin_link',

        'our_team_section_box_4_name',
        'our_team_section_box_4_image', // done
        'our_team_section_box_4_designation',
        'our_team_section_box_4_facebook_link',
        'our_team_section_box_4_twitter_link',
        'our_team_section_box_4_instagram_link',
        'our_team_section_box_4_linkedin_link',
        // 'deleted_at',
        // 'updated_by',
        // 'deleted_by',
        'created_at',
        'updated_at'
    ];
}
