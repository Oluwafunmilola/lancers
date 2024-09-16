@extends('layouts.app')
<!-- Select Project -->

@section('styles')
    <style>
        * {
            margin-right: 0px;
            margin-left: 0px;
            font-family: Ubuntu;
        }


        /*navbar css*/
        #container {
            display: grid;
            grid-template-columns: 1fr 8fr 2fr;
        }


        #container div {
            box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
            outline: none;
            height: 60px;

        }

        #container p {
            justify-content: center;
            margin-top: 15px;
            font-style: normal;
            font-weight: bold;
            font-size: 1.3em;
            color: #323A43;
        }


        div>#ext {
            background: rgba(207, 204, 204, 0.4);
            font-size: 24px;
            font-weight: bold;
            justify-content: center;
            border: none;
            color: white;
            width: 100%;
            height: 60px;
            outline: none;
            /*added outline none*/
        }

        /* div>#ext:hover {
            background: #0ABAB5;
        } */

        div>.close {
            outline: none;
        }

        .close {

            color: #C4C4C4;
            width: 100%;

        }

        .navM i {
            padding-top: 15px;
        }

        /*end of nav bar*/

        @media (max-width: 976px) {

            div>#ext {
                font-size: 15px;
            }
        }


        @media (max-width: 992px) {


            #container p {
                font-size: 19.5px;
                margin-top: 9px;
            }

            div>#ext {
                font-size: 20px;
            }
        }



        @media (max-width: 767px) {

            #container p {
                margin-top: 5px;
           }
            #container p {
                font-size: 17.5px;
                margin-top: 12px;
            }

            div>#ext {
                font-size: 18px;
            }


        }


        @media (max-width: 576px) {
            #container p {
                font-size: 16px;
                margin-top: 12px;
            }

            div>#ext {
                font-size: 15px;
            }

        }
    </style>

<!-- <link rel="stylesheet" href="{{asset('css/step1.css')}}"/> -->

@endsection


@section('content')
<div id="container">
    <div>
        <button class="close navM"><span>
                <i class="fa fa-times"></i>
            </span></button>
    </div>
    <div>
        <p class="nav cEstimate" id="cre">Create Estimate</p>
    </div>
    <div>
        <input class="disabled" id="ext" type="button" value="NEXT">
    </div>    
</div>


<div class="contaner">
    <div class="clearfix"></div>
    <br/>  <br/>

    <h3 class="text-center"><strong>What project are you estimating?</strong></h3>
    @if(session()->has('message.alert'))
    <div class="text-center">
        <button class=" alert alert-{{ session('message.alert') }}"> 
            {!! session('message.content') !!}
        </button>
    </div>
    @endif
    <form id="create-project" method="post"action="/guest/save/step1" >
        @csrf
        <div class="row ml-auto box justify-content-center">
           
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>A new project</strong></h5>
                        <p class="card-text">Create a new estimate and set up a new project based on the
                            information.
                        </p>
                        <input type="text" class="form-control" name="project_name" type="text" placeholder="Project Name" id="createProject">           
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row ml-auto box justify-content-center mt-20" style="margin-top: 20px;">
            <div class="col-sm-4">
                <input class="disabled" id="ext" type="submit" value="NEXT">
            </div>
        </div>
    </form>
</div>

@endsection

@section('script')
    
<script>
        function verifyPath() {
        let a_next =  document.querySelector('.a-next');
        let next = document.querySelector('.next');
        let bt = document.getElementById('btne');


        
        if (createProject.value !== "" && createProject.value.length >= 4 ) {
             a_next.style.background = '#0ABAB5';
             next.style.background = '#0ABAB5';
              bt.disabled = false;


            document.querySelector('.a-next').classList.remove('disabled');
            document.querySelector('.next').classList.remove('disabled');
        } else {

            //console.log('here works');
            document.querySelector('.next').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.next').classList.add('disabled');
            document.querySelector('.a-next').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.a-next').classList.add('disabled');
             bt.disabled = true;
              bt.preventDefault();
            
            
             
        }
    }
    
    let createProject = document.getElementById('createProject');
    window.onload=function(){
         createProject.addEventListener('keyup', verifyPath);
    }
   

     function manage(createProject) {
        let bt = document.getElementById('btne');
        if (createProject.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
             bt.preventDefault(); 
        }
    }    
    </script>
@endsection

