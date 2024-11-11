@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
   Request Prospectus - Transformation Academy
@endsection
<!-- /Page Title -->


<!-- Main Body Content -->
@section('body_content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 290px 0px 170px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url('{{ asset('upload/image-bg-1.jpg') }}'); ;background-size: cover ;background-position: center ;" data-parallax-speed="0.3"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;color: #ffffff ;">Prospectus</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;font-style: normal ;letter-spacing: 1px ;text-transform: uppercase ;color: #ffffff ;margin-top: 15px ;">Request Prospectus</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper ">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" style="display: flex;align-items: center;justify-content: center;">
                    <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px ;font-weight: 700 ;">Prospectus Request Form</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                            <p>Please fill this form and submit to request prospectus</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form class="quform" action="plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>Full Name (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Email (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email" size="40" placeholder="info@transformationacademy.edu" class="input1" aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Phone number (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="tel" type="text" name="phone_number" placeholder="+233 551290920" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Section Interested In
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <select  id="section" name="section" class="input1" aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Section</option>
                                                                    <option value="nursery">Nursery</option>
                                                                    <option value="lower_primary">Lower Primary</option>
                                                                    <option value="upper_primary">Upper Primary</option>
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Request Prospectus</span></button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </form>
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
</div>
@endsection
