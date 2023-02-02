@extends('admin.layout.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/806333159f.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- side bar --}}
    <div class="col-2 position-fixed bg-dark overflow-scroll"   style="height:610px" >
        <div class=" pt-3 pb-2 ms-3 border-bottom container-fluid mb-2">
           <a href="" class="text-light text-decoration-none ms-4 fw-bolder"><i class="fa-solid fa-bars me-3"></i>Contrast</a>
        </div>
        <div class="">
            <div class=" p-2">
                <a href="" class="container-fluid btn btn-outline-info btn-sm text-light text-decoration-none ">
                     <i class="fa-brands fa-microsoft me-2"></i>Accordion
                </a>
             </div>
             <div class=" p-2">
                <a href="" class="container-fluid  btn btn-outline-info btn-sm  text-light text-decoration-none ">
                 <i class="fa-solid fa-user-clock me-2"></i>Alert
                </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid  btn btn-outline-info btn-sm  text-light text-decoration-none ">
                     <i class="fa-solid fa-radiation me-2"></i>Animation
                 </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-wand-magic-sparkles me-2"></i>Autocomplete
                 </a>
             </div>
             <div class="p-2">
                 <a href="" class="container-fluid  btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-certificate me-2"></i><label class="ms-2" for=""> Badge</label>
                 </a>
             </div>
             <div class="p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none ">
                     <i class="fa-solid fa-box me-2 "></i><label class="ms-2" for="">Box</label>
                 </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-route me-2"></i>Breadcump
                 </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-computer-mouse me-2"></i>Button
                 </a>
             </div>
             <div class="p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-computer-mouse me-2"></i>Button Group
                 </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-computer-mouse me-2"></i>Button Toolbar
                 </a>
             </div>
             <div class=" p-2">
                 <a href="" class="container-fluid  btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-address-card me-2"></i>Card
                 </a>
             </div>
             <div class="p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm  text-light text-decoration-none">
                     <i class="fa-solid fa-sliders me-2"></i>Carousel
                 </a>
             </div>
             <div class="p-2">
                 <a href="" class="container-fluid btn btn-outline-info btn-sm text-light text-decoration-none">
                     <i class="fa-solid fa-check me-2"></i>Checkbox
                 </a>
             </div>
             
        </div>
        
    </div>
</body>
</html>
    
@endsection