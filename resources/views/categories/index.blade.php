@extends('layouts.app')


@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
    </div>

    <div class="card card-default">
        <div class="card-header">
             Categories
        </div>
        <div class="card-body">
             
            @if($categories->count() > 0)
            <table class="table">
                <thead>
                   <th>Name</th> 
                   <th></th>
                </thead>

            <tbody>
                @foreach($categories as $category)
                   <tr>
                       <td>
                           {{ $category -> name }}
                       </td>
                       <td>
                           <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm">
                               Edit
                           </a>
                           <form action="{{action('CategoriesController@destroy', $category['id'])}}" method = "POST" class = "delete_form" >
                       
                               @csrf

                               <input type="hidden" name = "_method" value = "DELETE">
                               <button type = "submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                          
                       </td>
                   </tr>
                @endforeach
            </tbody>
           </table> 
            @else
                <h3 class="text-center">No categories yet</h3>
            @endif
            </div>
            </div>

            
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Are you sure you want to delete it?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>

@endsection

