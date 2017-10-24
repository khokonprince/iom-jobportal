<?php

// Login function

function loggedin(){
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}


// Form field sanitize function

function sanitize($name)
{
    $s = trim($name);
    $s1 = stripslashes($s);
    //$s2 = htmlspecialchars($s1);
    $s3 = strip_tags($s1);

    return $s3;
}

// Modals
function modals($id = '', $message = '', $modalclass = '', $messageClass = ''){
    $modal = <<<MODAL
        <div id="$id" class="modal fade $modalclass" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div>
                            <p class="$messageClass">$message</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>$(document).ready(function () {
                $('#$id').modal('show')
            });
        </script>

MODAL;

    echo $modal;
}