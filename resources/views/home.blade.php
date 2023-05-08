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

    <div class="text-center mt-4 mb-4 imggroup1" style="margin-left:20px;margin-right:20px;">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/firstset/1.jpg')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/firstset/2.jpg')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/firstset/3.jpg')}} class="card-img-top" alt="..."></a>
            <!--<div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>-->
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="" href="#"><img src={{asset('images/firstset/4.jpg')}} class="card-img-top" alt="..."></a>
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
          <h2>Visitez le Lac Toho</h2>
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
      <!--<div class="row">
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
      </div>-->
      <!--
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="{{asset('images/3.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"/>
          <img src="{{asset('images/4.jpg')}}"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Wintry Mountain Landscape"/>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="{{asset('images/5.jpg')}}"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Mountains in the Clouds"/>
          <img src="{{asset('images/6.jpg')}}"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"/>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="{{asset('images/7.jpg')}}"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Waves at Sea"/>
          <img src="{{asset('images/8.jpg')}}"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Yosemite National Park"/>
        </div>
      </div>
      <!-- Gallery -->
    </div>
    <!--
    <div class="container bg-dark text-white">
        <div class="row text-center">
          <div class="el col-4">
               <div class="firstcard py-4">
                 <div class="card-header py-4">Text</div>
                 <img src={{asset('images/firstset/1.jpg')}} class="card-img-top py-4" alt="...">
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
                  <img src={{asset('images/firstset/2.jpg')}} class="card-img-top py-4" alt="...">
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
                 <img src={{asset('images/firstset/3.jpg')}} class="card-img-top py-4" alt="...">
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
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Minima perferendis dolorem adipisci numquam nisi voluptatum, ea quidem 
         explicabo beatae, neque quibusdam? Accusamus atque nesciunt inventore 
         eum aut non quas at!</div>
      <div class="col-4"></div>

    </div>
  -->
<div class="container con1">
  <div class="row d-flex align-items-center row row-cols-1 row-cols-md-2">
      <div class="col">
        <p class="lh-lg">
          L’histoire raconte, dans les années 1966, la légende de l’apparition mystérieuse 
          de l’hippopotame dans les lacs Ahémé et Toho. Une belle histoire que les guides touristiques 
          à Possotomè racontent bien aux touristes.
          A l’époque, les lacs Ahémé et Toho étaient encombrés de hautes herbes et dépourvus de poissons. 
          Pour remédier à ces difficultés, les riverains de ces plans d’eau font appel à un vieux tradipraticien
           du nom de Assou DHENON venu de Houin avec une bouteille remplie d’eau et contenant du poisson. 
           Puis, il fit des cérémonies et vida le contenu de la bouteille dans le lac.
        </p>
      </div>
      <div class="col">
        <img src={{asset('images/3.jpg')}} class="card-img-top py-4 img1" alt="...">
      </div>
  </div>
</div>

<div class="container con2">
  <div class="row d-flex align-items-center row row-cols-1 row-cols-md-2">
      <div class="col">
        <img src={{asset('images/4.jpg')}} class="card-img-top py-4 img2" alt="...">
      </div>
      <div class="col">
        <p class="lh-lg">
          Quelques jours plus tard, le lac fut rempli de poissons. Mais l’encombrement par de hautes herbes empêche 
          les populations de pêcher surtout avec du filet.
          De nouveau, les habitants font appel au vieux Assou DHENON pour les aider. Avec un bœuf rouge, 
          il fit des cérémonies de sacrifices. Le tradipraticien a prédit, alors, qu’un animal apparaitra 
          pour brouter les hautes herbes qui encombraient le lac. C’est ainsi qu’est apparu le mystique hippopotame 
          qui parcourait le lac Ahémé, le lac Toho et le fleuve Mono.
          Avec la poussée démographique, ce grand mammifère des zones humides du Sud-Bénin, est confronté au problème de
          la fragmentation de son habitat. 
        </p>
      </div>
  </div>
</div>

<div class="container con3">
  <div class="row d-flex align-items-center row row-cols-1 row-cols-md-2 img3">
      <div class="col">
        <p class="lh-lg">
          Le braconnage des hippopotames est le principal danger qui a menacé l’espèce 
          dans le paysage du delta mono. Au total, 27 hippopotames auraient été abattus de 1972 à 2002 selon Amoussou G., 2002.
          Dans la nuit du 4 septembre 2019, ce seul spécimen rescapé est retrouvé mort dans le village de Kotovi, Commune 
          d’Allada. D’après les informations, la piste d’une mort naturelle est évoquée mais les enquêtes continuent. 
          Un hippopotame a une espérance de vie de 40 à 50 ans. Selon certains témoignages et d’après l’histoire mystérieuse, 
          cet hippopotame a même vécu au-delà de son espérance de vie.
        </p>
      </div>
      <div class="col">
        <img src={{asset('images/5.jpg')}} class="card-img-top py-4" alt="...">
      </div>
  </div>
</div>

<div class="container con4">
  <div class="row d-flex align-items-center row row-cols-1 row-cols-md-2">
      <div class="col">
        <img src={{asset('images/6.jpg')}} class="card-img-top py-4 img4" alt="...">
      </div>
      <div class="col">
        <p class="lh-lg">Aussitôt informé, les autorités communales d’Allada et de Bopa, les organisations de la société civile
           telles que Eco-Benin, Nature Tropicale, ADED etc. sont entrées dans une démarche de la mise en place 
           d’un écomusée pour sauvegarder cette relique pour la promotion du tourisme dans ces localités. 
           Le spécimen a été déplacé à Cotonou au siège de l’ONG Nature Tropicale ce vendredi 6 septembre 2019. 
           Empailler un tel animal pesant plus d’une tonne nécessite de grands moyens matériels et financiers. 
           Le processus d’empaillage pourrait durer un an. Une souscription volontaire est lancée et la contribution 
           de tous est vivement souhaitée.
        </p>
      </div>

  </div>
</div>

<div class="container con5">
  <div class="row d-flex align-items-center row row-cols-1 row-cols-md-2">
      <div class="col">
        <p class="lh-lg">
          Facilement observables les matins entre 6 h et 8 h, les soirs entre 17 h 30 mn et 19 h 30 mn,
           les hippopotames occupent une place de choix dans la culture et l’alimentation des populations
            locales de la zone d’étude. D’après les données du Bulletin de la Recherche Agronomique du Benin
             – Nº53-Septembre 2006, 2/3 des populations ont reconnu l’attrait touristique de l’animal, sans lequel
              elles l’auraient déjà chassé de leur localité.
        </p>
      </div>
      <div class="col">
        <img src={{asset('images/7.jpg')}} class="card-img-top py-4 img5" alt="...">
      </div>
  </div>
</div>
    @include('partials.footer')
  
    
  </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</html>