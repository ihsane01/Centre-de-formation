@extends('layouts.app')
@section('adminhome')
<style>
body{
    background-image:url(' ./css/class4.jpg' );
    
       background-repeat: no-repeat;
       /* background-position: center; */
        background-size:100vw 100vh; 
   
   }
.a{
    display:grid;
    grid-template-columns: repeat(3,28%);
    column-gap: 8%;
}
.b{

    text-decoration: none;
    font-weight: bold;
    text-align: center;
    position: relative;
    z-index: 2;
     transition: 0.5s;
       box-shadow: 09px 8px 5px 2px black;
     
}

.r{
   
    color: black;
    display: block;
    width:200px;
    background-color:white;
    border-radius: 400px;
    margin-top:180px;
    margin-left:50px;
    font-weight: 900;
    position:center;
}
#a{
    background-image: url( './css/college-student-g75c658cc1_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
       background-size: cover;
        border-radius: 400px;
}
#b{
    background-image: url( './css/people-g718fb6c66_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
     border-radius: 400px;
}
#c{
    background-image: url( './css/agenda-gdf84dde31_1920.jpg' );
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
 border-radius: 400px;}
a:hover{
    transform: scale(1.1);
}
</style>
<body>
    <div class="a" style="margin: 20vh auto;width:75vw;height:45vh">
        <a class="b" id="a" href="{{ route('listeFormateur') }}" ><div class="r">Liste des formateurs</div></a>
        <a class="b" id="b" href="{{ route('gestionEtudiant') }}"><div class="r">Gestion des etudiants</div></a>
        <a class="b" id="c" href="{{ route('gestionSession') }}"><div class="r">Gestion des sessions</div></a>
    </div>

</body>
@endsection

