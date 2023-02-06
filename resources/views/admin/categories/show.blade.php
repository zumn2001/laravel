@extends('admin.layout.dashboard')

@section('content')
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header bg-success text-center">
                    <h3>Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update',$categories->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <input class="form-control mt-3" value="{{ $categories->name }}" type="text" name="name">
                        <button class="btn btn-outline-dark col-12 mt-3">Update</button>
                    </form>

                    <form action="{{ route('categories.destroy',$categories->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger col-12 mt-3">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
