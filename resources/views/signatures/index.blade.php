@extends('main')
@section('intro')
    <section class="intro">
        <div class="bg"></div>
        <div class="jumbotron">
            <div class="container">
                <h1 class="page-heading text-center">
                    <span class="em-text">emailsig</span>.com
                </h1>

                <p class="text-center">{!! Lang::get('string.welcome') !!}</p>

                <div class="btn-custom page-scroll">
                    <a class="btn btn-lg btn-warning raised page-scroll" href="#create"
                       role="button">{!! Lang::get('string.crys') !!}</a>
                </div>
            </div>
        </div>
    </section>

@stop

@section('content')
    <div class="container">
        {{--start form error--}}
        @if($errors->has())
            <div id="form-errors">

                @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">{{ $error }}</div>

                @endforeach
            </div><!-- end form-errors -->
        @endif


        <div id="create" class="content-section">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">{!! Lang::get('string.create') !!}</h2>
                </div>
                <div class="row">
                    <!--information-->
                    <div class="col-md-6 left-create">
                        <h4>{!! Lang::get('string.info') !!}</h4>

                        {{--Form start--}}

                        {!! Form::open(['url' => 'signatures/create', 'class'=> 'form-horizontal', 'files'=>true]) !!}

                                <!--tab-->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#main-info" data-toggle="tab"
                                                  role="tab">{!! Lang::get('string.main') !!}</a></li>
                            <li><a href="#social-info" data-toggle="tab"
                                   role="tab">{!! Lang::get('string.social') !!}</a></li>
                        </ul>
                        <!--tab pane-->
                        <div class="tab-content">
                            <!--main-info tab-->
                            <div id="main-info" class="tab-pane active">
                                <div class="row info-row">

                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('name',  Lang::get('string.name')) !!}
                                            </strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('name', null, array('id'=>'desc', 'class'=>'form-control')) !!}
                                    </div>

                                </div>

                                <div class="row info-row">

                                    <div class="col-md-3 title-info">
                                        <h5><strong>
                                                {!! Form::label('email', 'Email:') !!}
                                            </strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                                    </div>

                                </div>

                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>
                                                {!! Form::label('jobtitle',  Lang::get('string.job') ) !!}
                                            </strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('jobtitle', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5>
                                            <strong>
                                                {!! Form::label('company',  Lang::get('string.company') ) !!}
                                            </strong>
                                        </h5>
                                    </div>

                                    <div class="col-md-9 input-info">
                                        {!! Form::text('company', null, ['class'=>'form-control']) !!}
                                    </div>

                                </div>

                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5>
                                            <strong>
                                                {!! Form::label('phone', Lang::get('string.phone')) !!}
                                            </strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5>
                                            <strong>
                                                {!! Form::label('website', 'Website:') !!}
                                            </strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('website', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5>
                                            <strong>
                                                {!! Form::label('officephone',  Lang::get('string.officephone')) !!}
                                            </strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('officephone', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('fax', 'Fax:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('fax', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('address', Lang::get('string.address')) !!}</strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('address', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5>
                                            <strong>{!! Form::label('address2', Lang::get('string.address2')) !!}</strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('address2', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                {{--Main Infor--}}

                            </div>
                            <!--end main-info tab-->

                            <!--photo-info tab-->

                            <!--end photo-info tab-->

                            <!--social-info pane tab-->
                            <div id="social-info" class="tab-pane">
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('facebook', 'Facebook:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('twitter', 'Twitter:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('twitter', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('googleplus', 'Google+ :') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('googleplus', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('linkedin', 'Linkedin:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('linkedin', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('youtube', 'Youtube:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('youtube', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('instagram', 'Instagram:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('instagram', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('skype', 'Skype:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('skype', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('github', 'Github:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('github', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-md-3 title-info">
                                        <h5><strong>{!! Form::label('stackoverflow', 'Stackoverflow:') !!}</strong></h5>
                                    </div>
                                    <div class="col-md-9 input-info">
                                        {!! Form::text('stackoverflow', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <!--end social-info tab-->

                            {{--form close--}}
                        </div>
                        <!--end tab content-->
                    </div>
                    <!--end information-->


                    <!--signature preview-->
                    <div class="col-md-6 right-create">
                        <div class="sig-preview">
                            <h4>Signature Preview</h4>
                        </div>
                        <!--end preview-->

                        <div class="signature-full-preview"><!--Tao thu preview-->
                            <div class="mail-preview">
                                <div class="mail-title">
                                    <span id="red-dot"></span>
                                    <span id="yellow-dot"></span>
                                    <span id="green-dot"></span>

                                    <p id="mail-title-text">{!! Lang::get('string.newemail') !!}</p>
                                </div>

                                <div id="mail-subject">
                                    <p id="mail-subject-text">
                                        {!! Lang::get('string.email_to') !!}<br>
                                        {!! Lang::get('string.email_sub') !!}</p>
                                </div>

                                <div id="mail-content">
                                    <p id="mail-subject-text">
                                        {!! Lang::get('string.email_hi') !!}<br>
                                        {!! Lang::get('string.email_body1') !!} <a
                                                href="emailsig.com">emailsig.com</a> {!! Lang::get('string.email_body2') !!}
                                        <br><br>

                                        {!! Lang::get('string.email_tks') !!}</p>
                                </div>

                                <table id="preview-middle-area" border="0" cellpadding="0" width="450"
                                       style="table-layout:fixed; display: none">
                                    <tbody>
                                    <tr>

                                        <td class="logo-td" align="left" valign="middle" width="77">
                                            <p style="margin-right: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 20px;">
                                                <a style="text-decoration:none" href="http://fit.hanu.vn"
                                                   class="clink logo-container">
                                                    <img id="avatar-middle-area"
                                                         src="../img/business-man.png"
                                                            {{--src="https://htmlsigs.s3.amazonaws.com/logos/files/000/368/415/landscape/jarse.jpg"--}}
                                                         alt="Hanu" border="0" class="sig-logo" height="70" width="67">
                                                </a>

                                            </p>
                                        </td>

                                        <td align="left" class="content-td" nowrap="nowrap" width="383">
                                            <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; color: rgb(33, 33, 33); margin-bottom: 10px;">
                               <span id="live-preview"
                                     style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                     class="txt signature_name-target sig-hide lol">John Doe </span>


                                                <span class="title-sep sep" style="display: inline;">/</span> <span
                                                        style="color: rgb(33, 33, 33); display: inline;"
                                                        class="txt signature_jobtitle-target sig-hide"></span>
                                            <span id="job-area" class="title-sep sep"
                                                  style="display: inline;">Front End Developer </span> <span
                                                        style="color: rgb(33, 33, 33); display: inline;"
                                                        class="txt signature_jobtitle-target sig-hide"></span>

                                                <span class="email-sep break" style="display: inline;"><br></span>
                                                <a id="email-area" class="link email signature_email-target sig-hide"
                                                   href="#"
                                                   style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">johndoe@gmail.com </a><span
                                                        class="signature_email-sep sep"
                                                        style="display: inline;"> / </span>


                                <span id="phone-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_mobilephone-target sig-hide">123456789</span></p>


                                            <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">
                                <span id="company-area"
                                      style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_companyname-target sig-hide">Bluejay Co., Ltd </span>


                                                <span class="company-sep break" style="display: inline;"><br></span>

                                        <span style="color: rgb(33, 33, 33); display: inline;"
                                              class="txt office-sep sep">Office: </span>


                                <span id="officephone-area" style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_officephone-target sig-hide">123456789 </span>

                                <span style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt fax-sep sep">/ Fax: </span>
                                <span id="fax-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_fax-target sig-hide">123456789 </span>


                                                <span class="address-sep break" style="display: inline;"><br></span>
                                <span id="address-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address-target sig-hide">32 - black street, winter hour. </span>


                                                <span class="address2-sep break" style="display: block;"></span>
                                <span id="address2-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address2-target sig-hide">United Kingdom</span>


                                                <span class="website-sep break" style="display: inline;"><br></span>
                                                <a id="website-area" class="link signature_website-target sig-hide"
                                                   href="http://fit.hanu.vn"
                                                   style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">bluejay.io</a>
                                            </p>


                                            <p class="social-list"
                                               style="font-size: 0px; line-height: 0; font-family: Helvetica, Arial, sans-serif;">
                                                <a id="twitter-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_twitter-target sig-hide" href="#">
                                                    <img id="twitter-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="twitter.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png"
                                                         alt="Twitter">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_twitter-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <a id="facebook-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_facebook-target sig-hide" href="#">
                                                    <img id="facebook-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="facebook.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png"
                                                         alt="Facebook">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_facebook-sep">
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                      </span>


                                                <a id="skype-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_skype-target sig-hide"
                                                   href="#">
                                                    <img id="skype-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="skype.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png"
                                                         alt="Skype">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_skype-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <a id="youtube-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="youtube-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="youtube.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                                <!--Google plus section -->

                                                <a id="googleplus-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="googleplus-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="googleplus.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <!--LInkedin section -->

                                                <a id="linkedin-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="linkedin-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="linkedin.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                                <!-- Insta section -->


                                                <a id="instagram-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="instagram-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="instagram.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                                <!-- Github section -->


                                                <a id="github-link" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="github-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="github.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/github.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                                <!-- Stack over section -->

                                                <a id="stackoverflow-link"
                                                   style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="stackoverflow-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="stackoverflow.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png"
                                                         alt="stackoverflow">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">


                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p style="font-family: Helvetica, Arial, sans-serif; color: #212121; font-size: 9px; line-height: 12px;"
                                               class="txt signature_disclaimer-target"></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div id="preview-stack-area" style="display:none; padding-left : 10px">


                                    <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">
                                        <a style="text-decoration:none" href="http://iwayvietnam.com"
                                           class="clink logo-container">
                                            <img id="avatar-stack-area"
                                                 src="../img/business-man.png"
                                                 alt="Hanu" border="0" class="sig-logo" height="70" width="67">
                                        </a>
                                    </p>


                                    <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; color: rgb(33, 33, 33); margin-bottom: 10px;">
                               <span id="live-stack-preview"
                                     style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                     class="txt signature_name-target sig-hide lol">John Doe </span>


                                        <span class="title-sep sep" style="display: inline;">/</span> <span
                                                style="color: rgb(33, 33, 33); display: inline;"
                                                class="txt signature_jobtitle-target sig-hide"></span>
                                    <span id="job-stack-area" class="title-sep sep"
                                          style="display: inline;">Front End Developer</span>
                                         <span
                                                style="color: rgb(33, 33, 33); display: inline;"
                                                class="txt signature_jobtitle-target sig-hide"></span>

                                        <span class="email-sep break" style="display: inline;"><br></span>
                                        <a id="email-stack-area" class="link email signature_email-target sig-hide"
                                           href="#"
                                           style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">johndoe@gmail.com </a><span
                                                class="signature_email-sep sep"
                                                style="display: inline;"> / </span>



                            <span id="phone-stack-area"
                                  style="color: rgb(33, 33, 33); display: inline;"
                                  class="txt signature_mobilephone-target sig-hide">123456789</span></p>


                                    <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">
                                <span id="company-stack-area"
                                      style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_companyname-target sig-hide">Bluejay Co., Ltd</span>


                                        <span class="company-sep break" style="display: inline;"><br></span>

                        <span style="color: rgb(33, 33, 33); display: inline;"
                              class="txt office-sep sep">Office: </span>


                                <span id="officephone-stack-area" style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_officephone-target sig-hide">123456789</span>

                                <span style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt fax-sep sep">/ Fax: </span>
                                <span id="fax-stack-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_fax-target sig-hide">123456789 </span>


                                        <span class="address-sep break" style="display: inline;"><br></span>
                                <span id="address-stack-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address-target sig-hide">32 - black street, winter hour. </span>

                                        <span class="address2-sep break" style="display: block;"></span>
                                <span id="address2-stack-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address2-target sig-hide">United Kingdom</span>

                                        <span class="website-sep break" style="display: inline;"><br></span>
                                        <a id="website-stack-area" class="link signature_website-target sig-hide"
                                           href="http://fit.hanu.vn"
                                           style="color: rgb(71, 124, 204); text-decoration: none; display: inline;"> bluejay.io </a>
                                    </p>


                                    <!-- Social list section -->
                                    <p class="social-list"
                                       style="font-size: 0px; line-height: 0; font-family: Helvetica, Arial, sans-serif;">
                                        <a id="twitter-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_twitter-target sig-hide" href="#">
                                            <img id="twitter-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="twitter.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png"
                                                 alt="Twitter">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_twitter-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                        <a id="facebook-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_facebook-target sig-hide" href="#">
                                            <img id="facebook-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="facebook.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png"
                                                 alt="Facebook">
                                        </a>

                    <span style="white-space: nowrap; display: inline;" class="signature_facebook-sep">
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                      </span>


                                        <a id="skype-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_skype-target sig-hide"
                                           href="#">
                                            <img id="skype-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="skype.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png"
                                                 alt="Skype">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_skype-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                        <a id="youtube-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="youtube-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="youtube.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png"
                                                 alt="Youtube">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                        <!--Google plus section -->

                                        <a id="googleplus-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="googleplus-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="googleplus.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png"
                                                 alt="Youtube">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                        <!--LInkedin section -->

                                        <a id="linkedin-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="linkedin-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="linkedin.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png"
                                                 alt="Youtube">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                        <!-- Insta section -->


                                        <a id="instagram-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="instagram-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="instagram.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png"
                                                 alt="Youtube">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                        <!-- Github section -->


                                        <a id="github-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="github-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="github.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/github.png"
                                                 alt="Youtube">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                        <!-- Stack over flow section -->

                                        <a id="stackoverflow-stack-link" style="text-decoration: none; display: inline;"
                                           class="social signature_youtube-target sig-hide" href="http://s">
                                            <img id="stackoverflow-stack-area" width="16"
                                                 style="margin-bottom:2px; border:none; display:none;" height="16"
                                                 data-filename="stackoverflow.png"
                                                 src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png"
                                                 alt="stackoverflow">
                                        </a>

    <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                    </p>


                                    <p style="font-family: Helvetica, Arial, sans-serif; color: #212121; font-size: 9px; line-height: 12px;"
                                       class="txt signature_disclaimer-target"></p>
                                </div>


                                <table id="preview-test-area" border="0" cellpadding="0"
                                       style="table-layout:fixed; display: inline-block; padding-left :10px">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <table>
                                                <td valign="top">
                                                    <p style="margin-top: 0px ">
                                                        <a href="http://bluejay.io">
                                                            <img id="avatar-middle2-area"
                                                                 src="../img/business-man.png"
                                                                 alt="Hanu" border="0" class="sig-logo" height="70"
                                                                 width="67">
                                                        </a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <span id="namepreview"
                                                          style="font-family: Helvetica, Arial, sans-serif; font-weight: bold; color: #FF0000; display: inline; text-transform: uppercase; line-height: 5px; font-size: 16px; margin-left: 5px">John Doe</span>
                                                    <br>
                                                    <span id="job-area2"
                                                          style="font-family: Helvetica, Arial, sans-serif; color: rgb(31, 90, 122); display: inline; font-size: 11px; margin-left: 5px;">Front End Developer</span>

                                                    <p style="border-radius: 5px; background: lightgrey; padding: 2px; margin-left: 5px; margin-top: 2px;"></p>
                                                </td>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 16px; color: rgb(153, 153, 153);padding-left: 5px; margin-top: -10px">
                                                <span style="color: rgb(31, 90, 122); display: inline;font-size: 11px;"><font
                                                            color="red">off: </font><span id="officephone-area2">
                                                                                          123456789 </span> </span>
                                                <span style="color: rgb(31, 90, 122); display: inline;font-size: 11px;"><font
                                                            color="red">mob: </font><span id="phone-area2">
                                                                                          123456789 </span></span>
                                                <span style="color: rgb(31, 90, 122); display: inline;font-size: 11px;"><font
                                                            color="red">fax: </font><span id="fax-area2">
                                                                                          123456789 </span></span><br/>
                                                <span id="address-area2"
                                                      style="color: rgb(31, 90, 122); display: inline;font-size: 11px;">32 - black street, winter hour. </span>
                                                <span id="address2-area2"
                                                      style="color: rgb(31, 90, 122); display: inline;font-size: 11px;">United Kingdom</span><br/>
                                                <span id="company-area2"
                                                      style="color: rgb(31, 90, 122); display: inline;font-size: 11px;">Bluejay Co., Ltd</span>
                                                /
                                                <a id="website-area2" href="#"
                                                      style="color: rgb(20, 117, 186); display: inline;font-size: 11px;">bluejay.io</a>
                                                <br/>
                                                <a id="email-area2"  href="#"
                                                      style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">johndoe@gmail
                                                    .com </a></br>
                                            </p>

                                            <p class="social-list"
                                               style="font-size: 0px; line-height: 0; font-family: Helvetica, Arial, sans-serif;">
                                                <a id="twitter-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_twitter-target sig-hide" href="#">
                                                    <img id="twitter-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="twitter.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png"
                                                         alt="Twitter">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_twitter-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <a id="facebook-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_facebook-target sig-hide" href="#">
                                                    <img id="facebook-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="facebook.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png"
                                                         alt="Facebook">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_facebook-sep">
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                      </span>


                                                <a id="skype-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_skype-target sig-hide"
                                                   href="#">
                                                    <img id="skype-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="skype.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png"
                                                         alt="Skype">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_skype-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <a id="youtube-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="youtube-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="youtube.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                                <!--Google plus section -->

                                                <a id="googleplus-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="googleplus-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="googleplus.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                                <!--LInkedin section -->

                                                <a id="linkedin-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="linkedin-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="linkedin.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                                <!-- Insta section -->


                                                <a id="instagram-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="instagram-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="instagram.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                                <!-- Github section -->


                                                <a id="github-link2" style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="github-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="github.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/github.png"
                                                         alt="Youtube">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                                <!-- Stack over section -->

                                                <a id="stackoverflow-link2"
                                                   style="text-decoration: none; display: inline;"
                                                   class="social signature_youtube-target sig-hide" href="http://s">
                                                    <img id="stackoverflow-area2" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="stackoverflow.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png"
                                                         alt="stackoverflow">
                                                </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                            </p>

                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 left-create">
                        <h4>{!! Lang::get('string.upavatar') !!}</h4>

                        <div class="col-md-3">
                            <img style="width:75%" class="thumbnail img-icon" src="../img/avatar.png">
                        </div>

                        <!--template creator-->
                        <div class="col-md-9  upload-area">
                            <div id="photo-info" class="tab-pane photo-tab">

                                {!! Form::label('image',  Lang::get('string.chooseava') , ['class'=>'btn btn-primary btn-sm btn-upload']) !!}
                                <div style="display:none">
                                    {!! Form::file('image', array('class'=>'btn btn-primary', 'display'=>'none','onchange'=>'readURL(this)')) !!}
                                </div>
                                <p><span id="sm-text">{!! Lang::get('string.avareq') !!}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right-create">
                        <div class="template-view">
                            <h4>{!! Lang::get('string.chyt') !!}</h4>

                            <div class="dropdown">

                                <!--template-button-->
                                <button class="btn btn-custom dropdown-toggle" type="button" id="action-area"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Middle
                                    <span class="caret"></span>
                                </button>
                                <!--end button-->

                                <!--template content-->
                                <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdown-template">
                                    <li><a id="middle-layout">Middle</a></li>
                                    <li><a id="stack-layout">Stack</a></li>
                                    <li><a id="test-layout">Middle 2</a></li>
                                </ul>
                                <!--end content-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="create-sig">
                            {!! Form::submit( Lang::get('string.crsi'), array('class'=>'btn btn-lg btn-success btn-block'))  !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <!--end template-->

                {{--<div class="row">--}}
                {{--<div class="col-md-6 left-create create area">--}}
                {{--<div class="create-sig">--}}
                {{--<hr>--}}
                {{--{!! Form::submit('Create Signature', array('class'=>'btn btn-lg btn-success raised page-scroll btn-create'))  !!}--}}
                {{--{!! Form::close() !!}--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>


        {{--Form ends--}}
    </div>

    </div>
    </div>
    {{--------------- Scrip section --------------------}}

    {{--<script>--}}


    {{--//company--}}
    {{----}}
    {{--$('#company').keyup(function () {--}}
    {{--$('#company-area2').text($(this).val());--}}
    {{--$('#company-stack-area').text($(this).val());--}}
    {{--//            $('#company-area').text($(this).val());--}}
    {{--$('#company-area').text($(this).val());--}}

    {{--});--}}

    {{--//officephone--}}
    {{--$('#officephone').keyup(function () {--}}
    {{--$('#officephone-stack-area').text($(this).val());--}}
    {{--$('#officephone-area').text($(this).val());--}}
    {{--$('#officephone-area2').text($(this).val());--}}
    {{--});--}}

    {{--//fax--}}
    {{--$('#fax').keyup(function () {--}}
    {{--$('#fax-stack-area').text($(this).val());--}}
    {{--$('#fax-area').text($(this).val());--}}
    {{--$('#fax-area2').text($(this).val());--}}
    {{--});--}}

    {{--//address--}}
    {{--$('#address').keyup(function () {--}}
    {{--$('#address-stack-area').text($(this).val());--}}
    {{--$('#address-area').text($(this).val());--}}
    {{--$('#address-area2').text($(this).val());--}}
    {{--});--}}

    {{--// address2--}}
    {{--$('#address2').keyup(function () {--}}
    {{--$('#address2-stack-area').text($(this).val());--}}
    {{--$('#address2-area').text($(this).val());--}}
    {{--$('#address2-area2').text($(this).val());--}}
    {{--});--}}


    {{--//drop down--}}
    {{--$("#middle-layout").click(function () {--}}
    {{--$("#action-area").text("Middle");--}}
    {{--$("#preview-middle-area").show();--}}
    {{--$('#preview-test-area').hide();--}}
    {{--$('#preview-stack-area').hide();--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$('#stack-layout').on("click", function () {--}}
    {{--$("#action-area").text("Stack");--}}
    {{--$('#preview-middle-area').hide();--}}
    {{--$('#preview-test-area').hide();--}}
    {{--$("#preview-stack-area").show();--}}
    {{--});--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$('#test-layout').on("click", function () {--}}
    {{--$("#action-area").text("Middle 2");--}}
    {{--$("#preview-test-area").show();--}}
    {{--$('#preview-middle-area').hide();--}}
    {{--$('#preview-stack-area').hide();--}}

    {{--});--}}
    {{--});--}}
    {{--//avatar--}}
    {{--function readURL(input) {--}}
    {{--if (input.files && input.files[0]) {--}}
    {{--var reader = new FileReader();--}}

    {{--reader.onload = function (e) {--}}
    {{--$('#avatar-stack-area').attr('src', e.target.result);--}}
    {{--$('#avatar-middle-area').attr('src', e.target.result);--}}
    {{--$('#avatar-middle2-area').attr('src', e.target.result);--}}
    {{--}--}}

    {{--reader.readAsDataURL(input.files[0]);--}}
    {{--}--}}
    {{--}--}}

    {{--//name--}}
    {{--$(function () {--}}
    {{--$('#desc').keyup(function () {--}}
    {{--var c = document.getElementByClassName('lol');--}}
    {{--c.text($(this).val());--}}
    {{--$('#job-area').text($(this).val());--}}
    {{--});--}}
    {{--});--}}


    {{--//job tilte--}}
    {{--$(function () {--}}
    {{--$('#jobtitle').keyup(function () {--}}
    {{--$('#job-stack-area').text($(this).val());--}}
    {{--$('#job-area').text($(this).val());--}}
    {{--$('#job-area2').text($(this).val());--}}
    {{--});--}}
    {{--});--}}

    {{--//email--}}

    {{--$('#email').keyup(function () {--}}
    {{--$('#email-stack-area').text($(this).val());--}}
    {{--$('#email-stack-area').attr("href", function (i, e) {--}}
    {{--return "mailto:" + $('#email-stack-area').text();--}}
    {{--});--}}

    {{--$('#email-area').text($(this).val());--}}
    {{--$('#email-area').attr("href", function (i, e) {--}}
    {{--return "mailto:" + $('#email-area').text();--}}
    {{--});--}}
    {{--$('#email-area2').text($(this).val());--}}
    {{--$('#email-area2').attr("href", function (i, e) {--}}
    {{--return "mailto:" + $('#email-area2').text();--}}
    {{--});--}}
    {{--});--}}

    {{--//phone--}}
    {{--$('#phone').keyup(function () {--}}
    {{--$('#phone-stack-area').text($(this).val());--}}
    {{--$('#phone-area').text($(this).val());--}}
    {{--$('#phone-area2').text($(this).val());--}}
    {{--});--}}

    {{--//Website--}}
    {{--$('#website').keyup(function () {--}}
    {{--$('#website-stack-area').text($(this).val());--}}
    {{--$('#website-stack-area').attr("href", function (i, e) {--}}
    {{--return $('#website').val();--}}
    {{--});--}}

    {{--$('#website-area').text($(this).val());--}}
    {{--$('#website-area').attr("href", function (i, e) {--}}
    {{--return $('#website').val();--}}
    {{--});--}}

    {{--$('#website-area2').text($(this).val());--}}
    {{--$('#website-area2').attr("href", function (i, e) {--}}
    {{--return $('#website').val();--}}
    {{--});--}}
    {{--});--}}

    {{--//Twitter--}}
    {{--$('#twitter').keyup(function () {--}}
    {{--$('#twitter-stack-area').show();--}}
    {{--$('#twitter-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#twitter').val();--}}
    {{--});--}}

    {{--$('#twitter-area').show();--}}
    {{--$('#twitter-link').attr("href", function (i, e) {--}}
    {{--return $('#twitter').val();--}}
    {{--});--}}

    {{--$('#twitter-area2').show();--}}
    {{--$('#twitter-link').attr("href", function (i, e) {--}}
    {{--return $('#twitter').val();--}}
    {{--});--}}
    {{--});--}}
    {{--$(function () {--}}
    {{--$("#twitter").on("focus, keyup", function () {--}}
    {{--$("#twitter-stack-area").toggle(this.value != "");--}}
    {{--});--}}

    {{--$("#twitter").on("focus, keyup", function () {--}}
    {{--$("#twitter-area").toggle(this.value != "");--}}
    {{--});--}}

    {{--$("#twitter").on("focus, keyup", function () {--}}
    {{--$("#twitter-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}

    {{--//Facebook--}}
    {{--$('#facebook').keyup(function () {--}}
    {{--$('#facebook-stack-area').show();--}}
    {{--$('#facebook-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#facebook').val();--}}
    {{--});--}}

    {{--$('#facebook-area').show();--}}
    {{--$('#facebook-link').attr("href", function (i, e) {--}}
    {{--return $('#facebook').val();--}}
    {{--});--}}

    {{--$('#facebook-area').show();--}}
    {{--$('#facebook-link2').attr("href", function (i, e) {--}}
    {{--return $('#facebook').val();--}}
    {{--});--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$("#facebook").on("focus, keyup", function () {--}}
    {{--$("#facebook-stack-area").toggle(this.value != "");--}}
    {{--$("#facebook-area").toggle(this.value != "");--}}
    {{--$("#facebook-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}

    {{--//skype--}}
    {{--$('#skype').keyup(function () {--}}
    {{--$('#skype-stack-area').show();--}}
    {{--$('#skype-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#skype').val();--}}
    {{--});--}}

    {{--$('#skype-area').show();--}}
    {{--$('#skype-link').attr("href", function (i, e) {--}}
    {{--return $('#skype').val();--}}
    {{--});--}}

    {{--$('#skype-area2').show();--}}
    {{--$('#skype-link2').attr("href", function (i, e) {--}}
    {{--return $('#skype').val();--}}
    {{--});--}}
    {{--});--}}
    {{--$(function () {--}}
    {{--$("#skype").on("focus, keyup", function () {--}}
    {{--$("#skype-stack-area").toggle(this.value != "");--}}
    {{--$("#skype-area").toggle(this.value != "");--}}
    {{--$("#skype-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}

    {{--//Youtube--}}
    {{--$('#youtube').keyup(function () {--}}
    {{--$('#youtube-stack-area').show();--}}
    {{--$('#youtube-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#youtube').val();--}}
    {{--});--}}

    {{--$('#youtube-area').show();--}}
    {{--$('#youtube-link').attr("href", function (i, e) {--}}
    {{--return $('#youtube').val();--}}
    {{--});--}}

    {{--$('#youtube-area').show();--}}
    {{--$('#youtube-link2').attr("href", function (i, e) {--}}
    {{--return $('#youtube').val();--}}
    {{--});--}}
    {{--});--}}
    {{--$(function () {--}}
    {{--$("#youtube").on("focus, keyup", function () {--}}
    {{--$("#youtube-stack-area").toggle(this.value != "");--}}
    {{--$("#youtube-area").toggle(this.value != "");--}}
    {{--$("#youtube-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}


    {{--//G+--}}
    {{--$('#googleplus').keyup(function () {--}}
    {{--$('#googleplus-stack-area').show();--}}
    {{--$('#googleplus-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#googleplus').val();--}}
    {{--});--}}

    {{--$('#googleplus-area').show();--}}
    {{--$('#googleplus-link').attr("href", function (i, e) {--}}
    {{--return $('#googleplus').val();--}}
    {{--});--}}

    {{--$('#googleplus-area').show();--}}
    {{--$('#googleplus-link2').attr("href", function (i, e) {--}}
    {{--return $('#googleplus').val();--}}
    {{--});--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$("#googleplus").on("focus, keyup", function () {--}}
    {{--$("#googleplus-stack-area").toggle(this.value != "");--}}
    {{--$("#googleplus-area").toggle(this.value != "");--}}
    {{--$("#googleplus-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}


    {{--//Github--}}
    {{--$('#github').keyup(function () {--}}
    {{--$('#github-stack-area').show();--}}
    {{--$('#github-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#github').val();--}}
    {{--});--}}

    {{--$('#github-area').show();--}}
    {{--$('#github-link').attr("href", function (i, e) {--}}
    {{--return $('#github').val();--}}
    {{--});--}}

    {{--$('#github-area').show();--}}
    {{--$('#github-link2').attr("href", function (i, e) {--}}
    {{--return $('#github').val();--}}
    {{--});--}}
    {{--});--}}


    {{--$(function () {--}}
    {{--$("#github").on("focus, keyup", function () {--}}
    {{--$("#github-stack-area").toggle(this.value != "");--}}
    {{--$("#github-area").toggle(this.value != "");--}}
    {{--$("#github-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}


    {{--//Instagram--}}
    {{--$('#instagram').keyup(function () {--}}
    {{--$('#instagram-stack-area').show();--}}
    {{--$('#instagram-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#instagram').val();--}}
    {{--});--}}

    {{--$('#instagram-area').show();--}}
    {{--$('#instagram-link').attr("href", function (i, e) {--}}
    {{--return $('#instagram').val();--}}
    {{--});--}}

    {{--$('#instagram-area').show();--}}
    {{--$('#instagram-link2').attr("href", function (i, e) {--}}
    {{--return $('#instagram').val();--}}
    {{--});--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$("#instagram").on("focus, keyup", function () {--}}
    {{--$("#instagram-stack-area").toggle(this.value != "");--}}
    {{--$("#instagram-area").toggle(this.value != "");--}}
    {{--$("#instagram-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}


    {{--$('#linkedin').keyup(function () {--}}
    {{--$('#linkedin-stack-area').show();--}}
    {{--$('#linkedin-stack-link').attr("href", function (i, e) {--}}
    {{--return $('#linkedin').val();--}}
    {{--});--}}

    {{--$('#linkedin-area').show();--}}
    {{--$('#linkedin-link').attr("href", function (i, e) {--}}
    {{--return $('#linkedin').val();--}}
    {{--});--}}

    {{--$('#linkedin-area').show();--}}
    {{--$('#linkedin-link2').attr("href", function (i, e) {--}}
    {{--return $('#linkedin').val();--}}
    {{--});--}}
    {{--});--}}

    {{--$(function () {--}}
    {{--$("#linkedin").on("focus, keyup", function () {--}}
    {{--$("#linkedin-stack-area").toggle(this.value != "");--}}
    {{--$("#linkedin-area").toggle(this.value != "");--}}
    {{--$("#linkedin-area2").toggle(this.value != "");--}}
    {{--});--}}
    {{--});--}}


    {{--</script>--}}
@stop

@section('why')

    <section id="why" class="content-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Why We Are Born?</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="block block-icon-left">
                        <div class="icon">
                            <i class="fa fa-level-up fa-5x"></i>
                        </div>
                        <div class="icon-text">
                            <h3>Level Up Your Professional</h3>

                            <p>By using a well-designed signature email, you will be appreciated</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="block block-icon-left">
                        <div class="icon">
                            <i class="fa fa-bolt fa-5x"></i>
                        </div>
                        <div class="icon-text">
                            <h3>Fastest </h3>

                            <p class="why-reason">By using a well-designed signature email, you will be appreciated</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="block block-icon-left">
                        <div class="icon">
                            <i class="fa fa-clone fa-5x"></i>
                        </div>
                        <div class="icon-text">
                            <h3>Level Up Your Professional</h3>

                            <p class="why-reason">By using a well-designed signature email, you will be appreciated</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
