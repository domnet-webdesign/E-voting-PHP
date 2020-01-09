if($_SERVER['REQUEST_METHOD'] == "POST") {

//Validating title
if(empty($_POST['title'])) {

    $titleErr = "Title cannot be empty";

}else {
    $title = trim($_POST['title']);
}

//validating start date
if(empty($_POST['Sdate'])) {

    $startErr = "Start Date cannot be empty";

}else {
    $start =  $_POST['Sdate'];
    $start_as = date_create_from_format('m-d-Y', $_POST['Sdate']);
    $start_new = date_format(new DateTime($start_as), 'Y-m-d');
}

//validating end date
if(empty($_POST['Edate'])) {

    $endErr = "End Date cannot be empty";

}else {
    $end =  $_POST['Edate'];
    $end_as = DateTime::createFromFormat('m-d-Y', $_POST['Edate']);
    $end_new = date_format(new DateTime($end_as), 'Y-m-d');
}

//validating time
if(empty($_POST['time'])) {

    $timeErr = "Time cannot be empty";

}else {
    $time = trim($_POST['time']);
}

//validating Nos of Candidate
if(empty($_POST['number'])) {

    $candidErr = "Please specify Number of candidate";

}else {
    $candid_nos = trim($_POST['number']);
}



        //proceed to submitting
        if($titleErr = '' && $startErr = '' && $endErr = '' && $candidErr = '') {

            //select the table to send to the database
            //proceed sending our data to database
            $sql = "INSERT INTO electiondata (e_id, title, startdate, enddate, candidnos) VALUES ('NULL', '$title', '$start_new', '$end_new', '$candid_nos')";

            //if the query was succesfull, display the registration process page
                if(mysqli_query($connection, $sql) == true) {

                    //redirect to electionCandidate page
                    header('location: ere.php');

                }else {
                    // echo "Data not inserted";
                    die();
                }

                mysqli_close($connection);
        }
//else {

//     echo " <script>alert('Election Cannot be created')</script>";
// }



}

<!-- JS -->
                            <!-- <div id="simpleModal" class="modal-1">
                                <div class="modal2-content text-center">
                                    <span id="closeBtn" onclick="closeModal();" class="mb-3 float-right">&times;</span>
                                    <h6>Are you sure you want to prepare an anonymous ballot with the following candidate selected?</h6>
                                    <p class="p-2 font-weight-bold">Your Choice is: </p>
                                    <img src="<?php echo $rows['image']; ?>" width="50" class="rounded-circle pb-2" alt="">
                                    <h4 class="display-5 pb-3"><?php echo $rows['candidName']; ?></h4>
                                    <input type="button" class="btn" value="Cancel">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="button" class="btn btn-success" value="YES">
                                </div>
                            </div> -->
                        <!--  -->

                        <input type="radio" name="choice" onclick="openSecond();" id="openSecondCandid">

                        <!--  -->
                        <div id="simpleSecond" class="modal-1">
                                <div class="modal2-content text-center">
                                    <span id="closeSecondCandid" onclick="closeSecond();" class="mb-3 float-right">&times;</span>
                                    <h6>Are you sure you want to prepare an anonymous ballot with the following candidate selected?</h6>
                                    <p class="p-2 font-weight-bold">Your Choice is: </p>
                                    <img src="<?php echo $rows['image']; ?>" width="50" class="rounded-circle pb-2" alt="">
                                    <h4 class="display-5 pb-3"><?php echo $rows['candidName']; ?></h4>
                                    <input type="button" class="btn" value="Cancel">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-success" value="YES">
                                </div>
                            </div>
                        <!--  -->


                        <script>
        //Get modal Element
            var modal = document.getElementById("simpleModal");
            var secondModal = document.getElementById("simpleSecond");

        //Get open modal element
            var modalBtn = document.getElementById("modalBtn");
            var secondmodalBtn = document.getElementById("openSecondCandid");

        //Get close modal element
            var closeBtn = document.getElementById("closeBtn");
            var secondcloseBtn = document.getElementById("closeSecondCandid");

        //Adding Event listener for open click
            modalBtn.addEventListener("click", openModal);
            secondmodalBtn.addEventListener("click", openSecond);

        //Adding Event listener for close click
            closeBtn.addEventListener("click", closeModal);
            secondcloseBtn.addEventListener("click", closeSecond);

        //Adding Event listener for outside click
            window.addEventListener("click", clickOutside);

        //Function for OpenModal
            function openModal() {
                modal.style.display = "block";
            }

        //Function for closeModal
            function closeModal() {
                modal.style.display = "none";
            }

        //Function for outsideModal
            function clickOutside(e) {
                if(e.target == modal){
                    modal.style.display = "none";
                }
                
        }

        //second candidate

        //Function for OpenModal
        function openSecond() {
            secondModal.style.display = "block";
            }

        //Function for closeModal
            function closeSecond() {
                secondModal.style.display = "none";
            }

        //Function for outsideModal
            function clickOutside(e) {
                if(e.target == secondModal){
                    secondModal.style.display = "none";
                }
                
        }
    </script>
    <!--  -->