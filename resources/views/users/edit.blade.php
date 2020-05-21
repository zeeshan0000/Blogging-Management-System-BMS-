@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My profile</div>

                   <div class="card-body">
                          @include('partial.errors')
                           @if (session('status'))
                           <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                          </div>
                        @endif
                        <form action="{{route('users.update-profile')}}"method="POST">


                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                            <input type="text" class="form-control"name="name"id="name"value="{{$user->name}}">
                            </div>
               
                            <div class="form-group">
                                <label for="about">Email</label>
                                <input type="text" name="about" id="about" cols="5" rows="5" class="form-control">{{$user->email}}</textarea>
                            </div>
                            <button type="submit"class="btn btn-success">Update</button>
               
                                   </form>
                   </div>
                     </div>
            </div>
        </div>
    </div>
</div>
@endsection

