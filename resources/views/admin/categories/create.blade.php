@extends('admin.layout.dashboard')

@section('content')
          
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card mt-5">
                        <div class="card-header bg-success text-center">
                            <h3>Create Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                <input class="form-control mt-3" type="text" name="name">
                                <button class="btn btn-outline-dark col-12 mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

@endsection