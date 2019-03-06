<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

            var name = $("input[name=name]").val();
            name = $.trim(name);

            var surname = $("input[name=surname]").val();
            surname = $.trim(surname);

            var job = $("input[name=job]").val();
            job = $.trim(job);

            var email = $("input[name=email]").val();
            email = $.trim(email);

            var password = $("input[name=password]").val();
            password = $.trim(password);

            if (name== ""){
                swal('Uyarı','Adınızı giriniz.','warning');
            }else if(surname== ""){
                swal('Uyarı','Soyadınızı giriniz.','warning');
            }else if(job== ""){
                swal('Uyarı','Mesleğinizi giriniz.','warning');
            }else if(email== ""){
                swal('Uyarı','Email giriniz.','warning');
            }else if(password== ""){
                swal('Uyarı','Parolanızı giriniz.','warning');
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('signup/kayitOl')?>",
                    data: $("#signup").serialize(),
                    success: function(sonuc)
                    {
                        if(sonuc == "hata"){
                            sweetAlert('Hata','Şuanda kayıt işleminiz gerçekleştirilemiyor.Daha sonra tekrar deneyiniz.','error');
                        }else if(sonuc == "ok"){
                            sweetAlert('Tebrikler','Kayıt başarıyla yapıldı bekleyiniz...','success');
                            setTimeout(function(){
                             window.location.href="<?=site_url('login'); ?>";
                         },2000);
                        }
                    }
                })
            }
        }
    </script>

    <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background-color: rgb(50, 145, 201);
            }
            form{
                border-left: 3px solid whitesmoke;
                border-right: 3px solid whitesmoke;
                margin: auto;
                margin-top: 200px;
                margin-right: 100px;
                width: 300px;
                height: 400px;
                background-color: rgb(53, 64, 79);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                transition-property:all;
                transition-duration: 0.4s;
                transition-delay: 0.0s;
                transition-timing-function:ease;
            }
            form:hover{
                border-top: 3px solid whitesmoke;
                border-bottom: 3px solid whitesmoke;
                width: 330px;
                height: 430px;
            }
            #yolla{
                height: 30px;
                padding: 5px;
                width: 100%;
                background-color:rgb(50, 145, 201); 
                border: none;
                color: whitesmoke;
                font-family: 'Audiowide', cursive;
                transition-property:all;
                transition-duration: 0.6s;
                transition-delay: 0.0s;
                transition-timing-function:ease;
                border-right:2px solid whitesmoke;
                border-left:2px solid whitesmoke;
		    }
            #yolla:hover{
                background-color: whitesmoke;
                color:rgb(50, 145, 201);
                border: 1px solid rgb(50, 145, 201);
                text-decoration:underline;
                cursor: pointer;
                border-bottom:2px solid whitesmoke;
                border-top:2px solid whitesmoke;
            }
            #entry{
                color: whitesmoke;
                font-family: 'Audiowide', cursive;
                font-size: 30px;
            }
            .inputs{
                width: 230px;
                line-height: 30px;
                text-align: center;
                color: rgb(53, 64, 79);
            }
            #head{
                position: absolute;
                top:400px;
                left:130px;
                color: whitesmoke;
                font-size: 30px;
                font-family: 'Gamja Flower', cursive;
                transition-property:all;
                transition-duration: 0.6s;
                transition-delay: 0.0s;
                transition-timing-function:ease;
                text-decoration: none;
            }
            #head:hover{
                text-decoration: underline;
                
            }
            .icon{
                position: absolute;
                color: whitesmoke;
                font-size: 100px;
                margin-left: 520px;
                margin-top: 50px;
            }
            #out{
                width: 150px;
            }
    </style>
</head>
<body>
            <i class="fas fa-laptop-code icon"></i>
    <div id="head" style="left:0px; font-size:20px">
        ERROR SHARING PLATFORM FOR CODERS AND WHO FELLING HIMSELF LIKE CODER
    </div>
    
    <form id="signup" role="form" onsubmit="return false;" method="post" name="signupForm">
        <div id="entry">SIGN UP</div>
        <div><input id="username" class="inputs" type="text" name="name" placeholder="Name" required></div>
        <div><input id="usersurname" class="inputs" type="text" name="surname" placeholder="Surname" required></div>
        <div><input id="userjob" class="inputs" type="text" name="job" placeholder="job" required></div>
        <div><input id="useremail" class="inputs" type="mail" name="email" placeholder="Email" required></div>
        <div><input id="userpassword" class="inputs" type="password" name="password" placeholder="Password" required></div>
        <div class="item"><button onclick="kontrol();" id="yolla">Sign Up</button></div>
</form>
</body>
</html>