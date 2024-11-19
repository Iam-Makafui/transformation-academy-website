@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
   School Canteen - Transformation Academy
@endsection
<!-- /Page Title -->

<!-- Main Body Content -->
@section('body_content')
<div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <h1 class="kingster-page-title">SCHOOL CANTEEN</h1></div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="/" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Bachelor Of Science in Business Administration." href="#" class="post post-page"><span property="name">Campus</span></a>
            <meta property="position" content="2">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Finance." href="/campus/calender" class="post post-page"><span property="name">School Canteen</span></a>
            <meta property="position" content="4">
            </span>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 25px ;">
                            <div class="gdlr-core-divider-container" style="max-width: 305px ;">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #1bb7ea;border-bottom-width: 4px ;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;text-transform: none ;color: #707070 ;">
                                        <p>At Transformation Academy School, we prioritize the health and well-being of our students by providing nutritious and
                                            delicious meals that are thoughtfully prepared with fresh ingredients. From the variety
                                             of local Ghanaian dishes served throughout the week to ensuring a balanced diet, our school canteen
                                              is dedicated to nourishing young minds and bodies. Parents can be confident that their children will
                                               enjoy wholesome meals designed to fuel their growth and success, both academically and physically.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none;">
                                    <div style="overflow-x: auto;">
                                        <table style="min-width: 835px; width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
                                            <tbody>
                                                <tr style="background-color: #f2f2f2; color: #333; font-weight: bold;">
                                                    <th style="padding: 10px; border: 1px solid #ddd; text-align: center; width: 20%;">DAY</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd; text-align: center; width: 30%;">FOOD</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd; text-align: center; width: 50%;">IMAGE</th>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Monday</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Rice and Stew with Wele</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top; text-align: center;">
                                                        <img src="{{ asset('images/menu/rice_wele.jpg') }}" alt="Rice and Stew with Wele" style="width: 100px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Tuesday</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Wakye, Spaghetti, and Egg</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top; text-align: center;">
                                                        <img src="{{ asset('images/menu/wakye_spaghetti.png') }}" alt="Wakye, Spaghetti, and Egg" style="width: 100px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Wednesday</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Beans with Fried Plantain or Spaghetti with Stew and Fried Egg</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top; text-align: center;">
                                                        <img src="{{ asset('images/menu/wednesday_meal.png') }}" alt="Beans with Fried Plantain or Spaghetti with Stew and Fried Egg" style="width: 100px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Thursday</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Banku with Groundnut Soup and Chicken Back</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top; text-align: center;">
                                                        <img src="{{ asset('images/menu/banku_groundnut_soup.jpg') }}" alt="Banku with Groundnut Soup and Chicken Back" style="width: 100px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Friday</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top;">Jollof with Fish</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top; text-align: center;">
                                                        <img src="{{ asset('images/menu/jollof_fish.jpg') }}" alt="Jollof with Fish" style="width: 100px; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
