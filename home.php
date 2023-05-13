
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div id="header">
          <nav>
               <img class="logo_header" src="./img/logo_ute.png" />
               <h1 class="name_ht">HỆ THỐNG PHÁT HIỆN VÀ ĐẾM SẢN PHẨM LỖI CÚC ÁO </h1>
               <ul class="header_top_right">
                    <li><h1 class="login_user">User, <?php echo $_SESSION['username']; ?></h1></li> 
                    <li><a class="btn_logout" href="logout.php">Log out</a></li>
               </ul>
          </nav>
     </div>

     <div class="body2">
          <div class="card">
               <div class="card_table">
                    <h2>Thống kê chi tiết</h2>
               </div>

               <div class="card_table">
                    <table id="table">
                         <thead class="thead_dark">
                              <tr>
                                   <th>#</th>
                                   <th>ERROR</th>
                                   <th>DAY</th>
                                   <th>TIME</th>
                                   <th>HOUR</th>
                                   <th>IMAGE</th>
                                   <th>ID_TRACK</th>
                              </tr>
                         </thead>

                         <tbody>
                         
                              <tr>
                                   <td>ERROR</td>
                                   <td>ERROR</td>
                                   <td>ERROR</td>
                                   <td>ERROR</td>
                                   <td>ERROR</td>
                                   <td>
                                        ERROR
                                   </td>
                                   <td>ERROR</td>
                              </tr>
                             
                         </tbody>

                    </table>

               </div>

          </div>

     

     </div>   
</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
?>