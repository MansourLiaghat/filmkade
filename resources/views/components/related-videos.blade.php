
<div id="related-posts">

    <!-- video item -->
    
    <div class="related-video-item">
        @foreach($videos as $video)
        <div class="thumb">
        <small class="time">{{$video->lengthInHiuman}}</small>
        <a href="{{route('videos.show' , $video->id)}}"><img src="{{$video->thumbnail}}" alt=""></a>
        </div>
        <a href="{{route('videos.show' , $video->id)}}" class="title">{{$video->description}}</a>
        <a class="channel-name" href="#">{{$video->name}}<span>
        <i class="fa fa-check-circle"></i></span></a>
        @endforeach
    </div>
  
    <!-- // video item -->

</div>

