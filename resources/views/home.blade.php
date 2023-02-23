<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/home.css')}}>
    <title>{{config('app.name', 'Lac-Toho.bj')}}</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark text-white">
  <div class="all">

    @include('partials.header')

    <div class="text-center mt-4 mb-4 imggroup1">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/1.jfif')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="text-center border-top border-bottom mb-4 container">
      <div class="row">
        <div class="col">
          <h3 class="who text-center m-4">LAC TOHO</h3>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
        </div>
      </div
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="text-end m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Laboriosam, velit qui. Excepturi architecto expedita quos veniam, dolorem 
             maxime illum nemo quibusdam minus similique ipsa dolorum sapiente 
             consequuntur distinctio illo quam?
            </p>
          </div>
          <div class="col">
            <p class="text-start mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing 
            elit. Ea incidunt, fugiat pariatur maxime commodi voluptates laborum placeat 
            quidem optio maiores, odio quo consequatur rem nesciunt? Consequuntur, error! 
            Enim, quos sit.
            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="container">
      <!-- Gallery -->
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"/>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Wintry Mountain Landscape"/>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Mountains in the Clouds"/>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"/>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Waves at Sea"/>
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Yosemite National Park"/>
        </div>
      </div>
      <!-- Gallery -->
    </div>
    <div class="container bg-dark text-white">
        <div class="row text-center">
          <div class="el col-4">
               <div class="firstcard py-4">
                 <div class="card-header py-4">Text</div>
                 <img src={{asset('images/1.jfif')}} class="card-img-top py-4" alt="...">
                 <div class="card-body py-4">
                    <h5 class="card-title py-4">Text</h5>
                    <p class="card-text py-4">Lorem ipsum dolor sit amet consectetur,
                      adipisicing elit. Perferendis laboriosam molestiae aperiam
                      aliquam odit, adipisci dolorum, repellat veniam consequuntur
                      maxime reiciendis quos sunt ipsum distinctio beatae eveniet
                      dolores perspiciatis nisi.
                    </p>
                    <a href="" class="btn text-white border-white">Voir</a>
                 </div>
               </div>
        </div>
          <div class="el col-4">
                <div class="firstcard py-4">
                  <div class="card-header py-4">Text</div>
                  <img src={{asset('images/1.jfif')}} class="card-img-top py-4" alt="...">
                  <div class="card-body py-4">
                    <h5 class="card-title py-4">Text</h5>
                    <p class="card-text py-4">Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Perferendis laboriosam molestiae aperiam
                        aliquam odit, adipisci dolorum, repellat veniam consequuntur
                        maxime reiciendis quos sunt ipsum distinctio beatae eveniet
                        dolores perspiciatis nisi.
                    </p>
                    <a href="" class="btn text-white border-white">Voir</a>
                  </div>
                </div>
          </div>
          <div class="el col-4">
               <div class="firstcard py-4">
                 <div class="card-header py-4">Text</div>
                 <img src={{asset('images/1.jfif')}} class="card-img-top py-4" alt="...">
                 <div class="card-body py-4">
                    <h5 class="card-title py-4">Text</h5>
                    <p class="card-text py-4">Lorem ipsum dolor sit amet consectetur,
                      adipisicing elit. Perferendis laboriosam molestiae aperiam
                      aliquam odit, adipisci dolorum, repellat veniam consequuntur
                      maxime reiciendis quos sunt ipsum distinctio beatae eveniet
                      dolores perspiciatis nisi.
                    </p>
                    <a href="" class="btn text-white border-white">Voir</a>
                 </div>
               </div>
         </div>
        </div>
    </div>

    @include('partials.footer')
  
    
  </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</html>