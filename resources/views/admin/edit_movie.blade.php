@extends('admin_layout')
@section('admin_content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Update Movie</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Movie</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

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
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update_movie/'.$movie_info->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="">Movie Name</label>
                            <div class="controls">
                                <input type="text" value="{{$movie_info->movie_name}}" class="text" name="movie_name" >
                            </div>
                        </div>



                        <div class="control-group hidden-phone">
                            <label class="control-label" for="">Description </label>
                            <div class="controls">
                                <textarea type="text" class="text" name="movie_short_description" >{{$movie_info->movie_short_description}}</textarea>
                            </div>
                        </div>


                          <input type="hidden" value="{{$movie_info->movie_image}}" name="image_url">

                        <div class="control-group">
                            <label class="control-label"  for="fileInput">Movie Image</label>
                            <div class="controls">
                                <input  class="input-file uniform_on" id="fileInput" name="movie_image" type="file">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Movie</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->


@endsection

