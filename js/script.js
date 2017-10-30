$(document).ready(function(){

    //$("#contact_details_btn_next").validate({
    //    rules:{
    //        mobile1:{
    //            required: true,
    //            mobile1: true
    //        }
    //    },
    //    messages:{
    //        mobile1:{
    //            required:'test mobile',
    //            mobile1:'valite number'
    //        }
    //    }
    //});


    /* Tooltip */

        $('[data-toggle="tooltip"]').tooltip();

    /* end Tooltip */




    /*****************************************************
     * Form Multi step
     * **************************************************/


    $(document).ready(function(){



        /***********************
         * focusout() functions
         ********************* */

        /*******************************************
         Contact Details  Section
         ********************************************/
        // #mobile1
        $('#mobile1').focusout(function () {
            var mobile1_value = $('#mobile1').val();
            if (mobile1_value.length < 11 || mobile1_value.length > 15) {
                //  alert(mobile1_value);

                $('#mobile1_error_massage').html('Error');
                $('#mobile1_error_massage').show();
            } else {

                $('#mobile1_error_massage').hide();
            }
        });

        //#nationality
        $('#nationality').focusout(function () {
            var select_field = $('#nationality').val();
            if(select_field == '-99'){
                // alert(select_field);
                $('#nationality_error_massage').html("Error");
                $('#nationality_error_massage').show();
            } else {
                $('#nationality_error_massage').hide();
            }

        });

        //#permanent_address
        $('#permanent_address').focusout(function () {
            var textarea_field2 = $('#permanent_address').val();
            if(textarea_field2 == ''){
                // alert(textarea_field);

                $('#permanent_address_error_massage').html('txtara error');
                $('#permanent_address_error_massage').show();
            } else {

                $('#permanent_address_error_massage').hide();
            }
        });

        //#present_address
        $('#present_address').focusout(function () {
            var textarea_field = $('#present_address').val();
            if(textarea_field == ''){
                // alert(textarea_field);

                $('#present_address_error_massage').html('txtara error');
                $('#present_address_error_massage').show();
            } else {

                $('#present_address_error_massage').hide();
            }

        });

        /*******************************************
         Parsonal Details  Section
         ********************************************/
            //#birth_date
        $('#birth_date').focusout(function () {
            var birth_date_field = $('#birth_date').val();
            if(birth_date_field == ''){

                $('#birth_date_error_massage').html('Empty Date of Birth');
                $('#birth_date_error_massage').show();
            } else {

                $('#birth_date_error_massage').hide();
            }

        });

        // #marital_status
        $('#marital_status').focusout(function () {
            var marital_status = $('#marital_status').val();
            if(marital_status == ''){
                $('#marital_status_error_massage').html('Please Select Status');
                $('#marital_status_error_massage').show();
            } else {

                $('#marital_status_error_massage').hide();
            }

        });

        // #passport_no
        $('#passport_no').focusout(function () {
            var passport_no_value = $('#passport_no').val();
            if(passport_no_value == ''){
                $('#passport_no_error_massage').html('Empty Passport No');
                $('#passport_no_error_massage').show();
            } else {

                $('#passport_no_error_massage').hide();
            }

        });

        // #passport_exp_date
        $('#passport_exp_date').focusout(function () {
            var passport_exp_date_value = $('#passport_exp_date').val();
            if(passport_exp_date_value == '-99'){
                $('#passport_exp_date_error_massage').html('Empty Passport Expiry Date');
                $('#passport_exp_date_error_massage').show();
            } else {

                $('#passport_exp_date_error_massage').hide();
            }

        });

        // #National ID
        $('#national_id').focusout(function () {
            var national_id_value = $('#passport_exp_date').val();
            if(national_id_value == ''){
                $('#national_id_error_massage').html('Empty National ID');
                $('#national_id_error_massage').show();
            } else {

                $('#national_id_error_massage').hide();
            }

        });

        // #Gender
        $('#gender').focusout(function () {
            var gender_value = $('#gender').val();
            if(gender_value == ''){
                $('#gender_error_massage').html('Please Select Gender');
                $('#gender_error_massage').show();
            } else {

                $('#gender_error_massage').hide();
            }

        });

        // #disability
        $('#disability').focusout(function () {
            var national_id_value = $('#disability').val();
            if(national_id_value == '-99'){
                $('#disability_error_massage').html('Please Select Gender');
                $('#disability_error_massage').show();
            }else if(national_id_value == 'Yes'){

                //$('#disability_details_textarea').css('display', 'none');
                $('#disability_details_textarea').show();
            }else if(national_id_value == 'No'){

               // $('#disability_details_textarea').css('display', 'block');
                $('#disability_details_textarea').hide();
            }

        });


        // #dependents
        $('#dependents').focusout(function () {
            var dependents_value = $('#dependents').val();
            if(dependents_value == '-99'){
                $('#dependents_error_massage').html('Please Select status');
                $('#dependents_error_massage').show();
            }else if(dependents_value == 'Yes'){

               // $('#dependents_section').css('display', 'none');
                $('#dependents_error_massage').show();
            }else if(dependents_value == 'No'){

               // $('#dependents_section').css('display', 'block');
                $('#dependents_section').hide();
            }

        });

        /*******************************************
         Academic Details Section
         ********************************************/

            // #degree
        $('#degree').focusout(function () {
            var degree_value = $('#degree').val();
            if(degree_value == '-99'){
                $('#degree_error_massage').html('Please Select degree');
                $('#degree_error_massage').show();
            } else {

                $('#degree_error_massage').hide();
            }

        });

        // #major_sub
        $('#major_sub').focusout(function () {
            var major_sub_value = $('#major_sub').val();
            if(major_sub_value == ''){
                $('#major_sub_error_massage').html('Enter your Concentration/Major');
                $('#major_sub_error_massage').show();
            } else {

                $('#major_sub_error_massage').hide();
            }

        });

        // #grade
        $('#grade').focusout(function () {
            var grade_value = $('#grade').val();
            if(grade_value == ''){
                $('#grade_error_massage').html('Enter your Grade/Division');
                $('#grade_error_massage').show();
            } else {

                $('#grade_error_massage').hide();
            }

        });

        // #passing_year
        $('#passing_year').focusout(function () {
            var passing_year_value = $('#passing_year').val();
            if(passing_year_value == ''){
                $('#passing_year_error_massage').html('Enter your passing year');
                $('#passing_year_error_massage').show();
            } else {

                $('#passing_year_error_massage').hide();
            }

        });

        // #institution
        $('#institution').focusout(function () {
            var institution_value = $('#institution').val();
            if(institution_value == ''){
                $('#institution_error_massage').html('Enter your institution');
                $('#institution_error_massage').show();
            } else {

                $('#institution_error_massage').hide();
            }

        });

        /*******************************************
         Job Details  Section
         ********************************************/
            // #job_org
        $('#job_org').focusout(function () {
            var job_org_value = $('#job_org').val();
            if(job_org_value == ''){
                $('#job_org_error_massage').html('Enter your Organization');
                $('#job_org_error_massage').show();
            } else {

                $('#job_org_error_massage').hide();
            }

        });

        // #job_address
        $('#job_address').focusout(function () {
            var job_address_value = $('#job_address').val();
            if(job_address_value == ''){
                $('#job_address_error_massage').html('Enter your address');
                $('#job_address_error_massage').show();
            } else {

                $('#job_address_error_massage').hide();
            }

        });

        // #job_lastPosition
        $('#job_lastPosition').focusout(function () {
            var job_lastPosition_value = $('#job_lastPosition').val();
            if(job_lastPosition_value == ''){
                $('#job_lastPosition_error_massage').html('Enter last position');
                $('#job_lastPosition_error_massage').show();
            } else {

                $('#job_lastPosition_error_massage').hide();
            }

        });

        // #job_from
        $('#job_from').focusout(function () {
            var job_from_value = $('#job_from').val();
            if(job_from_value == ''){
                $('#job_from_error_massage').html('Enter from (Date)');
                $('#job_from_error_massage').show();
            } else {

                $('#job_from_error_massage').hide();
            }

        });

        // #job_to
        $('#job_to').focusout(function () {
            var job_to_value = $('#job_to').val();
            if(job_to_value == ''){
                $('#job_to_error_massage').html('Enter to (Date)');
                $('#job_to_error_massage').show();
            } else {

                $('#job_to_error_massage').hide();
            }

        });

        // #job_contact
        $('#job_contact').focusout(function () {
            var job_contact_value = $('#job_contact').val();
            if(job_contact_value == ''){
                $('#job_contact_error_massage').html('Enter contact');
                $('#job_contact_error_massage').show();
            } else {

                $('#job_contact_error_massage').hide();
            }

        });

        // #job_salary
        $('#job_salary').focusout(function () {
            var job_salary_value = $('#job_salary').val();
            if(job_salary_value == ''){
                $('#job_salary_error_massage').html('Enter job salary');
                $('#job_salary_error_massage').show();
            } else {

                $('#job_salary_error_massage').hide();
            }

        });

        // #job_allowance
        $('#job_allowance').focusout(function () {
            var job_allowance_value = $('#job_allowance').val();
            if(job_allowance_value == ''){
                $('#job_allowance_error_massage').html('Enter job allowance');
                $('#job_allowance_error_massage').show();
            } else {

                $('#job_allowance_error_massage').hide();
            }

        });

        // #job_total
        $('#job_total').focusout(function () {
            var job_total_value = $('#job_total').val();
            if(job_total_value == ''){
                $('#job_total_error_massage').html('Enter total');
                $('#job_total_error_massage').show();
            } else {

                $('#job_total_error_massage').hide();
            }

        });

        // #job_staff
        $('#job_staff').focusout(function () {
            var job_staff_value = $('#job_staff').val();
            if(job_staff_value == ''){
                $('#job_staff_error_massage').html('Enter job staff');
                $('#job_staff_error_massage').show();
            } else {

                $('#job_staff_error_massage').hide();
            }

        });

        //Supervisor Details

        // #job_supervisor_name
        $('#job_supervisor_name').focusout(function () {
            var job_supervisor_name_value = $('#job_supervisor_name').val();
            if(job_supervisor_name_value == ''){
                $('#job_supervisor_name_error_massage').html('Enter job supervisor name');
                $('#job_supervisor_name_error_massage').show();
            } else {

                $('#job_supervisor_name_error_massage').hide();
            }

        });

        // #job_supervisor_designation
        $('#job_supervisor_designation').focusout(function () {
            var job_supervisor_designation_value = $('#job_supervisor_designation').val();
            if(job_supervisor_designation_value == ''){
                $('#job_supervisor_designation_error_massage').html('Enter job supervisor designation');
                $('#job_supervisor_designation_error_massage').show();
            } else {

                $('#job_supervisor_designation_error_massage').hide();
            }

        });

        // #job_supervisor_contact
        $('#job_supervisor_contact').focusout(function () {
            var job_supervisor_contact_value = $('#job_supervisor_contact').val();
            if(job_supervisor_contact_value == ''){
                $('#job_supervisor_contact_error_massage').html('Enter job supervisor contact');
                $('#job_supervisor_contact_error_massage').show();
            } else {

                $('#job_supervisor_contact_error_massage').hide();
            }

        });

        // #job_supervisor_email
        $('#job_supervisor_email').focusout(function () {
            var job_supervisor_email_value = $('#job_supervisor_email').val();
            if(job_supervisor_email_value == ''){
                $('#job_supervisor_email_error_massage').html('Enter job supervisor email');
                $('#job_supervisor_email_error_massage').show();
            } else {

                $('#job_supervisor_email_error_massage').hide();
            }

        });

        // #job_responsibility
        $('#job_responsibility').focusout(function () {
            var job_responsibility_value = $('#job_responsibility').val();
            if(job_responsibility_value == ''){
                $('#job_responsibility_error_massage').html('Enter job responsibility');
                $('#job_responsibility_error_massage').show();
            } else {

                $('#job_responsibility_error_massage').hide();
            }

        });

        // #job_leaveReason
        $('#job_leaveReason').focusout(function () {
            var job_leaveReason_value = $('#job_leaveReason').val();
            if(job_leaveReason_value == ''){
                $('#job_leaveReason_error_massage').html('Enter job leaveReason');
                $('#job_leaveReason_error_massage').show();
            } else {

                $('#job_leaveReason_error_massage').hide();
            }

        });


        /*******************************************
         Thesis/Publications  Section
         ********************************************/

            // #thesis
        $('#thesis').focusout(function () {
             var thesis_value = $('#thesis').val();
            if(thesis_value == '-99'){
                $('#thesis_error_massage').html('Enter Thesis/Publication');
                $('#thesis_error_massage').show();
            } else {

                $('#thesis_error_massage').hide();
            }

        });

        // #thesis_title
        $('#thesis_title').focusout(function () {
            var thesis_title_value = $('#thesis_title').val();
            if(thesis_title_value == ''){
                $('#thesis_title_error_massage').html('Enter thesis_title');
                $('#thesis_title_error_massage').show();
            } else {

                $('#thesis_title_error_massage').hide();
            }

        });

        // #thesis_published
        $('#thesis_published').focusout(function () {
            var thesis_published_value = $('#thesis_published').val();
            if(thesis_published_value == ''){
                $('#thesis_published_error_massage').html('Enter thesis published');
                $('#thesis_published_error_massage').show();
            } else {

                $('#thesis_published_error_massage').hide();
            }

        });

        // #thesis_reference
        $('#thesis_reference').focusout(function () {
            var thesis_reference_value = $('#thesis_reference').val();
            if(thesis_reference_value == ''){
                $('#thesis_reference_error_massage').html('Enter thesis reference');
                $('#thesis_reference_error_massage').show();
            } else {

                $('#thesis_reference_error_massage').hide();
            }

        });

        // #thesis_year
        $('#thesis_year').focusout(function () {
            var thesis_year_value = $('#thesis_year').val();
            if(thesis_year_value == ''){
                $('#thesis_year_error_massage').html('Enter thesis year');
                $('#thesis_year_error_massage').show();
            } else {

                $('#thesis_year_error_massage').hide();
            }

        });

        // #thesis_social_activity
        $('#thesis_social_activity').focusout(function () {
            var thesis_social_activity_value = $('#thesis_social_activity').val();
            if(thesis_social_activity_value == ''){
                $('#thesis_social_activity_error_massage').html('Enter thesis social activity');
                $('#thesis_social_activity_error_massage').show();
            } else {

                $('#thesis_social_activity_error_massage').hide();
            }

        });


        /*******************************************
            Training/Workshop Section
         ********************************************/

            // #training_title
        $('#training_title').focusout(function () {
            var training_title_value = $('#training_title').val();
            if(training_title_value == ''){
                $('#training_title_error_massage').html('Enter training title');
                $('#training_title_error_massage').show();
            } else {

                $('#training_title_error_massage').hide();
            }

        });

        // #training_org
        $('#training_org').focusout(function () {
            var training_org_value = $('#training_org').val();
            if(training_org_value == ''){
                $('#training_org_error_massage').html('Enter Institution/Trainer');
                $('#training_org_error_massage').show();
            } else {

                $('#training_org_error_massage').hide();
            }

        });

        // #training_country
        $('#training_country').focusout(function () {
            var training_country_value = $('#training_country').val();
            if(training_country_value == ''){
                $('#training_country_error_massage').html('Enter training country');
                $('#training_country_error_massage').show();
            } else {

                $('#training_country_error_massage').hide();
            }

        });

        // #training_year
        $('#training_year').focusout(function () {
            var training_year_value = $('#training_year').val();
            if(training_year_value == ''){
                $('#training_year_error_massage').html('Enter training year');
                $('#training_year_error_massage').show();
            } else {

                $('#training_year_error_massage').hide();
            }

        });

        // #training_duration
        $('#training_duration').focusout(function () {
            var training_duration_value = $('#training_duration').val();
            if(training_duration_value == ''){
                $('#training_duration_error_massage').html('Enter training duration');
                $('#training_duration_error_massage').show();
            } else {

                $('#training_duration_error_massage').hide();
            }

        });

        // #training_day
        $('#training_day').focusout(function () {
            var training_day_value = $('#training_day').val();
            if(training_day_value == '-99'){
                $('#training_day_error_massage').html('Enter training day');
                $('#training_day_error_massage').show();
            } else {

                $('#training_day_error_massage').hide();
            }

        });


        /*******************************************
            Reference  Section
         ********************************************/

            // #reference_name
        $('#reference_name').focusout(function () {
            var reference_name_value = $('#reference_name').val();
            if(reference_name_value == ''){
                $('#reference_name_error_massage').html('Enter reference name');
                $('#reference_name_error_massage').show();
            } else {

                $('#reference_name_error_massage').hide();
            }

        });

        // #reference_designation
        $('#reference_designation').focusout(function () {
            var reference_designation_value = $('#reference_designation').val();
            if(reference_designation_value == ''){
                $('#reference_designation_error_massage').html('Enter reference designation');
                $('#reference_designation_error_massage').show();
            } else {

                $('#reference_designation_error_massage').hide();
            }

        });


        // #reference_org
        $('#reference_org').focusout(function () {
            var reference_org_value = $('#reference_org').val();
            if(reference_org_value == ''){
                $('#reference_org_error_massage').html('Enter reference Organization');
                $('#reference_org_error_massage').show();
            } else {

                $('#reference_org_error_massage').hide();
            }

        });


        // #reference_phone
        $('#reference_phone').focusout(function () {
            var reference_phone_value = $('#reference_phone').val();
            if(reference_phone_value == ''){
                $('#reference_phone_error_massage').html('Enter reference phone ');
                $('#reference_phone_error_massage').show();
            } else {

                $('#reference_phone_error_massage').hide();
            }

        });


        // #reference_email
        $('#reference_email').focusout(function () {
            var reference_email_value = $('#reference_email').val();
            if(reference_email_value == ''){
                $('#reference_email_error_massage').html('Enter reference email ');
                $('#reference_email_error_massage').show();
            } else {

                $('#reference_email_error_massage').hide();
            }

        });


        // #reference_relation
        $('#reference_relation').focusout(function () {
            var reference_relation_value = $('#reference_relation').val();
            if(reference_relation_value == ''){
                $('#reference_relation_error_massage').html('Enter reference relation ');
                $('#reference_relation_error_massage').show();
            } else {

                $('#reference_relation_error_massage').hide();
            }

        });







        /********************
         * click() functions
         ****************** */

        /*******************************************
         Contact Details  Section
         ********************************************/
        $('#contact_details_btn_next').click(function(){

            var contactError = [];

            //#mobile1
            var mobile1_value = $('#mobile1').val();
            if (mobile1_value.length < 11 || mobile1_value.length > 15) {
                //  alert(mobile1_value);
                contactError[0] = "true";
                $('#mobile1_error_massage').html('Error');
                $('#mobile1_error_massage').show();
            } else {
                contactError[0] = "false";
                $('#mobile1_error_massage').hide();
            }

            //#nationality
            var select_field = $('#nationality').val();
            if(select_field == '-99'){
                // alert(select_field);
                contactError[1] = "true";
                $('#nationality_error_massage').html("Error");
                $('#nationality_error_massage').show();
            } else {
                contactError[1] = "false";
                $('#nationality_error_massage').hide();
            }

            //#present_address
            var textarea_field = $('#present_address').val();
            if(textarea_field == ''){
                // alert(textarea_field);
                contactError[2] = "true";
                $('#present_address_error_massage').html('txtara error');
                $('#present_address_error_massage').show();
            } else {
                contactError[2] = "false";
                $('#present_address_error_massage').hide();
            }

            //#permanent_address
            var textarea_field2 = $('#permanent_address').val();
            if(textarea_field2 == ''){
                // alert(textarea_field);
                contactError[3] = "true";
                $('#permanent_address_error_massage').html('txtara error');
                $('#permanent_address_error_massage').show();
            } else {
                contactError[3] = "false";
                $('#permanent_address_error_massage').hide();
            }

            //Contact details next

            if($.inArray('true', contactError) != '-1'){
               // alert("value found");
                $.each(contactError , function(i, val) {
                  //  alert(contactError [i]);
                });
            }else{

                $('#contact_details_1st').css('display', 'none');
                $('#personal_details_2nd').css('display', 'block');
            }


        });// end contact Details  Section

        /*******************************************
         Parsonal Details  Section
         ********************************************/
        $('#personal_details_btn_next').click(function(){

            var personal_details_array = [];

            //# birth_date
            var birth_date_value = $('#birth_date').val();
            if (birth_date_value == '') {
                personal_details_array[0] = "true";
                $('#birth_date_error_massage').html('Empty Date of Birth');
                $('#birth_date_error_massage').show();
            }else {
                personal_details_array[0] = "false";
                $('#birth_date_error_massage').hide();
            }

            // #marital_status
            var marital_status_value = $('#marital_status').val();
            if (marital_status_value == '-99') {
                personal_details_array[1] = "true";
                $('#marital_status_error_massage').html('Please Select Status');
                $('#marital_status_error_massage').show();
            } else {
                personal_details_array[1] = "false";
                $('#birth_date_error_massage').hide();
            }

            // #passport_no
            var passport_no_value = $('#passport_no').val();
            if (passport_no_value == '') {
                personal_details_array[2] = "true";
                $('#passport_no_error_massage').html('Empty Passport No');
                $('#passport_no_error_massage').show();
            }else {
                personal_details_array[2] = "false";
                $('#passport_no_error_massage').hide();
            }

            // #passport_exp_date
            var passport_exp_date_value = $('#passport_exp_date').val();
            if (passport_exp_date_value == '') {
                personal_details_array[3] = "true";
                $('#passport_exp_date_error_massage').html('Empty Passport Expiry Date');
                $('#passport_exp_date_error_massage').show();
            }else {
                personal_details_array[3] = "false";
                $('#passport_exp_date_error_massage').hide();
            }

           // #National ID
            var national_id_value = $('#national_id').val();
            if (national_id_value == '') {
                personal_details_array[4] = "true";
                $('#national_id_error_massage').html('Empty National ID');
                $('#national_id_error_massage').show();
            }else {
                personal_details_array[4] = "false";
                $('#national_id_error_massage').hide();
            }

           // #Gender
            var gender_value = $('#gender').val();
            if (gender_value == '-99') {
                personal_details_array[5] = "true";
                $('#gender_error_massage').html('Please Select Status');
                $('#gender_error_massage').show();
            }else {
                personal_details_array[5] = "false";
                $('#gender_error_massage').hide();
            }

            // #disability
            var disability_value = $('#disability').val();
            if (disability_value == '-99') {
                personal_details_array[6] = "true";
                $('#disability_error_massage').html('Please Select Status');
                $('#disability_error_massage').show();
            }else if(disability_value == 'Yes'){

                //disability_details_textarea
                    var disability_details_value = $('#disability_details').val();
                    if (disability_details_value == '') {
                        personal_details_array[7] = "true";
                        $('#disability_details_error_massage').html('Empty disability details');
                        $('#disability_details_error_massage').show();
                    }else {
                        personal_details_array[7] = "false";
                        personal_details_array[6] = "false";
                        $('#disability_details_error_massage').hide();
                    }
                    $('#disability_details_textarea').css('display', 'block');
                    $('#disability_error_massage').hide();


            }else if(disability_value == 'No') {
                personal_details_array[6] = "false";
                personal_details_array[7] = "false";
                $('#disability_details_textarea').css('display', 'none');
                $('#disability_error_massage').hide();
            }

           // dependents
            var dependents_value = $('#dependents').val();
            if (dependents_value == '-99') {
                personal_details_array[8] = "true";
                $('#dependents_error_massage').html('Please Select Status');
                $('#dependents_error_massage').show();
            }else if(dependents_value == 'Yes'){

               // #dependents_name
                var dependents_name_value = $('#dependents_name').val();
                if (dependents_name_value == '') {
                    personal_details_array[9] = "true";
                    $('#dependents_name_error_massage').html('Empty dependents name');
                    $('#dependents_name_error_massage').show();
                }else {
                    personal_details_array[9] = "false";
                    $('#dependents_name_error_massage').hide();
                }

                // #dependents_birth_date
                var dependents_birth_date_value = $('#dependents_birth_date').val();
                if (dependents_birth_date_value == '') {
                    personal_details_array[10] = "true";
                    $('#dependents_birth_date_error_massage').html('Empty dependents birth date');
                    $('#dependents_birth_date_error_massage').show();
                }else {
                    personal_details_array[10] = "false";
                    $('#dependents_birth_date_error_massage').hide();
                }

                // #dependents_age
                var dependents_age_value = $('#dependents_age').val();
                if (dependents_age_value == '') {
                    personal_details_array[11] = "true";
                    $('#dependents_age_error_massage').html('Empty dependents age');
                    $('#dependents_age_error_massage').show();
                }else {
                    personal_details_array[11] = "false";
                    $('#dependents_age_error_massage').hide();
                }

                // #dependents_age
                var dependents_relation_value = $('#dependents_relation').val();
                if (dependents_relation_value == '') {
                    personal_details_array[12] = "true";
                    $('#dependents_relation_error_massage').html('Empty dependents relation');
                    $('#dependents_relation_error_massage').show();
                }else {
                    personal_details_array[12] = "false";
                    $('#dependents_relation_error_massage').hide();
                }

                $('#dependents_section').css('display', 'block');
                $('#dependents_error_massage').hide();
            }else if(dependents_value == 'No'){
                $('#dependents_section').css('display', 'none');
                $('#dependents_error_massage').hide();
            }

            //Personal Details next
            if($.inArray('true', personal_details_array) != '-1'){
              //  alert("value found");
                $.each(personal_details_array , function(i, val) {
                  //  alert(personal_details_array [i]);
                });
            }else{
                $('#academic_qualification_3rd').css('display', 'block');
                $('#personal_details_2nd').css('display', 'none');
            }

        });// end Parsonal Details  Section


        /*******************************************
         Academic Details  Section
         ********************************************/
        $('#academic_qualification_btn_next').click(function() {

            var academic_details_array = [];

            // #degree
            var degree_value = $('#degree').val();
            if (degree_value == '-99') {
                academic_details_array[13] = "true";
                $('#degree_error_massage').html('Empty your degree');
                $('#degree_error_massage').show();
            }else {
                academic_details_array[13] = "false";
                $('#degree_error_massage').hide();
            }

            // #major_sub
            var major_sub_value = $('#major_sub').val();
            if (major_sub_value == '') {
                academic_details_array[14] = "true";
                $('#major_sub_error_massage').html('Empty your Deegree/Certificate');
                $('#major_sub_error_massage').show();
            }else {
                academic_details_array[14] = "false";
                $('#major_sub_error_massage').hide();
            }

            // #grade
            var grade_value = $('#grade').val();
            if (grade_value == '') {
                academic_details_array[15] = "true";
                $('#grade_error_massage').html('Empty your grade');
                $('#grade_error_massage').show();
            }else {
                academic_details_array[15] = "false";
                $('#grade_error_massage').hide();
            }

            // #passing_year
            var passing_year_value = $('#passing_year').val();
            if (passing_year_value == '') {
                academic_details_array[16] = "true";
                $('#passing_year_error_massage').html('Empty your passing year');
                $('#passing_year_error_massage').show();
            }else {
                academic_details_array[16] = "false";
                $('#passing_year_error_massage').hide();
            }

            // #institution
            var institution_value = $('#institution').val();
            if (institution_value == '') {
                academic_details_array[17] = "true";
                $('#institution_error_massage').html('Empty your institution');
                $('#institution_error_massage').show();
            }else {
                academic_details_array[17] = "false";
                $('#institution_error_massage').hide();
            }

            //Academic Details next

            if($.inArray('true', academic_details_array) != '-1'){
                //  alert("value found");
                $.each(academic_details_array , function(i, val) {
                    //  alert(personal_details_array [i]);
                });
            }else{
                $('#academic_qualification_3rd').css('display', 'none');
                $('#job_details_4th').css('display', 'block');
            }

        });// end Academic Details  Section


        /*******************************************
         job Details  Section
         ********************************************/
        $('#job_details_btn_next').click(function() {

            var job_details_array = [];

            // #job_org
            var job_org_value = $('#job_org').val();
            if (job_org_value == '') {
                job_details_array[18] = "true";
                $('#job_org_error_massage').html('Empty your Organization');
                $('#job_org_error_massage').show();
            }else {
                job_details_array[18] = "false";
                $('#job_org_error_massage').hide();
            }

            // #job_address
            var job_address_value = $('#job_address').val();
            if (job_address_value == '') {
                job_details_array[19] = "true";
                $('#job_address_error_massage').html('Empty your address');
                $('#job_address_error_massage').show();
            }else {
                job_details_array[19] = "false";
                $('#job_address_error_massage').hide();
            }

            // #job_lastPosition
            var job_lastPosition_value = $('#job_lastPosition').val();
            if (job_lastPosition_value == '') {
                job_details_array[20] = "true";
                $('#job_lastPosition_error_massage').html('Empty your last position');
                $('#job_lastPosition_error_massage').show();
            }else {
                job_details_array[20] = "false";
                $('#job_lastPosition_error_massage').hide();
            }

            // #job_from
            var job_from_value = $('#job_from').val();
            if (job_from_value == '') {
                job_details_array[21] = "true";
                $('#job_from_error_massage').html('Empty your from (Date)');
                $('#job_from_error_massage').show();
            }else {
                job_details_array[21] = "false";
                $('#job_from_error_massage').hide();
            }

            // #job_to
            var job_to_value = $('#job_to').val();
            if (job_to_value == '') {
                job_details_array[22] = "true";
                $('#job_to_error_massage').html('Empty your to (Date)');
                $('#job_to_error_massage').show();
            }else {
                job_details_array[22] = "false";
                $('#job_to_error_massage').hide();
            }

            // #job_contact
            var job_contact_value = $('#job_contact').val();
            if (job_contact_value == '') {
                job_details_array[23] = "true";
                $('#job_contact_error_massage').html('Empty your contact');
                $('#job_contact_error_massage').show();
            }else {
                job_details_array[23] = "false";
                $('#job_contact_error_massage').hide();
            }

            // #job_salary
            var job_salary_value = $('#job_salary').val();
            if (job_salary_value == '') {
                job_details_array[24] = "true";
                $('#job_salary_error_massage').html('Empty your job salary');
                $('#job_salary_error_massage').show();
            }else {
                job_details_array[24] = "false";
                $('#job_salary_error_massage').hide();
            }

            // #job_allowance
            var job_allowance_value = $('#job_allowance').val();
            if (job_allowance_value == '') {
                job_details_array[25] = "true";
                $('#job_allowance_error_massage').html('Empty your job allowance');
                $('#job_allowance_error_massage').show();
            }else {
                job_details_array[25] = "false";
                $('#job_allowance_error_massage').hide();
            }

            // #job_total
            var job_total_value = $('#job_total').val();
            if (job_total_value == '') {
                job_details_array[26] = "true";
                $('#job_total_error_massage').html('Empty your total');
                $('#job_total_error_massage').show();
            }else {
                job_details_array[26] = "false";
                $('#job_total_error_massage').hide();
            }

            // #job_staff
            var job_staff_value = $('#job_staff').val();
            if (job_staff_value == '') {
                job_details_array[27] = "true";
                $('#job_staff_error_massage').html('Empty your staff');
                $('#job_staff_error_massage').show();
            }else {
                job_details_array[27] = "false";
                $('#job_staff_error_massage').hide();
            }

           // Supervisor Details

            // #job_supervisor_name
            var job_supervisor_name_value = $('#job_supervisor_name').val();
            if (job_supervisor_name_value == '') {
                job_details_array[28] = "true";
                $('#job_supervisor_name_error_massage').html('Empty job supervisor name');
                $('#job_supervisor_name_error_massage').show();
            }else {
                job_details_array[28] = "false";
                $('#job_supervisor_name_error_massage').hide();
            }

            // #job_supervisor_designation
            var job_supervisor_designation_value = $('#job_supervisor_designation').val();
            if (job_supervisor_designation_value == '') {
                job_details_array[29] = "true";
                $('#job_supervisor_designation_error_massage').html('Empty job supervisor designation');
                $('#job_supervisor_designation_error_massage').show();
            }else {
                job_details_array[29] = "false";
                $('#job_supervisor_designation_error_massage').hide();
            }

            // #job_supervisor_contact
            var job_supervisor_contact_value = $('#job_supervisor_contact').val();
            if (job_supervisor_contact_value == '') {
                job_details_array[30] = "true";
                $('#job_supervisor_contact_error_massage').html('Empty job supervisor contact');
                $('#job_supervisor_contact_error_massage').show();
            }else {
                job_details_array[30] = "false";
                $('#job_supervisor_contact_error_massage').hide();
            }

            // #job_supervisor_email
            var job_supervisor_email_value = $('#job_supervisor_email').val();
            if (job_supervisor_email_value == '') {
                job_details_array[31] = "true";
                $('#job_supervisor_email_error_massage').html('Empty job supervisor email');
                $('#job_supervisor_email_error_massage').show();
            }else {
                job_details_array[31] = "false";
                $('#job_supervisor_email_error_massage').hide();
            }

            // #job_responsibility
            var job_responsibility_value = $('#job_responsibility').val();
            if (job_responsibility_value == '') {
                job_details_array[32] = "true";
                $('#job_responsibility_error_massage').html('Empty job responsibility');
                $('#job_responsibility_error_massage').show();
            }else {
                job_details_array[32] = "false";
                $('#job_responsibility_error_massage').hide();
            }

            // #job_leaveReason
            var job_leaveReason_value = $('#job_leaveReason').val();
            if (job_leaveReason_value == '') {
                job_details_array[33] = "true";
                $('#job_leaveReason_error_massage').html('Empty job leaveReason');
                $('#job_leaveReason_error_massage').show();
            }else {
                job_details_array[33] = "false";
                $('#job_leaveReason_error_massage').hide();
            }


            //job Details next btn validation

            if($.inArray('true', job_details_array) != '-1'){
                //  alert("value found");
                $.each(job_details_array , function(i, val) {
                    //  alert(personal_details_array [i]);
                });
            }else{
                $('#thesis_5th').css('display', 'block');
                $('#job_details_4th').css('display', 'none');
            }

        });// end job Details  Section


        /*******************************************
         Thesis/Publications  Section
         ********************************************/

        $('#thesis_btn_next').click(function() {

            var thesis_publications_array = [];

            // #thesis
               var thesis_value = $('#thesis').val();
            if (thesis_value == '-99') {
                thesis_publications_array[34] = "true";
                $('#thesis_error_massage').html('Empty thesis');
                $('#thesis_error_massage').show();
            }else {
                thesis_publications_array[34] = "false";
                $('#thesis_error_massage').hide();
            }

            // #thesis_title
            var thesis_title_value = $('#thesis_title').val();
            if (thesis_title_value == '') {
                thesis_publications_array[35] = "true";
                $('#thesis_title_error_massage').html('Empty thesis title');
                $('#thesis_title_error_massage').show();
            }else {
                thesis_publications_array[35] = "false";
                $('#thesis_title_error_massage').hide();
            }

            // #thesis_published
            var thesis_published_value = $('#thesis_published').val();
            if (thesis_published_value == '') {
                thesis_publications_array[36] = "true";
                $('#thesis_published_error_massage').html('Empty thesis published');
                $('#thesis_published_error_massage').show();
            }else {
                thesis_publications_array[36] = "false";
                $('#thesis_published_error_massage').hide();
            }

            // #thesis_reference
            var thesis_reference_value = $('#thesis_reference').val();
            if (thesis_reference_value == '') {
                thesis_publications_array[37] = "true";
                $('#thesis_reference_error_massage').html('Empty thesis reference');
                $('#thesis_reference_error_massage').show();
            }else {
                thesis_publications_array[37] = "false";
                $('#thesis_reference_error_massage').hide();
            }

            // #thesis_year
            var thesis_year_value = $('#thesis_year').val();
            if (thesis_year_value == '') {
                thesis_publications_array[38] = "true";
                $('#thesis_year_error_massage').html('Empty thesis year');
                $('#thesis_year_error_massage').show();
            }else {
                thesis_publications_array[38] = "false";
                $('#thesis_year_error_massage').hide();
            }

            // #thesis_social_activity
            var thesis_social_activity_value = $('#thesis_social_activity').val();
            if (thesis_social_activity_value == '') {
                thesis_publications_array[39] = "true";
                $('#thesis_social_activity_error_massage').html('Empty thesis social activity');
                $('#thesis_social_activity_error_massage').show();
            }else {
                thesis_publications_array[39] = "false";
                $('#thesis_social_activity_error_massage').hide();
            }

            // Thesis/Publications Section next btn validation

            if($.inArray('true', thesis_publications_array) != '-1'){
                //  alert("value found");
                $.each(thesis_publications_array , function(i, val) {
                    //  alert(personal_details_array [i]);
                });
            }else{
                $('#training_6th').css('display', 'block');
                $('#thesis_5th').css('display', 'none');
            }

        });// Thesis/Publications  Section


        /*******************************************
         Training/Workshop Section
         ********************************************/
        $('#trainig_btn_next').click(function() {

            var training_workshop_array = [];

            // #training_title
            var training_title_value = $('#training_title').val();
            if (training_title_value == '') {
                training_workshop_array[40] = "true";
                $('#training_title_error_massage').html('Empty training title');
                $('#training_title_error_massage').show();
            }else {
                training_workshop_array[40] = "false";
                $('#training_title_error_massage').hide();
            }

            // #training_org
            var training_org_value = $('#training_org').val();
            if (training_org_value == '') {
                training_workshop_array[41] = "true";
                $('#training_org_error_massage').html('Empty Institution/Trainer');
                $('#training_org_error_massage').show();
            }else {
                training_workshop_array[41] = "false";
                $('#training_org_error_massage').hide();
            }

            // #training_country
            var training_country_value = $('#training_country').val();
            if (training_country_value == '') {
                training_workshop_array[42] = "true";
                $('#training_country_error_massage').html('Empty training country');
                $('#training_country_error_massage').show();
            }else {
                training_workshop_array[42] = "false";
                $('#training_country_error_massage').hide();
            }

            // #training_year
            var training_year_value = $('#training_year').val();
            if (training_year_value == '') {
                training_workshop_array[43] = "true";
                $('#training_year_error_massage').html('Empty training year');
                $('#training_year_error_massage').show();
            }else {
                training_workshop_array[43] = "false";
                $('#training_year_error_massage').hide();
            }

            // #training_duration
            var training_duration_value = $('#training_duration').val();
            if (training_duration_value == '') {
                training_workshop_array[44] = "true";
                $('#training_duration_error_massage').html('Empty training duration');
                $('#training_duration_error_massage').show();
            }else {
                training_workshop_array[44] = "false";
                $('#training_duration_error_massage').hide();
            }

            // #training_day
            var training_day_value = $('#training_day').val();
            if (training_day_value == '-99') {
                training_workshop_array[45] = "true";
                $('#training_day_error_massage').html('Empty select training day');
                $('#training_day_error_massage').show();
            }else {
                training_workshop_array[45] = "false";
                $('#training_day_error_massage').hide();
            }

            //  Training/Workshop Section next btn validation

            if($.inArray('true', training_workshop_array) != '-1'){
                //  alert("value found");
                $.each(training_workshop_array , function(i, val) {
                    //  alert(personal_details_array [i]);
                });
            }else{
                $('#language_skill_7th').css('display', 'block');
                $('#training_6th').css('display', 'none');
            }

        });// end Training/Workshop Section



        /*******************************************
             Reference Section
         ********************************************/

        $('#reference_btn_next').click(function() {

            var Reference_array = [];

            // #reference_name
            var reference_name_value = $('#reference_name').val();
            if (reference_name_value == '') {
                Reference_array[45] = "true";
                $('#reference_name_error_massage').html('Empty reference name');
                $('#reference_name_error_massage').show();
            }else {
                Reference_array[45] = "false";
                $('#reference_name_error_massage').hide();
            }

            // #reference_designation
            var reference_designation_value = $('#reference_designation').val();
            if (reference_designation_value == '') {
                Reference_array[46] = "true";
                $('#reference_designation_error_massage').html('Empty reference designation');
                $('#reference_designation_error_massage').show();
            }else {
                Reference_array[46] = "false";
                $('#reference_designation_error_massage').hide();
            }

            // #reference_org
            var reference_org_value = $('#reference_org').val();
            if (reference_org_value == '') {
                Reference_array[47] = "true";
                $('#reference_org_error_massage').html('Empty reference Organization');
                $('#reference_org_error_massage').show();
            }else {
                Reference_array[47] = "false";
                $('#reference_org_error_massage').hide();
            }

            // #reference_phone
            var reference_phone_value = $('#reference_phone').val();
            if (reference_phone_value == '') {
                Reference_array[48] = "true";
                $('#reference_phone_error_massage').html('Empty reference phone');
                $('#reference_phone_error_massage').show();
            }else {
                Reference_array[48] = "false";
                $('#reference_phone_error_massage').hide();
            }

            // #reference_email
            var reference_email_value = $('#reference_email').val();
            if (reference_email_value == '') {
                Reference_array[49] = "true";
                $('#reference_email_error_massage').html('Empty reference email');
                $('#reference_email_error_massage').show();
            }else {
                Reference_array[49] = "false";
                $('#reference_email_error_massage').hide();
            }

            // #reference_relation
            var reference_relation_value = $('#reference_relation').val();
            if (reference_relation_value == '') {
                Reference_array[50] = "true";
                $('#reference_relation_error_massage').html('Empty reference relation');
                $('#reference_relation_error_massage').show();
            }else {
                Reference_array[50] = "false";
                $('#reference_relation_error_massage').hide();
            }




            //   Reference next btn validation

            if($.inArray('true', Reference_array) != '-1'){
                //  alert("value found");
                $.each(Reference_array , function(i, val) {
                    //  alert(personal_details_array [i]);
                });
            }else{
                $('#other_details_11th').css('display', 'block');
                $('#reference_10th').css('display', 'none');
            }

        });// end  Reference



       // Contact section (1st section)
       // $('#contact_details_btn_next').click(function(){
       //      $('#contact_details_1st').css('display', 'none');
       //      $('#personal_details_2nd').css('display', 'block');
       //
       //});

        //Personal details section (2nd section)
        //$('#personal_details_btn_next').click(function(){
        //     $('#academic_qualification_3rd').css('display', 'block');
        //     $('#personal_details_2nd').css('display', 'none');
        //
        //});

        $('#personal_details_btn_previous').click(function(){
            $('#contact_details_1st').css('display', 'block');
            $('#personal_details_2nd').css('display', 'none');
        });

        // Academic qualification section (3rd section)
        $('#academic_qualification_btn_previous').click(function(){
            $('#academic_qualification_3rd').css('display', 'none');
            $('#personal_details_2nd').css('display', 'block');
        });

        //$('#academic_qualification_btn_next').click(function(){
        //    $('#academic_qualification_3rd').css('display', 'none');
        //    $('#job_details_4th').css('display', 'block');
        //});

        // Job Details section (4th section)
        $('#job_details_btn_previous').click(function(){
            $('#academic_qualification_3rd').css('display', 'block');
            $('#job_details_4th').css('display', 'none');
        });

        //$('#job_details_btn_next').click(function(){
        //    $('#thesis_5th').css('display', 'block');
        //    $('#job_details_4th').css('display', 'none');
        //});

        // Thesis section (5th section)
        $('#thesis_btn_previous').click(function(){
            $('#job_details_4th').css('display', 'block');
            $('#thesis_5th').css('display', 'none');
        });

        //$('#thesis_btn_next').click(function(){
        //    $('#training_6th').css('display', 'block');
        //    $('#thesis_5th').css('display', 'none');
        //});

        // Training section (6th section)
        $('#trainig_btn_previous').click(function(){
            $('#thesis_5th').css('display', 'block');
            $('#training_6th').css('display', 'none');
        });

        //$('#trainig_btn_next').click(function(){
        //    $('#language_skill_7th').css('display', 'block');
        //    $('#training_6th').css('display', 'none');
        //});

        // Language section (7th section)
        $('#language_btn_previous').click(function(){
            $('#language_skill_7th').css('display', 'none');
            $('#training_6th').css('display', 'block');
        });

        $('#language_btn_next').click(function(){
            $('#language_skill_7th').css('display', 'none');
            $('#itSkill_8th').css('display', 'block');
        });

        // IT skill section (8th section)
        $('#itSkill_btn_previous').click(function(){
            $('#itSkill_8th').css('display', 'none');
            $('#language_skill_7th').css('display', 'block');
        });

        $('#itSkill_btn_next').click(function(){
            $('#itSkill_8th').css('display', 'none');
            $('#technical_skill_9th').css('display', 'block');
        });

        // Technical Skill (9th section)
        $('#technicalSkill_btn_previous').click(function(){
            $('#itSkill_8th').css('display', 'block');
            $('#technical_skill_9th').css('display', 'none');
        });

        $('#technicalSkill_btn_next').click(function(){
            $('#technical_skill_9th').css('display', 'none');
            $('#reference_10th').css('display', 'block');
        });

        // Reference section (10th section)
        $('#reference_btn_previous').click(function(){
            $('#technical_skill_9th').css('display', 'block');
            $('#reference_10th').css('display', 'none');
        });

        //$('#reference_btn_next').click(function(){
        //    $('#other_details_11th').css('display', 'block');
        //    $('#reference_10th').css('display', 'none');
        //});

        // Other details seciton (11th section)
        $('#other_details_previous').click(function(){
            $('#other_details_11th').css('display', 'none');
            $('#reference_10th').css('display', 'block');
        });


    });


    /* End Multistep */




    /*****************************************************
     *  Dynamic form fields
     *  *************************************************/

    var maxRows = 4;



    /*Section dependents field*/

    var i = 1;

    $('#add_dependents').click(function(){
        if(i <= maxRows) {
            $('#dependents_section').append('<div class="row"><div class="col-sm-3"><div class="form-group"><label for="dependents_name'+i+'" class="control-label col-sm-4">Name</label><div class="col-sm-8"><input type="text" name="dependents_name[]" id="dependents_name'+i+'" class="form-control input-sm" required="required"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="dependents_birth_date'+i+'" class="control-label col-sm-4">DOB</label><div class="col-sm-8"><input type="date" name="dependents_birth_date[]" id="dependents_birth_date'+i+'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="dependents_age'+i+'" class="control-label col-sm-4">Age</label><div class="col-sm-8"><input type="text" name="dependents_age[]" id="dependents_age'+i+'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="dependents_relation'+i+'" class="control-label col-sm-4">Relation</label><div class="col-sm-8"><input type="text" name="dependents_relation[]" id="dependents_relation'+i+'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></div></div></div>');
            i++;
        }
    });

    $('#dependents_section').on('click', '#remove', function(){
        $(this).parent().parent().parent().remove();
        i--;
    });

    /*end dependents field*/



    /*Section Education field*/

    var j = 1;

    $('#edu_add').click(function(){
        if(j <= maxRows) {
            $('#academic_qualification_fields').append('<div class="row"><div class="col-sm-2"><div class="form-group"><label for="degree'+j+'" class="control-label col-sm-12 upper_label">Deegree/Certificate</label><div class="col-sm-12"><select name="degree[]" id="degree'+j+'" class="form-control input-sm"><option value="-99">- Select Degree -</option><option value="M.Sc">M.Sc</option><option value="B.Sc(Honors)">B.Sc(Honors)</option><option value="HSC">HSC</option><option value="SSC(Regular)">SSC(Regular)</option></select></div></div></div><div class="col-sm-3"><div class="form-group"><label for="major'+j+'" class="control-label col-sm-12 upper_label">Concentration/Major</label><div class="col-sm-12"><input type="text" name="major[]" id="major'+j+'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="grade'+j+'" class="control-label col-sm-12 upper_label">Grade/Division</label><div class="col-sm-12"><input type="text" name="grade[]" id="grade'+j+'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="passing_year'+j+'" class="control-label col-sm-12 upper_label">Passing Year</label><div class="col-sm-12"><input type="text" name="passing_year[]" id="passing_year'+j+'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="institution'+j+'" class="control-label col-sm-12 upper_label">Institution</label><div class="col-sm-12"><input type="text" name="institution[]" id="institution'+j+'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add New</label><div class="col-sm-12"><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></div></div></div></div>');
            j++;
        }
    });

    $('#academic_qualification_fields').on('click', '#remove', function(){
        $(this).parent().parent().parent().parent().remove();
        j--;
    });

    /*end Education field*/



    /*Section Job details field*/

    var k = 1;

    $('#add_jobDetails').click(function(){
        if(k <= maxRows) {
            $('#job_details_fields').append('<div id="job_dynamicFields" style="position: relative"><div class="row"><div class="col-sm-12"><button type="button" id="remove" class="btn btn-danger btn-sm job_remove_btn">X</button></div></div><div class="row"><div class="col-sm-2"><div class="form-group"><label for="job_org'+ k +'" class="control-label col-sm-12 upper_label">Organization</label><div class="col-sm-12"><input type="text" name="job_org[]" id="job_org'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="job_address'+ k +'" class="control-label col-sm-12 upper_label">Address</label><div class="col-sm-12"><input type="text" name="job_address[]" id="job_address'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="job_lastPosition'+ k +'" class="control-label col-sm-12 upper_label">Last Position</label><div class="col-sm-12"><input type="text" name="job_lastPosition[]" id="job_lastPosition'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="job_from'+ k +'" class="control-label col-sm-12 upper_label">From (Date)</label><div class="col-sm-12"><input type="date" name="job_from[]" id="job_from'+ k +'" class="form-control input-sm" placeholder="yyyy-mm-dd"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="job_to'+ k +'" class="control-label col-sm-12 upper_label">To (Date)</label><div class="col-sm-12"><input type="date" name="job_to[]" id="job_to'+ k +'" class="form-control input-sm" placeholder="yyyy-mm-dd"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="job_contact'+ k +'" class="control-label col-sm-12 upper_label">Contact</label><div class="col-sm-12"><input type="text" name="job_contact[]" id="job_contact'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-12"><hr/></div></div><div class="row"><div class="col-sm-3" data-toggle="tooltip" title="Monthly Salary (Gross)"><div class="form-group"><label for="job_salary'+ k +'" class="control-label col-sm-4">Salary</label><div class="col-sm-8"><input type="text" name="job_salary[]" id="job_salary'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="job_allowance'+ k +'" class="control-label col-sm-5">Allowances</label><div class="col-sm-7"><input type="text" name="job_allowance[]" id="job_allowance'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="job_total'+ k +'" class="control-label col-sm-4">Total</label><div class="col-sm-8"><input type="text" name="job_total[]" id="job_total'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3" data-toggle="tooltip" title="Number of Staff Suppervised by you"><div class="form-group"><label for="job_staff'+ k +'" class="control-label col-sm-4">Staff</label><div class="col-sm-8"><input type="text" name="job_staff[]" id="job_staff'+ k +'" class="form-control input-sm"></div></div></div></div><div class="row"><div class="col-sm-12"><div class="form-group"><label for="job_leaveReason'+ k +'" class="control-label col-sm-2">Reason for Leaving</label><div class="col-sm-10"><textarea name="job_leaveReason[]" id="job_leaveReason'+ k +'" class="form-control input-sm"></textarea></div></div></div></div><div class="row"><fieldset><legend>Supervisor Details</legend><div class="col-sm-3" data-toggle="tooltip" title="Monthly Salary (Gross)"><div class="form-group"><label for="job_supervisor_name'+ k +'" class="control-label col-sm-4">Name</label><div class="col-sm-8"><input type="text" name="job_supervisor_name[]" id="job_supervisor_name'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="job_supervisor_designation'+ k +'" class="control-label col-sm-5">Designation</label><div class="col-sm-7"><input type="text" name="job_supervisor_designation[]" id="job_supervisor_designation'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="job_supervisor_contact'+ k +'" class="control-label col-sm-4">Contact</label><div class="col-sm-8"><input type="text" name="job_supervisor_contact[]" id="job_supervisor_contact'+ k +'" class="form-control input-sm"></div></div></div><div class="col-sm-3" data-toggle="tooltip" title="Number of Staff Suppervised by you"><div class="form-group"><label for="job_supervisor_email'+ k +'" class="control-label col-sm-4">Email</label><div class="col-sm-8"><input type="email" name="job_supervisor_email[]" id="job_supervisor_email'+ k +'" class="form-control input-sm"></div></div></div></fieldset></div><div class="row"><div class="col-sm-12"><div class="form-group"><label for="job_responsibility'+ k +'" class="control-label col-sm-2">Responsibilities</label><div class="col-sm-10"><textarea name="job_responsibility[]" id="job_responsibility'+ k +'" class="form-control input-sm" placeholder="Please Write down responsibilities you had during employment"></textarea></div></div></div></div></div>');
            k++;
        }
    });

    $('#job_details_fields').on('click', '#remove', function(){
        $(this).parent().parent().parent().remove();
        k--;
    });

    /*end Job details field*/




    /*Section Thesis field*/

    var m = 1;

    $('#theis_add').click(function(){
        if(m <= maxRows) {
            $('#thesis_fields').append('<div class="row"><div class="col-sm-3"><div class="form-group"><label for="thesis'+ m +'" class="control-label col-sm-12 upper_label">Thesis/Publication</label><div class="col-sm-12"><select name="thesis[]" id="thesis'+ m +'" class="form-control input-sm"><option value="-99">- Select Degree -</option><option value="M.Sc">M.Sc</option><option value="B.Sc(Honors)">B.Sc(Honors)</option><option value="HSC">HSC</option><option value="SSC(Regular)">SSC(Regular)</option></select></div></div></div><div class="col-sm-3" data-toggle="tooltip" title="Title of Thesis/Publication"><div class="form-group"><label for="thesis_title'+ m +'" class="control-label col-sm-12 upper_label">Title</label><div class="col-sm-12"><input type="text" name="thesis_title[]" id="thesis_title'+ m +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="thesis_published'+ m +'" class="control-label col-sm-12 upper_label">Published in</label><div class="col-sm-12"><input type="date" name="thesis_published[]" id="thesis_published'+ m +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="thesis_reference'+ m +'" class="control-label col-sm-12 upper_label">Reference/Link</label><div class="col-sm-12"><input type="text" name="thesis_reference[]" id="thesis_reference'+ m +'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><label for="thesis_year'+ m +'" class="control-label col-sm-12 upper_label">Year</label><div class="col-sm-12"><input type="text" name="thesis_year[]" id="thesis_year'+ m +'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add New</label><div class="col-sm-12"><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></div></div></div></div>');
            m++;
        }
    });

    $('#thesis_5th').on('click', '#remove', function(){
        $(this).parent().parent().parent().parent().remove();
        m--;
    });

    /*end Thesis field*/





    /*Section Training field*/

    var n = 1;

    $('#training_add').click(function(){
        if(n <= maxRows) {
            $('#training_fields').append('<div class="row"><div class="col-sm-2"><div class="form-group"><label for="training_title'+ n +'" class="control-label col-sm-12 upper_label">Title</label><div class="col-sm-12"><input type="text" name="training_title[]" id="training_title'+ n +'" class="form-control input-sm"></div></div></div><div class="col-sm-3"><div class="form-group"><label for="training_org'+ n +'" class="control-label col-sm-12 upper_label">Institution/Trainer</label><div class="col-sm-12"><input type="text" name="training_org[]" id="training_org'+ n +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="training_country'+ n +'" class="control-label col-sm-12 upper_label">Country</label><div class="col-sm-12"><input type="text" name="training_country[]" id="training_country'+ n +'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><label for="training_year'+ n +'" class="control-label col-sm-12 upper_label">Year</label><div class="col-sm-12"><input type="text" name="training_year[]" id="training_year'+ n +'" class="form-control input-sm"></div></div></div><div class="col-sm-1"><div class="form-group"><label for="trainig_duration'+ n +'" class="control-label col-sm-12 upper_label">Duration</label><div class="col-sm-12"><input type="text" name="trainig_duration[]" id="trainig_duration'+ n +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="training_day'+ n +'" class="control-label col-sm-12 upper_label">Day/Hours</label><div class="col-sm-12"><select name="training_day[]" id="training_day'+ n +'" class="form-control input-sm"><option value="Day">Day</option><option value="Hours">Hours</option></select></div></div></div><div class="col-sm-1"><div class="form-group"><label class="control-label col-sm-12 edu_btn_label" style="visibility: hidden;">Add New</label><div class="col-sm-12"><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></div></div></div></div>');
            n++;
        }
    });

    $('#training_fields').on('click', '#remove', function(){
        $(this).parent().parent().parent().parent().remove();
        n--;
    });

    /*end Training field*/





    /*Section Other Language field*/

    var p = 1;

    $('#add_other_lang').click(function(){
        if(p <= maxRows) {
            $('.other_lang_table').append('<tr><td><select name="other_language[]" id="other_language'+ p +'" class="form-control input-sm"><option value="Bangla">Bangla</option><option value="English">English</option><option value="Hindi">Hindi</option></select></td><td><select name="other_language_reading[]" id="other_language_reading'+ p +'" class="form-control input-sm"><option value="Poor">Poor</option><option value="Good">Good</option><option value="Very Good">Very Good</option><option value="Excellent">Excellent</option></select></td><td><select name="other_language_writing[]" id="other_language_writing'+ p +'" class="form-control input-sm"><option value="Poor">Poor</option><option value="Good">Good</option><option value="Very Good">Very Good</option><option value="Excellent">Excellent</option></select></td><td><select name="other_language_speaking[]" id="other_language_speaking'+ p +'" class="form-control input-sm"><option value="Poor">Poor</option><option value="Good">Good</option><option value="Very Good">Very Good</option><option value="Excellent">Excellent</option></select></td><td><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></td></tr>');
            p++;
        }
    });

    $('.other_lang_table').on('click', '#remove', function(){
        $(this).parent().parent().remove();
        p--;
    });

    /*end Other Language field*/






    /*Section Other Technical Skill field*/

    var q = 1;

    $('#add_technical_skill').click(function(){
        if(q <= maxRows) {
            $('.technical_skill_fields').append('<div class="row"><div class="col-sm-8"><div class="form-group"><input type="text" name="technical_skill_name[]" id="technical_skill_name'+ q +'" class="form-control input-sm"></div></div><div class="col-sm-3"><select name="technical_skill_rate[]" id="technical_skill_rate'+ q +'" class="form-control input-sm"><option value="no skill">0</option><option value="Basic Skill">1</option><option value="Moderate Skill">2</option><option value="Advanced Skill">3</option></select></div><div class="col-sm-1"><button type="button" id="remove" class="btn btn-danger btn-sm">X</button></div></div>');
            q++;
        }
    });

    $('.technical_skill_fields').on('click', '#remove', function(){
        $(this).parent().parent().remove();
        q--;
    });

    /*end Other Technical Skill field*/






    /*Section Reference field*/

    var r = 1;
    var rNumber = 2

    var ref_field_count = 2


    $('#add_reference').click(function(){
        if(r <= ref_field_count) {
            $('#reference_fields').append('<div class="row" style="position: relative;"><div class="col-sm-12"><h4>Reference '+ rNumber +'</h4><button type="button" id="remove" class="btn btn-danger btn-sm reference_remove_btn">X</button></div><div class="col-sm-2"><div class="form-group"><label for="reference_name'+ r +'" class="control-label col-sm-12 upper_label">Name</label><div class="col-sm-12"><input type="text" name="reference_name[]" id="reference_name'+ r +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="reference_designation'+ r +'" class="control-label col-sm-12 upper_label">Designation</label><div class="col-sm-12"><input type="text" name="reference_designation[]" id="reference_designation'+ r +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="reference_org'+ r +'" class="control-label col-sm-12 upper_label">Organization</label><div class="col-sm-12"><input type="text" name="reference_org[]" id="reference_org'+ r +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="reference_phone'+ r +'" class="control-label col-sm-12 upper_label">Contact no.</label><div class="col-sm-12"><input type="text" name="reference_phone[]" id="reference_phone'+ r +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="reference_email'+ r +'" class="control-label col-sm-12 upper_label">E-mail</label><div class="col-sm-12"><input type="text" name="reference_email[]" id="reference_email'+ r +'" class="form-control input-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><label for="reference_relation'+ r +'" class="control-label col-sm-12 upper_label">Relationship</label><div class="col-sm-12"><input type="text" name="reference_relation[]" id="reference_relation'+ r +'" class="form-control input-sm"></div></div></div></div>');
            r++;
            rNumber++;
        }
    });

    $('#reference_fields').on('click', '#remove', function(){
        $(this).parent().parent().remove();
        r--;
        rNumber--;
    });

    /*end Reference field*/


    /* End Dynamic form fields */





    /*****************************************************
     *  form Submission
     *  *************************************************/

    //$('#cv_form').submit(function(e){
    //    e.preventDefault();
    //
    //    $.ajax({
    //        url: 'insert.php',
    //        method: 'post',
    //        data: $('#cv_form').serialize(),
    //        success: function(data){
    //            alert(data);
    //        }
    //    });
    //});


   //
   // $('#contact_details_1st').hide();
   // $('#personal_details_2nd').hide();
   // $('#academic_qualification_3rd').hide();
   // $('#academic_qualification_3rd').hide();
   //
   // $('#personal_details_2nd').hide();
   // $('#job_details_4th').hide();
   // $('#thesis_5th').hide();
   // $('#training_6th').hide();
   // $('#language_skill_7th').hide();
   //
   //
   //$('#other_details_11th').css('display', 'block');




}); /* End of $(document).ready() */

