<?php
    //var_dump($_COOKIE);
    if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) ==''){
        header("Location: index.html");
        exit; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="telegram_social_media_network_chat-128.png" type="image/x-icon">
    <title>User cabinet</title>
</head>

<body>
    <div class="container">
        <div class="row">
              <div class="col l12 center-align">
                 <h1 class="user-cabinet-header">User cabinet</h1>
              </div>
             <div class="col l12 center-align">
              <button id="logout" class="waves-effect waves-light btn cyan lighten-2">Logout
                  <i class="material-icons">work_off</i></button>
                </div>
             </div>
            <div class="row">
                <div class="col l6">
                <form>
                    
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="signup-name" type="text" class="validate">
                        <label class="active" for="signup-name" >Name</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="signup-pass" type="text" class="validate">
                        <label class="active" for="signup-pass" >Password</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="signup-birthday" type="text" class="datepicker">
                        <label class="active" for="signup-birthday" >Birthday</label>
                      </div>
                      <div class="col l12">
                        <p>
                        <label>
                            <input name="group1" type="radio" checked />
                            <span>Male</span>
                        </label>
                        </p>
                        <p>
                            <label>
                            <input name="group1" type="radio" />
                            <span>Female</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input class="with-gap" name="group1" type="radio"  />
                            <span>Other</span>
                            </label>
                        </p>
                      </div>
                      <div class="col l12 right-align">
                      <button class="waves-effect waves-light btn cyan lighten-2"id="signup-submit">Update</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
    </div>
   
    

<script src="script/ajax.js"></script>
<script src="script/get_user_data.js"></script>
    <script src="script/logout.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>