@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.home.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.home.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.page-management.home.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate data-parsley-focus="first">
                @csrf
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Main Title 1 (Banner)<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="page_main_title_1" name="page_main_title_1" value="{{ $homeSettings->page_main_title_1 ?? '' }}" placeholder="Enter Main Title 1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Title 2 (Banner)<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="page_main_title_2" name="page_main_title_2" value="{{ $homeSettings->page_main_title_2 ?? '' }}" placeholder="Enter Main Title 2" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Banner Image 1<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="banner_image_1" name="banner_image_1" value="{{ old('banner_image_1') }}"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Banner Image 2<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="banner_image_2" name="banner_image_2" value="{{ old('banner_image_2') }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Page Main Description 1 <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="page_main_description_1" name="page_main_description_1">{!! $homeSettings->page_main_description_1 ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Page Main Description 2<span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="page_main_description_2" name="page_main_description_2"">{!! $homeSettings->page_main_description_2 ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="read_more_btn_link" name="read_more_btn_link"
                                        value="{{ $homeSettings->read_more_btn_link ?? '' }}"
                                        placeholder="Enter Get Started Button Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Get Started Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="get_started_btn_link" name="get_started_btn_link"
                                        value="{{ $homeSettings->get_started_btn_link ?? '' }}"
                                        placeholder="Enter Get Started Button Link" />
                                </div>
                            </div>
                        </div>

                        <!-- Main Services -->
                        <!-- Service 1 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Title 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_title_1" name="main_service_title_1"
                                        value="{{ $homeSettings->main_service_title_1 ?? '' }}"
                                        placeholder="Enter Main Service Title 1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Read More Button Link 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_read_more_btn_link_1" name="main_service_read_more_btn_link_1"
                                        value="{{ $homeSettings->main_service_read_more_btn_link_1 ?? '' }}"
                                        placeholder="Enter Main Service Read More Button Link 1" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Main Service Description 1 <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="main_service_description_1" name="main_service_description_1">{!! $homeSettings->main_service_description_1 ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Main Service Icon 1 <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="main_service_icon_1" name="main_service_icon_1" value="{{ old('main_service_icon_1') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 1 Ends -->

                        <!-- Service 2 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Title 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_title_2" name="main_service_title_2"
                                        value="{{ $homeSettings->main_service_title_2 ?? '' }}"
                                        placeholder="Enter Main Service Title 2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Read More Button Link 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_read_more_btn_link_2" name="main_service_read_more_btn_link_2"
                                        value="{{ $homeSettings->main_service_read_more_btn_link_2 ?? '' }}"
                                        placeholder="Enter Main Service Read More Button Link 2" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Main Service Description 2 <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="main_service_description_2" name="main_service_description_2">{!! $homeSettings->main_service_description_2 ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Main Service Icon 2 <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="main_service_icon_2" name="main_service_icon_2" value="{{ old('main_service_icon_2') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 2 Ends -->

                        <!-- Service 3 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Title 3 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_title_3" name="main_service_title_3"
                                        value="{{ $homeSettings->main_service_title_3 ?? '' }}"
                                        placeholder="Enter Main Service Title 3" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Main Service Read More Button Link 3 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="main_service_read_more_btn_link_3" name="main_service_read_more_btn_link_3"
                                        value="{{ $homeSettings->main_service_read_more_btn_link_3 ?? '' }}"
                                        placeholder="Enter Main Service Read More Button Link 3" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Main Service Description 3 <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="main_service_description_3" name="main_service_description_3"">{!! $homeSettings->main_service_description_3 ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Main Service Icon 3 <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="main_service_icon_3" name="main_service_icon_3" value="{{ old('main_service_icon_3') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 3 Ends -->
                        <!-- Main Services Ends -->

                        <!-- About Us -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">About Us Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="about_us_section_title" name="about_us_section_title"
                                        value="{{ $homeSettings->about_us_section_title ?? '' }}"
                                        placeholder="Enter About Us Section Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">About Us Section View More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="about_us_section_view_more_btn_link" name="about_us_section_view_more_btn_link"
                                        value="{{ $homeSettings->about_us_section_view_more_btn_link ?? '' }}"
                                        placeholder="Enter About Us Section View More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">About Us Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="about_us_section_description" name="about_us_section_description">{!! $homeSettings->about_us_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">About Us Section Banner Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="about_us_section_banner_image" name="about_us_section_banner_image" value="{{ old('about_us_section_banner_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- About Us Ends -->
                        <!-- Services -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_title" name="services_section_title"
                                        value="{{ $homeSettings->services_section_title ?? '' }}"
                                        placeholder="Enter Services Section Title" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_description" name="services_section_description">{!! $homeSettings->services_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>

                         <!-- Service 1 -->
                         <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 1 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_1_title" name="services_section_box_1_title"
                                        value="{{ $homeSettings->services_section_box_1_title ?? '' }}"
                                        placeholder="Enter Services Section Box 1 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 1 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_1_read_more_btn_link" name="services_section_box_1_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_1_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 1 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 1 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_1_description" name="services_section_box_1_description">{!! $homeSettings->services_section_box_1_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 1 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_1_icon" name="services_section_box_1_icon" value="{{ old('services_section_box_1_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 1 Ends -->

                        <!-- Service 2 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 2 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_2_title" name="services_section_box_2_title"
                                        value="{{ $homeSettings->services_section_box_2_title ?? '' }}"
                                        placeholder="Enter Services Section Box 2 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 2 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_2_read_more_btn_link" name="services_section_box_2_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_2_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 2 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 2 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_2_description" name="services_section_box_2_description">{!! $homeSettings->services_section_box_2_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 2 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_2_icon" name="services_section_box_2_icon" value="{{ old('services_section_box_2_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 2 Ends -->

                        <!-- Service 3 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 3 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_3_title" name="services_section_box_3_title"
                                        value="{{ $homeSettings->services_section_box_3_title ?? '' }}"
                                        placeholder="Enter Services Section Box 3 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 3 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_3_read_more_btn_link" name="services_section_box_3_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_3_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 3 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 3 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_3_description" name="services_section_box_3_description">{!! $homeSettings->services_section_box_3_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 3 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_3_icon" name="services_section_box_3_icon" value="{{ old('services_section_box_3_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 3 Ends -->

                        <!-- Service 4 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 4 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_4_title" name="services_section_box_4_title"
                                        value="{{ $homeSettings->services_section_box_4_title ?? '' }}"
                                        placeholder="Enter Services Section Box 4 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 4 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_4_read_more_btn_link" name="services_section_box_4_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_4_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 4 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 4 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_4_description" name="services_section_box_4_description">{!! $homeSettings->services_section_box_4_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 4 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_4_icon" name="services_section_box_4_icon" value="{{ old('services_section_box_4_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 4 Ends -->

                        <!-- Service 5 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 5 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_4_title" name="services_section_box_5_title"
                                        value="{{ $homeSettings->services_section_box_4_title ?? '' }}"
                                        placeholder="Enter Services Section Box 5 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 5 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_5_read_more_btn_link" name="services_section_box_5_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_5_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 5 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 5 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_5_description" name="services_section_box_5_description">{!! $homeSettings->services_section_box_5_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 5 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_5_icon" name="services_section_box_5_icon" value="{{ old('services_section_box_5_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 5 Ends -->

                        <!-- Service 6 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 6 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_6_title" name="services_section_box_6_title"
                                        value="{{ $homeSettings->services_section_box_6_title ?? '' }}"
                                        placeholder="Enter Services Section Box 6 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 6 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_6_read_more_btn_link" name="services_section_box_6_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_6_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 6 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 6 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_6_description" name="services_section_box_6_description">{!! $homeSettings->services_section_box_6_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 6 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_6_icon" name="services_section_box_6_icon" value="{{ old('services_section_box_6_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 6 Ends -->

                        <!-- Service 7 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 7 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_7_title" name="services_section_box_7_title"
                                        value="{{ $homeSettings->services_section_box_7_title ?? '' }}"
                                        placeholder="Enter Services Section Box 7 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 7 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_7_read_more_btn_link" name="services_section_box_7_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_7_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 7 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 7 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_7_description" name="services_section_box_7_description">{!! $homeSettings->services_section_box_7_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 7 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_7_icon" name="services_section_box_7_icon" value="{{ old('services_section_box_7_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 7 Ends -->

                        <!-- Service 8 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 8 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_8_title" name="services_section_box_8_title"
                                        value="{{ $homeSettings->services_section_box_8_title ?? '' }}"
                                        placeholder="Enter Services Section Box 8 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Services Section Box 8 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="services_section_box_8_read_more_btn_link" name="services_section_box_8_read_more_btn_link"
                                        value="{{ $homeSettings->services_section_box_8_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Services Section Box 8 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Services Section Box 8 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="services_section_box_8_description" name="services_section_box_8_description">{!! $homeSettings->services_section_box_8_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Services Section Box 8 Icon <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="services_section_box_8_icon" name="services_section_box_8_icon" value="{{ old('services_section_box_8_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Service 8 Ends -->
                        <!-- Services Ends -->

                        <!-- Why Choose Us -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_title" name="why_choose_us_section_title"
                                        value="{{ $homeSettings->why_choose_us_section_title ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Title" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Why Choose Us Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="why_choose_us_section_description" name="why_choose_us_section_description">{!! $homeSettings->why_choose_us_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Us 1 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 1 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_1_title" name="why_choose_us_section_box_1_title"
                                        value="{{ $homeSettings->why_choose_us_section_box_1_title ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 1 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 1 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_1_read_more_btn_link" name="why_choose_us_section_box_1_read_more_btn_link"
                                        value="{{ $homeSettings->why_choose_us_section_box_1_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 1 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Why Choose Us Section Box 1 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="why_choose_us_section_box_1_description" name="why_choose_us_section_box_1_description">{!! $homeSettings->why_choose_us_section_box_1_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 1 Background Image<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="why_choose_us_section_box_1_bg_image" name="why_choose_us_section_box_1_bg_image" value="{{ old('why_choose_us_section_box_1_bg_image') }}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 1 Icon<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="banner_image_2" name="why_choose_us_section_box_1_icon" value="{{ old('why_choose_us_section_box_1_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Us 1 Ends -->

                        <!-- Why Choose Us 2 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 2 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_2_title" name="why_choose_us_section_box_2_title"
                                        value="{{ $homeSettings->why_choose_us_section_box_2_title ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 2 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 2 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_2_read_more_btn_link" name="why_choose_us_section_box_2_read_more_btn_link"
                                        value="{{ $homeSettings->why_choose_us_section_box_2_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 2 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Why Choose Us Section Box 2 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="why_choose_us_section_box_2_description" name="why_choose_us_section_box_2_description">{!! $homeSettings->why_choose_us_section_box_2_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 2 Background Image<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="why_choose_us_section_box_2_bg_image" name="why_choose_us_section_box_2_bg_image" value="{{ old('why_choose_us_section_box_2_bg_image') }}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 2 Icon<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="why_choose_us_section_box_2_icon" name="why_choose_us_section_box_2_icon" value="{{ old('why_choose_us_section_box_2_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Us 2 Ends -->

                        <!-- Why Choose Us 3 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 3 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_3_title" name="why_choose_us_section_box_3_title"
                                        value="{{ $homeSettings->why_choose_us_section_box_3_title ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 3 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Why Choose Us Section Box 3 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="why_choose_us_section_box_3_read_more_btn_link" name="why_choose_us_section_box_3_read_more_btn_link"
                                        value="{{ $homeSettings->why_choose_us_section_box_3_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Why Choose Us Section Box 3 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Why Choose Us Section Box 3 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="why_choose_us_section_box_3_description" name="why_choose_us_section_box_3_description">{!! $homeSettings->why_choose_us_section_box_3_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 3 Background Image<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="why_choose_us_section_box_3_bg_image" name="why_choose_us_section_box_3_bg_image" value="{{ old('why_choose_us_section_box_3_bg_image') }}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">Why Choose Us Section Box 3 Icon<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="why_choose_us_section_box_3_icon" name="why_choose_us_section_box_3_icon" value="{{ old('why_choose_us_section_box_3_icon') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Us 3 Ends -->
                        <!-- Why Choose Us Ends -->

                        <!-- What We Do -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_title" name="what_we_do_section_title"
                                        value="{{ $homeSettings->what_we_do_section_title ?? '' }}"
                                        placeholder="Enter What We Do Section Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="image">What We Do Section Background Image<span class="required">*</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="what_we_do_section_bg_image" name="what_we_do_section_bg_image" value="{{ old('what_we_do_section_bg_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">What We Do Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="what_we_do_section_description" name="what_we_do_section_description">{!! $homeSettings->what_we_do_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- What We Do 1 -->
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 1 Title 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_1_title_1" name="what_we_do_section_circle_1_title_1"
                                        value="{{ $homeSettings->what_we_do_section_circle_1_title_1 ?? '' }}"
                                        placeholder="What We Do Section Circle 1 Title 1" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 1 Title 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_1_title_1" name="what_we_do_section_circle_1_title_2"
                                        value="{{ $homeSettings->what_we_do_section_circle_1_title_1 ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 1 Title 2" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 1 Percentage <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_1_percentage" name="what_we_do_section_circle_1_percentage"
                                        value="{{ $homeSettings->what_we_do_section_circle_1_percentage ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 1 Percentage" />
                                </div>
                            </div>
                        </div>
                        <!-- What We Do 1 Ends -->
                        <!-- What We Do 2 -->
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 2 Title 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_2_title_1" name="what_we_do_section_circle_2_title_1"
                                        value="{{ $homeSettings->what_we_do_section_circle_2_title_1 ?? '' }}"
                                        placeholder="What We Do Section Circle 2 Title 1" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 2 Title 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_2_title_2" name="what_we_do_section_circle_2_title_2"
                                        value="{{ $homeSettings->what_we_do_section_circle_2_title_2 ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 2 Title 2" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 2 Percentage <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_2_percentage" name="what_we_do_section_circle_2_percentage"
                                        value="{{ $homeSettings->what_we_do_section_circle_2_percentage ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 2 Percentage" />
                                </div>
                            </div>
                        </div>
                        <!-- What We Do 2 Ends -->
                        <!-- What We Do 3 -->
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 3 Title 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_3_title_1" name="what_we_do_section_circle_3_title_1"
                                        value="{{ $homeSettings->what_we_do_section_circle_3_title_1 ?? '' }}"
                                        placeholder="What We Do Section Circle 3 Title 1" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 3 Title 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_3_title_2" name="what_we_do_section_circle_3_title_2"
                                        value="{{ $homeSettings->what_we_do_section_circle_3_title_2 ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 3 Title 2" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 3 Percentage <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_3_percentage" name="what_we_do_section_circle_3_percentage"
                                        value="{{ $homeSettings->what_we_do_section_circle_3_percentage ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 3 Percentage" />
                                </div>
                            </div>
                        </div>
                        <!-- What We Do 3 Ends -->
                        <!-- What We Do 4 -->
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 4 Title 1 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_4_title_1" name="what_we_do_section_circle_4_title_1"
                                        value="{{ $homeSettings->what_we_do_section_circle_4_title_1 ?? '' }}"
                                        placeholder="What We Do Section Circle 4 Title 1" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 4 Title 2 <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_4_title_2" name="what_we_do_section_circle_4_title_2"
                                        value="{{ $homeSettings->what_we_do_section_circle_4_title_2 ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 4 Title 2" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="slug">What We Do Section Circle 4 Percentage <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="what_we_do_section_circle_4_percentage" name="what_we_do_section_circle_4_percentage"
                                        value="{{ $homeSettings->what_we_do_section_circle_4_percentage ?? '' }}"
                                        placeholder="Enter What We Do Section Circle 4 Percentage" />
                                </div>
                            </div>
                        </div>
                        <!-- What We Do 4 Ends -->
                        <!-- What We Do Ends -->

                        <!-- Contact Banner -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Contact Banner Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="contact_banner_section_title" name="contact_banner_section_title"
                                        value="{{ $homeSettings->contact_banner_section_title ?? '' }}"
                                        placeholder="Enter Contact Banner Section Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Contact Banner Section Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="contact_banner_section_btn_link" name="contact_banner_section_btn_link"
                                        value="{{ $homeSettings->contact_banner_section_btn_link ?? '' }}"
                                        placeholder="Enter Contact Banner Section Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Contact Banner Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="contact_banner_section_description" name="contact_banner_section_description">{!! $homeSettings->contact_banner_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Contact Banner Section Background Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="contact_banner_section_bg_image" name="contact_banner_section_bg_image" value="{{ old('contact_banner_section_bg_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Banner Ends -->

                        <!-- Our Process -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_title" name="our_process_section_title"
                                        value="{{ $homeSettings->our_process_section_title ?? '' }}"
                                        placeholder="Enter Our Process Section Title" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Our Process Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="our_process_section_description" name="our_process_section_description">{!! $homeSettings->our_process_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Our Process 1 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 1 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_1_title" name="our_process_section_box_1_title"
                                        value="{{ $homeSettings->our_process_section_box_1_title ?? '' }}"
                                        placeholder="Enter Our Process Section Box 1 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 1 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_1_read_more_btn_link" name="our_process_section_box_1_read_more_btn_link"
                                        value="{{ $homeSettings->our_process_section_box_1_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Our Process Section Box 1 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Our Process Section Box 1 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="our_process_section_box_1_description" name="our_process_section_box_1_description">{!! $homeSettings->our_process_section_box_1_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Process Section Box 1 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_process_section_box_1_image" name="our_process_section_box_1_image" value="{{ old('our_process_section_box_1_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Our Process 1 Ends -->
                        <!-- Our Process 2 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 2 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_2_title" name="our_process_section_box_2_title"
                                        value="{{ $homeSettings->our_process_section_box_2_title ?? '' }}"
                                        placeholder="Enter Our Process Section Box 2 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 2 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_2_read_more_btn_link" name="our_process_section_box_2_read_more_btn_link"
                                        value="{{ $homeSettings->our_process_section_box_2_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Our Process Section Box 2 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Our Process Section Box 2 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="our_process_section_box_2_description" name="our_process_section_box_2_description">{!! $homeSettings->our_process_section_box_2_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Process Section Box 1 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_process_section_box_2_image" name="our_process_section_box_2_image" value="{{ old('our_process_section_box_2_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Our Process 2 Ends -->
                         <!-- Our Process 3 -->
                         <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 2 Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_3_title" name="our_process_section_box_3_title"
                                        value="{{ $homeSettings->our_process_section_box_3_title ?? '' }}"
                                        placeholder="Enter Our Process Section Box 3 Title" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Process Section Box 2 Read More Button Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_process_section_box_3_read_more_btn_link" name="our_process_section_box_3_read_more_btn_link"
                                        value="{{ $homeSettings->our_process_section_box_3_read_more_btn_link ?? '' }}"
                                        placeholder="Enter Our Process Section Box 3 Read More Button Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Our Process Section Box 2 Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="our_process_section_box_3_description" name="our_process_section_box_3_description">{!! $homeSettings->our_process_section_box_3_description ?? '' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Process Section Box 3 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_process_section_box_3_image" name="our_process_section_box_3_image" value="{{ old('our_process_section_box_3_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <!-- Our Process 3 Ends -->
                        <!-- Our Process Ends -->

                        <!-- Our Team -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Title <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_title" name="our_team_section_title"
                                        value="{{ $homeSettings->our_team_section_title ?? '' }}"
                                        placeholder="Enter Our Team Section Title" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Our Team Section Description <span class="optional">(optional)</span></label>
                                    <textarea type="text" class="form-control tinymce_advance" id="our_team_section_description" name="our_team_section_description">{!! $homeSettings->our_team_section_description ?? '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Our Team 1 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 Name <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_name" name="our_team_section_box_1_name"
                                        value="{{ $homeSettings->our_team_section_box_1_name ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 Designation <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_designation" name="our_team_section_box_1_designation"
                                        value="{{ $homeSettings->our_team_section_box_1_designation ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 Designation" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Team Section Box 1 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_team_section_box_1_image" name="our_team_section_box_1_image" value="{{ old('our_team_section_box_1_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 Facebook Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_facebook_link" name="our_team_section_box_1_facebook_link"
                                        value="{{ $homeSettings->our_team_section_box_1_facebook_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 Facebook Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 Twitter Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_twitter_link" name="our_team_section_box_1_twitter_link"
                                        value="{{ $homeSettings->our_team_section_box_1_twitter_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 Twitter Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 Instagram Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_instagram_link" name="our_team_section_box_1_instagram_link"
                                        value="{{ $homeSettings->our_team_section_box_1_instagram_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 Instagram Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 1 LinkedIn Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_1_linkedin_link" name="our_team_section_box_1_linkedin_link"
                                        value="{{ $homeSettings->our_team_section_box_1_linkedin_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 1 LinkedIn Link" />
                                </div>
                            </div>
                        </div>
                        <!-- Our Team 1 Ends -->
                        <!-- Our Team 2 -->
                         <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 Name <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_name" name="our_team_section_box_2_name"
                                        value="{{ $homeSettings->our_team_section_box_2_name ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 Designation <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_designation" name="our_team_section_box_2_designation"
                                        value="{{ $homeSettings->our_team_section_box_2_designation ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 Designation" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Team Section Box 2 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_team_section_box_2_image" name="our_team_section_box_2_image" value="{{ old('our_team_section_box_2_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 Facebook Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_facebook_link" name="our_team_section_box_2_facebook_link"
                                        value="{{ $homeSettings->our_team_section_box_2_facebook_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 Facebook Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 Twitter Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_twitter_link" name="our_team_section_box_2_twitter_link"
                                        value="{{ $homeSettings->our_team_section_box_2_twitter_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 Twitter Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 Instagram Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_instagram_link" name="our_team_section_box_2_instagram_link"
                                        value="{{ $homeSettings->our_team_section_box_2_instagram_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 Instagram Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 2 LinkedIn Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_2_linkedin_link" name="our_team_section_box_2_linkedin_link"
                                        value="{{ $homeSettings->our_team_section_box_2_linkedin_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 2 LinkedIn Link" />
                                </div>
                            </div>
                        </div>
                        <!-- Our Team 2 Ends -->
                        <!-- Our Team 3 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 Name <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_name" name="our_team_section_box_3_name"
                                        value="{{ $homeSettings->our_team_section_box_3_name ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 Designation <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_designation" name="our_team_section_box_3_designation"
                                        value="{{ $homeSettings->our_team_section_box_3_designation ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 Designation" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Team Section Box 3 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_team_section_box_3_image" name="our_team_section_box_3_image" value="{{ old('our_team_section_box_3_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 Facebook Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_facebook_link" name="our_team_section_box_3_facebook_link"
                                        value="{{ $homeSettings->our_team_section_box_3_facebook_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 Facebook Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 Twitter Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_twitter_link" name="our_team_section_box_3_twitter_link"
                                        value="{{ $homeSettings->our_team_section_box_3_twitter_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 Twitter Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 Instagram Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_instagram_link" name="our_team_section_box_3_instagram_link"
                                        value="{{ $homeSettings->our_team_section_box_3_instagram_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 Instagram Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 3 LinkedIn Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_3_linkedin_link" name="our_team_section_box_3_linkedin_link"
                                        value="{{ $homeSettings->our_team_section_box_3_linkedin_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 3 LinkedIn Link" />
                                </div>
                            </div>
                        </div>
                        <!-- Our Team 3 Ends -->
                        <!-- Our Team 4 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 Name <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_name" name="our_team_section_box_4_name"
                                        value="{{ $homeSettings->our_team_section_box_4_name ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 Designation <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_designation" name="our_team_section_box_4_designation"
                                        value="{{ $homeSettings->our_team_section_box_4_designation ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 Designation" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="image">Our Team Section Box 4 Image <span class="optional">(optional)</span></label>
                                    <input type="file" class="form-control dropify" data-height="70" data-allowed-file-extensions="png jpg jpeg webp" id="our_team_section_box_4_image" name="our_team_section_box_4_image" value="{{ old('our_team_section_box_4_image') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 Facebook Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_facebook_link" name="our_team_section_box_4_facebook_link"
                                        value="{{ $homeSettings->our_team_section_box_4_facebook_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 Facebook Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 Twitter Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_twitter_link" name="our_team_section_box_4_twitter_link"
                                        value="{{ $homeSettings->our_team_section_box_4_twitter_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 Twitter Link" />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 Instagram Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_instagram_link" name="our_team_section_box_4_instagram_link"
                                        value="{{ $homeSettings->our_team_section_box_4_instagram_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 Instagram Link" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="slug">Our Team Section Box 4 LinkedIn Link <span
                                            class="optional">(optional)</span></label>
                                    <input type="text" class="form-control" id="our_team_section_box_4_linkedin_link" name="our_team_section_box_4_linkedin_link"
                                        value="{{ $homeSettings->our_team_section_box_4_linkedin_link ?? '' }}"
                                        placeholder="Enter Our Team Section Box 4 LinkedIn Link" />
                                </div>
                            </div>
                        </div>
                        <!-- Our Team 4 Ends -->
                        <!-- Our Team Ends -->
                        <div class="col-md-12">
                            <div class="form-actions">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <a href="{{ route('admin.page-management.home.index') }}" class="btn btn-dark">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
