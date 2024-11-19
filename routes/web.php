<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



/**
 * GET ROUTES
 */

//route for landing  page
Route::get('/', [PagesController::class, 'LandingPage'])->name('landing-page');

//route for history page
Route::get('/about/history', [PagesController::class, 'historyPage'])->name('/about/history');

//route for vision and mission page
Route::get('/about/vision-and-mission', [PagesController::class, 'visionMissionPage'])->name('/about/vision-and-mission');

//route for sections page
Route::get('/about/sections', [PagesController::class, 'sectionsPage'])->name('/about/sections');

//route for directors page
Route::get('/about/directors', [PagesController::class, 'directorsPage'])->name('/about/directors');

//route for staffs page
Route::get('/about/staff', [PagesController::class, 'staffsPage'])->name('/about/staff');

//route for application process page
Route::get('/admissions/application-process', [PagesController::class, 'applicationProcessPage'])->name('/admissions/application-process');

//route for request prospectus  page
Route::get('/admissions/request-prospectus', [PagesController::class, 'admissionProspectusPage'])->name('/admissions/request-prospectus');

//route for admissions faqs  page
Route::get('/admissions/faqs', [PagesController::class, 'admissionFaqsPage'])->name('/admissions/faqs');

//route for academic calendar  page
Route::get('/campus/calender', [PagesController::class, 'academicCalenderPage'])->name('/campus/calender');

//route for schools song  page
Route::get('/campus/calender', [PagesController::class, 'academicCalenderPage'])->name('/campus/calender');

//route for schools song  page
Route::get('/campus/school-songs', [PagesController::class, 'schoolSongsPage'])->name('/campus/school-songs');


//route for schools song  page
Route::get('/campus/school-canteen', [PagesController::class, 'schoolCanteenPage'])->name('/campus/school-canteen');


//route for extracurricular page
Route::get('/campus/sports-and-extracurricular', [PagesController::class, 'sportsAndExtraCirricularPage'])->name('/campus/sports-and-extracurricular');

//route for school gallery page
Route::get('/campus/school-gallery', [PagesController::class, 'schoolGalleryPage'])->name('/campus/school-gallery');


//route for contact us page
Route::get('/contact', [PagesController::class, 'contactUsPage'])->name('/contact');
