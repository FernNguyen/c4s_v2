@extends('backend.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Article
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="sltCategory">
                                    <option value='0'>Choose Category</option>
                                    <?php get_category($backend_data['category']);?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Title" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fImages">
                            </div>

                            <div class="form-group">
                                <label>Intro</label>
                                <textarea class="form-control" rows="3" name="txtIntro"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" name="txtContent" id="txtContent"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Article Tags</label>
                                <input class="form-control" name="txtTag" placeholder="Enter Article Tags" />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Article Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<script src="{{ url('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace( 'txtContent', {
        filebrowserImageBrowseUrl: '{{ url('laravel-filemanager?type=Images') }}',
        filebrowserImageUploadUrl: '{{ url('laravel-filemanager/upload?type=Images&_token=')}}{{ csrf_token() }}',
        filebrowserBrowseUrl: '{{ url('laravel-filemanager?type=Files') }}',
        filebrowserUploadUrl: '{{ url('laravel-filemanager/upload?type=Files&_token=')}}{{ csrf_token() }}'
    });
</script>

@endsection