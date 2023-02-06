@extends('admin.layout.dashboard')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
       <div class="col-6">
           <table class="table">
               <thead>
                   <tr>
                       <td>Id</td>
                       <td>Name</td>
                       <td><a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Create New</a></td>
                   </tr>
               </thead>
               <tbody>    
                       @foreach ($categories as $category )
                       <tr>
                           <td>{{ $category->id }}</td>
                           <td>{{ $category->name }}</td>
                           <td>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('categories.show',$category->id) }}" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </form>                           
                            </td>    
                       </tr>     
                       @endforeach   
                                        
                </tbody>
            </table>
        </div>
     </div>
     
   </div>

@endsection