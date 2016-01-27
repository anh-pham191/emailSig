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

    <section id="create" class="content-section">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-3">-->

                <!--</div>-->

                <div class="col-md-6 right-create" style="padding-top: 20px">
                    <!--<div class="sig-preview" style="text-align: center;">-->
                    <!--<h2>Result</h2>-->
                    <!--</div>&lt;!&ndash;end preview&ndash;&gt;-->

                    <div class="signature-full-preview"><!--Tao thu preview-->
                        <div class="mail-preview">
                            <div class="mail-title">
                                <span id="red-dot"></span>
                                <span id="yellow-dot"></span>
                                <span id="green-dot"></span>

                                <p id="mail-title-text">New Email</p>
                            </div>

                            <div id="mail-subject">
                                <p id="mail-subject-text">
                                    To: John Doe<br>
                                    Subject: Subject Name</p>
                            </div>

                            <div id="mail-content">
                                <p id="mail-subject-text">
                                    Hi John,<br>
                                    Please head over to <a href="emailsig.com">emailsig.com</a> to create the email
                                    signatures for the team. Once created use the dashboard to send them over to each
                                    employee<br><br>
                                    Thanks</p>
                            </div>

                            <table id="preview-middle-area" border="0" cellpadding="0" width="450"
                                   style="table-layout:fixed; display: inline-block">
                                <tbody>
                                <tr>

                                    <td class="logo-td" align="left" valign="middle" width="77">
                                        <p style="margin-right: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 20px;">
                                            <a style="text-decoration:none" href="http://fit.hanu.vn"
                                               class="clink logo-container">
                                                {!! HTML::image($image, '',array('class'=>'sig-logo', 'height'=>80, 'width'=> 80)   ) !!}
                                                {{--<img id="avatar-middle-area"--}}
                                                     {{--src="http://zingup.net/view/74613:/magnet2.png"--}}
                                                        {{--src="https://htmlsigs.s3.amazonaws.com/logos/files/000/368/415/landscape/jarse.jpg"--}}
                                                     {{--alt="Hanu" border="0" class="sig-logo" height="70" width="67">--}}
                                            </a>

                                        </p>
                                    </td>

                                    <td align="left" class="content-td" nowrap="nowrap" width="383">
                                        <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; color: rgb(33, 33, 33); margin-bottom: 10px;">

                               <span
                                       style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                       class="txt signature_name-target sig-hide lol">{!! $name !!}</span>

                                            <span class="title-sep sep" style="display: inline;">/</span> <span
                                                    style="color: rgb(33, 33, 33); display: inline;"
                                                    class="txt signature_jobtitle-target sig-hide"></span>
                                            <span class="title-sep sep"
                                                  style="display: inline;">{!! $jobtitle !!}</span> <span
                                                    style="color: rgb(33, 33, 33); display: inline;"
                                                    class="txt signature_jobtitle-target sig-hide"></span>

                                            <span class="email-sep break" style="display: inline;"><br></span>
                                            <a id="email-area" class="link email signature_email-target sig-hide"
                                               href="$"
                                               style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">{!! $email !!} </a><span
                                                    class="signature_email-sep sep"
                                                    style="display: inline;"> / </span>


                                <span id="phone-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_mobilephone-target sig-hide">{!!$phone  !!}</span>
                                        </p>


                                        <p style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; line-height: 12px; margin-bottom: 10px;">
                                <span id="company-area"
                                      style="font-weight: bold; color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_companyname-target sig-hide">{!! $company !!}</span>


                                            <span class="company-sep break" style="display: inline;"><br></span>

                                        <span style="color: rgb(33, 33, 33); display: inline;"
                                              class="txt office-sep sep">Office: </span>


                                <span id="officephone-area" style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_officephone-target sig-hide">{!! $officephone !!} </span>

                                <span style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt fax-sep sep">/ Fax: </span>
                                <span id="fax-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_fax-target sig-hide">{!! $fax !!} </span>


                                            <span class="address-sep break" style="display: inline;"><br></span>
                                <span id="address-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address-target sig-hide">{!! $address !!} </span>


                                            <span class="address2-sep break" style="display: block;"></span>
                                <span id="address2-area"
                                      style="color: rgb(33, 33, 33); display: inline;"
                                      class="txt signature_address2-target sig-hide">{!! $address2 !!}</span>


                                            <span class="website-sep break" style="display: inline;"><br></span>
                                            <a id="website-area" class="link signature_website-target sig-hide"
                                               href="http://fit.hanu.vn"
                                               style="color: rgb(71, 124, 204); text-decoration: none; display: inline;">{!! $website !!}</a>
                                        </p>


                                        <p class="social-list"
                                           style="font-size: 0px; line-height: 0; font-family: Helvetica, Arial, sans-serif;">
                                            <a id="twitter-link" style="text-decoration: none; display: inline;"
                                               class="social signature_twitter-target sig-hide" href="#">
                                                @if( $twitter != (''))
                                                <img id="twitter-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:inline-block;"
                                                     height="16"
                                                     data-filename="twitter.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png"
                                                     alt="Twitter">
                                                    @else
                                                    <img id="twitter-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="twitter.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/twitter.png"
                                                         alt="Twitter">
                                                    @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_twitter-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                            <a id="facebook-link" style="text-decoration: none; display: inline;"
                                               class="social signature_facebook-target sig-hide" href="#">
                                                @if( $facebook != (''))
                                                <img id="facebook-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:inline-block;"
                                                     height="16"
                                                     data-filename="facebook.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png"
                                                     alt="Facebook">
                                                    @else
                                                    <img id="facebook-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="facebook.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/facebook.png"
                                                         alt="Facebook">
                                                    @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_facebook-sep">
                            <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
                      </span>


                                            <a id="skype-link" style="text-decoration: none; display: inline;"
                                               class="social signature_skype-target sig-hide"
                                               href="#">
                                                @if( $skype != (''))

                                                <img id="skype-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:inline-block;"
                                                     height="16"
                                                     data-filename="skype.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png"
                                                     alt="Skype">
                                                    @else
                                                    <img id="skype-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="skype.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/skype.png"
                                                         alt="Skype">
                                                    @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_skype-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                            <a id="youtube-link" style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $youtube != (''))
                                                    <img id="youtube-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="youtube.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png"
                                                         alt="Youtube">
                                                    @else

                                                <img id="youtube-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:none;"
                                                     height="16"
                                                     data-filename="youtube.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/youtube.png"
                                                     alt="Youtube">
                                                @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                            <!--Google plus section -->

                                            <a id="googleplus-link" style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $googleplus != (''))
                                                    <img id="googleplus-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="googleplus.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png"
                                                         alt="Youtube">
                                                @else
                                                    <img id="googleplus-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="googleplus.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/googleplus.png"
                                                         alt="Youtube">
                                                @endif

                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>
                                            <!--LInkedin section -->

                                            <a id="linkedin-link" style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $linkedin != (''))
                                                    <img id="linkedin-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="linkedin.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png"
                                                         alt="Youtube">
                                                    @else


                                                <img id="linkedin-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:none;"
                                                     height="16"
                                                     data-filename="linkedin.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png"
                                                     alt="Youtube">
                                                @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                            <!-- Insta section -->


                                            <a id="instagram-link" style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $instagram != (''))
                                                    <img id="instagram-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="instagram.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png"
                                                         alt="Youtube">
                                                    @else
                                                <img id="instagram-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:none;"
                                                     height="16"
                                                     data-filename="instagram.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/instagram.png"
                                                     alt="Youtube">
                                                    @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>

                                            <!-- Github section -->


                                            <a id="github-link" style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $github != (''))
                                                    <img id="github-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="github.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/github.png"
                                                         alt="Youtube">
                                                @else
                                                    <img id="github-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:none;"
                                                         height="16"
                                                         data-filename="github.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/github.png"
                                                         alt="Youtube">

                                                @endif
                                            </a>

                                <span style="white-space: nowrap; display: inline;" class="signature_youtube-sep">
      <img src="https://s3.amazonaws.com/htmlsig-assets/spacer.gif" width="2">
    </span>


                                            <!-- Stack over section -->

                                            <a id="stackoverflow-link"
                                               style="text-decoration: none; display: inline;"
                                               class="social signature_youtube-target sig-hide" href="http://s">
                                                @if( $stackoverflow != (''))
                                                    <img id="stackoverflow-area" width="16"
                                                         style="margin-bottom:2px; border:none; display:inline-block;"
                                                         height="16"
                                                         data-filename="stackoverflow.png"
                                                         src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png"
                                                         alt="stackoverflow">
                                                    @else
                                                <img id="stackoverflow-area" width="16"
                                                     style="margin-bottom:2px; border:none; display:none;"
                                                     height="16"
                                                     data-filename="stackoverflow.png"
                                                     src="https://s3.amazonaws.com/htmlsig-assets/round/stackoverflow.png"
                                                     alt="stackoverflow">
                                                    @endif
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
                        </div>
                    </div>

                    <!--<div style="padding-top: 20px">-->
                    <!--</div>-->
                    <div class="zero-clipboard">
                        <span class="btn-clipboard btn-clipboard-hover">Copy</span>
                    </div>

                </div>

                <div class="col-md-6">


                    <!--tab-->
                    <ul class="nav nav-tabs" role="tablist" style="margin-top: 30px">
                        <li class="active"><a href="#main-info" data-toggle="tab" role="tab">Copy</a></li>

                        <li><a href="#social-info" data-toggle="tab" role="tab">How to use</a></li>
                    </ul>
                    <!--tab pane-->
                    <div class="tab-content">
                        <!--main-info tab-->
                        <div id="main-info" class="tab-pane active">
                            <figure class="highlight" style="margin-top: 20px;"><pre><code class=language-html
                                                                                           data-lang=html><span
                                                class=nt>&lt;div</span>
                                        <span class=na>class=</span><span class=s>"btn-group btn-group-justified"</span>
                                        <span class=na>role=</span><span
                                                class=s>"group"</span> <span class=na>aria-label=</span><span class=s>"..."</span><span
                                                class=nt>&gt;</span>
                                        ...
                                        <span class=nt>&lt;/div&gt;</span></code></pre>
                                <div class="btn-group" style="float: right !important;">
                                    <button type="button" class="btn btn-info">Copy</button>
                                </div>
                            </figure>
                        </div>
                        <div id="social-info" class="tab-pane">
                            <div style="line-height:3em; height: 425px; overflow:scroll; padding:5px; color:#714D03; scrollbar-base-color:#DEBB07;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet efficitur
                                    justo. Sed ut quam magna. Pellentesque pulvinar purus ut ultricies volutpat. Morbi
                                    sed velit commodo, hendrerit nunc vitae, gravida neque. Curabitur rutrum dictum
                                    sapien, eget luctus orci ornare ut. Donec nibh metus, mattis eget rutrum ac, euismod
                                    nec leo. Vestibulum neque velit, mollis at blandit quis, tempus at lorem. Fusce
                                    pulvinar, nunc vitae viverra aliquam, felis neque ullamcorper massa, eu consequat mi
                                    ligula in diam. Suspendisse eleifend fringilla purus, placerat accumsan mi feugiat
                                    ac. Donec dignissim est eget elementum volutpat. Pellentesque sodales accumsan diam,
                                    quis finibus mi. Praesent iaculis eros nulla, eget blandit ante feugiat sit amet.
                                    Praesent non leo quis velit ornare ornare. Nam vehicula nisi a sem placerat
                                    sodales</p><br/>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet efficitur
                                    justo. Sed ut quam magna. Pellentesque pulvinar purus ut ultricies volutpat. Morbi
                                    sed velit commodo, hendrerit nunc vitae, gravida neque. Curabitur rutrum dictum
                                    sapien, eget luctus orci ornare ut. Donec nibh metus, mattis eget rutrum ac, euismod
                                    nec leo. Vestibulum neque velit, mollis at blandit quis, tempus at lorem. Fusce
                                    pulvinar, nunc vitae viverra aliquam, felis neque ullamcorper massa, eu consequat mi
                                    ligula in diam. Suspendisse eleifend fringilla purus, placerat accumsan mi feugiat
                                    ac. Donec dignissim est eget elementum volutpat. Pellentesque sodales accumsan diam,
                                    quis finibus mi. Praesent iaculis eros nulla, eget blandit ante feugiat sit amet.
                                    Praesent non leo quis velit ornare ornare. Nam vehicula nisi a sem placerat
                                    sodales</p><br/>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet efficitur
                                    justo. Sed ut quam magna. Pellentesque pulvinar purus ut ultricies volutpat. Morbi
                                    sed velit commodo, hendrerit nunc vitae, gravida neque. Curabitur rutrum dictum
                                    sapien, eget luctus orci ornare ut. Donec nibh metus, mattis eget rutrum ac, euismod
                                    nec leo. Vestibulum neque velit, mollis at blandit quis, tempus at lorem. Fusce
                                    pulvinar, nunc vitae viverra aliquam, felis neque ullamcorper massa, eu consequat mi
                                    ligula in diam. Suspendisse eleifend fringilla purus, placerat accumsan mi feugiat
                                    ac. Donec dignissim est eget elementum volutpat. Pellentesque sodales accumsan diam,
                                    quis finibus mi. Praesent iaculis eros nulla, eget blandit ante feugiat sit amet.
                                    Praesent non leo quis velit ornare ornare. Nam vehicula nisi a sem placerat
                                    sodales</p><br/>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet efficitur
                                    justo. Sed ut quam magna. Pellentesque pulvinar purus ut ultricies volutpat. Morbi
                                    sed velit commodo, hendrerit nunc vitae, gravida neque. Curabitur rutrum dictum
                                    sapien, eget luctus orci ornare ut. Donec nibh metus, mattis eget rutrum ac, euismod
                                    nec leo. Vestibulum neque velit, mollis at blandit quis, tempus at lorem. Fusce
                                    pulvinar, nunc vitae viverra aliquam, felis neque ullamcorper massa, eu consequat mi
                                    ligula in diam. Suspendisse eleifend fringilla purus, placerat accumsan mi feugiat
                                    ac. Donec dignissim est eget elementum volutpat. Pellentesque sodales accumsan diam,
                                    quis finibus mi. Praesent iaculis eros nulla, eget blandit ante feugiat sit amet.
                                    Praesent non leo quis velit ornare ornare. Nam vehicula nisi a sem placerat
                                    sodales</p><br/>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@stop
