<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            //Home Page Section 1 - Banners
            $table->longText('banner_image_1')->nullable();
            $table->longText('page_main_title_1')->nullable();
            $table->longText('page_main_description_1')->nullable();

            $table->longText('banner_image_2')->nullable();
            $table->longText('page_main_title_2')->nullable();
            $table->longText('page_main_description_2')->nullable();

            $table->longText('read_more_btn_link')->nullable();
            $table->longText('get_started_btn_link')->nullable();

            //Home Page Section 2 - Main Services
            $table->longText('main_service_title_1')->nullable();
            $table->longText('main_service_description_1')->nullable();
            $table->longText('main_service_icon_1')->nullable();
            $table->longText('main_service_read_more_btn_link_1')->nullable();

            $table->longText('main_service_title_2')->nullable();
            $table->longText('main_service_description_2')->nullable();
            $table->longText('main_service_icon_2')->nullable();
            $table->longText('main_service_read_more_btn_link_2')->nullable();

            $table->longText('main_service_title_3')->nullable();
            $table->longText('main_service_description_3')->nullable();
            $table->longText('main_service_icon_3')->nullable();
            $table->longText('main_service_read_more_btn_link_3')->nullable();

            //Home Page Section 3  - About Us
            $table->longText('about_us_section_banner_image')->nullable();
            $table->longText('about_us_section_title')->nullable();
            $table->longText('about_us_section_description')->nullable();
            $table->longText('about_us_section_view_more_btn_link')->nullable();

            //Home Page Section 4 - Services
            $table->longText('services_section_title')->nullable();
            $table->longText('services_section_description')->nullable();

                //Box #1
                $table->longText('services_section_box_1_title')->nullable();
                $table->longText('services_section_box_1_description')->nullable();
                $table->longText('services_section_box_1_icon')->nullable();
                $table->longText('services_section_box_1_read_more_btn_link')->nullable();

                //Box #2
                $table->longText('services_section_box_2_title')->nullable();
                $table->longText('services_section_box_2_description')->nullable();
                $table->longText('services_section_box_2_icon')->nullable();
                $table->longText('services_section_box_2_read_more_btn_link')->nullable();

                //Box #3
                $table->longText('services_section_box_3_title')->nullable();
                $table->longText('services_section_box_3_description')->nullable();
                $table->longText('services_section_box_3_icon')->nullable();
                $table->longText('services_section_box_3_read_more_btn_link')->nullable();

                //Box #4
                $table->longText('services_section_box_4_title')->nullable();
                $table->longText('services_section_box_4_description')->nullable();
                $table->longText('services_section_box_4_icon')->nullable();
                $table->longText('services_section_box_4_read_more_btn_link')->nullable();

                //Box #5
                $table->longText('services_section_box_5_title')->nullable();
                $table->longText('services_section_box_5_description')->nullable();
                $table->longText('services_section_box_5_icon')->nullable();
                $table->longText('services_section_box_5_read_more_btn_link')->nullable();

                //Box #6
                $table->longText('services_section_box_6_title')->nullable();
                $table->longText('services_section_box_6_description')->nullable();
                $table->longText('services_section_box_6_icon')->nullable();
                $table->longText('services_section_box_6_read_more_btn_link')->nullable();

                //Box #7
                $table->longText('services_section_box_7_title')->nullable();
                $table->longText('services_section_box_7_description')->nullable();
                $table->longText('services_section_box_7_icon')->nullable();
                $table->longText('services_section_box_7_read_more_btn_link')->nullable();

                //Box #8
                $table->longText('services_section_box_8_title')->nullable();
                $table->longText('services_section_box_8_description')->nullable();
                $table->longText('services_section_box_8_icon')->nullable();
                $table->longText('services_section_box_8_read_more_btn_link')->nullable();

            //Home Page Section 5 - Why Choose Us
            $table->longText('why_choose_us_section_title')->nullable();
            $table->longText('why_choose_us_section_description')->nullable();

                //Box #1
                $table->longText('why_choose_us_section_box_1_title')->nullable();
                $table->longText('why_choose_us_section_box_1_bg_image')->nullable();
                $table->longText('why_choose_us_section_box_1_description')->nullable();
                $table->longText('why_choose_us_section_box_1_icon')->nullable();
                $table->longText('why_choose_us_section_box_1_read_more_btn_link')->nullable();

                //Box #2
                $table->longText('why_choose_us_section_box_2_title')->nullable();
                $table->longText('why_choose_us_section_box_2_bg_image')->nullable();
                $table->longText('why_choose_us_section_box_2_description')->nullable();
                $table->longText('why_choose_us_section_box_2_icon')->nullable();
                $table->longText('why_choose_us_section_box_2_read_more_btn_link')->nullable();

                //Box #3
                $table->longText('why_choose_us_section_box_3_title')->nullable();
                $table->longText('why_choose_us_section_box_3_bg_image')->nullable();
                $table->longText('why_choose_us_section_box_3_description')->nullable();
                $table->longText('why_choose_us_section_box_3_icon')->nullable();
                $table->longText('why_choose_us_section_box_3_read_more_btn_link')->nullable();

            //Home Page Section 6 - What We Do
            $table->longText('what_we_do_section_title')->nullable();
            $table->longText('what_we_do_section_description')->nullable();
            $table->longText('what_we_do_section_bg_image')->nullable();

                //Circle #1
                $table->longText('what_we_do_section_circle_1_percentage')->nullable();
                $table->longText('what_we_do_section_circle_1_title_1')->nullable();
                $table->longText('what_we_do_section_circle_1_title_2')->nullable();

                //Circle #2
                $table->longText('what_we_do_section_circle_2_percentage')->nullable();
                $table->longText('what_we_do_section_circle_2_title_1')->nullable();
                $table->longText('what_we_do_section_circle_2_title_2')->nullable();

                //Circle #3
                $table->longText('what_we_do_section_circle_3_percentage')->nullable();
                $table->longText('what_we_do_section_circle_3_title_1')->nullable();
                $table->longText('what_we_do_section_circle_3_title_2')->nullable();

                //Circle #4
                $table->longText('what_we_do_section_circle_4_percentage')->nullable();
                $table->longText('what_we_do_section_circle_4_title_1')->nullable();
                $table->longText('what_we_do_section_circle_4_title_2')->nullable();

            //Home Page Section 7 - Contact Banner
            $table->longText('contact_banner_section_title')->nullable();
            $table->longText('contact_banner_section_description')->nullable();
            $table->longText('contact_banner_section_bg_image')->nullable();
            $table->longText('contact_banner_section_btn_link')->nullable();

            //Home Page Section 8 - Our Process
            $table->longText('our_process_section_title')->nullable();
            $table->longText('our_process_section_description')->nullable();

                //Box #1
                $table->longText('our_process_section_box_1_title')->nullable();
                $table->longText('our_process_section_box_1_image')->nullable();
                $table->longText('our_process_section_box_1_description')->nullable();
                $table->longText('our_process_section_box_1_read_more_btn_link')->nullable();

                //Box #2
                $table->longText('our_process_section_box_2_title')->nullable();
                $table->longText('our_process_section_box_2_image')->nullable();
                $table->longText('our_process_section_box_2_description')->nullable();
                $table->longText('our_process_section_box_2_read_more_btn_link')->nullable();

                //Box #3
                $table->longText('our_process_section_box_3_title')->nullable();
                $table->longText('our_process_section_box_3_image')->nullable();
                $table->longText('our_process_section_box_3_description')->nullable();
                $table->longText('our_process_section_box_3_read_more_btn_link')->nullable();

            //Home Page Section 9 - Our Team
            $table->longText('our_team_section_title')->nullable();
            $table->longText('our_team_section_description')->nullable();

                //Box #1
                $table->longText('our_team_section_box_1_name')->nullable();
                $table->longText('our_team_section_box_1_image')->nullable();
                $table->longText('our_team_section_box_1_designation')->nullable();
                $table->longText('our_team_section_box_1_facebook_link')->nullable();
                $table->longText('our_team_section_box_1_twitter_link')->nullable();
                $table->longText('our_team_section_box_1_instagram_link')->nullable();
                $table->longText('our_team_section_box_1_linkedin_link')->nullable();

                //Box #2
                $table->longText('our_team_section_box_2_name')->nullable();
                $table->longText('our_team_section_box_2_image')->nullable();
                $table->longText('our_team_section_box_2_designation')->nullable();
                $table->longText('our_team_section_box_2_facebook_link')->nullable();
                $table->longText('our_team_section_box_2_twitter_link')->nullable();
                $table->longText('our_team_section_box_2_instagram_link')->nullable();
                $table->longText('our_team_section_box_2_linkedin_link')->nullable();

                //Box #3
                $table->longText('our_team_section_box_3_name')->nullable();
                $table->longText('our_team_section_box_3_image')->nullable();
                $table->longText('our_team_section_box_3_designation')->nullable();
                $table->longText('our_team_section_box_3_facebook_link')->nullable();
                $table->longText('our_team_section_box_3_twitter_link')->nullable();
                $table->longText('our_team_section_box_3_instagram_link')->nullable();
                $table->longText('our_team_section_box_3_linkedin_link')->nullable();

                //Box #4
                $table->longText('our_team_section_box_4_name')->nullable();
                $table->longText('our_team_section_box_4_image')->nullable();
                $table->longText('our_team_section_box_4_designation')->nullable();
                $table->longText('our_team_section_box_4_facebook_link')->nullable();
                $table->longText('our_team_section_box_4_twitter_link')->nullable();
                $table->longText('our_team_section_box_4_instagram_link')->nullable();
                $table->longText('our_team_section_box_4_linkedin_link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page_settings');
    }
};
