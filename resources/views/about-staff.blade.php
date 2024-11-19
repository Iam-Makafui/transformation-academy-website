@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
   Staff - Transformation Academy
@endsection
<!-- /Page Title -->


<!-- Main Body Content -->
@section('body_content')
<div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <h1 class="kingster-page-title">Transformation's Staff</h1></div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="/" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Bachelor Of Science in Business Administration." href="#" class="post post-page"><span property="name">About Us</span></a>
            <meta property="position" content="2">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Finance." href="/about/staff" class="post post-page"><span property="name">Staff</span></a>
            <meta property="position" content="4">
            </span>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper">
            <div class="gdlr-core-pbf-wrapper-contentgdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container" style="display: flex;align-items: center;justify-content: center;">
                <div class="gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                    <div class="gdlr-core-personnel-list clearfix">
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="#"><img src="{{ asset('upload/personnel-1-500x500.jpg') }}" alt="" width="500" height="500" title="personnel-1" /></a>
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap">
                                            {{-- <div class="gdlr-core-personnel-list-social">
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #50bd77 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a></div>
                                            </div> --}}
                                            <p></p>
                                            <p></p>
                                            <br>
                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Mr. Eric Mensah Larvie </a></h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">First Administrator</div>
                                            <div class="gdlr-core-personnel-info">
                                                <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>Jhangensy@kingsteruni.edu</div>
                                                <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i>+1-2351-2361-355</div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                    <div class="gdlr-core-personnel-list clearfix">
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href="#"><img src="{{ asset('upload/personnel-2-500x500.jpg') }}" alt="" width="500" height="500" title="personnel-2" /></a>
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap">
                                            {{-- <div class="gdlr-core-personnel-list-social">
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #50bd77 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a></div>
                                            </div> --}}
                                            <p></p>
                                            <p></p>
                                            <br>
                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Fernando Smith, PhD</a></h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">Assistant Professor</div>
                                            <div class="gdlr-core-personnel-info">
                                                <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>fernandoSm@kingsteruni.edu</div>
                                                <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i>+1-2351-2361-355</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                    <div class="gdlr-core-personnel-list clearfix">
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href=#personnel/steve-cook-phd/index.html"><img src="{{ asset('upload/personnel-7-500x500.jpg') }}" alt="" width="500" height="500" title="personnel-7" /></a>
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap">
                                            {{-- <div class="gdlr-core-personnel-list-social">
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #50bd77 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a></div>
                                            </div> --}}
                                            <p></p>
                                            <p></p>
                                            <br>
                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=#personnel/steve-cook-phd/index.html" >Steve Cook, PhD</a></h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">Adjunct Professor</div>
                                            <div class="gdlr-core-personnel-info">
                                                <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>stevecook@kingsteruni.edu</div>
                                                <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i>+1-2351-2361-355</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                    <div class="gdlr-core-personnel-list clearfix">
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href=#personnel/susan-jensen-phd/index.html"><img src="{{ asset('upload/shutterstock_361957010-500x500.jpg') }}" alt="" width="500" height="500" title="shutterstock_361957010" /></a>
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap">
                                            {{-- <div class="gdlr-core-personnel-list-social">
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px ;color: #50bd77 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px ;color: #50bd77 ;margin-left: 14px ;"><i class="fa fa-twitter" ></i></a></div>
                                            </div> --}}
                                            <p></p>
                                            <p></p>
                                            <br>
                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=#personnel/susan-jensen-phd/index.html" >Susan Jensen, PhD</a></h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">Assistant Professor</div>
                                            <div class="gdlr-core-personnel-info">
                                                <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>Susanjens@kingsteruni.edu</div>
                                                <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i>+1-2351-2361-355</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 40px 0px 30px 0px;">
                    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                        <div id="gdlr-core-custom-menu-widget-6" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                            <h3 class="kingster-widget-title">Finance Major</h3><span class="clear"></span>
                            <div class="menu-finance-menu-container">
                                <ul id="menu-finance-menu" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5818"><a href="#">Course Curriculum</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5822 current_page_item menu-item-5824"><a href="index.html">Finance Faculty</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5820"><a target="_blank" href=#scholarships/index.html">Scholarships</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5821"><a target="_blank" href="#">Application</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="text-21" class="widget widget_text kingster-widget">
                            <div class="textwidget">
                                <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                    <div class="gdlr-core-widget-box-shortcode-content">
                                        </p>
                                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Department Contact Info</h3>
                                        <p><span style="color: #3db166; font-size: 16px; font-weight: 600;">Bachelor Of Science in Business Administration</span>
                                            <br /> <span style="font-size: 15px;"><br /> 1810 Campus Way NE<br /> Bothell, WA 98011-8246</span></p>
                                        <p><span style="font-size: 15px;">+1-2345-5432-45<br /> bsba@kuuniver.edu<br /> </span></p>
                                        <p><span style="font-size: 16px; color: #3db166;">Mon &#8211; Fri 9:00A.M. &#8211; 5:00P.M.</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                        <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="color: #3db166 ;"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #3db166 ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="color: #3db166 ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;margin-right: 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Student Resources</span></a>
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="text-22" class="widget widget_text kingster-widget">
                            <div class="textwidget">
                                <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" style="padding: 55px 0 35px;border: 5px solid #3db166 ;">
                                    <div class="gdlr-core-widget-box-shortcode-content">
                                        <p> <span style="font-size: 17px; font-weight: 600; color: #9ba7bf; text-transform: uppercase;">Join Special Event</span>
                                            <br /> <span style="font-size: 20px; font-weight: bold; color: #192f59; text-transform: uppercase;">Accounting Open House</span>
                                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 18px ;"></span><span style="font-size: 15px;">Get real experience in our campus<br /> start in 16 August 2020</span>
                                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 5px ;"></span>
                                            <br /> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Click to see more</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
