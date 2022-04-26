@extends('layouts.app')
@section('inscreption')

<body>

<div class="container" style="padding:30px;">
<h1>FORMULAIRE D'INSCRIPTION  </h1>
    <form action="{{route('add_user')}}" method="get" >
        @csrf
        @if($user = Auth::user() )
        @if($user->profil == "etudiant")
        

        <label class="form-label">Nom : </label>
        
        <input type="text" name="nom"  class="form-control" placeholder="Enter Your Last Name" value="{{$user->name}}">

        <label class="form-label">Prenom : </label>
        <input type="text" name="prenom" class="form-control" placeholder="Enter Your Name">

        <label class="form-label">Email : </label>
        <input type="text" name="email"  class="form-control"placeholder="Enter Your Email" value="{{$user->email}}">

        <label class="form-label">Age : </label>
        <input type="number" name="age" class="form-control" placeholder="Enter Your Age">

        <label class="form-label">CIN : </label>        
        <input type="text" name="cin" class="form-control" placeholder="Enter Your CIN">
        
       

        <input type="hidden" name="formation"  class="form-control"value="{{$formation->formation}}">
        
    
        <input  type="hidden"name="session_id" value="{{$formation->id}}">
    <br>

        <label class="form-label" >Tel : </label>
        <input type="text"  class="form-control" name="tel" placeholder="Enter Your Phone Number">
    <br>

        <label class="form-label" >Niveau : </label>
        <select name="niveau" >
            <option value="s1">s1</option>
            <option value="s2">s2</option>
            <option value="s3">s3</option>
            <option value="s4">s4</option>
        </select>
<br>
        <button class="btn btn-dark my-5" type="submit">Ajouter</button>
    @else

    <h1>Vous êtes un employé</h1>
    <a  href="{{route('home')}}"><button type="submit">Retour</button></a>
    @endif
    @endif
    </form>
    
</body>
</html>
@endsection 