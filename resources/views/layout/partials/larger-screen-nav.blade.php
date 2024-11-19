<div class="kingster-top-bar">
    <div class="kingster-top-bar-background"></div>
    <div class="kingster-top-bar-container kingster-container ">
        <div class="kingster-top-bar-container-inner clearfix">
            <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> transformationacademyghana@gmail.com <i class="fa fa-phone" id="i_fd84_1"></i> +233 535 467070 / +233 548 445839 / +233 558 214460</div>
            <div class="kingster-top-bar-right kingster-item-pdlr">
                <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                    {{-- <li class="menu-item kingster-normal-menu"><a href="#">Alumni</a></li> --}}
                    <li class="menu-item kingster-normal-menu"><a href="/campus/calender">Calendar</a></li>
                    {{-- <li class="menu-item kingster-normal-menu"><a href="#">Student/Teachers Portal</a></li> --}}
                </ul>
                <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">Student / Teachers Portal</a></div>
        </div>
    </div>
</div>
<header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
    <div class="kingster-header-background"></div>
    <div class="kingster-header-container  kingster-container">
        <div class="kingster-header-container-inner clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
                <div class="kingster-logo-inner">
                    <a class="" href="/"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
                </div>
            </div>
            <div class="kingster-navigation kingster-item-pdlr clearfix ">
                <div class="kingster-main-menu" id="kingster-main-menu">
                    <ul id="menu-main-navigation-1" class="sf-menu">
                        <li class="menu-item menu-item-home {{ request()->is('/') ? 'current-menu-item' : ''}} kingster-normal-menu"><a href="/" class="sf-with-ul-pre">HOME</a></li>
                        <li class="menu-item menu-item-has-children {{ request()->is('about*') ? 'current-menu-item' : '' }} kingster-normal-menu"><a href="#" class="sf-with-ul-pre">ABOUT US</a>
                            <ul class="sub-menu">
                                <li class="menu-item {{ request()->is('/about/history') ? 'current-menu-item' : ''}}" data-size="60"><a href="{{ url('/about/history') }}">History</a></li>
                                <li class="menu-item {{ request()->is('/about/vision-and-mission') ? 'current-menu-item' : ''}}" data-size="60"><a href="{{ url('/about/vision-and-mission') }}">Vision & Mission</a></li>
                                <li class="menu-item" data-size="60"><a href="/about/sections">Sections</a></li>
                                <li class="menu-item" data-size="60"><a href="/about/directors">Directors</a></li>
                                <li class="menu-item" data-size="60"><a href="/about/staff">Staff</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children {{ request()->is('admissions*') ? 'current-menu-item' : '' }} kingster-normal-menu"><a href="#" class="sf-with-ul-pre">ADMISSIONS</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Applications</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="/admissions/application-process">Application Process</a></li>
                                        <li class="menu-item"><a href="/admissions/request-prospectus">Request Prospectus Form</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item" data-size="60"><a href="/admissions/faqs">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children {{ request()->is('campus*') ? 'current-menu-item' : '' }} kingster-normal-menu"><a href="#" class="sf-with-ul-pre">CAMPUS</a>
                            <ul class="sub-menu">
                                {{-- <li class="menu-item" data-size="60"><a href="/campus/programs">Programs / Syllabus</a></li> --}}
                                <li class="menu-item" data-size="60"><a href="/campus/calender">Calender</a></li>
                                <li class="menu-item" data-size="60"><a href="/campus/sports-and-extracurricular">Sports and Extra Curricular</a></li>
                                {{-- <li class="menu-item" data-size="60"><a href="/campus/resources">Resources</a></li> --}}
                                <li class="menu-item" data-size="60"><a href="/campus/school-songs">School Songs</a></li>
                                <li class="menu-item" data-size="60"><a href="/campus/school-canteen">School Canteen</a></li>
                                <li class="menu-item" data-size="60"><a href="/campus/school-gallery">School Gallery</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-home {{ request()->is('contact') ? 'current-menu-item' : ''}} kingster-normal-menu"><a href="/contact" class="sf-with-ul-pre">CONTACT US</a></li>
                    </ul>
                    <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                </div>
                <div class="kingster-main-menu-right-wrap clearfix ">
                    {{-- <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div> --}}
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
