@extends('layouts.auth')

@section('title', 'Client Preview')
<link rel="shortcut icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,h_16/v1571841777/icons8-home-office-24_veiqea.png" type="image/x-icon">
@section('styles')
<style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    html,
    body {
        font-family: 'Ubuntu', sans-serif;
        overflow-x: hidden;
    }

    .main-body {
        position: relative;
    }

    ul {
        list-style: none;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
        position: relative;
        top: 0;
        left: 14rem;
        width: calc(100% - 14rem);
        z-index: 998;
        backface-visibility: hidden;
        margin-top: 1px;
    }

    .main-heading {
        margin-left: 3rem;
        font-size: 2rem;
        font-weight: bold;
    }

    .hamburger {
        display: none;
    }

    .header-lists {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 1rem !important;
        margin-left: 4rem !important;
        position: relative;
        margin: 0;
    }

    .header-lists li {
        display: inline-block;


    }

    #page-content-wrapper {
        min-width: 100vw;
        min-width: 0;
        width: 100%;
    }

    @media only screen and (max-width: 991px) {
        .searchDiv {
            left: 0 !important;
        }

        .fa-search {
            top: 10px !important;
            left: 10px;
        }

        .br {
            border-right: none !important;
        }
    }

    a.dropdown-item:hover {
        border-bottom: 1px solid #fff;
        transition: 1s;
    }

    .profile-photo {
        border-radius: 50%;
    }

    .support-icon {
        height: 30px;
        width: auto;
    }

    .notification-icon {
        height: 24.4px;
        width: auto;
    }

    .profile-photo {
        height: 40px;
        width: auto;
    }

    .support-list {
        display: inline-grid !important;
        grid-template-columns: 1fr 2fr;
        grid-column-gap: 0.4rem;
        align-items: center;
    }

    main {
        margin-top: 4rem;
        margin-left: 14rem;
    }

    .main-image-container {
        margin-top: 10rem;
        margin-bottom: 5rem;
    }

    .main-image {
        display: block;
        margin: 0 auto;
        width: 60%;
        height: auto;
        /* margin-left: 18rem; */
    }

    .second-heading {
        width: 50%;
        text-align: center;
        margin: 0 auto;
        margin-bottom: 5rem;
    }

    .main-form {
        width: 60%;
        margin: 0 auto;
        margin-bottom: 5rem;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        background: #091429;
        height: 100vh !important;
        z-index: 999;
        width: 14rem;
        color: white;
        padding-top: 3rem;
        padding-left: 1rem;
    }

    .sidebar a:hover {
        color: #0ABAB5;
    }

    .sidebar ul li {
        padding: 1rem 0rem;
        text-align: left;
        list-style: none;
        margin-left: 2rem;
        margin-bottom: 10%;
    }

    .sidebar ul li a img {
        height: 1.5rem;
        padding-right: 1rem;
    }

    .sidebar ul li a i {
        padding-left: 8px;
    }

    .logo {

        text-align: center;
        margin-bottom: 2rem;
    }

    .create-invoice {
        width: 13rem;
        height: 3.5rem;
        background: #0ABAB5;
        color: white;
        margin: none;
        font-size: 16px;
        text-align: center;
        margin-left: 40px;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .content h3 {
        font-family: Ubuntu;
        font-style: normal;
        font-weight: 500;
        font-size: 22px;
        line-height: 32px;
        color: #262626;
        margin-left: 40px;
        margin-bottom: 20px;
    }

    .content p {
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        color: #091429;
        margin-left: 40px;
    }

    @media(max-width: 1100px) {
        .main-heading {
            font-size: 1.8rem;
        }

        .second-heading {
            font-size: 1.7rem;
            margin-bottom: 4rem;
        }

        .profile-photo {
            height: 30px;
            width: auto;
        }

        .support-icon {
            height: 20px;
            width: auto;
        }

        .notification-icon {
            height: 19.4px;
            width: auto;
        }

        .support-list {
            grid-column-gap: 0;
        }
    }

    @media(max-width: 1010px) {
        .second-heading {
            width: 65%;
        }
    }

    @media(max-width: 950px) {
        .header {
            padding: 0.7rem 3rem 0.7rem 0rem !important;
        }

        .main-heading {
            font-size: 1.6rem;
        }

        .second-heading {
            font-size: 1.5rem;
            width: 75%;
        }
    }

    @media(max-width: 850px) {
        .sidebar {
            display: none;
        }

        .profile-list {
            margin-right: 3rem;
        }

        .hamburger {
            position: absolute;
            /* z-index: 1; */
            right: 0;
            top: 1px;
            height: 20px;
            width: 28px;
            cursor: pointer;
            margin-right: 1.6rem;
            padding-right: 0 !important;
        }

        .hamburger-btn {
            /* margin-left: 4rem; */
            display: block;
            /* width: 7px;
          height: 2px; */
            background: black;
            position: absolute;
            right: 0rem;
            top: 12px;
            width: 25px;
            height: 3px;
            transition: 0.5s all ease;
            /* cursor: pointer; */
        }

        .hamburger-btn::before {
            position: absolute;
            top: -8px;
            width: 25px;
            height: 3px;
            background: black;
            transition: 0.5s all ease;
        }

        .hamburger-btn::after {
            position: absolute;
            top: 8px;
            width: 25px;
            height: 3px;
            background: black;
            transition: 0.5s all ease;
        }

        .open-menu {
            display: block !important;
        }

        .cross-hamburger {
            transform: rotate(360deg);
            background: transparent;
        }

        .cross-hamburger::before {
            transform: rotate(45deg) translate(5px, 8px);
        }

        .cross-hamburger::after {
            transform: rotate(-45deg) translate(3px, -7px);
        }

        .header {
            width: 100% !important;
            left: 0;
        }

        main {
            margin-left: 0 !important;
            margin-top: 2.5rem;
        }

        .main-image {
            width: 75%;
        }

        .second-heading {
            width: 70%;
        }

        .main-form {
            width: 70%;
        }
    }

    @media(max-width: 750px) {
        .main-container {
            width: auto !important;
        }

        .main-form,
        .second-heading,
        label,
        input[type=text],
        textarea {
            width: 85%;
        }

        .main-image {
            width: 80%;
        }
    }

    @media(max-width: 670px) {
        .main-heading {
            font-size: 1.5rem;
            margin-left: 15px;
        }

        .support-list img {
            height: 15px;
            width: auto;
        }

        .support-list span {
            font-size: 14px;
        }

        .notification-icon {
            height: 16px;
            width: auto;
        }

        .profile-photo {
            height: 20px;
        }

        .profile-list span {
            font-size: 14px;
        }

        .header-lists {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .header-lists li {
            padding-right: 1rem;
        }

        .hamburger-btn {
            top: 11px;
            height: 2px;
        }

        .hamburger-btn::before {
            top: -6px;
            height: 2px;
        }

        .hamburger-btn::after {
            top: 6px;
            height: 2px;
        }

        .cross-hamburger::before {
            transform: rotate(45deg) translate(4px, 6px);
        }

        .cross-hamburger::after {
            transform: rotate(-45deg) translate(2px, -5px);
        }
    }

    @media (max-width: 767px) {
        .header {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-row-gap: 0.5rem;
        }

        main {
            margin-top: 7rem;
        }

    }

    #nav {
        position: absolute;
        left: 0%;
        right: 0%;
        top: 0%;
        bottom: 0%;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-left: 15%;
    }

    #clt {
        font-size: 17px;
        margin-left: 5%;
        margin-top: -2.50%;
        font-weight: bold;
    }

    #crs {
        margin-left: 5%;
        margin-top: 2%;
        width: 25%;
        padding: 0.5em;
        margin-bottom: 3%;
        border-top: 0px;
        border-bottom: 0px;
        height: 30px;
        border-top: 1px solid grey;
        border-bottom: 1px solid grey;

    }

    #btn {
        width: 150px;
        padding: 0.5em;
        background-color: #009FFF;
        color: white;
        border-radius: 5px;
        height: 25px;
        font-size: 15px;
        padding-left: 8px;
        margin-left: 10px;
    }

    #dte {
        margin-left: 8%;
    }

    #cmp {
        margin-left: 8%;
    }

    #nme {
        margin-left: 8%;
    }

    #prj {
        margin-left: 10%;
    }

    #prs {
        margin-left: 16%;
    }

    #dtl {
        background-color: white;
        width: 90%;
        height: 40px;
        margin-top: 1%;
        margin-left: 5%;
        border-top: 1px solid grey;
        border-left: 1px solid grey;
        border-right: 1px solid grey;
        border-bottom: 1px solid grey;
        font-size: 12px;
        background-position-x: right;
        border: 1px solid #C4C4C4;
        padding-top: 0.8em;
    }

    #dat {
        margin-left: 3%;
        text-align: center;
    }

    #com {
        margin-left: 8.50%;
    }

    #fde {
        margin-left: 11.39%;
        text-align: center;
    }

    #fdm {
        margin-left: 11.39%;
    }

    #act {
        margin-left: 10%;
        width: 38%;
        padding: 10px 18px;
        background-color: rgba(23, 150, 21, 0.1);
        color: #179615;
        font-weight: bold;
        text-align: center;
    }

    #cmpt {
        margin-left: 10%;
        margin-bottom: 5%;
        width: 38%;
        padding: 10px 10px;
        background: rgba(0, 159, 255, 0.1);
        color: darkblue;
        font-weight: bold;
        text-align: center;
    }

    #cmpts {
        margin-left: 10%;
        margin-bottom: 5%;
        width: 38%;
        padding: 10px 10px;
        background: rgb(240, 183, 183);
        border-radius: 4px;
        color: #F77A06;
        font-weight: bold;
        text-align: center;
    }

    #dvd {
        margin-top: 10%;
        width: 40px;
        transform: rotate(90deg);
    }

    #au {
        font-weight: bold;
        color: black;
        border: 3px solid black;
        border-radius: 100%;
        font-size: 10px;
        margin-top: 5px;
    }

    #search {
        padding-left: 30px;
        margin-left: 240px;
        border-top: 1px solid grey;
        border-right: 1px solid grey;
        border-left: 1px solid grey;
        border-bottom: 1px solid grey;
        height: 30px;
        width: 300px;
        border-radius: 5px;
    }

    #inputIcon {
        position: absolute;
        top: 22px;
        left: 265px;
    }
