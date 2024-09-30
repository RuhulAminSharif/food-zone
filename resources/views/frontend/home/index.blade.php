@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BANNER START
        ==============================-->
    @include('frontend.home.components.slider')
    <!--=============================
            BANNER END
        ==============================-->

    <!--=============================
            WHY CHOOSE START
        ==============================-->
    @include('frontend.home.components.why-choose')
    <!--=============================
            WHY CHOOSE END
        ==============================-->

    <!--=============================
            MENU ITEM START
        ==============================-->
    @include('frontend.home.components.menu-item')
    <!--=============================
            MENU ITEM END
        ==============================-->

@endsection
