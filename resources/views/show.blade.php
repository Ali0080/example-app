@extends('layouts.master')
@section('content')
      <div class="single_post">
         <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                     <div class="post_img">
                        <img src="{{ asset('images') }}/{{ $article->img }}.png" alt="Image Place">
                     </div>
                  </div>
                  <div class="col-md-2"></div>
               </div>
               <div class="posts_meta text-center">
                  <span><i class="fa fa-archive"></i> اقتصادی</span>
                  <span><i class="fa fa-calendar"></i> 99.10.1</span>
               </div>
               <div class="post_content">
                  <h4>{{ $article->title }}</h4>
                  <p>{{ $article->lead }}</p>
                  <img src="/img/{{ asset('$article->img') }}" alt="Img place">
                  <p>{{ $article->story }}</p>
               </div>
              
            </div>
         </div>
      </div>
      <div class="clear-fix"></div>
@endsection