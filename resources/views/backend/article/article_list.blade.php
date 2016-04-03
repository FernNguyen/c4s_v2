@extends('backend.master')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Article
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Tool</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>{!! $item['title'] !!}</td>
                                <td>
                                    <?php
                                    $get_user = DB::table('users')->where('id', $item["author_id"])->first();
                                    echo $get_user->username;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $get_parent = DB::table('categories')->where('id', $item["category_id"])->first();
                                    echo $get_parent->name;
                                    ?>

                                </td>
                                <td>{!! $item['created_at'] !!}</td>
                                <td>
                                    @if($item["active"] == 1)
                                        Show
                                    @else
                                        Hidden
                                    @endif
                                </td>
                                <td class="center">
                                    <i class="fa fa-trash-o  fa-fw"></i><a href="{!! url('backend/article/del') !!}/{!! $item["id"] !!}"> Delete</a>
                                    <i class="fa fa-pencil fa-fw"></i> <a href="{!! url('backend/article/edit') !!}/{!! $item["id"] !!}">Edit</a>
                                </td>
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