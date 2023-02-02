<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    {{-- nav bar --}}
    <div class="container-fluid d-flex border-bottom position-sticky top-0  " style="height:58px ">
          <div class="col-2">
              <img src="{{ asset('logo/logo.png') }}" class="col-12" style="height: 100%" alt="">
          </div>
          <div class="col-6 d-flex justify-content-around ms-4">
             <div class="col-9 pt-3 mt-1 ">
                <input type="text" class="col-12">
             </div>
             <div class="col-3 pt-3  mt-1">
                <button class="btn btn-sm btn-primary col-11 ms-3">Search</button>
             </div>
          </div>
          <div class="col-3 ms-5 d-flex justify-content-between pt-2">
             <div class="col-4 pt-3 ms-2">
               <a href="" class="text-decoration-none  text-dark"> Login</a> 
             </div>
             <div class="col-4 pt-3">
               <a href="" class="text-decoration-none text-dark"> Register</a> 
             </div>
             <div class="col-4 pt-3 ms-2">
               <a href="" class="text-decoration-none text-dark">Setting</a>
             </div>
          </div>
    </div>
    {{-- nav bar end --}}
    
    
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