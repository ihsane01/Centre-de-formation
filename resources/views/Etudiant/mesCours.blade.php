@extends('layouts.app')

@section('coursEtudiant')
<div class="container">
@if($formationInscrit!==0)
    <h1 style="margin-top:20px">Mes Formations </h1>    
<div class="row "> 
   
    @foreach($formationInscrit as $fr)
   
     
       <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
       <a href="{{ route('CoursDeFormation',$fr->formation)}}" style="text-decoration:none;color:black;">
      <div class ="card" style="width:20%;border-radius:20px;display: block; margin-left: auto;margin-right: auto;margin-bottom:20px;border-color:#028139;background-color:#028139" >
        <h4 style="font-weight:bold;text-align: center;padding:5px;color:white">{{$fr->formation}}</h4>
      </div>
      </a>

 
</div>

@endforeach 
<h3 style="text-align:center;font-weight:bold;margin-top:50px;margin-bottom:30px">Votre emploi du temps </h3>
<table class="table table-hover">

<tr>
    <th>Formation</th>
    <th>Horaire</th>
    <th>Salle</th>
    <th>Formateur</th>
    </tr>

@foreach($formationInscrit[0]->sessions as $fr)  
    <tr>
      <td>{{$fr->formation}}</td>
      <td>{{$fr->temps_debut}}-->{{$fr->temps_fin}}</td>
      <td>{{$fr->salle}}</td>
      <td>{{$fr->formateur}}</td>
     
    </tr> 
    @endforeach
  </table>



</div>
@else
<img src="/css/not-found.png" style="width:400px;display: block; margin-left: auto;margin-right: auto ">
<h3 style="text-align: center ">Vous n'avez pas encore inscrit dans une formation :(</h3>
@endif
</div>
@endsection