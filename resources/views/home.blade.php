@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<center>
<div>
    <div class="row justify-content-center">
        <img src="{{ url('public\image\image.jpg') }}" alt="centered image" style="width:of 1024px;height:720px;">
    </div>
</div>
</center>

<hr>

<section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/ id1185232807"><img class="app-badge" src="{{ url('public/bootstrap/dist/assets/img/app-store-badge.svg') }}" alt="App Store" /></a>
                </div>
            </div>
</section>

<hr>        
        
        <footer>
            <div>
                <div>
                    <div class="row justify-content-center">
                    <a href="https://www.floweradvisor.com.ph/">&copy; 2022 FlowerAdvisor. All Rights Reserved.</a>
                    </div>
                </div>
            </div>
        </footer>


@endsection