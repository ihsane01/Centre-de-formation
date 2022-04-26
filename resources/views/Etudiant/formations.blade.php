@extends('layouts.app')
@section('formations')

<body>
<style>
    .container{
    text-align: center;
    
    
    }
    .row{
    position: relative;
    width: 100%;
    display: flex;
   justify-content: space-between;
    }
    .row .col-md-2{
    position: relative;
    width: 48%;
    /*display: flex;*/
    justify-content: center;
    align-items: center;
    padding: 30px;
    
    }
    .col .imbox{
    position: relative;
    width: 100%;
    height: 300px;

    }
    .col .imbox img{
    position: relative;
    left: 0;
    top: 0;
    width: 100%;
    height: 300px;
    object-fit: cover;
    }
   .tt
   {display:grid;
    grid-template-columns: repeat(3,20%);
    column-gap: 18%;
    background-color:grid;
    }

</style>

   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&family=Dancing+Script&family=Ms+Madi&family=Square+Peg&family=Whisper&display=swap" rel="stylesheet">

   <div class="container">
     <div class="titre">
        <h2 class="titre-texte"style="margin-top:50px;font-size: 50px;font-family: 'Ms Madi', cursive;"><b><span>N</span>os Formations</b></h2>
   <p style="  font-family: cursive;font-size: 20px;">Dans quel domaine souhaitez-vous vous former ?</p> 

   </div>

       @if(!Auth::user())
    <div style=" font-style: italic; max-width: 40%;   margin: auto; margin-bottom: 40px;    " class="alert alert-info" role="alert">
    <p style=" font-style: italic;">Pour s'inscrire à une formation Veuillez s'authentifier</p>
    </div>
    @endif

   <div class="row">
     <section class="tt"style="box-shadow:0 0 0 1px rgba(255,255,255,0.4);" >
 @foreach($formations as $formation)
 <div  class="shadow-none p-3 mb-5 bg-light rounded"style="box-shadow:0 0 0 1px rgba(255,255,255,0.4);">
   <div class="card" style="box-shadow:0 0 0 1px rgba(255,255,255,0.4); width: 18rem;margin-top:50px;">
  <img class="card-img-top"  src="{{asset('./assets/'.$formation['image'])}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$formation->nom_formation}}</h5>
    <p class="card-text">{{$formation->description}}</p>
    <a  href="{{route('user_formation',$formation)}}" class="btn btn-dark">Voir plus</a>
  </div>
  </div>
</div>
  
        @endforeach
        </section>
  </div>


</div>


</section>
    
</body>
@endsection