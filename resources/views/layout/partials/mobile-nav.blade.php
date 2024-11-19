<div class="kingster-mobile-header-wrap">
    <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
        <div class="kingster-mobile-header-container kingster-container clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
                <div class="kingster-logo-inner">
                    <a class="" href="/"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
                </div>
            </div>
            <div class="kingster-mobile-menu-right">
                {{-- <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i></div> --}}
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
                <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                    <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
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
                                    <li class="menu-item" data-size="60"><a href="/campus/sports-and-extra-curricular">Sports and Extra Curricular</a></li>
                                    {{-- <li class="menu-item" data-size="60"><a href="/campus/resources">Resources</a></li> --}}
                                    <li class="menu-item" data-size="60"><a href="/campus/school-songs">School Songs</a></li>
                                    <li class="menu-item" data-size="60"><a href="/campus/school-canteen">School Canteen</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-home {{ request()->is('contact') ? 'current-menu-item' : ''}} kingster-normal-menu"><a href="/contact" class="sf-with-ul-pre">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
