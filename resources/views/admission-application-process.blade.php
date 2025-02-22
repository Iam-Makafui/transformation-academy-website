@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
   Application Process - Transformation Academy
@endsection
<!-- /Page Title -->


<!-- Main Body Content -->
@section('body_content')
<div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url({{ asset('images/admission/admission_process.png') }}) ;">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 505px ;padding-bottom: 60px ;">
            <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;">Admission</div>
            <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;">Apply To Transformation Academy</h1></div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.html" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Apply To Kingster</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 30px 0px;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px ;">
                    <div class="gdlr-core-title-item-title-wrap clearfix">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">The Application Process</h3></div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;margin-right: 33px;margin-left: 7px;font-size: 45px ;color: #1bb7ea ;">1</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;"> Inquiry and Information Gathering </h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p>Visit school or contact admissions office for information and reviews school's mission, programs, and requirements </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;margin-right: 28px;margin-left: 3px;font-size: 45px ;color: #1bb7ea ;">2</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;">Submission of school forms. </h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p>Submits form in addition to required documents (e.g., transcripts, birth certificate, ID), payment for admission fee will be made as well upon submission</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;font-size: 45px ;color: #1bb7ea ;">3</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;">Entrance Examination/Assessment</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p>You will requited to take an entrance exam or assessment, this  includes interviews, aptitude tests, or other evaluations
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;font-size: 45px ;color: #1bb7ea ;">4</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;">Review and Verification</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p>The School  reviews admission and supporting documents - Verifies student's credentials and eligibility
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;font-size: 45px ;color: #1bb7ea ;">5</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;">Admission Decision </h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p> The School notifies applicant of admission decision (acceptance, rejection, or waitlist) this may include conditions or requirements for admission </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Blut Title Column Service">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                <div class="gdlr-core-column-service-media gdlr-core-character" style="margin-top: 5px;font-size: 45px ;color: #1bb7ea ;">6</div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;text-transform: none ;">Orientation and Integration </h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 16px ;text-transform: none ;">
                                        <p>You will attend the orientation program, meet with your teachers and peers, and begin your classes as you integrate into the school community</p>
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
<div class="gdlr-core-pbf-section">
    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #1bb7ea ;border-bottom-width: 3px ;"></div>
            </div>
        </div>
    </div>
</div>

@endsection
