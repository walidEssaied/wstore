<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
        .logoapp{
            margin-left: 10%;
        }
        .dt{
            color:whitesmoke;
        }
        .loginregistreandpanier{
            margin-right: 10%;
        }

        #navbarpac{
            padding:18px;
            margin-top:24px;
            background-color: #292828 ;
        }
        #navbarpac a{
            text-decoration:none;
            color:whitesmoke;
        }
        #navbarpac #productcolor{
            color:red;
        }
        .navbar{
            background-color: #292828  !important;
        }
        #pdp{
            padding-top:20px:
            padding-left:4px;
        }
        .promo{

        }
        #pi{
            margin-top:40px;
            margin-left:10%;
            margin-right:10%;
            height:580px;
            width:80%;        
        }
        .list-group{
          background-color
        }
        .titleProduct{
          margin-top:100px;
          font-size:28px;
          margin:40px;
          opacity:70%;
        }
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif;
    font-size: 14px
}

.mt-100 {
    margin-top: 150px
}

.filter-group {
    border-bottom: 1px solid #e4e4e4
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.37rem
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.filter-group .card-header {
    border-bottom: 0
}

.icon-control {
    margin-top: 6px;
    float: right;
    font-size: 80%
}

.list-menu {
    list-style: none;
    margin: 0;
    padding-left: 0
}

.list-menu a {
    color: #343a40
}

a {
    text-decoration: none !important;
    background-color: transparent
}

.checkbox-btn {
    position: relative
}

.checkbox-btn input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.checkbox-btn input:checked~.btn {
    border-color: #3167eb;
    background-color: #3167eb;
    color: #fff
}

.btn-light {
    display: inline-block;
    font-weight: 600;
    color: #343a40;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #eee;
    border: 1px solid #eee;
    padding: 0.45rem 0.85rem;
    font-size: 10px;
    line-height: 1.5;
    border-radius: 0.37rem
}

.btn-light:hover {
    background-color: #fff;
    border-color: #989898
}

.btn-medium {
    font-size: 12px;
    padding: 10px 22px;
    display: inline-block;
    margin-right: 20px;
    letter-spacing: 2px;
    border: 1px solid #157af6;
    width: 100%
}

.highlight-button:hover {
    background-color: #157af6;
    border: 2px solid #157af6;
    color: #fff
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem
}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-dark bg-dark">
                <div class="logoapp">
                    <a class="navbar-brand">Shop Store</a>
                </div>
                <div class="dt">
                    <a >19 Oct,16:57</a>
                </div>
                <div class="loginregistreandpanier">
                    <a href="">Login</a>
                    <a href="">Registre</a>
                    <li>
                        <a href="">Pannier</a>
                    </li>
                </div>
            </nav>
            <div class="container">
                <nav class="navbar navbar-dark" id="navbarpac">
                    <a href="/product" id="productcolor"><img src="https://img.icons8.com/ios-glyphs/28 /000000/menu.png"/> <span id="pdp">PRODUCTS</span></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href="/about">ABOUT</a>
                    <a href="">CONTACT</a>
                </nav>

            </div>
        <div class="">
        @yield('content')
        </div>
    </body>
</html>