</style>
@endsection

@section('content')
    <div class="main-body">
        <header class="header">
            <!-- Header -->


            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light mr-auto ml-auto  border-bottom">

                    <div>
                        <input id="search" type="search" placeholder="Search" />
                        <img src="img/search.png" width="20px" height="20px" id="inputIcon" />
                    </div>




                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                            <li id="nav-item active">
                                <a class="nav-link" href="#"><img src="https://res.cloudinary.com/mirakul1/image/upload/v1570751693/e1tm9z6lqtnfefbftgga.svg" alt=""></a>
                            </li>
                            <hr id="dvd">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="https://res.cloudinary.com/mirakul1/image/upload/v1570750951/iau2jvhrp3ww4uppx3yf.svg" alt=""></a>
                            </li>
                            <hr id="dvd" />
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="https://res.cloudinary.com/mirakul1/image/upload/v1570751264/z0yhs8mzqf991m3u0c3i.svg" alt=""></a>
                            </li>
                            <hr id="dvd" />
                            <li class="nav-item">
                                <a class="nav-link user-avatar" id="au" href="#">AU</a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>

        </header>


        <!-- Side Bar -->
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <a href="homepage"><img src="https://res.cloudinary.com/undercover/image/upload/v1570695583/Lancers_xrom7n.png"></a>
            </div>
            <ul>
                <li>
                    <a href="documents.html"><img src="https://res.cloudinary.com/undercover/image/upload/v1570695571/home_dsbjg9.svg" alt="" srcset="" /> Dashboard</a>
                </li>
                <li>
                    <a href="clientInformation.html"><img src="https://res.cloudinary.com/undercover/image/upload/v1570695570/customer_zs9l05.svg" alt="" srcset="" /> Client</a>
                </li>
                <li>
                    <a href=""><img src="https://res.cloudinary.com/undercover/image/upload/v1570695514/lightbulb_tnpl08.svg" alt="" srcset="" /> Project<i class="fa fa-angle-down"></i></a></a>
                </li>
                <li>
                    <a href=""><img src="https://res.cloudinary.com/undercover/image/upload/v1570695569/approve-invoice_tiiw8k.svg" alt="" srcset="" />
                        Invoice</a>
                </li>
                <li>
                    <a href=""><img src="https://res.cloudinary.com/undercover/image/upload/v1570695583/policy_hqxu0l.svg" alt="" srcset="" /> Contract</a>
                </li>
                <li>
                    <a href=""><img src="https://res.cloudinary.com/undercover/image/upload/v1570695556/approval_yxgv04.svg" alt="" srcset="" /> Proposals</a>
                </li>
            </ul>
        </div>



        <main>
            <!-- Main body -->
            <h2 id="clt">CLIENT </h2>
            <select name="All" id="crs">
                <option value="volvo">All</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>

            <button id="btn"> + add New Client</button><br>
            <tr>
                <td>
                    <b id="dte">Date</b>
                </td>
                <td>
                    <b id="cmp">Company</b>
                </td>
                <td>
                    <b id="nme">Name</b>
                </td>
                <td>
                    <b id="prj">Project</b>
                </td>
                <td>
                    <b id="prs">Progress</b>
                </td>
            </tr>



            <div id="dtl">
                <tr>

                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie </b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="act">Active</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>



            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="act">Active</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpts">Pending</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="comps" style="margin-left: 210px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal"> 5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal"> Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>


            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>

            <div id="dtl">
                <tr>
                    <td>
                        <img src="img/Ellipse.png" id="com" style="margin-left: 12px; margin-right: -18px;">
                        <b id="dat" style="font-weight: normal">5/09/2019</b>
                    </td>
                    <td>
                        <img src="img/imgOne.png" id="com" width="30" height="30">
                    </td>
                    <td>
                        <b id="fde" style="font-weight: normal">Foodie</b>
                    </td>
                    <td>
                        <b id="fdm" style="font-weight: normal"> Food delivery mode app</b>
                    </td>
                    <td>
                        <b id="cmpt">Complete</b>
                    </td>
                    <td>
                        <img src="img/doticon.png" width="10px" height="15px" id="com" style="margin-left: 200px; margin-right: -18px;"><br>
                    </td>
                </tr>
            </div>
        </main>
        @section('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    const menuBtn = document.getElementById("menuBtn")
    const sidebar = document.getElementById("sidebar")
    let showMenu = false
    menuBtn.addEventListener("click", () => {
        if (!showMenu) {
            sidebar.classList.add("open-menu")
            document.querySelector(".hamburger-btn").classList.add("cross-hamburger")
            showMenu = true;
        } else {
            sidebar.classList.remove("open-menu")
            document.querySelector(".hamburger-btn").classList.remove("cross-hamburger")
            showMenu = false;
        }
    })
    document.querySelector('.create-invoice').addEventListener('click', () => {
        location.href = "invoice-view.html"
    })
</script>
@endsection

@endsection