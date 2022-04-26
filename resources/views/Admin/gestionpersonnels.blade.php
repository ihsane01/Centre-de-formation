@extends('layouts.app')
@section('gestionpersonnels')

<Style>




#close-CSS { 
    background-image: url( './css/administration.jpg' );
    background-size: cover;
    height: 300px;  
    width: 300px;
    border-radius: 400px;
    box-shadow: 09px 8px 5px 2px black;
    transition: 0.5s;


     
}
#close-image {
    background-image: url( './css/formateur11.jpeg' );
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
    grid-template-columns: repeat(2,55%);
    column-gap: 2%;
    background-color:grid;
}

</Style>


<body>

<div class="container-fluid"> 
<div class="a" style="margin: 20vh ; margin-left: 35vh ;width:75vw;height:45vh">
<a class="col-md-6 mb-4"href="{{ route('liste') }}" ><button  id="close-image" ><label>Administrateurs</label></button></a>
<a href="{{ route('listeformateur') }}"><button id="close-CSS"   ><label>Formateurs</label></button></a>
</div>
</div>
</body>
@endsection

 