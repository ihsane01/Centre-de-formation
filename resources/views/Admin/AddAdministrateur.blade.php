@extends('layouts.app')
@section('AddAdministrateur')


<div class="container" style="padding:30px;">
<h1>FORMULAIRE de l'administration </h1>
<form action="{{route('addadmini')}}" method="get">

    <label class="form-label">Nom</label>
    <input  style="margin:10px;" type="text" class="form-control" name="nom"   placeholder="Name">
    
    <label class="form-label">Prénom</label>
    
       <input  style="margin:10px;" type="text" class="form-control" name="prenom"   placeholder=" Prenom">


    <label class="form-label">CIN</label>
    <input  style="margin:10px;" type="text" class="form-control" name="cin"   placeholder="CIN">

    <label class="form-label">Tel</label>
    <input  style="margin:10px;" type="text" class="form-control" name="tel"   placeholder="numero telephone">

    <label class="form-label">Email</label>
    <input  style="margin:10px;" type="text" class="form-control" name="email"   placeholder="*******gmail.com">
    <br>
    <label class="form-label">Profil</label>
    <select name="profil" >
    <option value="Admin">Admin</option>
    <option value="secretaire">secretaire</option>
    </select>
    <br>
    <button type="submit" class="btn btn-dark my-5" name="submit">Submit</button>
</form>
</div>
@endsection