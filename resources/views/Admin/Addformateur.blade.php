@extends('layouts.app')
@section('Addformateur')


<div class="container" style="padding:30px;">
<h1>FORMULAIRE DES FORMATEURS </h1>
<form action="{{route('addformateur')}}" method="get">

    <label class="form-label">Nom</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   placeholder="Name">

    <label class="form-label">Prénom</label>

       <input  style="margin:10px;" type="text" class="form-control" name="prenom"   placeholder=" Prenom">
    <label class="form-label">AGE</label>
 
       <input  style="margin:10px;" type="numero" class="form-control" name="age"   placeholder=" age">



    <label class="form-label">CIN</label>
    <input  style="margin:10px;" type="text" class="form-control" name="cin"   placeholder="CIN">

    <label class="form-label">Tel</label>
    <input  style="margin:10px;" type="text" class="form-control" name="tel"   placeholder="numero telephone">

    <label class="form-label">Email</label>
    <input  style="margin:10px;" type="text" class="form-control" name="email"   placeholder="*******gmail.com">
    
    <label class="form-label">Profil</label>
   <input  style="margin:10px;" type="text" class="form-control" name="profil" value="formateur"  >
    
     <label class="form-label">DESCRIPTION</label>
    <textarea  style="margin:10px;" type="text" class="form-control" name="description"   placeholder="description"></textarea>
    
     <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection