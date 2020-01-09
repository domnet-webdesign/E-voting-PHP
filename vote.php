<?php

require_once('serverConnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/all.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="fn456">

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">E-VOTING & POLLING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  -->


    <!--  -->
        <div class="election-header text-center bg-priamry">
            <h4 class="card-title display-4 p-3 mb-2 bg-primary text-white"">Candidates of Election</h4>
        </div>

        <div class="container">
        <table class="table table-striped mb-5 mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CANDIDATE</th>
                    <th scope="col">CANDIDATE NAMES</th>
                    <th scope="col">ENCTYPTED NAMES</th>
                    <th scope="col">CHOICE</th>
                </tr>
            </thead>
            <tbody>
                <tr class="fn200">
                    <th scope="row">1</th>

                    <?php

                        $sql = "SELECT * FROM candidate_info WHERE f_id = 1";
                        $query = mysqli_query($connection, $sql);

                        while ($rows = mysqli_fetch_array($query)) {

                    ?>

                    <td><img class="rounded-circle" src="<?php echo $rows['image']; ?>" alt="" width="60"></td>
                    <td class="mt-3"><?php echo $rows['candidName']; ?></td>
                    <td><?php echo $rows['encrptName']; ?></td>
                    <td>
                        <a href="popupcandidate1.php" type="button" class="btn btn-primary" onclick="displayCandidate();" id="candid1">VOTE</a>
                    </td>

                    <?php } ?>

                </tr>

                <tr>
                    <th scope="row">2</th>
                    <?php

                        $sqls = "SELECT * FROM candidate_info WHERE f_id = 7 ";
                        $querys = mysqli_query($connection, $sqls);

                        while ($rows = mysqli_fetch_array($querys)) {

                    ?>
                    <td><img class="rounded-circle" src="<?php echo $rows['image']; ?>" alt="" width="60"></td>
                    <td><?php echo $rows['candidName']; ?></td>
                    <td><?php echo $rows['encrptName']; ?></td>

                    <td>
                        <a type="button" href="popupcandidate2.php" class="btn btn-primary" onclick="displayCandidate();" id="candid2">VOTE</a>
                    </td>

                    <?php } ?>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td><img class="rounded-circle" src="./images/avatar_1.png" alt="" width="60"></td>
                    <td>Candidate 2</td>
                    <td>CND_2</td>
                    <td><a type="button" href="popupcandidate2.php" class="btn btn-primary" onclick="displayCandidate();" id="candid2">VOTE</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><img class="rounded-circle" src="./images/f_avatar.png" alt="" width="60"></td>
                    <td>Candidate 3</td>
                    <td>CND_3</td>
                    <td><a type="button" href="popupcandidate2.php" class="btn btn-primary" onclick="displayCandidate();" id="candid2">VOTE</a></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><img class="rounded-circle" src="./images/m_avatar.png" alt="" width="60"></td>
                    <td>Candidate 4</td>
                    <td>CND_4</td>
                    <td><a type="button" href="popupcandidate2.php" class="btn btn-primary" onclick="displayCandidate();" id="candid2">VOTE</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--  -->

    

    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>