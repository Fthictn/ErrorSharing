
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous"> 
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?=site_url('bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>">
<script type="text/javascript" src="<?=site_url('js/jquery-2.1.1.js') ?>"></script>
<link rel="stylesheet" href="<?=site_url('sweetalert2/dist/sweetalert2.css') ?>" />
<link rel="stylesheet" href="<?=site_url('sweetalert2/dist/sweetalert2.min.css') ?>" />

<script type="text/javascript" src="<?=site_url('sweetalert2/dist/sweetalert2.min.js') ?>"></script>

<script src="<?=site_url('bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>


<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <script type="text/javascript">
        function kontrol(){

            var email = $("input[name=email]").val();
            email = $.trim(email);

            var password = $("input[name=password]").val();
            password = $.trim(password);

            if (email== ""){
                swal('Uyarı','Kullanıcı adınızı giriniz.','warning');
            }else if(password== ""){
                swal('Uyarı','Parolanızı giriniz.','warning');
            }else{
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('login/girisYap')?>",
                    data: $("#login").serialize(),
                    success: function(sonuc)
                    {
                        if(sonuc == "hata"){
                            sweetAlert('Hata','Geçersiz kullanıcı adı veya parola girdiniz.','error');
                        }else if(sonuc == "ok"){
                            sweetAlert('Tebrikler','Giriş başarıyla yapıldı bekleyiniz...','success');
                            setTimeout(function(){
                             window.location.href="<?=site_url('homepage'); ?>";
                         },2000);
                        }
                    }
                })
            }
        }
    </script>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: rgb(53, 64, 79);
    }
        #container{
            margin: auto;
            width: 1000px;
            height: 723px;
            background-color: rgb(53, 64, 79);
        }
        #content{
            float: left;
            width: 70%;
            height: 723px;
            background-color: rgb(53, 64, 79);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        #others{
            float: right;
            width: 29.5%;
            height: 723px;
            background-color: rgb(53, 64, 79);  
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        #profil{
            width: 260px;
            height: 330px;
            background-color:rgb(50, 145, 201);
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #profil:hover{
            width: 270px;
            height: 340px;
        }
        #information{
            width: 260px;
            height: 330px;
            background-color:rgb(50, 145, 201);
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;    
        }
        #information:hover{
            width: 270px;
            height: 340px;
        }

        nav{
            width: 680px;
            height: 80px;
        }
        ul{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: rgb(53, 64, 79);
        }
        ul li{
            list-style: none;
            background-color:rgb(50, 145, 201);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 70px;
            font-family: 'Audiowide', cursive;
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
        }
        ul li:hover{
            background-color: rgb(53, 64, 79);
            border-top: 2px solid whitesmoke;
            border-bottom: 2px solid whitesmoke;
        }
        ul li a{
            font-size: 17px;
            text-decoration: none;
            color: whitesmoke;
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
        }
        ul li a:hover{
            text-decoration:underline;
            font-size: 19px;
        }
        #icerik{
            width: 680px;
            height: 600px;
            background-color:rgb(50, 145, 201);
            overflow: auto;
            border-left: 2px solid whitesmoke;
            border-right: 2px solid whitesmoke;
        }
        #login{
            width: 230px;
            height: 300px;
            background-color: rgb(53, 64, 79);
            border: none;
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;

        }
        #login:hover{
            border-right: 2px solid whitesmoke;
            border-left: 2px solid whitesmoke;
        }
        .item{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #giris{
            color: whitesmoke;
            font-family: 'Audiowide', cursive;
            margin-top: 45px;
            margin-bottom: 45px;
        }
        .inputs{
            width: 90%;
            height: 30px;
            text-align: center;
            margin-bottom: 10px;
            color: rgb(50, 145, 201); 
        }
        #yolla{
            padding: 5px;
            width: 90%;
            background-color:rgb(50, 145, 201); 
            border: none;
            color: whitesmoke;
            font-family: 'Audiowide', cursive;
            transition-property:all;
            transition-duration: 0.6s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
        }
        #yolla:hover{
            background-color: whitesmoke;
            color:rgb(50, 145, 201);
            border: 1px solid rgb(50, 145, 201);
            text-decoration:underline;
            cursor: pointer;
        }
        #second{
            margin-bottom: 40px;
        }
        #kayit{
            color: whitesmoke;
            text-decoration: none;
            font-family: 'Audiowide', cursive;
            margin-top: 10px;
        }
        #kayit:hover{
            text-decoration: underline;
        }
        #first-last{
            border-left: 2px solid whitesmoke;
            border-right:2px solid whitesmoke;
        }
        .orta{
            border-right: 2px solid whitesmoke
        }

        #common-errors{
            width: 230px;
            height: 300px;
            background-color: rgb(53, 64, 79);
            margin: auto;
            margin-top: 16px;
            border: none;
            transition-property:all;
            transition-duration: 0.6s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
        }
        #common-errors:hover{
            border-right: 2px solid whitesmoke;
            border-left: 2px solid whitesmoke;
        }
        table{
            margin: auto;
            width: 207px;
        }
        table tr{
            text-align: left;
            line-height: 35px;      
        }
        table th{
            border: 2px solid whitesmoke;
            color: whitesmoke;
        }

        td{
            text-align: center;
            color: whitesmoke;
            font-family: 'Audiowide', cursive;
            font-size: 20px;
        }
        th a{
            color: whitesmoke;
            font-family: 'Audiowide', cursive;
            text-decoration: none;
            font-size: 15px;
        }
        th a:hover{
            color: rgb(50, 145, 201);
        }
    </style>

