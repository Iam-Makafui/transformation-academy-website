@php
    use Illuminate\Support\Str;
@endphp

<!-- Main Template File -->
@extends('layout.app')

<!-- Page Title -->
@section('page_title')
  FAQs- Transformation Academy
@endsection
<!-- /Page Title -->

<!-- Main Body Content -->
@section('body_content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="kingster-not-found-wrap" id="kingster-full-no-header-wrap">
        <div class="kingster-not-found-background"></div>
        <div class="kingster-not-found-container kingster-container">
            <div class="kingster-header-transparent-substitute"></div>
            <div class="kingster-not-found-content kingster-item-pdlr">
                <h1 class="kingster-not-found-head">Oops!</h1>
                <h3 class="kingster-not-found-title kingster-content-font">This Page Isn’t Ready Yet</h3>
                <div class="kingster-not-found-caption">
                    We’re building something exciting here! Hang tight, and we’ll have this page up and running soon.
                    <br>Meanwhile, feel free to explore the rest of the site!
                </div>
                <div class="kingster-not-found-back-to-home"><a href="/">Go Back To The Homepage</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
