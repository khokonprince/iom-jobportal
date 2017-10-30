<?php
include_once 'connection.php';
include_once 'functions.php';

session_start();


if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>CV | IOM Job Portal </title>
    <meta charset="utf-8">
    <meta lang="en">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!--        <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <!--        <script src="js/jquery-3.2.1.min.js"></script>-->
    <!--        <link rel="stylesheet" href="css/bootstrap.min.css.map">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">




</head>

<body class="cv_form_body">
<div id="response"></div>
<?php

if (loggedin()) {

    if (isset($_POST['cv_submit'])) {

        // Contact Details
        $mobile1 = sanitize($_POST['mobile1']);
        $mobile2 = sanitize($_POST['mobile2']);
        $lphone = sanitize($_POST['lphone']);
        $alt_email = sanitize($_POST['alt_email']);
        $skypeID = sanitize($_POST['skypeID']);
        $nationality = sanitize($_POST['nationality']);
        $present_address = sanitize($_POST['present_address']);
        $permanent_address = sanitize($_POST['permanent_address']);
        $emergency_contact_name = sanitize($_POST['emergency_contact_name']);
        $emergency_contact_relation = sanitize($_POST['emergency_contact_relation']);
        $emergency_contact_phone = sanitize($_POST['emergency_contact_phone']);


        //Personal Details
        $birth_date = sanitize($_POST['birth_date']);
        $age = sanitize($_POST['age']);
        $marital_status = $_POST['marital_status'];
        $spouse_name = sanitize($_POST['spouse_name']);
        $passport_no = sanitize($_POST['passport_no']);
        $passport_exp_date = sanitize($_POST['passport_exp_date']);
        $blood_group = sanitize($_POST['blood_group']);
        $national_id = sanitize($_POST['national_id']);
        if(isset($_POST['gender'])){$gender = $_POST['gender'];}
        if(isset($_POST['disability'])){$disability = $_POST['disability'];}
        $disability_details = sanitize($_POST['disability_details']);
        if(isset($_POST['dependents'])){$dependents = sanitize($_POST['dependents']);}
        $dependents_name = $_POST['dependents_name'];
        $dependents_birth_date = $_POST['dependents_birth_date'];
        $dependents_age = $_POST['dependents_age'];
        $dependents_relation = $_POST['dependents_relation'];

        // Academic qualification
        $degree = $_POST['degree'];
        $major_sub = $_POST['major_sub'];
        $grade = $_POST['grade'];
        $passing_year = $_POST['passing_year'];
        $institution = $_POST['institution'];

        // Job details
        $job_org = $_POST['job_org'];
        $job_address = $_POST['job_address'];
        $job_lastPosition = $_POST['job_lastPosition'];
        $job_from = $_POST['job_from'];
        $job_to = $_POST['job_to'];
        $job_contact = $_POST['job_contact'];
        $job_salary = $_POST['job_salary'];
        $job_allowance = $_POST['job_allowance'];
        $job_total = $_POST['job_total'];
        $job_staff = $_POST['job_staff'];
        $job_supervisor_name = $_POST['job_supervisor_name'];
        $job_supervisor_designation = $_POST['job_supervisor_designation'];
        $job_supervisor_contact = $_POST['job_supervisor_contact'];
        $job_supervisor_email = $_POST['job_supervisor_email'];
        $job_responsibility = $_POST['job_responsibility'];
        $job_leaveReason = $_POST['job_leaveReason'];

        // Thesis
        $thesis = $_POST['thesis'];
        $thesis_title = $_POST['thesis_title'];
        $thesis_published = $_POST['thesis_published'];
        $thesis_reference = $_POST['thesis_reference'];
        $thesis_year = $_POST['thesis_year'];
        $thesis_social_activity = sanitize($_POST['thesis_social_activity']);

        // Training
        $training_title = $_POST['training_title'];
        $training_org = $_POST['training_org'];
        $training_country = $_POST['training_country'];
        $training_year = $_POST['training_year'];
        $training_duration = $_POST['training_duration'];
        $training_day = $_POST['training_day'];

        // Language
        $main_language = $_POST['main_language'];
        $other_language = $_POST['other_language'];
        $other_language_reading = $_POST['other_language_reading'];
        $other_language_writing = $_POST['other_language_writing'];
        $other_language_speaking = $_POST['other_language_speaking'];

        // IT Skill
        $ms_word = $_POST['ms_word'];
        $ms_powerpoint = $_POST['ms_powerpoint'];
        $ms_outlook = $_POST['ms_outlook'];
        $ms_excel = $_POST['ms_excel'];
        $internet = $_POST['internet'];
        $other_machine = $_POST['other_machine'];
        $other_itSkill = sanitize($_POST['other_itSkill']);

        // Technical Skill
        $technical_skill_name = $_POST['technical_skill_name'];
        $technical_skill_rate = $_POST['technical_skill_rate'];

        // Reference
        $reference_name = $_POST['reference_name'];
        $reference_designation = $_POST['reference_designation'];
        $reference_org = $_POST['reference_org'];
        $reference_phone = $_POST['reference_phone'];
        $reference_email = $_POST['reference_email'];
        $reference_relation = $_POST['reference_relation'];

        //Other Details
        $other_relative_name = sanitize($_POST['other_relative_name']);
        $other_relative_designation = sanitize($_POST['other_relative_designation']);
        $other_relative_organization = sanitize($_POST['other_relative_organization']);
        $other_prev_exp_designation = sanitize($_POST['other_prev_exp_designation']);
        $other_prev_exp_length = sanitize($_POST['other_prev_exp_length']);
        $other_prev_exp_supervisor = sanitize($_POST['other_prev_exp_supervisor']);
        $other_applied_position = sanitize($_POST['other_applied_position']);
        $other_applied_year = sanitize($_POST['other_applied_year']);
        $other_criminal_accusation = sanitize($_POST['other_criminal_accusation']);
        $other_criminal_year = sanitize($_POST['other_criminal_year']);
        $other_affiliate_list = sanitize($_POST['other_affiliate_list']);
        $other_work_consider = sanitize($_POST['other_work_consider']);
        if(isset($_POST['other_travel'])){$other_travel = $_POST['other_travel'];}
        if(isset($_POST['other_short_emp'])){$other_short_emp = $_POST['other_short_emp'];}
        if(isset($_POST['other_field_assesment'])){$other_field_assesment = $_POST['other_field_assesment'];}
        $other_notice = sanitize($_POST['other_notice']);
        if(isset($_POST['other_arrest'])){$other_arrest = $_POST['other_arrest'];}
        $other_arrest_brief = sanitize($_POST['other_arrest_brief']);



        /*****************
         * Checking error
         * ***************/

        // Contact details

        $error = false;

        if(!isset($mobile1) or empty($mobile1)){
            $mobile1_error = '<span class="error_msg">Please enter your Primary Mobile no.</span>';
            $error = true;
        }

        if(!isset($nationality) or $nationality == '-99'){
            $nationality_error = '<span class="error_msg">Please select nationality</span>';
            $error = true;
        }

        if(!isset($present_address) or empty($present_address)){
            $present_address_error = '<span class="error_msg">Please enter Present Address</span>';
            $error = true;
        }

        if(!isset($permanent_address) or empty($permanent_address)){
            $permanent_address_error = '<span class="error_msg">Please enter Parmanent Address</span>';
            $error = true;
        }


        //Personal Details

        if(!isset($birth_date) or empty($birth_date)){
            $birth_date_error = '<span class="error_msg">Please enter Birth Date</span>';
            $error = true;
        }

        if(!isset($marital_status) or $marital_status == '-99'){
            $marital_status_error = '<span class="error_msg">Please select Marital Status</span>';
            $error = true;
        }

        if(!isset($passport_no) or empty($passport_no)){
            $passport_no_error = '<span class="error_msg">Please enter Birth Date</span>';
            $error = true;
        }

        if(!isset($passport_exp_date) or empty($passport_exp_date)){
            $passport_exp_date_error = '<span class="error_msg">Please Passport exp. Date</span>';
            $error = true;
        }

        if(!isset($national_id) or empty($national_id)){
            $national_id_date_error = '<span class="error_msg">Please enter your National ID no.</span>';
            $error = true;
        }

        if(!isset($gender) or $gender == '-99'){
            $gender_error = '<span class="error_msg">Please select Gender</span>';
            $error = true;
        }

        if(!isset($dependents) or $dependents == '-99'){
            $dependents_error = '<span class="error_msg">Please select if you have any dependents</span>';
            $error = true;
        }


        // Academic section

        foreach($degree as $value){
            if(!isset($value) or $value == '-99'){
                $degree_error = '<span class="error_msg">Please select your Degree</span>';
                $error = true;
            }
        }

        foreach($major_sub as $value){
            if(!isset($value) or empty($value)){
                $major_sub_error = '<span class="error_msg">Please enter Major</span>';
                $error = true;
            }
        }

        foreach($grade as $value){
            if(!isset($value) or empty($value)){
                $grade_error = '<span class="error_msg">Please enter Grade</span>';
                $error = true;
            }
        }

        foreach($passing_year as $value){
            if(!isset($value) or empty($value)){
                $passing_year_error = '<span class="error_msg">Please enter Passing Year</span>';
                $error = true;
            }
        }

        foreach($institution as $value){
            if(!isset($value) or empty($value)){
                $institution_error = '<span class="error_msg">Please enter Institution</span>';
                $error = true;
            }
        }


        // Job Details

        foreach($job_org as $value){
            if(!isset($value) or empty($value)){
                $job_org_error = '<span class="error_msg">Please enter Organization name</span>';
                $error = true;
            }
        }

        foreach($job_address as $value){
            if(!isset($value) or empty($value)){
                $job_address_error = '<span class="error_msg">Please enter Address</span>';
                $error = true;
            }
        }

        foreach($job_lastPosition as $value){
            if(!isset($value) or empty($value)){
                $job_lastPosition_error = '<span class="error_msg">Please enter Last Position</span>';
                $error = true;
            }
        }

        foreach($job_from as $value){
            if(!isset($value) or empty($value)){
                $job_from_error = '<span class="error_msg">Please enter Start Date</span>';
                $error = true;
            }
        }

        foreach($job_to as $value){
            if(!isset($value) or empty($value)){
                $job_to_error = '<span class="error_msg">Please enter End Date</span>';
                $error = true;
            }
        }

        foreach($job_contact as $value){
            if(!isset($value) or empty($value)){
                $job_contact_error = '<span class="error_msg">Please enter Contact number</span>';
                $error = true;
            }
        }

        foreach($job_salary as $value){
            if(!isset($value) or empty($value)){
                $job_salary_error = '<span class="error_msg">Please enter Salary</span>';
                $error = true;
            }
        }

        foreach($job_allowance as $value){
            if(!isset($value) or empty($value)){
                $job_allowance_error = '<span class="error_msg">Please enter Allowance</span>';
                $error = true;
            }
        }

        foreach($job_total as $value){
            if(!isset($value) or empty($value)){
                $job_total_error = '<span class="error_msg">Please enter Total</span>';
                $error = true;
            }
        }

        foreach($job_staff as $value){
            if(!isset($value) or empty($value)){
                $job_staff_error = '<span class="error_msg">Please enter Staff number</span>';
                $error = true;
            }
        }

        foreach($job_supervisor_name as $value){
            if(!isset($value) or empty($value)){
                $job_supervisor_name_error = '<span class="error_msg">Please enter Supervisor name</span>';
                $error = true;
            }
        }

        foreach($job_supervisor_designation as $value){
            if(!isset($value) or empty($value)){
                $job_supervisor_designation_error = '<span class="error_msg">Please enter Supervisor designation</span>';
                $error = true;
            }
        }

        foreach($job_supervisor_contact as $value){
            if(!isset($value) or empty($value)){
                $job_supervisor_contact_error = '<span class="error_msg">Please enter Supervisor contact number</span>';
                $error = true;
            }
        }

        foreach($job_supervisor_email as $value){
            if(!isset($value) or empty($value)){
                $job_supervisor_email_error = '<span class="error_msg">Please enter Supervisor email</span>';
                $error = true;
            }
        }

        foreach($job_responsibility as $value){
            if(!isset($value) or empty($value)){
                $job_responsibility_error = '<span class="error_msg">Please enter Job Responsibility</span>';
                $error = true;
            }
        }

        foreach($job_leaveReason as $value){
            if(!isset($value) or empty($value)){
                $job_leaveReason_error = '<span class="error_msg">Please enter Leave Reason</span>';
                $error = true;
            }
        }


        // Thesis

        foreach($thesis as $value){
            if($value == -99){
                $thesis_error = '<span class="error_msg">Please select Thesis</span>';
                $error = true;
            }
        }

        foreach($thesis_title as $value){
            if(!isset($value) or empty($value)){
                $thesis_title_error = '<span class="error_msg">Please enter Title</span>';
                $error = true;
            }
        }

        foreach($thesis_published as $value){
            if(!isset($value) or empty($value)){
                $thesis_published_error = '<span class="error_msg">Please enter Published in</span>';
                $error = true;
            }
        }

        foreach($thesis_reference as $value){
            if(!isset($value) or empty($value)){
                $thesis_reference_error = '<span class="error_msg">Please enter Reference</span>';
                $error = true;
            }
        }

        foreach($thesis_year as $value){
            if(!isset($value) or empty($value)){
                $thesis_year_error = '<span class="error_msg">Please enter Thesis Year</span>';
                $error = true;
            }
        }


        // Reference



        $testa = array('a', 'b', 'c', 'd');

        foreach($testa as $key => $value){
//            echo $key .'=>'. $value;
//            echo '<br/>';

            if($key == 2){
                echo $key .'->'. $value;
                break;
            }
        }



        if(!$error){
            ?>
            <div class="modal fade" id="myModalll" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-success" id="confirm_form">Confirm</button>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <script>
//                $(document).ready(function(){
//                    $('#myModalll').modal('show');
//
//                    $('#confirm_form').click(function(e){
//                        e.preventDefault();
//
//                        $.ajax({
//                            url: 'insert.php',
//                            method: 'post',
//                            data: $('#cv_form').serialize(),
//                            success: function(data){
//                                alert('success');
//                                $('#response').html(data);
//                            }
//                        });
//                    });
//                });
            </script>

            <?php


            $insert_str = "INSERT INTO personal_data (user_id, mobile1, mobile2, land_phone, alt_email, skype_id, nationality, present_address, permanent_address, emergency_contact_name, emergency_contact_relation, emergency_contact_phone, birth_date, age, marital_status, spouse_name, passport_no, passport_exp_date, blood_group, national_id, gender, disability, disability_details, dependents) VALUES ($user_id, '$mobile1', '$mobile2', '$lphone', '$alt_email', '$skypeID', '$nationality', '$present_address', '$permanent_address', '$emergency_contact_name', '$emergency_contact_relation', '$emergency_contact_phone', '$birth_date', '$age', '$marital_status', '$spouse_name', '$passport_no', '$passport_exp_date', '$blood_group', '$national_id', '$gender', '$disability', '$disability_details', '$dependents')";

            $insert_str_query = mysqli_query($connection, $insert_str);

            for($i=0; $i<5; $i++){
                if(isset($dependents_name[$i]) and isset($dependents_birth_date[$i]) and isset($dependents_age[$i]) and isset($dependents_relation[$i])){
                    echo $dependents_name[$i];
                    echo '&nbsp';
                    echo $dependents_birth_date[$i];
                    echo '&nbsp';
                    echo $dependents_age[$i];
                    echo '&nbsp';
                    echo $dependents_relation[$i];
                    echo '<br/>';

                }
            }


//            $dependent_data = "INSERT INTO dependent_table (user_id, dependent_name, dependent_birth_date, dependent_age, dependent_relation) VALUES ()"

            if($insert_str_query){
                echo 'Insert success';


            }else{
                echo "Insert failed";
            }
        }


    } // End of isset($_POST['cv_submit'])


    ?>

    <div class="container">
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">


    <!-- Logout button -->

    <form method="post">
        <a href="#" class="btn btn-sm btn-success save_data" data-toggle="tooltip" title="Save your data and continue later.">Save</a>
        <input type="submit" name="logout" class="btn btn-warning btn-sm" value="Logout">
    </form>

    <div id="myModalx" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <p>Your Data has been saved successfully.</p>
                </div>

            </div>

        </div>
    </div>

    <?php

    if (isset($_POST['logout'])) {
        session_destroy();
        echo '<meta http-equiv="refresh" content="0; url=http://geekymock.tk/jobportal/" />';
    }
    ?>

    <!-- End Logout button -->


    <div class="form-container">

    <form method="post" class="form-horizontal" id="cv_form" enctype="multipart/form-data">

    <div class="contact_details_1st" id="contact_details_1st">

        <div class="row">
            <h2 class="alert-success">Contact Details</h2>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="mobile1" class="control-label col-sm-4">Mobile One(1) <span class="required_start">*</span></label>

                    <div class="col-sm-8">
                        <input type="text" name="mobile1" id="mobile1" value="" class="form-control input-sm" maxlength="17" pattern="[0-9]{11,17}" title="phone number" required>
                        <span class="error_msg" id="mobile1_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="mobile2" class="control-label col-sm-4">Mobile Two(2)</label>

                    <div class="col-sm-8">
                        <input type="text" name="mobile2" id="mobile2" value="<?php if (isset($mobile2)) {echo $mobile2;} ?>" class="form-control input-sm" maxlength="17" pattern="[0-9]{11,17}" title="phone number">
                        <div id="mobile2_error"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="lphone" class="control-label col-sm-4">Land Phone</label>

                    <div class="col-sm-8">
                        <input type="text" name="lphone" id="lphone" value="<?php if (isset($lphone)) {echo $lphone;} ?>" class="form-control input-sm" maxlength="17" pattern="[0-9]{5,15}" title="phone number">
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="alt_email" class="control-label col-sm-4">Alternate Email</label>

                    <div class="col-sm-8">
                        <input type="email" name="alt_email" id="alt_email" value="<?php if (isset($alt_email)) {echo $alt_email;} ?>" class="form-control input-sm">
                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="skypeID" class="control-label col-sm-4">Skype ID</label>

                    <div class="col-sm-8">
                        <input type="text" name="skypeID" id="skypeID" class="form-control input-sm" placeholder="(if any)" value="<?php if (isset($skypeID)) {echo $skypeID;} ?>">
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nationality" class="control-label col-sm-4">Nationality <span class="required_start">*</span></label>

                    <div class="col-sm-8">
                        <select name="nationality" id="nationality" class="form-control input-sm" data-select="select">
                            <option value="-99">- Select Country -</option>
                            <option value="Bangladesh" <?php if (isset($nationality) and $nationality == 'Bangladesh') {echo 'selected';} ?> >Bangladesh</option>
                            <option value="India" <?php if (isset($nationality) and $nationality == 'India') {echo 'selected';} ?> >India</option>
                        </select>
                        <?php if(isset($nationality_error)){echo $nationality_error;} ?>
                        <span class="error_msg" id="nationality_error_massage"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="present_address" class="control-label col-sm-4">Present/Mailing Address <span class="required_start">*</span></label>

                    <div class="col-sm-8">
                        <textarea name="present_address" id="present_address" class="form-control input-sm" data-textarea="select"><?php if (isset($present_address)) {echo $present_address;} ?></textarea>
                        <?php if(isset($present_address_error)){ echo $present_address_error;} ?>
                        <span class="error_msg" id="present_address_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="permanent_address" class="control-label col-sm-4">Permanent Address <span class="required_start">*</span></label>

                    <div class="col-sm-8">
                        <textarea name="permanent_address" id="permanent_address" class="form-control input-sm" data-textarea="select"><?php if (isset($permanent_address)) {echo $permanent_address;} ?></textarea>
                        <?php if(isset($permanent_address_error)){ echo $permanent_address_error;} ?>
                        <span class="error_msg" id="permanent_address_error_massage"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->

        <div class="row">
            <fieldset>

                <legend>Emergency Contact Details</legend>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="emergency_contact_name" class="control-label col-sm-4">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="emergency_contact_name" id="emergency_contact_name" value="<?php if(isset($emergency_contact_name)){echo $emergency_contact_name;}?>" class="form-control input-sm">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="emergency_contact_relation" class="control-label col-sm-4">Relation</label>
                        <div class="col-sm-8">
                            <input type="text" name="emergency_contact_relation" id="emergency_contact_relation" value="<?php if(isset($emergency_contact_relation)){echo $emergency_contact_relation;}?>" class="form-control input-sm">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="emergency_contact_phone" class="control-label col-sm-4">Contact no.</label>
                        <div class="col-sm-8">
                            <input type="text" name="emergency_contact_phone" id="emergency_contact_phone" value="<?php if(isset($emergency_contact_phone)){echo $emergency_contact_phone;}?>" class="form-control input-sm">
                        </div>
                    </div>
                </div>

            </fieldset>
        </div>
        <!-- end of row -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="contact_details_btn_next" class="btn btn-success btn-xs contact_details_btn_next continue">Continue 111></button>
                </div>
            </div>
        </div>
        <!-- end of row -->

    </div>
    <!-- end of .contact_details_1st -->


    <div class="personal_details_2nd" id="personal_details_2nd">

    <div class="row">
        <h2 class="alert-success">Personal Details</h2>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="birth_date" class="control-label col-sm-4">Date of Birth <span class="required_start">*</span></label>

                <div class="col-sm-8">
                    <input type="date" data-text="select" name="birth_date" id="birth_date" class="form-control input-sm" value="<?php if (isset($birth_date)) {echo $birth_date;} ?>"
                           placeholder="yyyy-mm-dd">
                    <?php if(isset($birth_date_error)){echo $birth_date_error;} ?>
                    <span class="error_msg" id="birth_date_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="age" class="control-label col-sm-4">Age</label>

                <div class="col-sm-8">
                    <input type="text" name="age" id="age" value="<?php if (isset($age)) {echo $age;} ?>" class="form-control input-sm">

                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="marital_status" class="control-label col-sm-4">Marital Status <span class="required_start">*</span></label>

                <div class="col-sm-8">
                    <select name="marital_status" id="marital_status" data-select="select" class="form-control input-sm">
                        <option value="-99">- Select One -</option>
                        <option value="Married" <?php if(isset($marital_status) and $marital_status == 'Married'){ echo 'selected';} ?> >Married</option>
                        <option value="Unmarried" <?php if(isset($marital_status) and $marital_status == 'Unmarried'){ echo 'selected';} ?> >Unmarried</option>
                    </select>
                    <span class="error_msg" id="marital_status_error_massage"></span>
                    <?php if(isset($marital_status_error)){echo $marital_status_error;} ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="spouse_name" class="control-label col-sm-4">Partner/Spouse Name</label>

                <div class="col-sm-8">
                    <input type="text" name="spouse_name" id="spouse_name"  value="<?php if(isset($spouse_name)) {echo $spouse_name;} ?>" class="form-control input-sm"  placeholder="(if any)">
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="passport_no" class="control-label col-sm-4">Passport No. <span class="required_start">*</span></label>

                <div class="col-sm-8">
                    <input type="text" data-text="select" name="passport_no" id="passport_no" value="<?php if(isset($passport_no)) {echo $passport_no;} ?>" class="form-control input-sm">
                    <?php if(isset($passport_no_error)){echo $passport_no_error;} ?>
                    <span class="error_msg" id="passport_no_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="passport_exp_date" class="control-label col-sm-4">Date of Expiry <span class="required_start">*</span></label>

                <div class="col-sm-8">
                    <input type="date" data-text="select" name="passport_exp_date" id="passport_exp_date" value="<?php if(isset($passport_exp_date)) {echo $passport_exp_date;} ?>" class="form-control input-sm"
                           placeholder="yyyy-mm-dd">
                    <?php if(isset($passport_exp_date_error)){echo $passport_exp_date_error;} ?>
                    <span class="error_msg" id="passport_exp_date_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="blood_group" class="control-label col-sm-4">Blood Group</label>

                <div class="col-sm-8">
                    <input type="text" name="blood_group" id="blood_group" value="<?php if(isset($blood_group)) {echo $blood_group;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="national_id" class="control-label col-sm-4">National ID <span class="required_start">*</span></label>

                <div class="col-sm-8">
                    <input type="text" data-text="select"  name="national_id" id="national_id" value="<?php if(isset($national_id)) {echo $national_id;} ?>" class="form-control input-sm"
                           placeholder="yyyy-mm-dd">
                    <span class="error_msg" id="national_id_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="gender" class="control-label col-sm-4">Gender <span class="required_start">*</span></label>

                <div class="col-sm-8" style="margin-top: 5px;">
                    <select name="gender" id="gender" data-select="select" class="form-control input-sm">
                        <option value="-99">- Select One -</option>
                        <option value="Male" >Male</option>
                        <option value="Female" >Female</option>
                    </select>
                    <span class="error_msg" id="gender_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="disability" class="control-label col-sm-4">Do you have any disability?</label>

                <div class="col-sm-8" style="margin-top: 5px;">
                    <select name="disability" id="disability" data-dependent_select="select" class="form-control input-sm">
                        <option value="-99">- Select One -</option>
                        <option value="Yes" >Yes</option>
                        <option value="No" >No</option>
                    </select>
                    <span class="error_msg" id="disability_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group" id="disability_details_textarea">
                <label for="disability_details" class="control-label col-sm-4">Disability Details</label>
                <div class="col-sm-8">
                    <textarea data-disability_details="select" name="disability_details" id="disability_details" class="form-control input-sm"><?php if(isset($disability_details)){echo $disability_details;} ?></textarea>
                    <span class="error_msg" id="disability_details_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="dependents" class="control-label col-sm-2">Have you any dependents? <span class="required_start">*</span></label>

                <div class="col-sm-10" style="margin-top: 5px;">

                    <select name="dependents" id="dependents" data-select="select" class="form-control input-sm">
                        <option value="-99">- Select One -</option>
                        <option value="Yes" >Yes</option>
                        <option value="No" >No</option>
                    </select>
                    <span class="error_msg" id="dependents_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->

    <div id="dependents_section">

        <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="dependents_name" class="control-label col-sm-4">Name</label>

                    <div class="col-sm-8">
                        <input type="text" name="dependents_name[]" id="dependents_name" value="<?php if(isset($dependents_name)){foreach ($dependents_name as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <span class="error_msg" id="dependents_name_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3" data-toggle="tooltip" title="Date of Birth">
                <div class="form-group">
                    <label for="dependents_birth_date" class="control-label col-sm-4">DOB</label>

                    <div class="col-sm-8">
                        <input type="date" name="dependents_birth_date[]" id="dependents_birth_date" value="<?php if(isset($dependents_birth_date)){foreach ($dependents_birth_date as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <span class="error_msg" id="dependents_birth_date_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label for="dependents_age" class="control-label col-sm-4">Age</label>

                    <div class="col-sm-8">
                        <input type="text" name="dependents_age[]" id="dependents_age" value="<?php if(isset($dependents_age)){foreach ($dependents_age as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <span class="error_msg" id="dependents_age_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="dependents_relation" class="control-label col-sm-4">Relation</label>

                    <div class="col-sm-8">
                        <input type="text" name="dependents_relation[]" id="dependents_relation" value="<?php if(isset($dependents_relation)){foreach ($dependents_relation as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <span class="error_msg" id="dependents_relation_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-1">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="button" id="add_dependents" class="btn btn-info btn-sm">Add New</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of row -->

    </div>
    <!-- end #dependents_section -->

    <div class="row">
        <hr/>
        <div class="col-sm-12">
            <div class="form-group text-right">
                <button type="button" id="personal_details_btn_previous" class="btn btn-warning btn-xs personal_details_btn previous">< Previous</button>
                <button type="button" id="personal_details_btn_next" class="btn btn-success btn-xs personal_details_btn continue">Continue ></button>
            </div>
        </div>
    </div>
    <!-- end of row -->

    </div>
    <!-- end of personal_details_2nd -->


    <div class="academic_qualification_3rd" id="academic_qualification_3rd">

        <div class="row">
            <h2 class="alert-success">Academic Details</h2>
        </div>

        <div id="academic_qualification_fields">

            <div class="row">

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="degree" class="control-label col-sm-12 upper_label">Deegree/Certificate</label>

                        <div class="col-sm-12">
                            <select name="degree[]" id="degree" class="form-control input-sm">
                                <option value="-99">- Select Degree -</option>
                                <option value="M.Sc" <?php if(isset($degree)){foreach ($degree as $value){if($value == 'M.Sc'){echo 'selected';}}} ?> >M.Sc</option>
                                <option value="B.Sc(Honors)" <?php if(isset($degree)){foreach ($degree as $value){if($value == 'B.Sc(Honors)'){echo 'selected';}}} ?> >B.Sc(Honors)</option>
                                <option value="HSC" <?php if(isset($degree)){foreach ($degree as $value){if($value == 'HSC'){echo 'selected';}}} ?> >HSC</option>
                                <option value="SSC(Regular)" <?php if(isset($degree)){foreach ($degree as $value){if($value == 'SSC(Regular)'){echo 'selected';}}} ?> >SSC(Regular)</option>
                            </select>
                            <?php if(isset($degree_error)){echo $degree_error;} ?>
                            <span class="error_msg" id="degree_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="major_sub" class="control-label col-sm-12 upper_label">Concentration/Major</label>

                        <div class="col-sm-12">
                            <input type="text" name="major_sub[]" id="major_sub" value="<?php if(isset($major_sub)){foreach ($major_sub as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <?php if(isset($major_sub_error)){echo $major_sub_error;} ?>
                            <span class="error_msg" id="major_sub_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="grade" class="control-label col-sm-12 upper_label">Grade/Division</label>

                        <div class="col-sm-12">
                            <input type="text" name="grade[]" id="grade" value="<?php if(isset($grade)){foreach ($grade as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <?php if(isset($grade_error)){echo $grade_error;} ?>
                            <span class="error_msg" id="grade_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="passing_year" class="control-label col-sm-12 upper_label">Passing Year</label>

                        <div class="col-sm-12">
                            <input type="text" name="passing_year[]" id="passing_year" value="<?php if(isset($passing_year)){foreach ($passing_year as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <?php if(isset($passing_year_error)){echo $passing_year_error;} ?>
                            <span class="error_msg" id="passing_year_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="institution" class="control-label col-sm-12 upper_label">Institution</label>

                        <div class="col-sm-12">
                            <input type="text" name="institution[]" id="institution" value="<?php if(isset($institution)){foreach ($institution as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <?php if(isset($institution_error)){echo $institution_error;} ?>
                            <span class="error_msg" id="institution_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add New</label>

                        <div class="col-sm-12">
                            <button type="button" id="edu_add" class="btn btn-info btn-sm">Add New</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of row -->

        </div>
        <!-- end #academic_qualification_fields -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="academic_qualification_btn_previous" class="btn btn-warning btn-xs previous">< Previous</button>
                    <button type="button" id="academic_qualification_btn_next" class="btn btn-success btn-xs continue">Continue ></button>
                </div>
            </div>
        </div>

<!--        <div class="row">-->
<!--            <div class="col-sm-12">-->
<!--                <div class="form-group text-center">-->
<!--                    <input type="submit"  name="cv_submit" id="" class="btn btn-success btn-md" value="Submit">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <!-- end of #academic_qualification_3rd -->


    <div class="job_details_4th" id="job_details_4th">

    <div class="row">
        <h2 class="alert-success">Job Details</h2>
    </div>

    <div id="job_details_fields">

    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_org" class="control-label col-sm-12 upper_label">Organization</label>

                <div class="col-sm-12">
                    <input type="text" name="job_org[]" id="job_org" value="<?php if(isset($job_org)){foreach ($job_org as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_org_error)){echo $job_org_error;}?>
                    <span class="error_msg" id="job_org_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_address" class="control-label col-sm-12 upper_label">Address</label>

                <div class="col-sm-12">
                    <input type="text" name="job_address[]" id="job_address" value="<?php if(isset($job_org)){foreach ($job_org as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_address_error)){echo $job_address_error;}?>
                    <span class="error_msg" id="job_address_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_lastPosition" class="control-label col-sm-12 upper_label">Last Position</label>

                <div class="col-sm-12">
                    <input type="text" name="job_lastPosition[]" id="job_lastPosition" value="<?php if(isset($job_lastPosition)){foreach ($job_lastPosition as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_lastPosition_error)){echo $job_lastPosition_error;}?>
                    <span class="error_msg" id="job_lastPosition_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_from" class="control-label col-sm-12 upper_label">From (Date)</label>

                <div class="col-sm-12">
                    <input type="date" name="job_from[]" id="job_from" value="<?php if(isset($job_from)){foreach ($job_from as $value){echo $value; break;}} ?>" class="form-control input-sm" placeholder="yyyy-mm-dd">
                    <?php if(isset($job_from_error)){echo $job_from_error;} ?>
                    <span class="error_msg" id="job_from_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_to" class="control-label col-sm-12 upper_label">To (Date)</label>

                <div class="col-sm-12">
                    <input type="date" name="job_to[]" id="job_to" value="<?php if(isset($job_to)){foreach ($job_to as $value){echo $value; break;}} ?>" class="form-control input-sm" placeholder="yyyy-mm-dd">
                    <?php if(isset($job_to_error)){echo $job_to_error;} ?>
                    <span class="error_msg" id="job_to_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label for="job_contact" class="control-label col-sm-12 upper_label">Contact</label>

                <div class="col-sm-12">
                    <input type="text" name="job_contact[]" id="job_contact" value="<?php if(isset($job_contact)){foreach ($job_contact as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_contact_error)){echo $job_contact_error;} ?>
                    <span class="error_msg" id="job_contact_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <hr/>
        </div>

    </div>
    <!-- end .row -->

    <div class="row">

        <div class="col-sm-3" data-toggle="tooltip" title="Monthly Salary (Gross)">
            <div class="form-group">
                <label for="job_salary" class="control-label col-sm-4">Salary</label>

                <div class="col-sm-8">
                    <input type="text" name="job_salary[]" id="job_salary" value="<?php if(isset($job_salary)){foreach ($job_salary as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_salary_error)){echo $job_salary_error;} ?>
                    <span class="error_msg" id="job_salary_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="job_allowance" class="control-label col-sm-5">Allowances</label>

                <div class="col-sm-7">
                    <input type="text" name="job_allowance[]" id="job_allowance" value="<?php if(isset($job_allowance)){foreach ($job_allowance as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_allowance_error)){echo $job_allowance_error;} ?>
                    <span class="error_msg" id="job_allowance_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="job_total" class="control-label col-sm-4">Total</label>

                <div class="col-sm-8">
                    <input type="text" name="job_total[]" id="job_total" value="<?php if(isset($job_total)){foreach ($job_total as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_total_error)){echo $job_total_error;} ?>
                    <span class="error_msg" id="job_total_error_massage"></span>
                </div>
            </div>
        </div>

        <div class="col-sm-3" data-toggle="tooltip" title="Number of Staff Suppervised by you">
            <div class="form-group">
                <label for="job_staff" class="control-label col-sm-4">Staff</label>

                <div class="col-sm-8">
                    <input type="text" name="job_staff[]" id="job_staff" value="<?php if(isset($job_staff)){foreach ($job_staff as $value){echo $value; break;}} ?>" class="form-control input-sm">
                    <?php if(isset($job_staff_error)){echo $job_staff_error;}?>
                    <span class="error_msg" id="job_staff_error_massage"></span>
                </div>
            </div>
        </div>

    </div>
    <!-- end .row -->


    <div class="row">
        <fieldset>
            <legend>Supervisor Details</legend>


            <div class="col-sm-3" data-toggle="tooltip" title="Monthly Salary (Gross)">
                <div class="form-group">
                    <label for="job_supervisor_name" class="control-label col-sm-4">Name</label>

                    <div class="col-sm-8">
                        <input type="text" name="job_supervisor_name[]" id="job_supervisor_name" value="<?php if(isset($job_supervisor_name)){foreach ($job_supervisor_name as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <?php if(isset($job_supervisor_name_error)){echo $job_supervisor_name_error;}?>
                        <span class="error_msg" id="job_supervisor_name_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="job_supervisor_designation" class="control-label col-sm-5">Designation</label>

                    <div class="col-sm-7">
                        <input type="text" name="job_supervisor_designation[]" id="job_supervisor_designation" value="<?php if(isset($job_supervisor_designation)){foreach ($job_supervisor_designation as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <?php if(isset($job_supervisor_designation_error)){echo$job_supervisor_designation_error;} ?>
                        <span class="error_msg" id="job_supervisor_designation_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="job_supervisor_contact" class="control-label col-sm-4">Contact</label>

                    <div class="col-sm-8">
                        <input type="text" name="job_supervisor_contact[]" id="job_supervisor_contact" value="<?php if(isset($job_supervisor_contact)){foreach ($job_supervisor_contact as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <?php if(isset($job_supervisor_contact_error)){ echo $job_supervisor_contact_error;}?>
                        <span class="error_msg" id="job_supervisor_contact_error_massage"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label for="job_supervisor_email" class="control-label col-sm-4">Email</label>

                    <div class="col-sm-8">
                        <input type="email" name="job_supervisor_email[]" id="job_supervisor_email" value="<?php if(isset($job_supervisor_email)){foreach ($job_supervisor_email as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        <?php if(isset($job_supervisor_email_error)){echo $job_supervisor_email_error;} ?>
                        <span class="error_msg" id="job_supervisor_email_error_massage"></span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <!-- end .row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="job_responsibility" class="control-label col-sm-2">Responsibilities</label>

                <div class="col-sm-10">
                    <textarea name="job_responsibility[]" id="job_responsibility" class="form-control input-sm" placeholder="Please Write down responsibilities you had during employment"><?php if(isset($job_responsibility)){foreach ($job_responsibility as $value){echo $value; break;}} ?></textarea>
                    <?php if(isset($job_responsibility_error)){echo $job_responsibility_error;}?>
                    <span class="error_msg" id="job_responsibility_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end .row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="job_leaveReason" class="control-label col-sm-2">Reason for Leaving</label>

                <div class="col-sm-10">
                    <textarea name="job_leaveReason[]" id="job_leaveReason" class="form-control input-sm"><?php if(isset($job_leaveReason)){foreach ($job_leaveReason as $value){echo $value; break;}} ?></textarea>
                    <?php if(isset($job_leaveReason_error)){echo $job_leaveReason_error;}?>
                    <span class="error_msg" id="job_leaveReason_error_massage"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end .row -->

    </div>
    <!-- end #job_details_fields -->

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button type="button" id="add_jobDetails" class="btn btn-info btn-sm">Add New</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end .row -->

    <div class="row">
        <hr/>
        <div class="col-sm-12">
            <div class="form-group text-right">
                <button type="button" id="job_details_btn_previous" class="btn btn-warning btn-xs job_details_btn previous">< Previous </button>
                <button type="button" id="job_details_btn_next" class="btn btn-success btn-xs job_details_btn continue">Continue ></button>
            </div>
        </div>
    </div>
    <!-- end of row -->

    </div>
    <!-- end of #job_details_4th -->


    <div class="thesis_5th" id="thesis_5th">

        <div class="row">
            <h2 class="alert-success">Thesis/Publications</h2>
        </div>

        <div id="thesis_fields">

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="thesis" class="control-label col-sm-12 upper_label">Thesis/Publication</label>

                        <div class="col-sm-12">
                            <select name="thesis[]" id="thesis" class="form-control input-sm">
                                <option value="-99">- Select Degree -</option>
                                <option value="M.Sc" <?php if(isset($thesis)){foreach ($thesis as $value){if($value == 'M.Sc'){echo 'selected';}}} ?> >M.Sc</option>
                                <option value="B.Sc(Honors)" <?php if(isset($thesis)){foreach ($thesis as $value){if($value == 'B.Sc(Honors)'){echo 'selected';}}} ?> >B.Sc(Honors)</option>
                                <option value="HSC" <?php if(isset($thesis)){foreach ($thesis as $value){if($value == 'HSC'){echo 'selected';}}} ?> >HSC</option>
                                <option value="SSC(Regular)" <?php if(isset($thesis)){foreach ($thesis as $value){if($value == 'SSC(Regular)'){echo 'selected';}}} ?> >SSC(Regular)</option>
                            </select>
                            <span class="error_msg" id="thesis_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3" data-toggle="tooltip" title="Title of Thesis/Publication">
                    <div class="form-group">
                        <label for="thesis_title" class="control-label col-sm-12 upper_label">Title</label>

                        <div class="col-sm-12">
                            <input type="text" name="thesis_title[]" id="thesis_title" value="<?php if(isset($thesis_title)){foreach ($thesis_title as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="thesis_title_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="thesis_published" class="control-label col-sm-12 upper_label">Published in</label>

                        <div class="col-sm-12">
                            <input type="date" name="thesis_published[]" id="thesis_published" value="<?php if(isset($thesis_published)){foreach ($thesis_published as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="thesis_published_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="thesis_reference" class="control-label col-sm-12 upper_label">Reference/Link</label>

                        <div class="col-sm-12">
                            <input type="text" name="thesis_reference[]" id="thesis_reference" value="<?php if(isset($thesis_reference)){foreach ($thesis_reference as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="thesis_reference_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label for="thesis_year" class="control-label col-sm-12 upper_label">Year</label>

                        <div class="col-sm-12">
                            <input type="text" name="thesis_year[]" id="thesis_year" value="<?php if(isset($thesis_year)){foreach ($thesis_year as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="thesis_year_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add New</label>

                        <div class="col-sm-12">
                            <button type="button" id="theis_add" class="btn btn-info btn-sm">Add New</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of row -->

        </div>
        <!-- end #thesis_fields -->

        <hr/>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="thesis_social_activity" class="control-label col-sm-12 upper_label">List activities in civic, public or international affairs</label>

                    <div class="col-sm-12">
                        <textarea name="thesis_social_activity" id="thesis_social_activity" class="form-control input-sm"><?Php if(isset($thesis_social_activity)){echo $thesis_social_activity;} ?></textarea>
                        <span class="error_msg" id="thesis_social_activity_error_massage"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="thesis_btn_previous" class="btn btn-warning btn-xs previous"><
                        Previous
                    </button>
                    <button type="button" id="thesis_btn_next" class="btn btn-success btn-xs continue">Continue >
                    </button>
                </div>
            </div>
        </div>


    </div>
    <!-- end of #thesis_5th -->


    <div class="training_6th" id="training_6th">

        <div class="row">
            <h2 class="alert-success">Training/Workshop</h2>
        </div>

        <div id="training_fields">

            <div class="row">

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="training_title" class="control-label col-sm-12 upper_label">Title</label>

                        <div class="col-sm-12">
                            <input type="text" name="training_title[]" id="training_title" value="<?php if(isset($training_title)){foreach ($training_title as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="training_title_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="training_org" class="control-label col-sm-12 upper_label">Institution/Trainer</label>

                        <div class="col-sm-12">
                            <input type="text" name="training_org[]" id="training_org" value="<?php if(isset($training_org)){foreach ($training_org as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="training_org_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="training_country" class="control-label col-sm-12 upper_label">Country</label>

                        <div class="col-sm-12">
                            <input type="text" name="training_country[]" id="training_country" value="<?php if(isset($training_country)){foreach ($training_country as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="training_country_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label for="training_year" class="control-label col-sm-12 upper_label">Year</label>

                        <div class="col-sm-12">
                            <input type="text" name="training_year[]" id="training_year" value="<?php if(isset($training_year)){foreach ($training_year as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="training_year_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label for="training_duration" class="control-label col-sm-12 upper_label">Duration</label>

                        <div class="col-sm-12">
                            <input type="text" name="training_duration[]" id="training_duration" value="<?php if(isset($training_duration)){foreach ($training_duration as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="training_duration_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="training_day" class="control-label col-sm-12 upper_label">Day/Hours</label>

                        <div class="col-sm-12">
                            <select name="training_day[]" id="training_day" class="form-control input-sm">
                                <option value="-99">- Select Day/Hours -</option>
                                <option value="Day" <?php if(isset($training_day)){foreach($training_day as $value){if($value == 'Day'){echo 'selected';}}} ?> >Day</option>
                                <option value="Hours" <?php if(isset($training_day)){foreach($training_day as $value){if($value == 'Hours'){echo 'selected';}}} ?> >Hours</option>
                            </select>
                            <span class="error_msg" id="training_day_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add
                            New</label>

                        <div class="col-sm-12">
                            <button type="button" id="training_add" class="btn btn-info btn-sm">Add New</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of row -->

        </div>
        <!-- end #training_fields -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="trainig_btn_previous" class="btn btn-warning btn-xs previous">< Previous </button>
                    <button type="button" id="trainig_btn_next" class="btn btn-success btn-xs continue">Continue > </button>
                </div>
            </div>
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group text-center">
                    <input type="submit"  name="cv_submit" id="" class="btn btn-success btn-md" value="Submit">
                </div>
            </div>
        </div>


    </div>
    <!-- end #training_6th -->


    <div class="language_skill_7th" id="language_skill_7th">

        <div class="row">
            <h2 class="alert-success">Language Skills</h2>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="main-language-section">
                    <h4>Mother Tongue <span class="required_start">*</span></h4>
                    <select name="main_language" id="main_language" class="form-control input-sm">
                        <option value="Bangla" <?php if(isset($main_language) and $main_language == 'Bangla'){echo 'selected';} ?> >Bangla</option>
                        <option value="English" <?php if(isset($main_language) and $main_language == 'English'){echo 'selected';} ?> >English</option>
                        <span class="error_msg" id="main_language_error_massage"></span>
                    </select>
                    <br/>

                    <h5><strong>For Reading, writing and Speaking</strong></h5>
                    <br/>

                    <p><strong>Poor</strong> = Limited conversation, newspaper reading, routing correspondence</p>

                    <p><strong>Good</strong> = Engage freely in discussions, read & write more advanced materials</p>

                    <p><strong>Very Good</strong> = Speak, read and write almost as fluently as native speaker</p>

                    <p><strong>Excellent</strong> = I use the language the way a native speaker dose</p>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="other-language-section">
                    <h4>Other Languages</h4>

                    <table class="table table-bordered other_lang_table">
                        <tr>
                            <th>Language</th>
                            <th>Reading</th>
                            <th>Writing</th>
                            <th>Speaking</th>
                        </tr>

                        <tr>
                            <td>
                                <select name="other_language[]" id="other_language" class="form-control input-sm">
                                    <option value="Bangla" <?php if(isset($other_language) and $other_language == 'Bangla'){echo 'selected';} ?> >Bangla</option>
                                    <option value="English" <?php if(isset($other_language) and $other_language == 'English'){echo 'selected';} ?> >English</option>
                                    <option value="hindi" <?php if(isset($other_language) and $other_language == 'hindi'){echo 'selected';} ?> >hindi</option>
                                </select>
                                <span class="error_msg" id="other_language_error_massage"></span>
                            </td>

                            <td>
                                <select name="other_language_reading[]" id="other_language_reading"
                                        class="form-control input-sm">
                                    <option value="Poor" <?php if(isset($other_language_reading) and $other_language_reading == 'Poor'){echo 'selected';} ?> >Poor</option>
                                    <option value="Good" <?php if(isset($other_language_reading) and $other_language_reading == 'Good'){echo 'selected';} ?> >Good</option>
                                    <option value="Very Good" <?php if(isset($other_language_reading) and $other_language_reading == 'Very Good'){echo 'selected';} ?> >Very Good</option>
                                    <option value="Excellent" <?php if(isset($other_language_reading) and $other_language_reading == 'Excellent'){echo 'selected';} ?> >Excellent</option>
                                </select>
                            </td>

                            <td>
                                <select name="other_language_writing[]" id="other_language_writing"
                                        class="form-control input-sm">
                                    <option value="Poor" <?php if(isset($other_language_writing) and $other_language_writing == 'Poor'){echo 'selected';} ?> >Poor</option>
                                    <option value="Good" <?php if(isset($other_language_writing) and $other_language_writing == 'Good'){echo 'selected';} ?> >Good</option>
                                    <option value="Very Good" <?php if(isset($other_language_writing) and $other_language_writing == 'Very Good'){echo 'selected';} ?> >Very Good</option>
                                    <option value="Excellent" <?php if(isset($other_language_writing) and $other_language_writing == 'Excellent'){echo 'selected';} ?> >Excellent</option>
                                </select>
                            </td>

                            <td>
                                <select name="other_language_speaking[]" id="other_language_speaking"
                                        class="form-control input-sm">
                                    <option value="Poor" <?php if(isset($other_language_speaking) and $other_language_speaking == 'Poor'){echo 'selected';} ?> >Poor</option>
                                    <option value="Good" <?php if(isset($other_language_speaking) and $other_language_speaking == 'Good'){echo 'selected';} ?> >Good</option>
                                    <option value="Very Good" <?php if(isset($other_language_speaking) and $other_language_speaking == 'Very Good'){echo 'selected';} ?> >Very Good</option>
                                    <option value="Excellent" <?php if(isset($other_language_speaking) and $other_language_speaking == 'Excellent'){echo 'selected';} ?> >Excellent</option>
                                </select>
                            </td>

                            <td>
                                <button type="button" id="add_other_lang" class="btn btn-info btn-sm">Add New</button>
                            </td>
                        </tr>

                    </table>

                </div>
                <!-- end .other-language-section -->

            </div>
            <!-- end .col-sm-8 -->

        </div>
        <!-- end of row -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="language_btn_previous" class="btn btn-warning btn-xs previous">< Previous</button>
                    <button type="button" id="language_btn_next" class="btn btn-success btn-xs continue">Continue ></button>
                </div>
            </div>
        </div>
        <!-- end of row -->

    </div>
    <!-- end #language_skill_7th -->


    <div class="itSkill_8th" id="itSkill_8th">

        <div class="row">
            <h2 class="alert-success">Computer / It Skill</h2>

            <div class="col-sm-8 col-sm-offset-2">
                <p class="text-center"><strong>Code Details: </strong>0 = No Skill, 1 = Basic Skill, 2 = Moderate
                    Skill, 3 = Advanced Skill</p>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="ms_word" class="control-label col-sm-6">MS Word</label>

                    <div class="col-sm-6">
                        <select name="ms_word" id="ms_word" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($ms_word) and $ms_word == 'No Skill'){echo 'selected';} ?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($ms_word) and $ms_word == 'Basic Skill'){echo 'selected';} ?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($ms_word) and $ms_word == 'Moderate Skill'){echo 'selected';} ?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($ms_word) and $ms_word == 'Advanced Skill'){echo 'selected';} ?> >Advanced Skill</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="ms_powerpoint" class="control-label col-sm-6">MS Powerpoint</label>

                    <div class="col-sm-6">
                        <select name="ms_powerpoint" id="ms_powerpoint" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($ms_powerpoint) and $ms_powerpoint == 'No Skill'){echo 'selected';} ?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($ms_powerpoint) and $ms_powerpoint == 'Basic Skill'){echo 'selected';} ?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($ms_powerpoint) and $ms_powerpoint == 'Moderate Skill'){echo 'selected';} ?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($ms_powerpoint) and $ms_powerpoint == 'Advanced Skill'){echo 'selected';} ?> >Advanced Skill</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="ms_outlook" class="control-label col-sm-6">MS Outlook</label>

                    <div class="col-sm-6">
                        <select name="ms_outlook" id="ms_outlook" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($ms_outlook) and $ms_outlook == 'No Skill'){echo 'selected';} ?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($ms_outlook) and $ms_outlook == 'Advanced Skill'){echo 'selected';} ?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($ms_outlook) and $ms_outlook == 'Basic Skill'){echo 'selected';} ?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($ms_outlook) and $ms_outlook == 'Advanced Skill'){echo 'selected';} ?> >Advanced Skill</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!-- end .row -->

        <div class="row">

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="ms_excel" class="control-label col-sm-6">MS Excel</label>

                    <div class="col-sm-6">
                        <select name="ms_excel" id="ms_excel" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($ms_excel) and $ms_excel == 'No Skill'){echo 'selected';} ?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($ms_excel) and $ms_excel == 'Advanced Skill'){echo 'selected';} ?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($ms_excel) and $ms_excel == 'Basic Skill'){echo 'selected';} ?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($ms_excel) and $ms_excel == 'Advanced Skill'){echo 'selected';} ?> >Advanced Skill</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="internet" class="control-label col-sm-6">Internet/Email</label>

                    <div class="col-sm-6">
                        <select name="internet" id="internet" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($internet) and $internet == 'No Skill'){echo 'selected';} ?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($internet) and $internet == 'Advanced Skill'){echo 'selected';} ?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($internet) and $internet == 'Basic Skill'){echo 'selected';} ?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($internet) and $internet == 'Advanced Skill'){echo 'selected';} ?> >Advanced Skill</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="other_machine" class="control-label col-sm-6">Office Machine</label>

                    <div class="col-sm-6">
                        <select name="other_machine" id="other_machine" class="form-control input-sm">
                            <option value="Fax" <?php if(isset($other_machine) and $other_machine == 'Fax'){echo 'selected';} ?> >Fax</option>
                            <option value="Photocopy" <?php if(isset($other_machine) and $other_machine == 'Photocopy'){echo 'selected';} ?> >Photocopy</option>
                            <option value="Scanner" <?php if(isset($other_machine) and $other_machine == 'Scanner'){echo 'selected';} ?> >Scanner</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!-- end .row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="other_itSkill" class="control-label col-sm-2">Other Skill</label>

                    <div class="col-sm-10">
                        <textarea name="other_itSkill" id="other_itSkill" class="form-control input-sm" placeholder="(If any)"><?php if(isset($other_itSkill)){echo $other_itSkill;} ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="itSkill_btn_previous" class="btn btn-warning btn-xs previous">< Previous</button>
                    <button type="button" id="itSkill_btn_next" class="btn btn-success btn-xs continue">Continue ></button>
                </div>
            </div>
        </div>
        <!-- end of row -->

    </div>
    <!-- end #itSkill_8th -->


    <div class="technical_skill_9th" id="technical_skill_9th">

        <div class="row">
            <h2 class="alert-success">Other Technical Skill</h2>

            <div class="col-sm-8 col-sm-offset-2">
                <p class="text-center"><strong>Code Details: </strong>0 = No Skill, 1 = Basic Skill, 2 = Moderate
                    Skill, 3 = Advanced Skill</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 technical_skill_fields">

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" name="technical_skill_name[]" id="technical_skill_name" value="<?php if(isset($technical_skill_name)){foreach($technical_skill_name as $value){echo $value; break;}} ?>" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <select name="technical_skill_rate[]" id="technical_skill_rate" class="form-control input-sm">
                            <option value="No Skill" <?php if(isset($technical_skill_rate)) {foreach($technical_skill_rate as $value){if($value == 'No Skill'){echo 'selected';}}}?> >No Skill</option>
                            <option value="Basic Skill" <?php if(isset($technical_skill_rate)) {foreach($technical_skill_rate as $value){if($value == 'Basic Skill'){echo 'selected';}}}?> >Basic Skill</option>
                            <option value="Moderate Skill" <?php if(isset($technical_skill_rate)) {foreach($technical_skill_rate as $value){if($value == 'Moderate Skill'){echo 'selected';}}}?> >Moderate Skill</option>
                            <option value="Advanced Skill" <?php if(isset($technical_skill_rate)) {foreach($technical_skill_rate as $value){if($value == 'Advanced Skill'){echo 'selected';}}}?> >Advanced Skill</option>
                        </select>
                    </div>

                    <div class="col-sm-1">
                        <button type="button" id="add_technical_skill" class="btn btn-info btn-sm">Add New</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="technicalSkill_btn_previous" class="btn btn-warning btn-xs previous">< Previous</button>
                    <button type="button" id="technicalSkill_btn_next" class="btn btn-success btn-xs continue">Continue ></button>
                </div>
            </div>
        </div>
        <!-- end of row -->

    </div>
    <!-- end #technical_skill_9th -->


    <div class="reference_10th" id="reference_10th">

        <div class="row">
            <h2 class="alert-success">Reference</h2>
        </div>

        <div id="reference_fields">

            <div class="row">

                <div class="col-sm-12">
                    <h4>Reference 1</h4>
                </div>


                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_name" class="control-label col-sm-12 upper_label">Name</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_name[]" id="reference_name" value="<?php if(isset($reference_name)){foreach($reference_name as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_name_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_designation" class="control-label col-sm-12 upper_label">Designation</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_designation[]" id="reference_designation" value="<?php if(isset($reference_designation)){foreach($reference_designation as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_designation_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_org" class="control-label col-sm-12 upper_label">Organization</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_org[]" id="reference_org" value="<?php if(isset($reference_org)){foreach($reference_org as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_org_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_phone" class="control-label col-sm-12 upper_label">Contact no.</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_phone[]" id="reference_phone" value="<?php if(isset($reference_phone)){foreach($reference_phone as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_phone_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_email" class="control-label col-sm-12 upper_label">E-mail</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_email[]" id="reference_email" value="<?php if(isset($reference_email)){foreach($reference_email as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_email_error_massage"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="reference_relation"
                               class="control-label col-sm-12 upper_label">Relationship</label>

                        <div class="col-sm-12">
                            <input type="text" name="reference_relation[]" id="reference_relation" value="<?php if(isset($reference_relation)){foreach($reference_relation as $value){echo $value; break;}} ?>" class="form-control input-sm">
                            <span class="error_msg" id="reference_relation_error_massage"></span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end .row -->

        </div>
        <!-- end #reference_fields -->

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="col-sm-12 text-right">
                        <button type="button" id="add_reference" class="btn btn-info btn-sm">Add New</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .row -->

        <div class="row">
            <hr/>
            <div class="col-sm-12">
                <div class="form-group text-right">
                    <button type="button" id="reference_btn_previous" class="btn btn-warning btn-xs job_details_btn previous">< Previous</button>
                    <button type="button" id="reference_btn_next" class="btn btn-success btn-xs job_details_btn continue">Continue ></button>
                </div>
            </div>
        </div>
        <!-- end of row -->

    </div>
    <!-- end #reference_10th -->


    <div class="other_details_11th" id="other_details_11th">

    <div class="row">
        <h2 class="alert-success">Other Details</h2>
    </div>

    <div class="row">
        <h4>Do you have any relative working experience in IOM Bangladesh?</h4>

        <div class="form-group">
            <div class="col-sm-4">
                <select name="relative_working_exp" id="relative_working_exp" data-dependent_select="select" class="form-control input-sm">
                    <option value="-99">- Select One -</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                </select>
                <span class="error_msg" id="relative_working_error_massage"></span>
            </div>
        </div>
    <div class="relative_working_experience">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_relative_name" class="control-label col-sm-12 upper_label">Name of the Relative</label>

                <div class="col-sm-12">
                    <input type="text" name="other_relative_name" id="other_relative_name" value="<?php if(isset($other_relative_name)){echo $other_relative_name;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_relative_designation" class="control-label col-sm-12 upper_label">Designation</label>

                <div class="col-sm-12">
                    <input type="text" name="other_relative_designation" id="other_relative_designation" value="<?php if(isset($other_relative_designation)){echo $other_relative_designation;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_relative_organization"
                       class="control-label col-sm-12 upper_label">Organization</label>

                <div class="col-sm-12">
                    <input type="text" name="other_relative_organization" id="other_relative_organization" value="<?php if(isset($other_relative_organization)){echo $other_relative_organization;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- end .row -->

    <div class="row">
        <h4>Do you have any previous working experience in IOM Bangladesh?</h4>

        <div class="form-group">
            <div class="col-sm-4">
                <select name="previous_working_exp" id="previous_working_exp" data-dependent_select="select" class="form-control input-sm">
                    <option value="-99">- Select One -</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                </select>
                <span class="error_msg" id="previous_working_exp_error_massage"></span>
            </div>
        </div>

        <div class="previous_working_experience">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_prev_exp_designation" class="control-label col-sm-12 upper_label">Previous Designation</label>

                <div class="col-sm-12">
                    <input type="text" name="other_prev_exp_designation" id="other_prev_exp_designation" value="<?php if(isset($other_prev_exp_designation)){echo $other_prev_exp_designation;} ?>"class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_prev_exp_length" class="control-label col-sm-12 upper_label">Length</label>

                <div class="col-sm-12">
                    <input type="text" name="other_prev_exp_length" id="other_prev_exp_length" value="<?php if(isset($other_prev_exp_length)){echo $other_prev_exp_length;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="other_prev_exp_supervisor"
                       class="control-label col-sm-12 upper_label">Supervisor</label>

                <div class="col-sm-12">
                    <input type="text" name="other_prev_exp_supervisor" id="other_prev_exp_supervisor" value="<?php if(isset($other_prev_exp_supervisor)){echo $other_prev_exp_supervisor;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

    </div>

    </div>
    <!-- end .row -->

    <div class="row">
        <h4>Did you appear for interview in IOM Bangladesh?</h4>

        <div class="form-group">
            <div class="col-sm-4">
                <select name="appear_interview" id="appear_interview" data-dependent_select="select" class="form-control input-sm">
                    <option value="-99">- Select One -</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                </select>
                <span class="error_msg" id="appear_interview_error_massage"></span>
            </div>
        </div>

        <div class="appear_interview_display">

        <div class="col-sm-6">
            <div class="form-group">
                <label for="other_applied_position" class="control-label col-sm-12 upper_label">Applied Position</label>

                <div class="col-sm-12">
                    <input type="text" name="other_applied_position" id="other_applied_position" value="<?php if(isset($other_applied_position)){echo $other_applied_position;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="other_applied_year" class="control-label col-sm-12 upper_label">Designation</label>

                <div class="col-sm-12">
                    <input type="text" name="other_applied_year" id="other_applied_year" value="<?php if(isset($other_applied_year)){echo $other_applied_year;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        </div>

    </div>
    <!-- end .row -->

    <div class="row">
        <h4>Did you have any criminal record?</h4>

        <div class="form-group">
            <div class="col-sm-4">
                <select name="criminal_record" id="criminal_record" data-dependent_select="select" class="form-control input-sm">
                    <option value="-99">- Select One -</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                </select>
                <span class="error_msg" id="criminal_record_error_massage"></span>
            </div>
        </div>

        <div class="criminal_record_display">

        <div class="col-sm-6">
            <div class="form-group">
                <label for="other_criminal_accusation"
                       class="control-label col-sm-12 upper_label">Accusation</label>

                <div class="col-sm-12">
                    <input type="text" name="other_criminal_accusation" id="other_criminal_accusation" value="<?php if(isset($other_criminal_accusation)){echo $other_criminal_accusation;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="other_criminal_year" class="control-label col-sm-12 upper_label">Year</label>

                <div class="col-sm-12">
                    <input type="text" name="other_criminal_year" id="other_criminal_year" value="<?php if(isset($other_criminal_year)){echo $other_criminal_year;} ?>" class="form-control input-sm">
                </div>
            </div>
        </div>

        </div>

    </div>
    <!-- end .row -->

    <div class="row">
        <hr/>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_affiliate" class="control-label col-sm-6 upper_label">List all organizations with which you are
                    or have been affiliated. This list is to include all affiliations, whether social, professional, fraternal etc</label>
                <div class="col-sm-6" id="">
                    <textarea name="other_affiliate_list" id="other_affiliate_list" class="form-control input-sm"><?php if(isset($other_affiliate_list)){echo $other_affiliate_list;} ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_work_consider" class="control-label col-sm-6 upper_label">For what kind of work do you wish to be considered?</label>

                <div class="col-sm-6">
                    <textarea name="other_work_consider" id="other_work_consider" class="form-control input-sm"><?php if(isset($other_work_consider)){echo $other_work_consider;} ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_travel" class="control-label col-sm-6 upper_label">Are you willing to accept a post requiring travel?</label>

                <div class="col-sm-6">
                    <input type="radio" name="other_travel" id="other_travel_yes" value="Yes" <?php if(isset($other_travel) and $other_travel == 'Yes'){ echo 'checked'; } ?> > <label for="other_travel_yes">Yes </label> &nbsp; &nbsp;
                    <input type="radio" name="other_travel" id="other_travel_no" value="No" <?php if(isset($other_travel) and $other_travel == 'No'){ echo 'checked'; } ?> > <label for="other_travel_no"> No </label>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_short_emp" class="control-label col-sm-6 upper_label">Would you accept short term employment?</label>

                <div class="col-sm-6">
                    <input type="radio" name="other_short_emp" id="other_short_emp_yes" value="Yes" <?php if(isset($other_short_emp) and $other_short_emp == 'Yes'){ echo 'checked'; } ?> > <label for="other_short_emp_yes">Yes</label> &nbsp; &nbsp;
                    <input type="radio" name="other_short_emp" id="other_short_emp_no" value="No" <?php if(isset($other_short_emp) and $other_short_emp == 'No'){ echo 'checked'; } ?> > <label for="other_short_emp_no">No</label>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_field_assesment" class="control-label col-sm-6 upper_label">Would you accept an
                    emergency field assignment at short notice?</label>

                <div class="col-sm-6">
                    <input type="radio" name="other_field_assesment" id="other_field_assesment_emp_yes" value="Yes" <?php if(isset($other_field_assesment) and $other_field_assesment == 'Yes'){ echo 'checked'; } ?> > <label for="other_field_assesment_emp_yes">Yes</label> &nbsp; &nbsp;
                    <input type="radio" name="other_field_assesment" id="other_field_assesment_emp_no" value="No" <?php if(isset($other_field_assesment) and $other_field_assesment == 'No'){ echo 'checked'; } ?> > <label for="other_field_assesment_emp_no">No</label>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_notice" class="control-label col-sm-6 upper_label">In the event of your being
                    selected, how much notice would you need before appointment?
                </label>

                <div class="col-sm-6">
                    <textarea name="other_notice" id="other_notice" class="form-control input-sm"><?php if(isset($other_notice)){echo $other_notice;} ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_arrest" class="control-label col-sm-6 upper_label">Have you ever been arrested,
                    indicted or summoned into court as a defendant in a criminal proceeding, or convicted, fined or
                    imprisoned or placed on probation in connection with such a proceeding, or have you ever been
                    arrested or required to deposit bail or collateral for the violation of any law or regulation,
                    civil or military (excluding traffic violations)?

                </label>

                <div class="col-sm-6">
                    <input type="radio" name="other_arrest" id="other_arrest_yes" value="Yes" <?php if(isset($other_arrest) and $other_arrest == 'Yes'){ echo 'checked'; } ?> > <label for="other_arrest_yes"> Yes</label> &nbsp; &nbsp;
                    <input type="radio" name="other_arrest" id="other_arrest_no" value="No" <?php if(isset($other_arrest) and $other_arrest == 'No'){ echo 'checked'; } ?> > <label for="other_arrest_yes"> No </label>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="other_arrest_brief" class="control-label col-sm-6 upper_label">If your answer is ''Yes''
                    then please brief in below- giving details of all arrests and fines other than minor traffic
                    violations. Specify charge, date, place where arrested, and disposition.</label>

                <div class="col-sm-6">
                    <textarea name="other_arrest_brief" id="other_arrest_brief" class="form-control input-sm"><?php if(isset($other_arrest_brief)){echo $other_arrest_brief;}?></textarea>
                </div>
            </div>
        </div>

    </div>
    <!-- end .row -->

    <div class="row">
        <hr/>
        <div class="col-sm-12">
            <div class="form-group text-right">
                <button type="button" id="other_details_previous" class="btn btn-warning btn-xs">< Previous</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group text-center">
                <input type="submit" name="cv_submit" id="cv_submit" class="btn btn-success btn-md" value="Submit ff">
            </div>
        </div>
    </div>

    </div>
    <!-- end #other_details_11th -->


    </form>
    </div>
    <!-- end of form-container -->

    </div>
    <!-- end of col-sm-8 -->
    </div>
    <!-- end of row -->
    </div> <!-- end of container-->



    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<?php
} else {
    echo '<p class="alert-danger text-center">You are not logged in!</p>';
    echo '<meta http-equiv="refresh" content="2; url=index.php" />';
} // end of checking logged in or not
?>


</body>
</html>