<body>

    <div id="container">
        
        <div id="content">
                
                    <nav>
                        <ul>
                            <li id="first-last">
                                <a href="<?=site_url('')?>">MAINPAGE</a>
                            </li>
                        </ul>

                    </nav>

                    <div id="icerik">
                        <?php if(@$errors) { ?>
                          <?php foreach ($errors as $error) { ?>
                                    <div class="well">
                                      <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading"><?=$error->topic?></h4>
                                          <p class="text-right">By <i><?=$error->name?> <?=$error->lastname?></i></p>
                                          <h3>Problem:</h3>
                                          <p><?=$error->error?>
                                          </p>
                                          <h3>Solution:</h3>
                                          <p>
                                            <?=$error->solution?>
                                          </p>
                                       </div>
                                    </div>
                                  </div>
                            <?php } ?>
                        <?php }else{ ?>
                            <div class="alert alert-danger" style="margin:10px">There is no content.</div> 
                        <?php } ?>    
                    </div>
        </div>

        <div id="others">

            <div id="profil">

                <form id="login" role="form" onsubmit="return false;" method="post" name="loginForm">
                    <div id="giris"  class="item">LOGIN</div>
                    <div class="item "><input class="inputs" type="email" name="email" placeholder="Email"></div>
                    <div class="item "><input id="second" class="inputs" type="password" name="password" placeholder="Password"></div>
                    <div class="item"><button onclick="kontrol();" id="yolla">Log In</button></div>
                    <div class="item"><a id="kayit" href="<?=site_url("signup")?>">Still not joined?</a></div>
                </form>
            </div>
            
            <div id="information">
                <div id="common-errors">
                
                    <div>
                        <table>
                            <tr>
                                <td>OFTENERRORS</td>
                            </tr>
                            <tr>
                                <th><a href="#">#FİRST</a></th>
                            </tr>
                            
                            <tr>
                                <th><a href="#">#SECOND</a></th>
                            </tr>

                            <tr>
                                <th><a href="#">#THİRD</a></th>
                            </tr>

                            <tr>
                                <th><a href="#">#FOURTH</a></th>
                            </tr>

                            <tr>
                                <th><a href="#">#FİFTH</a></th>
                            </tr>
                            <tr>
                                <th><a href="#">#SİXTH</a></th>
                            </tr>
                        </table>
                </div>
                </div>

                
            </div>

        </div>
    </div>
    <script>
    </script>
</body>
</html>