@extends('main')

@section('intro')
    <section class="intro">
        <div class="bg2"></div>
        <div class="jumbotron">
            <div class="container">
                <h1 class="page-heading text-center">
                    <span class="em-text">emailsig</span>.com
                </h1>

                <p class="text-center">{!! Lang::get('string.welcome') !!}</p>

                <div class="btn-custom page-scroll">
                    <a class="btn btn-lg btn-warning raised page-scroll" href="#create" role="button">Create Free
                        Signature
                        Now</a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')


    <section id="who">
        <div class="container who-content text-center">
            <div class="who-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h1>OUR TEAM</h1>
                    </div>
                </div>
                <div class="who-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <div class="who-arrow">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-5">
                            <div id="arrow-down"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="who-detail">
        <div class="row left-area">
            <div class="col-md-3 col-md-offset-2 member-img">
                {{--<img src="../img/about-avatar.png" class="member-img-hover">--}}
                <img src="../img/about-avatar.png" class="about-avatar">
            </div>
            <div class="col-md-6 col-md-offset-1 member-info-left">
                <h5 class="member-name">Nguyen Van A</h5>
                <p class="member-job">Back-end dev</p>
                <p class="member-quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
            </div>
        </div>
        <div class="row right-area">
            <div class="col-md-6 col-md-offset-2 member-info-right">
                <h5 class="member-name">Nguyen Van A</h5>
                <p class="member-job">Back-end dev</p>
                <p class="member-quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
            </div>
            <div class="col-md-3 member-img">
                <img src="../img/tien-avatar.png" class="about-avatar">
            </div>
        </div>

        <div class="row left-area">
            <div class="col-md-3 col-md-offset-2 member-img">
                <img src="../img/thu-avatar.png" class="about-avatar">
            </div>
            <div class="col-md-6 col-md-offset-1 member-info-left">
                <h5 class="member-name">Nguyen Van A</h5>
                <p class="member-job">Back-end dev</p>
                <p class="member-quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
            </div>
        </div>

        <div class="row right-area">
            <div class="col-md-6 col-md-offset-2 member-info-right">
                <h5 class="member-name">Nguyen Van A</h5>
                <p class="member-job">Back-end dev</p>
                <p class="member-quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat."</p>
            </div>
            <div class="col-md-3 member-img">
                <img src="../img/asuu-avatar.png" class="about-avatar">
            </div>
        </div>

    </section>


@stop