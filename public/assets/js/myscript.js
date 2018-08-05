function tagSkill(inp)
{
    var r = $(inp).attr("class_to_remove");
//    var l = $('.skilldiv').length;
//    var d = $('.skilldiv').attr('skill_name');
    $('.skilldiv').each(function (index, value)
    {
        //alert(index+" : "+value.text());
        if (r == $(this).attr('skill_name'))
        {
            $(this).remove();
        }
    });

}

$('#skills').change(function () {
    if ($('.skilldiv').length > 2) {
        alertify.error("you have already selected 3 skills.");
    } else
    {
        var SKILL = $("#skills option:selected").attr('skill_name');
        var SKILL_ID = $("#skills option:selected").val();
        var IDEA_URL = $("#skills option:selected").attr('idea_url');
        var DIV = "<div class='skilldiv' url_to_idea='"+IDEA_URL+"' skill_id='"+SKILL_ID+"' skill_name='" + SKILL + "' style='float:left;'>";
        DIV = DIV + "<div class='btn btn-warning btn-icon'>" + SKILL + " <i onclick='tagSkill(this);' class_to_remove='" + SKILL + "' class='fa fa-times' style='float:right;'></i></div></div>";
        $('#addSkills').append(DIV);
    }
});

$('#firstNext').click(function () {
    if ($('.skilldiv').length > 0) {
        if ($('#second').is(":hidden")) {
            var inputRadio = "";
            $('.skilldiv').each(function (index, value)
            {
                var URL = $(this).attr('url_to_idea');

                $.get(URL,function(data){
                    $.each(data, function(key,value){
                        //alert(value.pb_id+ " : "+value.pb_title);
                        inputRadio = inputRadio +  "<input type='radio' name='rad' class='preferred_business' p_value='"+value.pb_title+"' value='"+value.pb_id+"' /> "+value.pb_title+" <br/>";
                        $('#preferredIdeas').html(inputRadio);
                    });
                },'json');
                
                

            });
           
            
            $('#second').slideDown("slow");
        } else
        {
             var URL = $(this).attr('next_url');
             var URL2 = $(this).attr('next2_url');
            var SKILLS = $('.skilldiv').length;
            var PREF_B = $('.preferred_business:checked').attr("p_value");

            var skillsarray = new Array();
            var ideas = new Array();
            $('.skilldiv').each(function (index, value)
            {
                var URL = $(this).attr('url_to_idea');
                $.get(URL,function(data){
                    $.each($.parseJSON(data), function(key,value){
                        alert(value.pb_id+ " : "+value.pb_title);
                    });
                },'json');
                skillsarray.push($(this).attr('skill_name'));
                

            });

            $.get(URL,{skills: skillsarray, p_b: PREF_B},function(data){
               if(data > 0)
               {
                  window.location.href = URL2; 
               }
            });           
        }
    } else
    {
        alertify.error("Please select skills");
    }
});
$('#clogo').change(function () {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#cf').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function hideImageSec()
{
    $('#ImageSec').slideUp("slow");
    return false;
}

$('.editSkilllink').click(function() {
    var ID = $(this).attr('skill_id');

    $('.modal').modal('show');
});

function editSkill(link)
{
    var ID = $(link).attr('skill_id');

    $('.modal').appendTo('body').modal('show');

    return false;
}


////////////// editable

$('.skilltitle').click(function(){
//$.fn.editable.defaults.mode = 'inline';
var URL = $(this).attr('url_to');
var SKILL_ID = $(this).attr('skill_id');
    //alert('wokring');
$('.skilltitle').editable({

    success : function(response, value)
    {
        $.get(URL+"/"+SKILL_ID+"/"+value,function(data){
            if(data > 0)
            {
                alertify.success('Skill title updated');
            }
            else
            {
                alertify.error('Error occurred in updating the skill title. Please try again.');
            }
        });
       // alert(response+" : "+value);
    }
});
    
});


$('.skilldesc').click(function(){
    //$.fn.editable.defaults.mode = 'inline';
    var URL = $(this).attr('url_to');
    var SKILL_ID = $(this).attr('skill_id');
        //alert('wokring');
    $('.skilldesc').editable({
        
        success : function(response, value)
        {
            $.get(URL+"/"+SKILL_ID+"/"+value,function(data){
                if(data > 0)
                {
                    alertify.success('Skill Description updated');
                }
                else
                {
                    alertify.error('Error occurred in updating the skill description. Please try again.');
                }
            });
           // alert(response+" : "+value);
        }
    });
        
    });


//delete idea

$('.deleteIdea').click(function(){
var URL = $(this).attr('url_to');
var BACK_URL = $(this).attr('back_url');

alertify.confirm("Do you want to delete the Business Idea?", function (e) {
    if (e) {
        $.get(URL,function(data){
            if(data > 0)
            {
                alertify.success('Business Idea deleted');
                window.location = BACK_URL;
            }
            else
            {
                alertify.error('Error occurred in deleting the Business Idea.');
            }
            });
    } else {
        alertify.error("Canceled");
    }
});

});


//////////////// editUser validation

$('.form-contrl').blur(function(){
var label = $(this).parent('.form-group').text();    
if($(this).val() == ''){
    //$(this).parent('.form-group').children('.error').empty(); 
    $(this).parent('.form-group').children('.error').html("");   
$(this).parent('.form-group').children('.error').html("<p style='color:red;margin:2px;'>"+label+" Field can't be empty. <i class='ti-close'></i></p>").show("slow");
$('#subBtn').hide("slow");
}
else
{
    if((label == "Password" && lable.length < 6) || (label == "Repeat Password" && label.length < 6)){
        $(this).parent('.form-group').children('.error').html("");
        $(this).parent('.form-group').children('.error').html("<p style='color:red;margin:2px;'>"+label+" must be at least 6 characters long. <i class='ti-close'></i></p>").show("slow");
        $('#subBtn').hide("slow");
    }
    else{
$(this).parent('.form-group').children('.error').slideUp("slow"); 
$('#subBtn').show("slow");
    }
    
}
});

function deleteUser(link)
{
    var URL = $(link).attr('url_to_delete');
    var BACK_URL = $(link).attr('back_url');
    alertify.confirm("Do you want to delete Enterprise' user?", function (e) {
        if (e) {
    $.get(URL,function(data){
        if(data > 0)
        {
            alertify.success('User deleted');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in deleting the user. try again.');
        }
    });
    }
    else
    {
        alertify.error('Intention changed.');
    }
});

return false;

}

function deleteContact(link)
{
    var URL = $(link).attr('url_to_delete');
    var BACK_URL = $(link).attr('back_url');
    alertify.confirm("Do you want to delete Enterprise' contact?", function (e) {
        if (e) {
    $.get(URL,function(data){
        if(data > 0)
        {
            alertify.success('Contact deleted');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in deleting the contact. try again.');
        }
    });
    }
    else
    {
        alertify.error('Intention changed.');
    }
});

return false;

}

function deleteDoc(link)
{
    var URL = $(link).attr('url_to_delete');
    var BACK_URL = $(link).attr('back_url');
    alertify.confirm("Do you want to delete the current Document?", function (e) {
        if (e) {
    $.get(URL,function(data){
        if(data > 0)
        {
            alertify.success('Document deleted');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in deleting the document. try again.');
        }
    });
    }
    else
    {
        alertify.error('Intention changed.');
    }
});

return false;
}

function deleteEnterprise(link)
{

    var URL = $(link).attr('url_to_delete');
    var BACK_URL = $(link).attr('back_url');
    alertify.confirm("Do you want to delete the current Enterprise?", function (e) {
        if (e) {
    $.get(URL,function(data){
        if(data > 0)
        {
            alertify.success('Enterprise deleted');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in deleting the Enterprise. try again.');
        }
    });
    }
    else
    {
        alertify.error('Intention changed.');
    }
});
    return false;
}


function proceedToUrl(url)
{
    window.location.href = url;            

}

function goBack(link)
{
    var URL = $(link).attr('back_url');
    window.location.href = URL;
    return false;
}

function refreshWindow(link)
{
    var URL = $(link).attr('refresh_url');
    window.location.href = URL;
    return false;
}

function newPlan(link)
{
    var url = $(link).attr('url');
   // alert(url);
    $('#url').val(url);
    $('.modal-plan').modal('show');
    return false;
}

function subNewPlan(link)
{
    tinyMCE.triggerSave();
    var title = $('#dt_title').val();
    var des = $('#dt_desc').val();
    var url = $('#url').val();
    var e_id = $('#url').attr('e_id');
    var token = $('#url').next("input").val();
    var BACK_URL = $('#url').attr('back_url');
    $.post(url,{_token: token,ti : title, desc : des, eid : e_id},function(data){
        if(data > 0)
        {
            alertify.success('New Plan Added.');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in adding the new Plan, try again.');
        }
    });
    
}

function newSubPlan(link)
{
    var url = $(link).attr('url');
    var dt = $(link).attr('doctype');
    var eid = $(link).attr('e_id');
    var back_url = $(link).attr('back_url');
   // alert(url);
    $('#url2').val(url);
    $('#dt_id').val(dt);
    $('#e_id').val(eid);
    $('#back_url').val(back_url);
    $('.submodal').modal('show');
    return false;
}

function subNewSubPlan(link)
{
    tinyMCE.triggerSave();
    var title = $('#sub_title').val();
    var des = $('#sub_desc').val();
    var url = $('#url2').val();
    var e_id = $('#e_id').val();
    var doctype = $('#dt_id').val();
    var token = $('#url2').next("input").val();
    var BACK_URL = $('#back_url').val();
    $.post(url,{_token: token,ti : title, desc : des, eid : e_id, dt: doctype },function(data){
        if(data > 0)
        {
            alertify.success('Document Added to the Plan.');
            setTimeout(proceedToUrl(BACK_URL),2000);
        }
        else
        {
            alertify.error('Error occurred in adding the Document, try again.');
        }
    });
    
}

function share(link)
{
    var type = $(link).attr('id');
    var URL = $(link).attr('url');
    var SHARE_URL = $(link).attr('share');
  
    var title = $(link).attr('title');
    var TWITTER_SHARE_URL = "https://twitter.com/intent/tweet?url="+URL+"&text="+title+" Plans and Documnets";
    var FB_SHARE_URL = "https://www.facebook.com/sharer/sharer.php?u="+URL+"&title="+title+" Plans and Documnets";
    var GP = "https://plus.google.com/share?url="+URL;
    var LN_SHARE_URL = "https://www.linkedin.com/shareArticle?mini=true&url="+URL+"&title="+title+"&summary="+title+" Plans and Documnets&source=";
    switch(type)
    {
        case "twitter":
        alertify.confirm("Users on Twitter will be able to see enterprise's business idea, plans and documents. Do you want to share?", function (e) {
            if (e) {
               window.open(TWITTER_SHARE_URL);
            } else {
                alertify.error("Canceled");
            }
        });
        break;
        case "fb":
        alertify.confirm("Users on Facebook will be able to see enterprise's business idea, plans and documents. Do you want to share?", function (e) {
            if (e) {
               window.open(FB_SHARE_URL);
            } else {
                alertify.error("Canceled");
            }
        });
        break;
        case "gp":
        alertify.confirm("Users on googlePlus will be able to see enterprise's business idea, plans and documents. Do you want to share?", function (e) {
            if (e) {
               window.open(GP);
            } else {
                alertify.error("Canceled");
            }
        });
        break;
        case "ln":
        alertify.confirm("Users on Linkedin will be able to see enterprise's business idea, plans and documents. Do you want to share?", function (e) {
            if (e) {
               window.open(LN_SHARE_URL);
            } else {
                alertify.error("Canceled");
            }
        });
        break;
    };
}

function showPrintModal(link)
{
    var eid = $(link).attr('e_id');
    $('#e_id_print').val(eid);
    $('.printmodal').modal('show');
    return false;
}

function subPrint(form)
{
    var eid = $('#e_id_print').val();
    var url = $('#url_print').val();
    var users = $('#users').is(':checked') ? 1 : 0;
    var contacts = $('#contacts').is(':checked') ? 1 : 0;
    var documents = $('#documents').is(':checked') ? 1 : 0;
    var token = $('#url_print').next('input').val();
    
    $.post(url,{_token: token, e_id: eid, user: users, cont: contacts, docs: documents},function(data){
        alert(data);
    });
}

$('#fmodal').click(function(){
    $('.followers').modal('show');
});

function unfollow(link)
{
    var f_id = $(link).attr('f_id');
    var URL = $(link).attr('url');
    $.get(URL,function(data){
        if(data > 0)
        {
            $(link).text('follow');
            $('.item_'+f_id).remove();            
            alertify.success('Enterprise Unfollowed');
            
        }
        else
        {
            alertify.error("Either you have already unfollowed the user or there is some error.")
        }
    });
}

function proceedToRefresh()
{           
window.location.reload();
}

function followMatched(link)
{
    var url = $(link).attr('url');
    var class_id = $(link).attr('class_id');
    $.get(url,function(data){
        if(data > 0)
        {
            $(link).text('follow');
            $('.item_'+class_id).remove();            
            alertify.success('Enterprise followed');
            setTimeout(proceedToRefresh,2500);
            
        }
        else
        {
            alertify.error("Either you have already followed the user or there is some error.")
        }
    });
}

function deleteMsg(link)
{
    var url = $(link).attr('url');
    var back_url = $(link).attr('back_url');
    $.get(url,function(data){
        if(data > 0)
        {
            alertify.success('Message deleted.');
            setTimeout(proceedToUrl(back_url),2000);
        }
        else{
            alertify.error('error occurred in deleting the msg. Try again.');
        }
    });
}


function showInviteModal(link)
{
    var eid = $(link).attr('e_id');
    $('#e_id_print').val(eid);
    $('.invite').modal('show');
    return false;
}

function checkInviteForm(form)
{
    form.preventDefault();
    console.log(form);
    return false;
}

$('#inviteFormSubmit').submit(function(e){

    var API = "mHBa9Z9Hf1LVlUUJHBRDHQYrpRpQC9HYjHxWN1HeESf9BFw5QPUNQzFh270y";
    var URL = "https://www.bulksmsnigeria.com/api/v1/sms/create";
    /*
    FORM NAMES:
    @api_token
    @from
    @to
    @body
    */
    e.preventDefault();
    if(!($(this.emailInvite).is(":checked")) && !($(this.smsInvite).is(":checked")))
    {
        e.preventDefault();
        alertify.error("You haven't checked the method to invite. Check Email or SMS.");
    }

    else if(!($(this.emailInvite).is(":checked")) && !($(this.smsInvite).is(":checked")))
    {
        e.preventDefault();
        alertify.error("Please enter Mobile Number or Email of the User to invite. ");
    }

    else if($(this.emailInvite).is(":checked") && $(this.femail).val() == "")
    {
        e.preventDefault();
        alertify.error("Please enter Email of the User to invite. ");
    }

    else if($(this.smsInvite).is(":checked") && $(this.mobileNumber).val() == "")
    {
        e.preventDefault();
        alertify.error("Please enter Mobile Number of the User to invite. ");
    }
    else if($(this.emailInvite).is(":checked") && $(this.smsInvite).is(":checked"))
    {
        //alertify.success("both are set");
    }

    else if($(this.emailInvite).is(":checked"))
    {
        $('#inviteFormSubmit').unbind('submit').submit();
        //alertify.success("Email is set");
    }
    else if($(this.smsInvite).is(":checked"))
    {
        var TO = $(this.mobileNumber).val();
        var MESSAGE = $(this.invite_message).text();
        $.post(URL,{api_token: API, to: TO,from: "+2347082606", body: MESSAGE},function(data){
            //alert(data);
            console.log(data);
            if(data.status == "success" || data.status == 200)
            {
                alertify.success(data.message);
            }
            else
            {
                alertify.error(data.message);
                //'Possile error occurred due to insufficient balance in the account'
            }
        });
        //alertify.success("SMS is set");
    }
    
});


function deleteCreatedPlan(link)
{
    var DOC_ID = $(link).attr('doc_id');
    var URL = $(link).attr('url');
    $.get(URL,function(data){
        if(data > 0)
            {
                alertify.success("Plan deleted.");
                $('#'+DOC_ID).remove();
            }
            else
            {
                alertify.error("Error Occurred in deleting the Plan. Try agian.");
                
             }
    });
    
}

$('#addEvent').click(function(){
    $('.addEventagain').modal('show');

});

$('.viewresource').click(function(){
    var ID = $(this).attr('lr_id');
    $('#lr_id').val(ID);
    var title = $('#title'+ID).text();
    var desc = $('#desc'+ID).text();
    $('#exampleModalLabel').text(title);
    $('#modal-description').text(desc);
$('.viewResource').modal('show');
});

