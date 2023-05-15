<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">

   <style>
      .form-container .form {
         width: 100%;
      }



      @media screen and (max-width: 415px) {
         .search {
            float: none;
         }

         .form-container {
            padding: 2rem;
         }

      }
   </style>

</head>

<body>
   <div class="form-container">
      <div class="form">
         <div class="container"><label>User Settings</label>
            <div class="dropdown" style="float: right; margin-left: 18px; margin-top: 1px; ">
               <img src="images/profile.jpg" alt="smallimage" class="smallimage" id="dropdown_img"
                  style="width: 30px;border-radius: 50%; border: 1px solid #ccc;">
               <div class="dropdown-content">
                  <a href="#">Log out</a>
               </div>
            </div>
         </div>
         <ul>
            <li><a class="active" href="user_home.php">Home</a></li>
            <li><a href="user_my_wall.php">My Wall</a></li>
            <li><a href="user_my_account.php">My Account</a></li>
         </ul>


         <h3>Home</h3>
         <div class="btnnew">
            <a href=""><button class="btnidea"
                  style="color: white; background-color: #4354A5; box-shadow: 3px 5px #000; border: 2px solid #000;">+New
                  Idea</button></a>
         </div>
         <div class="main-container" style="background-color: white;">
            <div class="row2">
               <div class="topsection2">
                  <div class="column3">
                     <p style="padding-left: 20px; padding-right:50%;"><b>Lorem Ipsum is simply dummy text of the
                           printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                           ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                           a type specimen book. It has survived not only five centuries, </b></p>
                  </div>
                  <div class="column4">
                     <p style="float: right; padding-right: 10px; margin-bottom: auto;">By SWH</p>
                  </div>
               </div>
            </div>
            <div class="bottomsection2">
               <div class="name">
                  <p style="color: #000;margin-left: 10px; margin-top:10px"><strong>Hello World</strong></p>
               </div>
               <span class="time1" style=" float: right;"><b>1 Day,19hours,10minutes,43seconds ago. #Test321</b></span>
            </div>
         </div>
         <div class="main-container" style="margin-top: 30px; background-color: white;">
            <div class="row2">
               <div class="topsection2">
                  <div class="column3">
                     <p style="padding-left: 20px; padding-right:50%;"><b>Lorem Ipsum is simply dummy text of the
                           printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                           ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                           a type specimen book. It has survived not only five centuries, </b></p>
                  </div>
                  <div class="column4">
                     <p style="float: right; padding-right: 10px; margin-bottom: auto;">By SWH</p>
                  </div>
               </div>
            </div>
            <div class="bottomsection2">
               <div class="name">
                  <p style="color: #000;margin-left: 10px; margin-top:10px"><strong>Hello World</strong></p>
               </div>
               <span class="time1" style=" float: right;"><b>1 Day,19hours,10minutes,43seconds ago. #Test321</b></span>
            </div>
         </div>
      </div>
   </div>
</body>

</html>