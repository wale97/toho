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
<body>
  <div class="">

    @include('partials.header')

    @if(Session::get('success'))
<div class="alert alert-success"></div>
  {{Session::get('success')}}
@endif

@if(Session::get('fail'))
<div class="alert alert-danger"></div>
  {{Session::get('fail')}}~
@endif

@if ($message = Session::get('successMessage'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif


<form method="post" action="">

    @csrf

    <div class="container text-center m-4">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="contactus m-4">Contactez-nous</h1>
          <div class="col-3">
          </div>
          <div class="col-6">
            <div class="form-group row">
                <label for="inputnom" class="col-sm-2 col-form-label m-4">Nom</label>
                <div class="col">
                    <input name="nom"type="text" class="form-control m-4" id="inputnom" placeholder="Nom" required>
                </div>
            </div>
            @error('nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputmail" class="col-sm-2 col-form-label m-4">Email</label>
                <div class="col">
                    <input name="email" type="email" class="form-control m-4" id="inputmail" placeholder="Email" required>
                </div>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputtel" class="col-sm-2 col-form-label m-4">Telehone</label>
                <div class="col">
                    <input name="telephone"type="number" class="form-control m-4" id="inputtel" placeholder="Telephone" required>
                </div>
            </div>
            @error('tel')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputsujet" class="col-sm-2 col-form-label m-4">Sujet</label>
                <div class="col">
                    <input name="sujet" type="text" class="form-control m-4" id="inputsujet" placeholder="Sujet" required>
                </div>
            </div>
            @error('sujet')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group row">
                <label for="inputmessage" class="col-sm-2 col-form-label m-4">Message</label>
                <div class="col">
                    <textarea name="message" class="form-control m-4" id="inputmessage" placeholder="Message" required rows="5"></textarea>                    
                </div>
            </div>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="col m-4 justify-content-center">
                <button name="envoyer" type="submit" class="btn btn-danger text-center">Envoyer</button>
            </div>
        </div>
          <div class="col-3"></div>
        </div>
      </div>
  </form>

    @include('partials.footer')
  </div>



    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</html>