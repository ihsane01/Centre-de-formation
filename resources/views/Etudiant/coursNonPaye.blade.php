@extends('layouts.app')

@section('coursNonPaye')
<style>
    body{
        background-color:white;
    }
</style>
@if($etudiant->is_payer == null || $etudiant->is_payer == 'false')

<img src="/css/money.jpg" style="width:400px;display: block; margin-left: auto;margin-right: auto ">
<h2 style="text-align: center ">VEUILLEZ PAYER VOTRE INSCRIPTION POUR CONSULTER VOS COURS</h2>


<a href="{{route('listeC')}}" style="text-decoration:none"><button type="submit" class="btn btn-outline-success" style="display: block; margin-left: auto;margin-right: auto;">Retour</button></a>
@endif
@endsection