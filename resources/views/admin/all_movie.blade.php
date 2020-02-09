@extends('admin_layout')
@section('admin_content')


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tables</a></li>
    </ul>

    <p class="alert-success" >
        <?php
        $message = Session::get('message');

        if($message)
        {
            echo $message;
            Session::put('message',NULL);
        }
        ?>
    </p>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>

            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Movie ID</th>
                        <th>Movie Name</th>

                        <th>Movie Image</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_movie_info as $v_movie)

                        <tr>
                            <td>{{$v_movie->id}}</td>
                            <td class="center">{{$v_movie->movie_name}}</td>

                            <td><img src="{{URL:: to($v_movie->movie_image)}}" style="height:80px; width: 80px;"> </td>
                            <td class="center">{{$v_movie->movie_short_description}}</td>



                            <td class="center">

                                <a class="btn btn-info" href="{{URL::to('/edit_movie/'.$v_movie->id)}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete_movie/'.$v_movie->id)}}" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>


                    @endforeach
                        </tbody>

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->



@endsection
