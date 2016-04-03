@extends('layouts.default')
@section('content')
<!-- BEGIN .content -->
<div class="content">

    <!-- BEGIN .wrapper -->
    <div class="wrapper">

        <div class="content-wrapper">

            <!-- BEGIN .composs-main-content -->
            <div class="composs-main-content">

                <!-- BEGIN .composs-panel -->
                <div class="composs-panel">

                    <div class="composs-panel-inner">

                        <div class="big-error-message">
                            <img src="{!! url('public/assets/images/404-image.png') !!}" alt="" />
                            <h3>Error 404</h3>
                            <strong>Page not found</strong>
                            <p>Dang it! We just lost this page. If you have any idea of what should be here, please let us know by <a href="contact-us.html">contacting us</a>.</p>
                            <p><a href="index.html">Back to homepage</a></p>
                        </div>

                    </div>

                    <!-- END .composs-panel -->
                </div>

                <!-- END .composs-main-content -->
            </div>

        </div>

        <!-- END .wrapper -->
    </div>

    <!-- BEGIN .content -->
</div>
@endsection