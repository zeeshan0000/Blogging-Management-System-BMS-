@extends('layouts.blog')
@section('title')
    {{$post->title}}
@endsection
@section('header')
<header class="header text-white h-fullscreen pb-80" style="background-image: url({{asset($post->image)}});" data-overlay="9">
    <div class="container text-center">

      <div class="row h-100">
        <div class="col-lg-8 mx-auto align-self-center">

          <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>
          <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
          <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">{{$post->user->name}}</a></p>
          <p><img class="avatar avatar-sm" src="{{Gravatar::src($post->user->email)}}" alt="..."></p>

        </div>

        <div class="col-12 align-self-end text-center">
          <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
        </div>

      </div>

    </div>
  </header><!-- /.header -->
@endsection
@section('content')
<main class="main-content">


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Blog content
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section" id="section-content">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mx-auto">

          
            {!!$post->content!!}
          </div>
        </div>



        <div class="text-center my-6">
          <img class="rounded-md" src="../assets/img/bg/11.jpg" alt="...">
        </div>



        <div class="row">
          <div class="col-lg-8 mx-auto">

    

      

         

            <div class="gap-xy-2 mt-6">
                @foreach ($post->tags as $tag)
                <a class="badge badge-pill badge-secondary" href="#">
                {{$tag->name}}    
                </a>  
                @endforeach
             
    
            </div>

          </div>
        </div>


      </div>
    </div>



    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Comments
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <div class="section bg-gray">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mx-auto">

            <div class="media-list">

              <div class="media">
                <img class="avatar avatar-sm mr-4" src="../assets/img/avatar/1.jpg" alt="...">

             


            


            <form action="#" method="POST">

              <div class="row">
                <div class="form-group col-12 col-md-6">
                  <input class="form-control" type="text" placeholder="Name">
                </div>

                <div class="form-group col-12 col-md-6">
                  <input class="form-control" type="text" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
              </div>

              <button class="btn btn-primary btn-block" type="submit">Submit your comment</button>
            </form>

          </div>
        </div>

      </div>
    </div>



  </main>
@endsection