<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Members</title>
 </head>
 <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous">	
 <link rel="stylesheet" href="<?=site_url('bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>">
<script type="text/javascript" src="<?=site_url('js/jquery-2.1.1.js') ?>"></script>
<link rel="stylesheet" href="<?=site_url('sweetalert2/dist/sweetalert2.css') ?>" />
<link rel="stylesheet" href="<?=site_url('sweetalert2/dist/sweetalert2.min.css') ?>" />

<script type="text/javascript" src="<?=site_url('sweetalert2/dist/sweetalert2.min.js') ?>"></script>

<script src="<?=site_url('bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>

<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">

 <script type="text/javascript">
        function kontrol(id){

            var x = document.getElementById("subject"+id); 
            var subject = $(x).val();
            subject = $.trim(subject);

            var y = document.getElementById("problem"+id); 
            var problem = $(y).val();
            problem = $.trim(problem);

            var z = document.getElementById("answer"+id);     
            var answer = $(z).val();
            answer = $.trim(answer);


            if (subject == ""){
                swal('Uyarı','Problem başlığını giriniz.','warning');
            }else if(problem == ""){
                swal('Uyarı','Problemi giriniz.','warning');
            }else if(answer == ""){
                swal('Uyarı','Çözümü giriniz.','warning');
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "<?=site_url('adderror/error_guncelle')?>" + "/" + id + "/" + subject + "/" + problem + "/" + answer,
                    success: function(sonuc)
                    {
                        if(sonuc == "hata"){
                            sweetAlert('Hata','İşleminiz gerçekleştirilemiyor.Daha sonra tekrar deneyiniz.','error');
                        }else if(sonuc == "ok"){
                            sweetAlert('Tebrikler','Problem başarıyla güncellendi bekleyiniz...','success');
                            setTimeout(function(){
                             window.location.href="<?=site_url('homepage'); ?>";
                         },2000);
                        }
                    }
                })
            }
        }

        function sil(id){

            $.ajax({
              type: "POST",
              url: "<?=site_url('adderror/error_sil')?>" + "/" + id,
              success: function(x){
                setTimeout(function(){
                  window.location.href="<?=site_url('homepage'); ?>";
                },500);
              }
            });
        }

        function uyesil(id){
            $.ajax({
              type: "POST",
              url: "<?=site_url('adderror/member_sil')?>" + "/" + id,
              success: function(x){
                setTimeout(function(){
                  window.location.href="<?=site_url('homepage'); ?>";
                },500);
              }
            });
        }
