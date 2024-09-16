@extends('layouts.app')

@section('styles')

<style>
body,html{
    margin: 0;
    padding: 0;
    width:90%;
    height: 50%;
}
body{
    background: url(https://res.cloudinary.com/chelsea002/image/upload/v1573049836/bg5_pl6gdl.jpg); 
    -moz-background-size: cover;
    background-size: cover;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed;
    width: 70%;
    display: block;
   
}
.container{
    width: 100%;
    position: center;
    margin-top: -500px;
    margin-left: 505px;
    top: 50%;
    left: 100%;
    transform: translate (-50%, -50%);
    text-align: center;
    color: #091429;
} 
.container h1{   
    text-transform: uppercase;
    font-size: 60px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 2px;
    margin-bottom: 6px;
}
.container h2{       
margin: 0;
font-size: 20px;
font-weight: 500px;
font-style: italic;
padding-top: 0px;
}
.count{
margin: 40px 0
}
.countd{
    display: inline-block;
    width: 88px;
    height: 88px;
    border: 2.5px solid;
    margin: 0 20px;
    font-size: 12px;
    border-radius: 50%;
    overflow: hidden;
    left: 30px;
}
.countd span{
display: block;
font-size: 26px;
margin-top: 19px;
}
@media (max-width: 50px) { 
.form{
width: 96%;
max-width: 400px;
margin-left: 480px;
margin-bottom: 100px;
}
.form input[type="email"]{
width: 73%;
float: left;
padding: 10px;
margin: 10px auto;
font-size: 18px;
background-color: #fff;
border: 1px solid #ddd;}
.form input[type="submit"]{
    width: 25%;
    float: left;
    padding: 10px;
    margin: 10px auto;
    font-size: 18px;
    background-color: #fff;
    border: 1px solid #ddd;
}  }
#navbar{
    width: 158.7%; 
    height: 60px; 
    background:#091429;
}
#box{
    margin: 18px auto;
     width: 289px; 
     height: 29px;
    margin-right: 10px 10px; 
    border-radius: 25px 0 0 25px; 
    border-bottom-color: #091429; 
    border-top-color: #091429;
    border-left-color:  #091429;
    border-right-color: #091429;
    border-width: 1px;
    text-align: center;
}
#box:hover{
border-top-color: #091429;
border-bottom-color: #091429;
border-left-color: #091429;
border-right-color:#091429;
border-width: 2px;
}
#ww{
margin-top: 1px;
font-size: solid 17px;
}
#sbt:hover{
animation: 1s glow;
animation-fill-mode: forwards;
}
@keyframes glow{
    from{
        background-color: #091429; 
    }
    to{
        background-color: #3c5a92; 
    }
}
 
#wrapper{
  height: 1000%;
}
</style>
    
@endsection

@section('content')
<div class="holder" id="navbar">

  <img src="https://res.cloudinary.com/chelsea002/image/upload/v1573049836/Lancers_gdfpzn.png"   style="width: 90px; height: 30px; padding-top: 15px; padding-left: 40px;">
</div>     
     <br><br>
     <img src="https://res.cloudinary.com/chelsea002/image/upload/v1573049836/t_yj8bxj.png"  id="image" style="width: 730px; height: 550px;">
<div class="container" id="wrapper" style="width: 800px; margin-bottom: 470px; margin-left: 87vh; height: 0%;">
      <h1> LANCERS </h1>
      <h2> We are coming soon</h2>



      <div class="count">
          <div class="countd">
           <span id="days"> 00</span>
            DAYS
          </div>

     <div class="countd">
          <span id="hours"> 00</span>
          HOURS
         </div>


     <div class="countd">
         <span id="minutes"> 00</span>
         MINUTES
         </div>

    <div class="countd">
         <span id="seconds"> 00</span>
          SECONDS
         </div>
         <div class="form">
     <form action="">
<input type="text" placeholder="&nbsp&nbsp; Enter email address and get notified"  id="box" >
<input type="submit" value="Submit" id="sbt"  style=" border: black; width: 80px; margin: 10px auto; height: 33px;  border-radius: 0 25px 25px 0; background-color: #091429; color: white;">
</form>
<p id="ww" style="font-weight: bold;"><i>we will not spam</i></p>
        </div>
        </div>
      </div>      
   </div>

@endsection

@section('script')

<script  type="text/javascript">  
  var count = new Date("nov 30,2019 00:00:00").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var d = count - now;
    var days = Math.floor(d/(1000*60*60*24));
    var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((d%(1000*60*60))/(1000*60));
    var seconds = Math.floor((d%(1000*60))/1000);
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    if(d <= 0){
      clearInterval(x);
    }
  },1000);
</script>

@endsection