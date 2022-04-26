@extends('layouts.app')
@section('adminhome')

<Style>




#close-CSS {
       background-image: url( './css/e-learning.jpg' );

    background-size: cover;
    height: 300px;  
    width: 300px;
    border-radius: 400px;
    box-shadow: 09px 8px 5px 2px black;
    transition: 0.5s;


     
}
#close-image {
   
    background-image: url( './css/etudiants.jpg' );
    background-size: cover;
    height: 300px;  
    width: 300px;
   
    border-radius: 400px;
    box-shadow: 09px 8px 5px 2px black;
    transition: 0.5s;

}
#close-image label{

    color:block;
}
#close-CSS  label{
    margin-top:180px;
    
    
}
a:hover{
    transform: scale(1.1);
     transition: 0.5s;
}
label {
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
body{
 background-image:url( './css/class4.jpg' );
 
    background-repeat: no-repeat;
    background-position: center;
       background-size: cover; 
       
}

.a{
     display:grid;
    grid-template-columns: repeat(2,52%);
    column-gap: 2%;
    background-color:grid;
}

</Style>
<body>
<div class="container-fluid"  style="margin: 0 auto">
    <div class="a" style="margin: 20vh; margin-left:40vh;width:75vw;height:45vh">

<a href="{{route('etudiants')}}" ><button  id="close-image" ><label>LISTE DES ETUDIANTS</label></button></a>
<a href="{{route('ajouterC')}}"><button id="close-CSS"   ><label>AJOUTER DES COURS</label></button></a>
</div>
</div>
</body>
@endsection

