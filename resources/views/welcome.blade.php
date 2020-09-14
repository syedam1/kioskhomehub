    @extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
<div class="row justify-content-center">
    
    <div class="content-container ">
        <img class="logo" src="./images/kiosk-white.svg" alt="Kiosk logo"> 
        <p class="subtext">Your next generation home hub</p>
        <div class="text-center">
            <a href="/login">Login</a> | <a  href="/register">Register</a>
        </div>
    </div>

    <div class="footer">
        <p class="text-light m-0">eTender Inc <script>
                document.write(new Date().getFullYear())
            </script>2020</p>
        <a class="text-primary" href="mailto:andrew@kioskhomehub.com">andrew@kioskhomehub.com</a>
    </div>

    <!-- partial:index.partial.html -->
    <div class="circuit-ui">
        <p class="zoom"><span class="zoom zoomin">+</span><span class="zoom zoomout">-</span></p>
        <p class="zoomlevel"><span class="percent">100</span> % - (<span class="width"></span>px)(<span class="height"></span>px)</p>
        <p>Dead: <span class="dead">165</span></p>
        <p>Alive: <span class="alive">210</span></p>
        <p>Drawn: <span class="drawn">210</span></p>
        <p><span class="fps">156</span> FPS</p>
        <a class="save" href="" download="capture.png">Save</a>
    </div>

    <!-- partial -->
    <script src="{{ asset('js/background.js') }}"></script>
</div>
</div>
@endsection


