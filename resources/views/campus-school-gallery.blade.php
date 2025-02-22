@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
  Gallery - Transformation Academy
@endsection
<!-- /Page Title -->

<!-- Main Body Content -->
@section('body_content')

<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <h1 class="kingster-page-title">Gallery</h1></div>
    </div>
</div>


<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Life At Transformation</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">Our Gallery</span></div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{ asset('upload/shutterstock_270733466.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><img src="upload/shutterstock_270733466-400x377.jpg" width="700" height="660" alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{ asset('upload/shutterstock_516640027.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><img src="upload/shutterstock_516640027-400x377.jpg" width="700" height="660" alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{ asset('upload/shutterstock_734589535.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><img src="upload/shutterstock_734589535-400x377.jpg" width="700" height="660" alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{ asset('upload/shutterstock_704277943.jpg') }}" data-lightbox-group="gdlr-core-img-group-1"><img src="upload/shutterstock_704277943-400x377.jpg" width="700" height="660" alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
