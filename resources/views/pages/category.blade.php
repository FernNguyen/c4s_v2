@extends('layouts.default')
    @section('title')
    {!! $data['category']['name'] !!}
    @stop
@section('content')
<!-- BEGIN .content -->
<div class="content">

    <!-- BEGIN .wrapper -->
    <div class="wrapper">

        <div class="content-wrapper">

            <!-- BEGIN .composs-main-content -->
            <div class="composs-main-content composs-main-content-s-1">

                <!-- BEGIN .composs-panel -->
                <div class="composs-panel">

                    <div class="composs-panel-title">
                        <strong>{!! $data['category']['name'] !!}</strong>
                    </div>

                    <div class="composs-panel-inner">

                        <div class="composs-blog-list lets-do-1">
                            @if ($data)
                                @foreach($data['posts'] as $item)
                            <div class="item">
                                <div class="item-header">
                                    <a href="#" class="img-read-later-button">Read later</a>
                                    <a href="{!! url($item['slug'])!!}"><img src="{!! $item['imgs'] !!}" alt="" /></a>
                                </div>
                                <div class="item-content">
                                    <h2><a href="{!! url($item['slug'])!!}"> {{ $item['title'] }}</a></h2>
												<span class="item-meta">
													<span class="item-meta-item"><i class="material-icons">access_time</i>{{ $item['updated_at'] }}</span>
													<a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i> {{ $item['views'] }}</a>
												</span>
                                    <p>
                                        {!!  cut_string(strip_tags($item['intro']), 250)  !!}
                                    </p>
                                </div>
                            </div>
                                @endforeach
                            @endif

                        </div>

                    </div>

                    {{--<div class="composs-panel-pager">--}}
                        {{--@if($data['posts']->currentPage() != 1)--}}
                            {{--<a class="prev page-numbers" href="{!! str_replace('/?', '?', $data['posts']->url($data['posts']->currentPage()-1)) !!}"><i class="fa fa-angle-double-left"></i>Previous</a>--}}
                        {{--@endif--}}
                        {{--@for($i = 1; $i <= $data['posts']->lastPage(); $i++)--}}
                            {{--@if($i == $data['posts']->currentPage())--}}
                                {{--<span class="page-numbers current">{!! $data['posts']->currentPage() !!}</span>--}}
                            {{--@else--}}
                                {{--<a class="page-numbers" href="{!! str_replace('/?', '?', $data['posts']->url($i)) !!}">{!! $i !!}</a>--}}
                            {{--@endif--}}
                        {{--@endfor--}}
                        {{--@if($data['posts']->currentPage() != $data['posts']->lastPage())--}}
                            {{--<a class="next page-numbers" href="{!! str_replace('/?', '?', $data['posts']->url($data['posts']->currentPage()+1)) !!}">Next<i class="fa fa-angle-double-right"></i></a>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    <div class="composs-panel-pager">
                        <a href="#" class="composs-pager-button">View more articles</a>
                    </div>

                    <div class="composs-panel-pager">
                        <a href="{!! $data['posts']->previousPageUrl() !!}" class="composs-pager-button left"><i class="fa fa-angle-double-left"></i>Prev</a>
                        <a href="{!! $data['posts']->nextPageUrl() !!}" class="composs-pager-button right active">Next<i class="fa fa-angle-double-right"></i></a>
                        {{--<p>{!! $data['posts']->previousPageUrl() !!} of {!! $data['posts']->lastPage() !!} pages</p>--}}
                    </div>

                    <!-- END .composs-panel -->
                </div>

                <!-- END .composs-main-content -->
            </div>

            <!-- BEGIN #sidebar -->
                @include('includes.sidebar')
            <!-- END #sidebar -->


        </div>

        <!-- END .wrapper -->
    </div>

    <!-- BEGIN .content -->
</div>
@stop