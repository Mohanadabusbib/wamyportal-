@extends('layouts.master2')
@section('title')
تذكير بكلمة المرور - الندوة العالمية للشباب الإسلامي
@stop
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('public/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <!-- The content half -->
        <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                               {{--  <div class="mb-5 d-flex">
                                    <a href="{{ url('/' . $page='Home') }}">
                                    <img src="{{URL::asset('public/assets/img/brand/logo.jpg')}}" class="sign-favicon ht-40" alt="logo">
                                    </a>
                                    <h1 class="main-logo1 mr-3  my-auto tx-28">{{__('lableauth.internalPort')}}</h1>
                                </div> --}}
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <h2>{{__('lableauth.forgetPassword')}}</h2>
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right tx-md-bold">{{ __('lableauth.email') }}</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-group row mb-0" style="margin-right: 136px">
                                                <button type="submit" class="btn btn-primary ">
                                                    {{ __('lableauth.sendPassword') }}
                                                </button>
                                                {{-- <div class="col-md-6 offset-md-4">

                                                </div> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div><!-- End -->

        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
            <div class="row wd-100p mx-auto text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                    <img src="{{URL::asset('public/assets/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
