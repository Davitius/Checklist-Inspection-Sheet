<?php
error_reporting(E_ERROR);
require_once 'connect.php';
ob_start();

$project_id = $_GET['id'];
$checklist = mysqli_query($connect, "SELECT * FROM arqi_checklists WHERE id = '$project_id'");
$checklist = mysqli_fetch_assoc($checklist);

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
    <title>სამშენებლო კომპანია</title>

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
    padding: 2px;
        width: 800px;

}
th {
    background: #009dff;
    color: #fff;
border: 2px solid #009dff;
    box-shadow: 1px 1px 8px #898989;
    text-align: center;
    font-size: 14px;


}
td {
    background: #def0e8;
border: 2px solid #009dff;
    box-shadow: 1px 1px 8px #898989;
font-size: 14px;

}

    </style>


  </head>
  <body>

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

          <p class="text-muted"><span class="text-muted"> <?php $row = $result->fetch_object(); echo $row->name ?></span></p>

        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">მენიუ</h4>
          <ul class="list-unstyled">
            <li><a href="../index.php" class="text-white">პირადი კაბინეტი</a></li>
            <li><a href="../addchecklist.php" class="text-white">ჩექლისტის დამატება</a></li>
            <li><a href="../checklists.php" class="text-white">ჩექლისტები</a></li>
              <li><a href="../users.php" class="text-white">თანამშრომლები</a></li>
              <li><a href="exit.php" class="text-white">გასვლა</a></li>
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

        სამშენებლო კომპანია</strong>
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

          <?php header('Location: ../index.php'); ?>

        </div>
    </div>
    </section>

    <?php else: ?>

    <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="white" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg>
          <br><br>
        <label  class="goldentxtbig">ჩექლისტი</label>
          <br>
          <label class="goldentxt">ID-<?= $checklist['id'] ?></label>
          <br><br>



          <label  class="goldentxt">პროექტის დასახელება: <?= $checklist['project'] ?></label>
          <br>
          <label  class="goldentxt">თარიღი: <?= $checklist['timme'] ?></label>
          <br>
          <label  class="goldentxt">ბინის ნომერი: <?= $checklist['place'] ?></label>
          <br>
              <label  class="goldentxt">სართული: <?= $checklist['floor'] ?></label>
            <br>
            <label  class="goldentxt">ხარისხის კონტროლი: <?= $checklist['user'] ?></label>
          <br>
          <label  class="goldentxt">მესაკუთრის და/ან მინდობილი</label>
          <br>
          <label class="goldentxt">პირის სახელი/გვარი  --------------------------</label>
          <br><br>
            <table border="2">
                <thead>
                <tr>
                    <th>შესასვლელი კარი</th>
                    <th></th>
                    <th>კომენტარი</th>
                    </tr>
                </thead>

                <!-- first -->
                <tr>
                    <td>საკეტის მექანიზმი გამართულად მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['first'] ?></label>

                    </td>
                    <td>
                        <label class=""><?= $checklist['commfirst'] ?></label>
                    </td>
                </tr>
                <!-- second -->
                <tr>
                    <td>სახელური მექანიზმი გამართულად მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['second'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commsecond'] ?></label>
                    </td>
                </tr>
                <!-- third -->
                <tr>
                    <td>კარების გარე ფასადი არ არის დაზიანებული/დაკარწრული</td>
                    <td>
                        <label class=""><?= $checklist['third'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commthird'] ?></label>
                    </td>
                </tr>
                <!-- fourth -->
                <tr>
                    <td>კარები გაღება - დახურვის დროს გამართულად მოძრაობს (არ არის სამშენებლო მასალების ნარჩენები მექანიზმში)</td>
                    <td>
                        <label class=""><?= $checklist['fourth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commfourth'] ?></label>
                    </td>
                </tr>

                <thead>
                <tr>
                    <th>პერიმეტრის კარ-ფანჯარა</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <!-- fifth -->
                <tr>
                    <td>საკეტის მექანიზი გამართულად მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['fifth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commfifth'] ?></label>
                    </td>
                </tr>
                <!-- sixth -->
                <tr>
                    <td>სახელური მექანიზმი გამართულად მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['sixth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commsixth'] ?></label>
                    </td>
                </tr>
                <!-- seventh -->
                <tr>
                    <td>შუშა არ არის დაზიანებული/დაკარწრული</td>
                    <td>
                        <label class=""><?= $checklist['seventh'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commseventh'] ?></label>
                    </td>
                </tr>
                <!-- eighth -->
                <tr>
                    <td>ფანჯრების მინის ხარისხი</td>
                    <td>
                        <label class=""><?= $checklist['eighth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commeighth'] ?></label>
                    </td>
                </tr>
                <!-- ninth -->
                <tr>
                    <td>გარე პერიმეტრის მეტალო პლასმასის კარფანჯრები გამართულად ფუნქციონირებს, იღება/იხურება (არ ჭირდება დარეგულირება)</td>
                    <td>
                        <label class=""><?= $checklist['ninth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commninth'] ?></label>
                    </td>
                </tr>

                <thead>
                <tr>
                    <th>აივანი</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <!-- tenth -->
                <tr>
                    <td>ფილების მდგომარეობა</td>
                    <td>
                        <label class=""><?= $checklist['tenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtenth'] ?></label>
                    </td>
                </tr>
                <!-- eleventh -->
                <tr>
                    <td>ფასადის მდგომარეობა</td>
                    <td>
                        <label class=""><?= $checklist['eleventh'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commeleventh'] ?></label>
                    </td>
                </tr>
                <!-- twelfth -->
                <tr>
                    <td>მოაჯირი მდგომარეობა</td>
                    <td>
                        <label class=""><?= $checklist['twelfth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwelfth'] ?></label>
                    </td>
                </tr>
                <!-- thirteenth -->
                <tr>
                    <td>მოაჯირი შეღებილია</td>
                    <td>
                        <label class=""><?= $checklist['thirteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commthirteenth'] ?></label>
                    </td>
                </tr>
                <!-- fourteenth -->
                <tr>
                    <td>ტიხრები შეესაბამება ნახაზს</td>
                    <td>
                        <label class=""><?= $checklist['fourteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commfourteenth'] ?></label>
                    </td>
                </tr>
                <!-- fifteenth -->
                <tr>
                    <td>დაქსელილი ელექტროობა შეესაბამება ნახაზს</td>
                    <td>
                        <label class=""><?= $checklist['fifteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commfifteenth'] ?></label>
                    </td>
                </tr>
                <!-- sixteenth -->
                <tr>
                    <td>მოაჯირი მოწესრიგებულია (სამშენებლო მასალისგან სუფთაა)</td>
                    <td>
                        <label class=""><?= $checklist['sixteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commsixteenth'] ?></label>
                    </td>
                </tr>

                <thead>
                <tr>
                    <th>წყლის მილები</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <!-- seventeenth -->
                <tr>
                    <td>წყლის /კანალიზაციის მილები გაყვანილია</td>
                    <td>
                        <label class=""><?= $checklist['seventeenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commseventeenth'] ?></label>
                    </td>
                </tr>
                <!-- eighteenth -->
                <tr>
                    <td>წყლის/კანალიზაციის  მილები მიყვანილია საჭირო წერტილებში</td>
                    <td>
                        <label class=""><?= $checklist['eighteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commeighteenth'] ?></label>
                    </td>
                </tr>

                <thead>
                <tr>
                    <th>გათბობის მილები</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <!-- nineteenth -->
                <tr>
                    <td>გათბობის წერტილები შეესაბამება ნახაზს</td>
                    <td>
                        <label class=""><?= $checklist['nineteenth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commnineteenth'] ?></label>
                    </td>
                </tr>
                <!-- twentieth -->
                <tr>
                    <td>მილების მდგომარეობა დამაკმაყოფილებელია</td>
                    <td>
                        <label class=""><?= $checklist['twentieth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwentieth'] ?></label>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th>სხვა</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <!-- twentyfirst -->
                <tr>
                    <td>ბინის მდგომარეობა</td>
                    <td>
                        <label class=""><?= $checklist['twentyfirst'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwentyfirst'] ?></label>
                    </td>
                </tr>
                <!-- twentysecond -->
                <tr>
                    <td>გაზის დეტექტორი შემოწმდა და გამართულად მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['twentysecond'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwentysecond'] ?></label>
                    </td>
                </tr>
                <!-- twentythird -->
                <tr>
                    <td>ელ. ენერგიის ავტომატი დამონტაჟებულია და მუშაობს</td>
                    <td>
                        <label class=""><?= $checklist['twentythird'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwentythird'] ?></label>
                    </td>
                </tr>
                <!-- twentyfourth -->
                <tr>
                    <td>გასაღების რაოდენობა</td>
                    <td>
                        <label class=""><?= $checklist['twentyfourth'] ?></label>
                    </td>
                    <td>
                        <label class=""><?= $checklist['commtwentyfourth'] ?></label>
                    </td>
                </tr>

          </table>

          <br>
                <label  class="goldentxt">სხვა კომენტარი</label>
                <textarea class="form-control" type="text" placeholder="დამატებითი ინფორმაცია" name="comment" cols="70" rows="3" maxlength="295" id="comment"><?= $checklist['comment'] ?></textarea>
          <br><br>
          <label  class="goldentxt">თანახმა ვარ, ბინა ჩავიბარო არსებულ მდგომარეობაში</label>
          <br><br>
          <label  class="goldentxt">დიახ </label>
          <br><br><label  class="goldentxt">არა </label>
          <br><br>
          <label  class="goldentxt">მესაკუთრის ხელმოწერა  --------------------------</label>
          <br><br>
          <label  class="goldentxt">სერვის მენეჯერის ხელმოწერა  --------------------------</label>
          <br>

<br>







      </div>
    </div>
  </section>

<?php endif; ?>

</main>

<footer class="text-muted py-5">


           <div class="container-fluid cv1 col-md-12">
        <div class="row centered">






    </div>
    </div>


</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>


