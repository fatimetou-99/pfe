
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>

  <body>
 
  <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BMI <span></span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Déconnection</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="admin.php"><i class="fas fa-desktop"></i><span>Aceuill</span></a>
        <a href="statis.php"><i class="fas fa-chart-line"></i><span>Statistique</span></a>
        <a href="agent-list.php"><i class="fas fa-table"></i><span>Listes</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <h4>Admin Nom</h4>
      </div>
      <a href="admin.php"><i class="fas fa-desktop"></i><span>Aceuill</span></a>
      <a href="statis.php"><i class="fas fa-cogs"></i><span>Statistique</span></a>
      <a href="agent-list.php"><i class="fas fa-table"></i><span>Listes</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

     
    <script type="text/javascript" src="js/dash.js"></script>
