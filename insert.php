<?php
//include_once 'connection.php';

//if(isset($_POST['mobile1']) and $_POST['mobile1'] !== ""){
if(isset($_POST)){

    extract($_POST);



//    if(empty($mobile2)){
//        echo $mobile2_err = "Mobile 2 error";
//
//
//    }
//
//    $ar = array(
//        "mobile2_error" => "Mobile 2 error"
//    );
//
//    echo json_encode($ar);

    $error = false;

    if(empty($mobile1)){
        $error = true;
        $m = 'Please provide mobile no';
    }

    if($error){
        if(isset($m)){
            echo $m;
        }
    }else{
        echo '<br/>';
        echo 'Form submitted';
        echo '<br/>';
        echo var_dump($_POST);
        echo '<script>$("#myModalll").modal("hide");</script>';
    }



    //$personal_details_insert = "INSERT INTO personal_data ";


}