</script>
 
 <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
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
             padding: 30px;
         }
         #login{
			width: 230px;
			height: 300px;
			background-color: rgb(53, 64, 79);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            transition-property:all;
            transition-duration: 0.3s;
            transition-delay: 0.0s;
            transition-timing-function:ease;
            border: none;

		}
        #login:hover{
            border-right: 2px solid whitesmoke;
            border-left: 2px solid whitesmoke;
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
             transition-duration: 0.3s;
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
         #namesurname{
             color: whitesmoke;
             font-family: 'Audiowide', cursive;
             font-size: 15px;
             display: flex;
             align-items: center;
             
         }
         #job{
             color: whitesmoke;
             font-family: 'Audiowide', cursive;
             font-size: 15px;
             display: flex;
             align-items: center;

         }
         div[id="job"] div i{
             margin-right: 15px;
         }
         div[id="namesurname"] div i{
             margin-right: 15px;
         }
         #mail{
             color: whitesmoke;
             font-family: 'Audiowide', cursive;
             display: flex;
             align-items: center;
         }
         div[id="mail"] div i{
             margin-right: 15px;
         }
         #profillink{
            color: whitesmoke;
            text-decoration: none;
         }
         #profillink:hover{
             text-decoration: underline;
         }
         
         #allprofil{
             width: 610px;
             height: 540px;
             background-color: rgb(53, 64, 79);
             padding:20px;
             
         }
         #onlyprofil{
             width: 100%;
             height: 70px;
             background-color:rgb(50, 145, 201);
             display: flex;
             align-items: center;
             justify-content: space-around;
             border-bottom: 2px solid whitesmoke;
             border-top: 2px solid whitesmoke;
         }
         .kapsayici{
             display: flex;
             align-items: center;
             width: 33.3%;
             height: 100%;
             border-left: 2px solid whitesmoke;
             background-color:rgb(50, 145, 201);
             transition-duration: 0.3s;
             transition-delay: 0.0s;
             transition-timing-function:ease;
         }
         .kapsayici:hover{
            background-color: rgb(53, 64, 79);
         }
         #sag{
            border-right: 2px solid whitesmoke;
         }
         .icons{
             margin-left: 15px;
             color: whitesmoke;
         }
         .yazi{
             margin-left: 10px;
             color: whitesmoke;
             font-family: 'Audiowide', cursive;
             font-size: 12px;
         }
         #sharing{
             margin-top: 50px;
         }
         .textarea1{
             max-width: 100%;
             width: 100%;
             height: 150px;
             color: rgb(53, 64, 79);
             font-size: 17px;
             padding: 10px;
         }
         form div input[type="text"]{
             margin-bottom: 10px;
             text-align: center;
             color: rgb(53, 64, 79);
             line-height: 30px;
             font-size: 17px;
             font-family: 'Audiowide', cursive;
            }
            #shareerrorbutton{
                padding: 5px;
                color: whitesmoke;
                background-color:rgb(50, 145, 201);
                border: none;
                border-left: 1px solid whitesmoke;
                border-right: 1px solid whitesmoke;
                transition-duration: 0.3s;
                transition-delay: 0.0s;
                transition-timing-function:ease;
                font-family: 'Audiowide', cursive;
            }
            #shareerrorbutton:hover{
                border-bottom: 1px solid whitesmoke;
                border-top: 1px solid whitesmoke;
            }
     </style>
 <body>
                <div id="container">
                    <div id="content">
                            
                                <nav>
                                    <ul>
                                        <li id="first-last">
                                            <a href="<?=site_url('homepage')?>">MAINPAGE</a>
                                        </li>
                                        <?php if(@$_SESSION["name"] == "admin") { ?>
                                        <li class="orta">
                                            <a href="<?=site_url('profile')?>">ERRORS</a>
                                        </li>
                                        <?php }else { ?>
                                            <a href="<?=site_url('profile')?>">PROFILE</a>
                                        <?php } ?>
                                        <?php if(@$_SESSION["name"] == "admin") { ?>
                                        <li class="orta">
                                            <a href="<?=site_url('members')?>">MEMBERS</a>
                                        </li>
                                        <?php } ?>
                                        <li class="orta">
                                            <a href="<?=site_url('adderror')?>">ADD ERROR</a>
                                        </li>
                                        <li class="orta">
                                            <a href="<?=site_url('login/cikisYap/')?>">LOG OUT</a>
                                        </li>
                                    </ul>
                                </nav>
            
                                <div id="icerik">
                                <table class="table" id="dev-table">
                                      <thead>
                                        <tr>
                                          <th>Sayı</th>
                                          <th>Ad</th>
                                          <th>Meslek</th>
                                          <th>Email</th>
                                          <th>Seçenekler</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php if(@$members) { ?>
                                        <?php $count=1; foreach ($members as $member) : ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><?=$member->name?> <?=$member->lastname?></td>
                                            <td><?=$member->job?></td>
                                            <td><?=$member->email?></td>
                                             <td><a style="cursor:pointer;color:red" onclick="uyesil(<?=$member->id?>);">Sil</a></td>
                                        </tr>
                                        <?php ++$count; endforeach; ?>
                                    <?php }else{ ?>
                                        <div class="alert alert-danger">Hiç uye bulunamadı.</div> 
                                    <?php } ?>
                                      </tbody>
                                    </table>
                                </div>
                    </div>
                    <div id="others">
            
                        <div id="profil">
                           
                            <div id="login">
                                    
                                <div id="namesurname">
                                    <div><i class="fas fa-user"></i></div>
                                    <div><?=$_SESSION["name"].' '.$_SESSION["lastname"]?></div>   
                                </div>

                                <div id="job">
                                    <div><i class="fas fa-briefcase"></i></div>
                                    <div><?=$_SESSION["job"]?></div>
                                </div>

                                <div id="mail">
                                    <div><i class="fas fa-envelope"></i></div>
                                    <div><?=$_SESSION["email"]?></div>
                                </div>
                            </div>
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
 </body>
 </html>