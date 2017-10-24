$(document).ready(function(){



    /* Tooltip */

        $('[data-toggle="tooltip"]').tooltip();

    /* end Tooltip */




    /*****************************************************
     * Form Multi step
     * **************************************************/


    $(document).ready(function(){

        // Contact section (1st section)
        //$('#contact_details_btn_next').click(function(){
        //    $('#contact_details_1st').css('display', 'none');
        //    $('#personal_details_2nd').css('display', 'block');
        //});

        // Personal details section (2nd section)
        //$('#personal_details_btn_next').click(function(){
        //    $('#academic_qualification_3rd').css('display', 'block');
        //    $('#personal_details_2nd').css('display', 'none');
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

        $('#academic_qualification_btn_next').click(function(){
            $('#academic_qualification_3rd').css('display', 'none');
            $('#job_details_4th').css('display', 'block');
        });

        // Job Details section (4th section)
        $('#job_details_btn_previous').click(function(){
            $('#academic_qualification_3rd').css('display', 'block');
            $('#job_details_4th').css('display', 'none');
        });

        $('#job_details_btn_next').click(function(){
            $('#thesis_5th').css('display', 'block');
            $('#job_details_4th').css('display', 'none');
        });

        // Thesis section (5th section)
        $('#thesis_btn_previous').click(function(){
            $('#job_details_4th').css('display', 'block');
            $('#thesis_5th').css('display', 'none');
        });

        $('#thesis_btn_next').click(function(){
            $('#training_6th').css('display', 'block');
            $('#thesis_5th').css('display', 'none');
        });

        // Training section (6th section)
        $('#trainig_btn_previous').click(function(){
            $('#thesis_5th').css('display', 'block');
            $('#training_6th').css('display', 'none');
        });

        $('#trainig_btn_next').click(function(){
            $('#language_skill_7th').css('display', 'block');
            $('#training_6th').css('display', 'none');
        });

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

        $('#reference_btn_next').click(function(){
            $('#other_details_11th').css('display', 'block');
            $('#reference_10th').css('display', 'none');
        });

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
     *  form validation
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




}); /* End of $(document).ready() */

