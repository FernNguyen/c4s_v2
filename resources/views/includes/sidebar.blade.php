<!-- BEGIN #sidebar -->
<aside id="sidebar">

    <!-- BEGIN .widget -->
    <div class="widget">
        <form method="get" class="search-form" action="#">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
            </label>
            <input type="submit" class="search-submit screen-reader-text" value="Search">
        </form>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Socialize</h3>
        <div class="widget-content ot-w-socialize">
            <a href="#" class="ot-color-hover-facebook"><i class="fa fa-facebook"></i><span><i>13 956</i> fans</span></a>
            <a href="#" class="ot-color-hover-twitter"><i class="fa fa-twitter"></i><span><i>2 042</i> followers</span></a>
            {{--<a href="#" class="ot-color-hover-google-plus"><i class="fa fa-google-plus"></i><span><i>184</i> followers</span></a>--}}
            {{--<a href="#" class="ot-color-hover-youtube"><i class="fa fa-youtube-play"></i><span><i>502</i> subscribers</span></a>--}}
            <a href="#" class="ot-color-hover-rss"><i class="fa fa-rss"></i><span><i>2 831</i> rss feeders</span></a>
        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <div class="widget-content">
            <a href="#" target="_blank"><img src="images/o2.jpg" alt="" /></a>
        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Most populars</h3>
        <div class="widget-content ot-w-article-list">

            <?php
            $sidebar_popular = DB::table('articles')->orderByRaw("RAND() ")->take(5)->get();
            ?>
            @foreach($sidebar_popular as $item_sd)
            <div class="item">
                <div class="item-header">
                    <a href="#" class="img-read-later-button rm-btn-small">Read later</a>
                    <a href="{!! url(trim($item_sd->slug))!!}"><img src="{!! $item_sd->thumb !!}" alt="" /></a>
                </div>
                <div class="item-content">
                    <h4><a href="{!! url(trim($item_sd->slug))!!}">{!! $item_sd->title !!}</a></h4>
                        <span class="item-meta">
                            <span class="item-meta-item"><i class="material-icons">access_time</i>{{ $item_sd->created_at }}</span>
                        </span>
                </div>
            </div>
            @endforeach


        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Popular articles</h3>
        <div class="widget-content ot-w-comments-list">
            <?php
            $sidebar_popular_ar = DB::table('articles')->orderByRaw("RAND() ")->take(5)->get();
            ?>
                @foreach($sidebar_popular_ar as $item_sd)
                    <div class="item">
                        <div class="item-header">
                            <a href="#"><img src="http://composs.orange-themes.com/html/images/photos/avatar-2.jpg" alt="" /></a>
                        </div>
                        <div class="item-content">
                            <h4><a href="{!! url(trim($item_sd->slug))!!}">{!! $item_sd->title !!}</a></h4>
                            <p>
                                {!!  cut_string(strip_tags($item_sd->content), 100)  !!}
                            </p>
                                                    <span class="item-meta">
                                                        <a href="{!! url(trim($item_sd->slug))!!}" class="item-meta-item meta-button">View article <i class="fa fa-caret-right"></i></a>
                                                    </span>
                        </div>
                    </div>
                @endforeach



        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
            <a href="blog.html">Dignissim</a>
            <a href="blog.html">Habeo quods</a>
            <a href="blog.html">Sumo</a>
            <a href="blog.html">Prima dicunt</a>
            <a href="blog.html">Scripser</a>
            <a href="blog.html">Dignissim</a>
            <a href="blog.html">Habeo quods</a>
            <a href="blog.html">Sumo</a>
            <a href="blog.html">Prima dicunt</a>
            <a href="blog.html">Scripser</a>
            <a href="blog.html">Dignissim</a>
            <a href="blog.html">Habeo quods</a>
        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Shortcode Widget</h3>
        <div class="shortcode-content">
            <div class="ot-shortcode-accordion accordion">
                <div>
                    <a href="#">Has nusquam suscipit dissentiunt ea</a>
                    <div>
                        <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                    </div>
                </div>
                <div>
                    <a href="#">Mea et ignota laboramus vulputate</a>
                    <div>
                        <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                    </div>
                </div>
                <div>
                    <a href="#">Perpetu repudiare em eruditi scripsert</a>
                    <div>
                        <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                    </div>
                </div>
                <div>
                    <a href="#">Atqui graeci consequat eum einim</a>
                    <div>
                        <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <h3>Latest photo gallery</h3>
        <div class="widget-content ot-w-gallery-list">

            <div class="item">
                <div class="item-header">
                    <div class="item-photo"><a href="photo-gallery-single.html"><img src="http://composs.orange-themes.com/html/images/photos/image-21.jpg" alt="" /></a></div>
                    <div class="item-photo"><a href="photo-gallery-single.html"><img src="http://composs.orange-themes.com/html/images/photos/image-22.jpg" alt="" /></a></div>
                    <div class="item-photo"><a href="photo-gallery-single.html"><img src="http://composs.orange-themes.com/html/images/photos/image-21.jpg" alt="" /></a></div>
                    <div class="item-photo"><a href="photo-gallery-single.html"><img src="http://composs.orange-themes.com/html/images/photos/image-22.jpg" alt="" /></a></div>
                </div>
                <div class="item-content">
                    <h4><a href="photo-gallery-single.html">Te ius esse sapientem qualisque et hinc elit mentitum vim</a></h4>
                    <!-- <p>Cum an officiis integebat neces sitat bus, impedi tes...</p> -->
											<span class="item-meta">
												<span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
											</span>
                </div>
            </div>

        </div>
        <!-- END .widget -->
    </div>

    <!-- END #sidebar -->
</aside>