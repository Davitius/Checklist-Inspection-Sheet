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
        <label  class="goldentxtbig">ცვლილება ჩექლისტში</label>
          <label>ID-<?= $checklist['id'] ?></label>
          <br><br>

          <form action="" method="post">

          <label  class="goldentxt">პროექტის დასახელება</label>
            <input type="text" method="post" name="project" id="project" class="form-control" value="<?= $checklist['project'] ?>">
              <label  class="goldentxt">სართული</label>
            <input type="text" method="post" name="floor" id="floor" class="form-control" value="<?= $checklist['floor'] ?>">
            <label  class="goldentxt">ბინის ნომერი</label>
            <input type="text" method="post" name="place" id="place" class="form-control" value="<?= $checklist['place'] ?>">
          <br>
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
                    <select class="form-control" name="first" id="first">
        <option value="<?= $checklist['first'] ?>"><?= $checklist['first'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commfirst" id="commfirst" class="form-control" value="<?= $checklist['commfirst'] ?>">
                    </td>
                </tr>
                <!-- second -->
                <tr>
                    <td>სახელური მექანიზმი გამართულად მუშაობს</td>
                    <td>
                    <select class="form-control" name="second" id="second">
        <option value="<?= $checklist['second'] ?>"><?= $checklist['second'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commsecond" id="commsecond" class="form-control" value="<?= $checklist['commsecond'] ?>">
                    </td>
                </tr>
                <!-- third -->
                <tr>
                    <td>კარების გარე ფასადი არ არის დაზიანებული/დაკარწრული</td>
                    <td>
                    <select class="form-control" name="third" id="third">
        <option value="<?= $checklist['third'] ?>"><?= $checklist['third'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commthird" id="commthird" class="form-control" value="<?= $checklist['commthird'] ?>">
                    </td>
                </tr>
                <!-- fourth -->
                <tr>
                    <td>კარები გაღება - დახურვის დროს გამართულად მოძრაობს (არ არის სამშენებლო მასალების ნარჩენები მექანიზმში)</td>
                    <td>
                    <select class="form-control" name="fourth" id="fourth">
        <option value="<?= $checklist['fourth'] ?>"><?= $checklist['fourth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commfourth" id="commfourth" class="form-control" value="<?= $checklist['commfourth'] ?>">
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
                    <select class="form-control" name="fifth" id="fifth">
        <option value="<?= $checklist['fifth'] ?>"><?= $checklist['fifth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commfifth" id="commfifth" class="form-control" value="<?= $checklist['commfifth'] ?>">
                    </td>
                </tr>
                <!-- sixth -->
                <tr>
                    <td>სახელური მექანიზმი გამართულად მუშაობს</td>
                    <td>
                    <select class="form-control" name="sixth" id="sixth">
        <option value="<?= $checklist['sixth'] ?>"><?= $checklist['sixth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commsixth" id="commsixth" class="form-control" value="<?= $checklist['commsixth'] ?>">
                    </td>
                </tr>
                <!-- seventh -->
                <tr>
                    <td>შუშა არ არის დაზიანებული/დაკარწრული</td>
                    <td>
                    <select class="form-control" name="seventh" id="seventh">
        <option value="<?= $checklist['seventh'] ?>"><?= $checklist['seventh'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commseventh" id="commseventh" class="form-control" value="<?= $checklist['commseventh'] ?>">
                    </td>
                </tr>
                <!-- eighth -->
                <tr>
                    <td>ფანჯრების მინის ხარისხი</td>
                    <td>
                    <select class="form-control" name="eighth" id="eighth">
        <option value="<?= $checklist['eighth'] ?>"><?= $checklist['eighth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commeighth" id="commeighth" class="form-control" value="<?= $checklist['commeighth'] ?>">
                    </td>
                </tr>
                <!-- ninth -->
                <tr>
                    <td>გარე პერიმეტრის მეტალო პლასმასის კარფანჯრები გამართულად ფუნქციონირებს, იღება/იხურება (არ ჭირდება დარეგულირება)</td>
                    <td>
                    <select class="form-control" name="ninth" id="ninth">
        <option value="<?= $checklist['ninth'] ?>"><?= $checklist['ninth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commninth" id="commninth" class="form-control" value="<?= $checklist['commninth'] ?>">
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
                    <select class="form-control" name="tenth" id="tenth">
        <option value="<?= $checklist['tenth'] ?>"><?= $checklist['tenth'] ?></option>
        <option value="არ არის დაზიანებული">არ არის დაზიანებული</option>
        <option value="დაზიანებულია">დაზიანებულია</option>
        <option value="არ არის დაგებული">არ არის დაგებული</option>
        <option value="დაგებულია">დაგებულია</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtenth" id="commtenth" class="form-control" value="<?= $checklist['commtenth'] ?>">
                    </td>
                </tr>
                <!-- eleventh -->
                <tr>
                    <td>ფასადის მდგომარეობა</td>
                    <td>
                    <select class="form-control" name="eleventh" id="eleventh">
        <option value="<?= $checklist['eleventh'] ?>"><?= $checklist['eleventh'] ?></option>
        <option value="დამაკმაყოფილებელი">დამაკმაყოფილებელი</option>
        <option value="არა დამაკმაყოფილებელი">არა დამაკმაყოფილებელი</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commeleventh" id="commeleventh" class="form-control" value="<?= $checklist['commeleventh'] ?>">
                    </td>
                </tr>
                <!-- twelfth -->
                <tr>
                    <td>მოაჯირი მდგომარეობა</td>
                    <td>
                    <select class="form-control" name="twelfth" id="twelfth">
        <option value="<?= $checklist['twelfth'] ?>"><?= $checklist['twelfth'] ?></option>
        <option value="დამონტაჟებულია">დამონტაჟებულია</option>
        <option value="არაა დამონტაჟებული">არაა დამონტაჟებული</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwelfth" id="commtwelfth" class="form-control" value="<?= $checklist['commtwelfth'] ?>">
                    </td>
                </tr>
                <!-- thirteenth -->
                <tr>
                    <td>მოაჯირი შეღებილია</td>
                    <td>
                    <select class="form-control" name="thirteenth" id="thirteenth">
        <option value="<?= $checklist['thirteenth'] ?>"><?= $checklist['thirteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commthirteenth" id="commthirteenth" class="form-control" value="<?= $checklist['commthirteenth'] ?>">
                    </td>
                </tr>
                <!-- fourteenth -->
                <tr>
                    <td>ტიხრები შეესაბამება ნახაზს</td>
                    <td>
                    <select class="form-control" name="fourteenth" id="fourteenth">
        <option value="<?= $checklist['fourteenth'] ?>"><?= $checklist['fourteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commfourteenth" id="commfourteenth" class="form-control" value="<?= $checklist['commfourteenth'] ?>">
                    </td>
                </tr>
                <!-- fifteenth -->
                <tr>
                    <td>დაქსელილი ელექტროობა შეესაბამება ნახაზს</td>
                    <td>
                    <select class="form-control" name="fifteenth" id="fifteenth">
        <option value="<?= $checklist['fifteenth'] ?>"><?= $checklist['fifteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commfifteenth" id="commfifteenth" class="form-control" value="<?= $checklist['commfifteenth'] ?>">
                    </td>
                </tr>
                <!-- sixteenth -->
                <tr>
                    <td>მოაჯირი მოწესრიგებულია (სამშენებლო მასალისგან სუფთაა)</td>
                    <td>
                    <select class="form-control" name="sixteenth" id="sixteenth">
        <option value="<?= $checklist['sixteenth'] ?>"><?= $checklist['sixteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commsixteenth" id="commsixteenth" class="form-control" value="<?= $checklist['commsixteenth'] ?>">
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
                    <select class="form-control" name="seventeenth" id="seventeenth">
        <option value="<?= $checklist['seventeenth'] ?>"><?= $checklist['seventeenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commseventeenth" id="commseventeenth" class="form-control" value="<?= $checklist['commseventeenth'] ?>">
                    </td>
                </tr>
                <!-- eighteenth -->
                <tr>
                    <td>წყლის/კანალიზაციის  მილები მიყვანილია საჭირო წერტილებში</td>
                    <td>
                    <select class="form-control" name="eighteenth" id="eighteenth">
        <option value="<?= $checklist['eighteenth'] ?>"><?= $checklist['eighteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commeighteenth" id="commeighteenth" class="form-control" value="<?= $checklist['commeighteenth'] ?>">
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
                    <select class="form-control" name="nineteenth" id="nineteenth">
        <option value="<?= $checklist['nineteenth'] ?>"><?= $checklist['nineteenth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commnineteenth" id="commnineteenth" class="form-control" value="<?= $checklist['commnineteenth'] ?>">
                    </td>
                </tr>
                <!-- twentieth -->
                <tr>
                    <td>მილების მდგომარეობა დამაკმაყოფილებელია</td>
                    <td>
                    <select class="form-control" name="twentieth" id="twentieth">
        <option value="<?= $checklist['twentieth'] ?>"><?= $checklist['twentieth'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwentieth" id="commtwentieth" class="form-control" value="<?= $checklist['commtwentieth'] ?>">
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
                    <select class="form-control" name="twentyfirst" id="twentyfirst">
        <option value="<?= $checklist['twentyfirst'] ?>"><?= $checklist['twentyfirst'] ?></option>
        <option value="ნაგავი გატანილია">ნაგავი გატანილია</option>
        <option value="დასუფთავებულია">დასუფთავებულია</option>
                        <option value="არაა ნაგავი გატანილი">არაა ნაგავი გატანილი</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwentyfirst" id="commtwentyfirst" class="form-control" value="<?= $checklist['commtwentyfirst'] ?>">
                    </td>
                </tr>
                <!-- twentysecond -->
                <tr>
                    <td>გაზის დეტექტორი შემოწმდა და გამართულად მუშაობს</td>
                    <td>
                    <select class="form-control" name="twentysecond" id="twentysecond">
        <option value="<?= $checklist['twentysecond'] ?>"><?= $checklist['twentysecond'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwentysecond" id="commtwentysecond" class="form-control" value="<?= $checklist['commtwentysecond'] ?>">
                    </td>
                </tr>
                <!-- twentythird -->
                <tr>
                    <td>ელ. ენერგიის ავტომატი დამონტაჟებულია და მუშაობს</td>
                    <td>
                    <select class="form-control" name="twentythird" id="twentythird">
        <option value="<?= $checklist['twentythird'] ?>"><?= $checklist['twentythird'] ?></option>
        <option value="დიახ">დიახ</option>
        <option value="არა">არა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwentythird" id="commtwentythird" class="form-control" value="<?= $checklist['commtwentythird'] ?>">
                    </td>
                </tr>
                <!-- twentyfourth -->
                <tr>
                    <td>გასაღების რაოდენობა</td>
                    <td>
                    <select class="form-control" name="twentyfourth" id="twentyfourth">
        <option value="<?= $checklist['twentyfourth'] ?>"><?= $checklist['twentyfourth'] ?></option>
        <option value="1 შეკვრა">1 შეკვრა</option>
        <option value="2 შეკვრა">2 შეკვრა</option>
        </select>
                    </td>
                    <td>
                        <input type="text" method="post" name="commtwentyfourth" id="commtwentyfourth" class="form-control" value="<?= $checklist['commtwentyfourth'] ?>">
                    </td>
                </tr>

          </table>

          <br>
                <label  class="goldentxt">სხვა კომენტარი</label>
                <textarea class="form-control" type="text" placeholder="დამატებითი ინფორმაცია" name="comment" cols="70" rows="3" maxlength="295" id="comment"><?= $checklist['comment'] ?></textarea>
          <br><br>

          <label  class="goldentxt">ვეთანხმები: </label>
              <input type="checkbox" name="" required>
              <br><br>

<br>


          <div class="btn-group">
                    <button class="btn btn-warning" name="checklistupdate"type="submit">შეცვლა</button>
                  <input type="submit" class="btn btn-danger" name="checklistdelete" value="წაშლა">
                    <a class="btn btn-success" href="../checklists.php">დაბრუნება</a>
                      <a class="btn btn-primary" href="">Reset</a>
                </div>



          </form>
      </div>
    </div>
  </section>

<?php endif; ?>

</main>

<footer class="text-muted py-6">
    <br>
<center>

           <div class="container cv1 col-md-12">
        <div class="row centered">

<div class="col-lg-3">
    <h5 class="goldentxtsmall">პირადი კაბინეტი</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a></li>
        </ul>
        </div>


            <div class="col-lg-3">
                <h5 class="goldentxtsmall">ახალი ფურცელი</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="../addchecklist.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg></a></li>
        </ul>
            </div>



            <div class="col-lg-3">
                <h5 class="goldentxtsmall">შემოწმების ფურცლები</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="../checklists.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
</svg></a></li>
        </ul>
            </div>



            <div class="col-lg-3">
                <h5 class="goldentxtsmall">თანამშრომლები</h5>
          <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="../users.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#316eac" class="bi bi-award-fill" viewBox="0 0 16 16">
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

<?php

if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}

if(isset($_POST['checklistupdate']))
{


$id = $_GET['id'];
$user = $row->name;

$project = $_POST['project'];
$floor = $_POST['floor'];
$place = $_POST['place'];

date_default_timezone_set('Asia/Tbilisi');
$timme = date ("d-m-y H:i:s");


$first = $_POST['first'];
$commfirst = $_POST['commfirst'];
$second = $_POST['second'];
$commsecond = $_POST['commsecond'];
$third = $_POST['third'];
$commthird = $_POST['commthird'];
$fourth = $_POST['fourth'];
$commfourth = $_POST['commfourth'];
$fifth = $_POST['fifth'];
$commfifth = $_POST['commfifth'];

$sixth = $_POST['sixth'];
$commsixth = $_POST['commsixth'];
$seventh = $_POST['seventh'];
$commseventh = $_POST['commseventh'];
$eighth = $_POST['eighth'];
$commeighth = $_POST['commeighth'];
$ninth = $_POST['ninth'];
$commninth = $_POST['commninth'];
$tenth = $_POST['tenth'];
$commtenth = $_POST['commtenth'];

$eleventh = $_POST['eleventh'];
$commeleventh = $_POST['commeleventh'];
$twelfth = $_POST['twelfth'];
$commtwelfth = $_POST['commtwelfth'];
$thirteenth = $_POST['thirteenth'];
$commthirteenth = $_POST['commthirteenth'];
$fourteenth = $_POST['fourteenth'];
$commfourteenth = $_POST['commfourteenth'];
$fifteenth = $_POST['fifteenth'];
$commfifteenth = $_POST['commfifteenth'];

$sixteenth = $_POST['sixteenth'];
$commsixteenth = $_POST['commsixteenth'];
$seventeenth = $_POST['seventeenth'];
$commseventeenth = $_POST['commseventeenth'];
$eighteenth = $_POST['eighteenth'];
$commeighteenth = $_POST['commeighteenth'];
$nineteenth = $_POST['nineteenth'];
$commnineteenth = $_POST['commnineteenth'];
$twentieth = $_POST['twentieth'];
$commtwentieth = $_POST['commtwentieth'];

$twentyfirst = $_POST['twentyfirst'];
$commtwentyfirst = $_POST['commtwentyfirst'];
$twentysecond = $_POST['twentysecond'];
$commtwentysecond = $_POST['commtwentysecond'];
$twentythird = $_POST['twentythird'];
$commtwentythird = $_POST['commtwentythird'];
$twentyfourth = $_POST['twentyfourth'];
$commtwentyfourth = $_POST['commtwentyfourth'];

$comment = $_POST['comment'];




    //if(!empty($_FILES['goodsimg']['tmp_name'])){
//$goodsimg = addslashes(file_get_contents($_FILES['goodsimg']['tmp_name']));


    $query = "UPDATE `arqi_checklists` SET
    `project`='".$project."',
    `floor`='".$floor."',
    `place`='".$place."',
    `timme`='".$timme."',
    `user`='".$user."',
    `first`='".$first."',
    `second`='".$second."',
    `third`='".$third."',
    `fourth`='".$fourth."',
    `fifth`='".$fifth."',
    `sixth`='".$sixth."',
    `seventh`='".$seventh."',
    `eighth`='".$eighth."',
    `ninth`='".$ninth."',
    `tenth`='".$tenth."',
    `eleventh`='".$eleventh."',
    `twelfth`='".$twelfth."',
    `thirteenth`='".$thirteenth."',
    `fourteenth`='".$fourteenth."',
    `fifteenth`='".$fifteenth."',
    `sixteenth`='".$sixteenth."',
    `seventeenth`='".$seventeenth."',
    `eighteenth`='".$eighteenth."',
    `nineteenth`='".$nineteenth."',
    `twentieth`='".$twentieth."',
    `twentyfirst`='".$twentyfirst."',
    `twentysecond`='".$twentysecond."',
    `twentythird`='".$twentythird."',
    `twentyfourth`='".$twentyfourth."',
    `commfirst`='".$commfirst."',
    `commsecond`='".$commsecond."',
    `commthird`='".$commthird."',
    `commfourth`='".$commfourth."',
    `commfifth`='".$commfifth."',
    `commsixth`='".$commsixth."',
    `commseventh`='".$commseventh."',
    `commeighth`='".$commeighth."',
    `commninth`='".$commninth."',
    `commtenth`='".$commtenth."',
    `commeleventh`='".$commeleventh."',
    `commtwelfth`='".$commtwelfth."',
    `commthirteenth`='".$commthirteenth."',
    `commfourteenth`='".$commfourteenth."',
    `commfifteenth`='".$commfifteenth."',
    `commsixteenth`='".$commsixteenth."',
    `commseventeenth`='".$commseventeenth."',
    `commeighteenth`='".$commeighteenth."',
    `commnineteenth`='".$commnineteenth."',
    `commtwentieth`='".$commtwentieth."',
    `commtwentyfirst`='".$commtwentyfirst."',
    `commtwentysecond`='".$commtwentysecond."',
    `commtwentythird`='".$commtwentythird."',
    `commtwentyfourth`='".$commtwentyfourth."',
    `comment`='".$comment."'
    WHERE `id` = $id";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());

        //ob_end_clean();
        //header('Location: ../php/updateconfirm.php');
        //exit();


     if($query_run)
    {
        ob_end_clean();
        header('Location: ../php/messages/checklistupdateconfirm.php');
        exit();
    }
    else
    {
        echo "მონაცემები არ განახლდა";
    }



}


if(isset($_POST['checklistdelete'])){
        $id = $_GET['id'];
        $querry = "DELETE FROM `arqi_checklists` WHERE `id` = $id";
            $querry_run = mysqli_query($connect, $querry) or die(mysqli_error());
    }
    if($querry_run)
    {
        ob_end_clean();
        header('Location: messages/checklistdelconfirm.php');
        exit();
    }
//$connection->close();

?>
