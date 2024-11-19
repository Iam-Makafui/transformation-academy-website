@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
   Director - Transformation Academy
@endsection
<!-- /Page Title -->


<!-- Main Body Content -->
@section('body_content')
<div class="gdlr-core-pbf-wrapper " style="margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;max-width: 100% ;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-left" data-sync-height="height-1">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url('{{ asset('upload/shutterstock_166604900.jpg') }}'); background-size: cover; background-position: center;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 140px 0px 90px 75px;" data-sync-height="height-1" data-sync-height-center>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h4 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Rev. Mrs. Patience Ocansey & Pastor David Ocansey </h4></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-weight: 500 ;font-style: normal ;color: #1bb7ea ;">Directors, Transformation Academy School</span></div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;text-transform: none ;color: #ffffff ;">
                                    <p>It is with great pride that we welcome you to Transformation Academy School, a place where we are dedicated to shaping leaders for tomorrow. Here, we nurture not just the mind but also the heart and hands, ensuring every child grows holistically. Our commitment is to provide a supportive, stimulating environment where students thrive, discover their potential, and build skills to excel in a changing world. Together with our dedicated team, we prepare students to make meaningful contributions to their communities and beyond. Thank you for choosing Transformation Academy School. Let’s grow together.</p>
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
