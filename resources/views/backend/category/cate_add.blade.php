@extends('backend.master')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {!! $error !!}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="POST">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="SubId">
                    <option value='0'>Root Category</option>
                    <?php get_category($backend_data['category']);?>
                </select>
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
            </div>
            <div class="form-group">
                <label>Category Order</label>
                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" />
            </div>

            <div class="form-group">
                <label>Category Active</label>
                <label class="radio-inline">
                    <input name="Front" value="1" checked="" type="radio">Active
                </label>
                <label class="radio-inline">
                    <input name="Front" value="0" type="radio">Disable
                </label>
            </div>
            <div class="form-group">
                <label>Category Hot?</label>
                <label class="radio-inline">
                    <input name="Hot" value="1" type="radio">Hot
                </label>
                <label class="radio-inline">
                    <input name="Hot" value="0" checked="" type="radio">Normal
                </label>
            </div>
            <button type="submit" class="btn btn-default">Category Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    @endsection