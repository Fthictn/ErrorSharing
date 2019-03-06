 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Homepage</title>

     <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"  crossorigin="anonymous">	
	 
	 <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 </head>
 	 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>	
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
             font-size: 20px;
             display: flex;
             align-items: center;
             
         }
         div[id="namesurname"] div i{
             margin-right: 15px;
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
     </style>
 

 <body>
<div id="container">
    <div id="content">
        <nav>
            <ul>
                <li id="first-last">
                    <a href="<?=site_url('homepage')?>">MAINPAGE</a>
                </li>
                <?php if(@$_SESSION["id"]) { ?>
                <?php if(@$_SESSION["name"] == "admin") { ?>   
                <li class="orta">
                    <a href="<?=site_url('profile')?>">ERRORS</a>
                </li>
                <?php }else { ?>
                <li class="orta">
                    <a href="<?=site_url('profile')?>">PROFILE</a>
                </li>
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
            	<?php } ?>
            </ul>
        </nav>

        <div id="icerik">
        	<?php if(@$errors) { ?>
        	  <?php foreach ($errors as $error) { ?>
						<div class="well">
					      <div class="media">
					  		<div class="media-body">
					    		<h4 class="media-heading"><?=$error->topic?></h4>
					          <p class="text-right">By <?=$error->name?> <?=$error->lastname?></p>
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
            <div id="login">
            	<?php if(@$_SESSION["id"]) { ?>
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
            <?php }else{  ?>
				<div id="namesurname">
                    <div><i class="fas fa-user"></i></div>
                    <div>Ziyaretçi</div>
                </div>
            <?php } ?>
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