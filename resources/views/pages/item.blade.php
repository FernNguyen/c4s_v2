@extends('layouts.default')
    @section('title')
        {!! $data['item']['title'] !!}
    @stop
@section('content')


    <!-- BEGIN .content -->
<div class="content">

    <!-- BEGIN .wrapper -->
    <div class="wrapper">

        <div class="content-wrapper">

            <!-- BEGIN .composs-main-content -->
            <div class="composs-main-content composs-main-content-s-1">

                <div class="theiaStickySidebar">

                    <!-- BEGIN .composs-panel -->
                    <div class="composs-panel">

                        <!-- <div class="composs-panel-title">
                            <strong>Blog page style #1</strong>
                        </div> -->

                        <div class="composs-panel-inner">

                            <div class="composs-main-article-content">

                                <h1>{!! $data['item']['title'] !!}</h1>

                                <div class="composs-main-article-head">
                                    {{--@if($data['item']['imgs'])--}}
                                    {{--<div class="composs-main-article-media">--}}
                                        {{--<img src="{!! $data['item']['imgs'] !!}" alt="" />--}}
                                    {{--</div>--}}
                                    {{--@endif--}}
                                    <div class="composs-main-article-meta">
                                        <span class="item"><i class="material-icons">access_time</i>{!! $data['item']['created_at'] !!}</span>
                                        <a href="#comments" class="item"><i class="material-icons">chat_bubble_outline</i>3 Comments</a>
                                        <span class="item"><i class="material-icons">folder_open</i>

                                            <a href="#">PHP</a>

                                        </span>
                                    </div>
                                    <p>
                                        {!! closetags($data['item']['intro']) !!}
                                    </p>
                                </div>

                                <div class="shortcode-content">
                                    {!! closetags($data['item']['content']) !!}
                                </div>

                                <div class="composs-review-block">
                                    <div class="composs-review-block-score">
                                        <span>6.5</span>
                                    </div>
                                    <div class="composs-review-block-good">
                                        <strong>The Good</strong>
                                        <ul>
                                            <li>Mei pertinax mandamus</li>
                                            <li>Percipitur no lorem aperiri</li>
                                            <li>Habemus eum ea te vi</li>
                                        </ul>
                                    </div>
                                    <div class="composs-review-block-bad">
                                        <strong>The Bad</strong>
                                        <ul>
                                            <li>Habemus eum ea te vi</li>
                                            <li>Accommodare</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="composs-tag-list">

                                    <?php

                                   $this_tag = explode(',', $data['item']['list_tag']);
                                    ?>
                                    @for($i=0; $i< count($this_tag); $i++)
                                        <a href="#">{!! $this_tag[$i] !!}</a>
                                    @endfor

                                </div>

                                <div class="composs-author-block">
                                    <div class="item-header">
                                        <a href="#"><img src="http://composs.orange-themes.com/html/images/photos/avatar-3.jpg" alt="" /></a>
                                    </div>
                                    <div class="item-content">
                                        <strong>Jess Iandiorio</strong>
                                        <p>Tota argumentum nec in. Sed an everti melius eleifend. Et tation legere referrentur eos. Duo eos ex facilis rationibus.</p>
                                        <a href="blog.html" class="composs-button composs-button-green">View more articles</a>
                                        <a href="#" class="composs-button composs-button-orange"><i class="fa fa-rss"></i>Subscribe</a>
                                    </div>
                                </div>

                                <div class="composs-comments">
                                    <div class="composs-secondary-title">
                                        <a href="#writeacomment" class="right composs-button">Leave a response</a>
                                        <strong><i class="material-icons">comment</i>3 Responses</strong>
                                    </div>
                                    <div class="comment-list">
                                        <ol id="comments">
                                            <li class="comment">
                                                <div class="comment-block">
                                                    <a href="#" class="image-avatar">
                                                        <img src="http://composs.orange-themes.com/html/images/photos/avatar-4.jpg" alt="" title="" />
                                                    </a>
                                                    <div class="comment-text">
                                                        <span class="time-stamp right">January 12, 2015</span>
                                                        <strong class="user-nick"><a href="#">Charley Leroy</a></strong>
                                                        <div class="shortcode-content">
                                                            <p>This is a great, easy-to-read list of points. A good bit of the time, we (general we) think we’re being understanding and compossionate, but are coming across as the opposite. I think this is good for or something can make a big difference.</p>
                                                        </div>
                                                        <a class="composs-button read-more-button" href="#"><i class="material-icons">reply</i>Reply this comment</a>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="comment-block">
                                                            <a href="#" class="image-avatar">
                                                                <img src="http://composs.orange-themes.com/html/images/photos/avatar-5.jpg" alt="" title="" />
                                                            </a>
                                                            <div class="comment-text">
                                                                <span class="time-stamp right">January 12, 2015</span>
                                                                <strong class="user-nick"><a href="#">Orange-Themes</a><span class="user-label">Author</span></strong>
                                                                <div class="shortcode-content">
                                                                    <p>Eu has tempor libris, per nusquam scribentur ei, velit interesset eu per. In simul maiestatis mei, ei graeci forensibus vis. Ferri debitis salutatus pri in, duo in disputando adversarium, at per solum omnium disputando. An mollis delicata adolescens eum.</p>
                                                                </div>
                                                                <a class="composs-button read-more-button" href="#"><i class="material-icons">reply</i>Reply this comment</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-block">
                                                    <a href="#" class="image-avatar">
                                                        <img src="http://composs.orange-themes.com/html/images/photos/avatar-6.jpg" alt="" title="" />
                                                    </a>
                                                    <div class="comment-text">
                                                        <span class="time-stamp right">January 12, 2015</span>
                                                        <strong class="user-nick"><a href="#">Jane Arabella</a></strong>
                                                        <div class="shortcode-content">
                                                            <p>Tota argumentum nec in. Sed an everti melius eleifend. Et tation legere referrentur eos. Duo erat tempor ea.</p>
                                                        </div>
                                                        <a class="composs-button read-more-button" href="#"><i class="material-icons">reply</i>Reply this comment</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="composs-comments">
                                    <div class="composs-secondary-title">
                                        <!-- <a href="#comments" class="right composs-button">all responses</a> -->
                                        <strong><i class="material-icons">mode_edit</i>Leave a response</strong>
                                    </div>
                                    <div class="comment-form">
                                        <div id="respond" class="comment-respond">

                                            <form action="#" class="comment-form">
                                                <div class="comment-info">
                                                    <strong>Your data will be safe!</strong>
                                                    <span>Your e-mail address will not be published. Also other data will not be shared with third person.</span>
                                                </div>
                                                <div class="alert-message ot-shortcode-alert-message alert-green">
                                                    <strong>Success! This a success message</strong>
                                                </div>
                                                <div class="alert-message ot-shortcode-alert-message alert-red">
                                                    <strong>Error! This an error message</strong>
                                                </div>
                                                <div class="alert-message ot-shortcode-alert-message">
                                                    <strong>Warning! This a warning message</strong>
                                                </div>
                                                <div class="contact-form-content">
                                                    <p class="contact-form-user">
                                                        <label class="label-input">
                                                            <span>Nickname<i class="required">*</i></span>
                                                            <input type="text" placeholder="Nickname" name="nickname" value="">
                                                        </label>
                                                    </p>
                                                    <p class="contact-form-email">
                                                        <label class="label-input">
                                                            <span>E-mail<i class="required">*</i></span>
                                                            <input type="email" placeholder="E-mail" name="email" value="">
                                                        </label>
                                                    </p>
                                                    <p class="contact-form-website">
                                                        <label class="label-input">
                                                            <span>Web address</span>
                                                            <input type="text" placeholder="ex. www.orange-tehemes.com" name="www" value="">
                                                        </label>
                                                    </p>
                                                    <p class="contact-form-comment">
                                                        <label class="label-input">
                                                            <span>Comment text<i class="required">*</i></span>
                                                            <textarea name="comment" placeholder="Comment text"></textarea>
                                                        </label>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit button" value="Post a Comment">
                                                    </p>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- END .composs-panel -->
                    </div>

                </div>

                <!-- END .composs-main-content -->
            </div>

            <!-- BEGIN #sidebar -->

            <!-- BEGIN #sidebar -->
            @include('includes.sidebar')
                    <!-- END #sidebar -->

        </div>

        <!-- END .wrapper -->
    </div>

    <!-- BEGIN .content -->
</div>

<link type="text/css" rel="stylesheet" href="{{ URL::asset('public/assets/css/prism.css') }}" />
<script type="text/javascript" src="{{ URL::asset('public/assets/js/prism.js') }}"></script>

@endsection