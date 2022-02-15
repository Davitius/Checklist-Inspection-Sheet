<?php
error_reporting(E_ERROR);
ob_start();
$userkookie = $_COOKIE['arqi_userr'];
    $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
    $sql = "SELECT * FROM arqi_users WHERE user LIKE '$userkookie'";
    $result = $conn->query($sql);
$user = mysqli_query($conn, "SELECT * FROM arqi_users WHERE user = '$userkookie'");
$user = mysqli_fetch_assoc($user);
$sqlquery = "SELECT * FROM arqi_users WHERE user LIKE '$userkookie'";
     $resultat = $conn->query($sqlquery);
     $row = $resultat->fetch_object();
$access = $row->status;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <link rel="icon" type="image/svg+xml" href="../img/archisvg.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Construction company</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link href="../css/mine.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


th, td {
    padding: 4px;
    width: 600px;
}
th {
    background: #009dff;
    color: #fff;
    border: 2px solid #009dff;
    box-shadow: 1px 1px 8px #898989;
    text-align: center;
}
td {
    background: #def0e8;
    border: 2px solid #009dff;
    box-shadow: 1px 1px 8px #898989;
    font-size: 16px;
}
    </style>


  </head>
  <body>
<!-- Header  -->
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">

            <?php
            $image = $row->userimg;
            if(!$image == ""): ?>
             <?php    $show_img = base64_encode($user['userimg']); ?>
        <img class="fr4photo" src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="">
           <?php else: ?>
            <img class="fr4photo" src="../img/usericon.png">
            <?php endif; ?>

          <p class="text-muted"><span class="text-muted"> <?php  echo $row->name ?></span></p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Menu</h4>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">Private cabinet</a></li>
            <li><a href="addchecklist.php" class="text-white">Add checklist</a></li>
            <li><a href="checklists.php" class="text-white">Checklists</a></li>
              <li><a href="users.php" class="text-white">Employees</a></li>
              <li><a href="../php/exit.php" class="text-white">Exit</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">

        <strong>  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>

        Construction company</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
<?php
        if(!isset($_COOKIE['arqi_userr']) || $_COOKIE['arqi_userr'] == ''):
        ?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
          <?php header('Location: index.php'); ?>
        </div>
    </div>
    </section>

    <?php else: ?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
             <!-- Add an employee  -->
              <label class="goldentxtbig">Add a new employee</label>
    <form action="php/userchek.php" method="post" enctype="multipart/form-data">
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
        <label class="goldentxt" required>Name. last name:</label>
            <input type="text" class="form-control" name="name"
                   id="name" placeholder="" required value="">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
              <label class="goldentxt" required>E-mail:</label>
            <input type="email" class="form-control" name="user"
                   id="user" placeholder="" required value="">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#009dff" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
            <label class="goldentxt" required>Password:</label>
            <input type="password" class="form-control" name="pass"
                   id="pass" placeholder="Min-5 and Max-12 Symbol" required>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-award-fill" viewBox="0 0 16 16">
  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>
        <label class="goldentxt" required>Position:</label>
            <input type="text" class="form-control" name="position"
                   id="position" placeholder="" required>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-shield-fill-exclamation" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.55 8.502L7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0zM8.002 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg>
            <label class="goldentxt" required>access:</label>
        <select class="form-control" name="access" id="access" required>
        <option value=""></option>
        <option value="Head">Head</option>
        <option value="manager">manager</option>
        <option value="Employee">Employee</option>
        </select>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
        <label class="goldentxt">Photo:</label>
        <input type="file" name="userimg" class="form-control" id="userimg">
        <br><br>
        <label  class="goldentxt">I agree: </label>
              <input type="checkbox" name="" required>
              <br><br><br>
            <button class="btn btn-success" type="submit">Add an employee</button>
            </form>
<br><br><br><br>

<!-- List of employees -->
<label class="goldentxtbig">List of employees</label>
                  <br><br>
<?php
      $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM arqi_users WHERE name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM arqi_users";
     $result = $conn->query($sql);
?>

                 <!--  Employee Search -->
                  <form action="" method="GET">
                      <div class="btn-group">
        <input type="text" name="search" class='form-control' placeholder="Employee Search" value=<?php echo @$_GET['search']; ?> >

      <input class="btn btn-primary" type="submit" value="Search"/>
         <a class="btn btn-primary" href="users.php">Reset</a>
</div>
   </form>


    <table id="users" border="2">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name. last name</th>
                          <th>Position</th>
                          <th></th>
                      </tr>
                    </thead>
        <?php while( $row = $result->fetch_object() ): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->position ?></td>
            <td>

                <a class="btn btn-warning" href="php/userupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>
            </div>
        </div>
  </section>

<?php endif; ?>

</main>

<!-- Footer  -->
<footer class="text-muted py-6">
    <br>
<center>
           <div class="container cv1 col-md-12">
        <div class="row centered">
    <div class="col-lg-3">
    <h5 class="goldentxtsmall">Private cabinet</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a></li>
        </ul>
        </div>

            <div class="col-lg-3">
                <h5 class="goldentxtsmall">Add checklist</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="addchecklist.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg></a></li>
        </ul>
            </div>

            <div class="col-lg-3">
                <h5 class="goldentxtsmall">Checklists</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="checklists.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
</svg></a></li>
        </ul>
            </div>

            <div class="col-lg-3">
                <h5 class="goldentxtsmall">Employees</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="users.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-award-fill" viewBox="0 0 16 16">
  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg></a></li>
        </ul>
        </div>
    </div>
    </div>
</center>
</footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
