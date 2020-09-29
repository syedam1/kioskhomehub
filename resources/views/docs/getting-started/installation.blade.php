@extends('layouts.documents')
@section('documentcontent')

<!-- Main content -->
<div class="main-content d-flex position-relative pb-5">
    <div class="docs-content">
        <!-- Docs title -->
        <div class="docs-title">
            <h2 class="mb-4">Installation</h2>
            <p class="text-muted docs-lead mb-0">The installation of ABAR and Kiosk is fairly simple.  You would have to be logged in to obtain the installation package. If you haven't already, we encourage you to register before you proceed with the installation.</p>
        </div>
        <!-- Docs content -->
        <h2 id="licenses">Licenses</h2>
        <p>Currently, at Kiosk you can get the products with two types of licenses: Consumer or Business. If
            you are making a purchase, be sure to go through the table with the rights and the guidelines, so you can
            know what is the best fit for you. View the rights table and the description for each license on our by
            clicking the button below.</p>
        <p><a href="https://www.kioskhomehub.com/docs/licenses" target="_blank">See licenses</a></p>
        <h2 id="purchase-and-download">Download</h2>
        <p>In order to get started and use Kiosk, you will have to follow the pre-requisits. Click the button below which downloads the installer and then proceed to the next steps.</p>
        <p>

        @if (Auth::check())
          <a href="{{ env('KIOSK_INSTALLER_EXE') }}"
                class="btn btn-dark btn-icon rounded-pill hover-translate-y-n3 mt-4">
                <span class="btn-inner--text">Install now!!</span>
                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
            </a>
        @else
          <a href="{{ route('register') }}"
                class="btn btn-dark btn-icon rounded-pill hover-translate-y-n3 mt-4">
                <span class="btn-inner--text">Register now!!</span>
                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
            </a>
        @endif
            

        </p>
    </div>
    <div class="docs-sidebar h-100vh border-left pl-4 py-5 py-lg-3 my-lg-3 d-none d-xl-block">
    </div>
</div>

@endsection