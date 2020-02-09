@include('header')
@include('navbar')
<div class="container" style="margin-top: 60px;margin-bottom: 60px">

    <div class="title" style="text-align: center"> <h3>Search Result</h3></div>
    <hr>
    <div class="row">
    @foreach($all_movie_info as $list)
    <div class=" col-4">

            <div class="card">
                <img class="card-img-top" src="{{$list->movie_image}}" height="200px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$list->movie_name}}</h5>
                    <p>{{$list->movie_short_description}}</p>
                </div>
                <div class="card-footer">
                    <a class="">View More</a>
                </div>
            </div>
    </div>
        @endforeach
    </div>
       @if($all_movie_info == NULL)
    <div class="row" style="padding-top: 20px; text-align: center">
          <p>Not Found</p>
    </div>
@endif
</div>



</body>

</html>
