@extends('backend.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td>{!! $item["id"] !!}</td>
                                <td>{!! $item["name"] !!}</td>
                                <td>
                                    @if($item["parent"] == 0)
                                        --Root
                                    @else
                                    <?php
                                    $get_parent = DB::table('categories')->where('id', $item["parent"])->first();
                                        echo $get_parent->name;
                                    ?>
                                    @endif

                                </td>
                                <td>
                                    @if($item["active"] == 1)
                                            Show
                                        @else
                                            Hidden
                                    @endif
                                  </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! url('backend/category/del') !!}/{!! $item["id"] !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! url('backend/category/del') !!}/{!! $item["id"] !!}">Edit</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection