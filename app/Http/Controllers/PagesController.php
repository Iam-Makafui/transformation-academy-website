<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //public funcion for retuurning view of the landing page
    public function LandingPage()
    {

        return view('home');

    }


    //public funcion for retuurning view of the history page
    public function historyPage()
    {

        return view('about-history');

    }


    //public funcion for retuurning view of the vision and mission page
    public function visionMissionPage()
    {

        return view('about-vision-and-mission');

    }


    //public funcion for retuurning view of the sections page
    public function sectionsPage()
    {

        return view('about-sections');

    }

    //public funcion for retuurning view of the director page
    public function directorsPage()
    {

        return view('about-director');

    }

    //public funcion for retuurning view of the staffs page
    public function staffsPage()
    {

        return view('about-staff');

    }

    //public funcion for retuurning view of the application process page
    public function applicationProcessPage()
    {

        return view('admission-application-process');

    }


    //public funcion for retuurning view of the request prospectus page
    public function admissionProspectusPage()
    {

        return view('admission-request-prospectus');

    }


    //public funcion for retuurning view of the academic calender page
    public function academicCalenderPage()
    {

        return view('campus-academic-calender');

    }


    //public funcion for retuurning view of the school songs page
    public function schoolSongsPage()
    {

        return view('campus-school-songs');

    }

    //public funcion for retuurning view of the sports and extracurricular page
    public function sportsAndExtraCirricularPage()
    {

        return view('campus-sports-and-extracurricular');

    }


    //public funcion for retuurning view of the admissions faqs page
    public function admissionFaqsPage()
    {

        return view('admission-faqs');

    }

    //public funcion for retuurning view of the contact us page
    public function contactUsPage()
    {

        return view('contact-us');

    }


    //public funcion for retuurning view of the school canteen page
    public function schoolCanteenPage()
    {

        return view('campus-school-canteen');

    }


    //public function for school gallery page
    public function schoolGalleryPage()
    {

        return view('campus-school-gallery');

    }

}
