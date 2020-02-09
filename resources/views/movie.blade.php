@include('header')
@include('navbar')

        <div class="container" style="margin-top: 60px">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                @foreach($slider_lists as $lists)
                <div class="carousel-item{{ $loop->index == 1 ? ' active' : '' }}">

                    <div class="row">
                        <div class="col-lg-3">
                    <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">
                        </div>
                        <div class="col-lg-3">
                            <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">
                        </div>
                        <div class="col-lg-3">
                            <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">
                        </div>
                        <div class="col-lg-3">
                            <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">
                        </div>
                    </div>
                </div>
{{--                        <div class="col-lg-3">--}}
{{--                            <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <img class="" src="{{$lists->slider_image}}" height="350px"  width="100%">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <img class="" src="{{$lists->slider_image}}" height="350px" width="100%">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" style="left: -90px" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color: #2196f3;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleControls"style="right: -90px" role="button" data-slide="next">
                <span class="carousel-control-next-icon " style="background-color: #2196f3;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        </div>

  <div class="container" style="margin-top: 60px">
      <form action="{{url('/search')}}" method="post">
          {{csrf_field()}}
      <div class="row">

              <div class="col-lg-8 col-sm-8">
              <input  type="text" class="col-lg-12" name="search" placeholder="Movie Name or Movie Discription . .">
              </div>
              <div class="col-lg-4 col-sm-4">
                  <button type="submit" class="btn btn-primary btn-block" >SEARCH</button>
              </div>

      </div>
      </form>
  </div>


   <div class="container" style="margin-top: 60px;margin-bottom: 60px">

       <div class="card-deck">
           @foreach($movie_lists as $list)
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
           @endforeach

       </div>
       <div class=" border-box"style="padding-top: 20px; text-align: center">
            {{ $movie_lists->links() }}
       </div>

   </div>
<footer style="padding-top: 30px">
    <div class="container" style="background-color: #eee;padding: 40px" >
        <div class="row ">
            <div class="col-lg-4 ">
                    <img src="https://scontent.fdac30-1.fna.fbcdn.net/v/t1.0-9/84513852_106507957582343_618277138012831744_n.png?_nc_cat=109&_nc_ohc=30lA78RIxacAX9R9Zqz&_nc_ht=scontent.fdac30-1.fna&oh=2f7618bc6454c21f75974e628812d35e&oe=5EB78D7E" height="60px">
                <br>
                <br>
                <p> A New Apocalypse Movie A New Apocalypse Movie A New Apocalypse Movie A New Apocalypse Movie.</p>

                <br>
                <button class="btn btn-primary">Contact Us</button>
            </div>
            <div class="col-lg-4">
                <h4><b> Latest News</b></h4>
                <br>
                <p> A New Apocalypse Movie</p>
                <span class="fa fa-clock" style="font-size: 12px"> OCTOBER 6,2017</span>
                <hr>
                <p> A New Apocalypse Movie</p>
                <span class="fa fa-clock" style="font-size: 12px"> OCTOBER 6,2017</span>
                <hr>
                <p> A New Apocalypse Movie</p>
                <span class="fa fa-clock" style="font-size: 12px"> OCTOBER 6,2017</span>

            </div>
            <div class="col-lg-4">
                <h4><b> Geners</b></h4>
                <br>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">Drama<span class="tag-count">13</span></a>
            </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">Action<span class="tag-count">14</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">Adventure<span class="tag-count">15</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">Science<span class="tag-count">16</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">war<span class="tag-count">137</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">family<span class="tag-count">18</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">crime<span class="tag-count">19</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">horror<span class="tag-count">20</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">Romance<span class="tag-count">13</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">animation<span class="tag-count">33</span></a>
                </div>
                <div class="tag"><a  class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 14px;">thriller<span class="tag-count">93</span></a>
                </div>
        </div>
    </div>

    </div>
    <div class="container" style="background-color: #e0e0e0">
    <div class="row" >
        <div class="col-4">
            <p>Copyright Egemenerd</p>

        </div>
        <div class="col-8 text-right">
            <a href="#" class=""><i class="fa fa-facebook-f"></i>&nbsp; </a>
            <a href="#" class=""><i class="fa fa-twitter"></i> &nbsp;</a>
            <a href="#" class=""><i class="fa fa-google-plus"></i> &nbsp;</a>
            <a href="#" class=""><i class="fa fa-vk"></i>&nbsp; </a>
            <a href="#" class=""><i class="fa fa-vimeo"></i>&nbsp; </a>

        </div>
    </div>
    </div>
</footer>
</body>

</html>
