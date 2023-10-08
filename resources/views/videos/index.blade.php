@extends('layout')
@section('content')



<div class="site-output">
        <div id="all-output" class="col-md-12">
           
        
            <x-latest-videos></x-latest-videos>




            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب ترین ویدیو‌ها</h1>
            <div class="row">

                @foreach($mostPopularVideos as $video)
                <x-video-box :video="$video"/>
                @endforeach
               
            </div>




            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیو‌ها</h1>
            <div class="row">

                @foreach($mostViewdVideos as $video)
                <x-video-box :video="$video"/>
                @endforeach
               
            </div>








    </div>
    </div>


    
    @endsection