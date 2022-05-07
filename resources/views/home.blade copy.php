@extends('layouts.app')

@section('content')
<center>
<div>
    <div class="row justify-content-center">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr>
                <img src="{{ url('public\image\image.jpg') }}" alt="centered image" style="width:of 1024px;height:720px;">
                </div>
               
    </div>
</div>
</center>
@endsection
