

$(document).load()
{
    $('#notification-panel').hide();
    //================================================
    /*
        Context menu dissabled (RIGHT CLICK)
    */
    //================================================
    $(document).on("contextmenu",function()
    {
       return false;
    }); 
    //=================================================
}


$('#warning-panel-cross').click(function()
                                {
    $('#notification-panel').slideUp();
    $('.group-id').removeClass('has-error');
    $('.group-pw').removeClass('has-error');
    $('#user_id').removeAttr("disabled"); 
    $('#user_pw').removeAttr("disabled"); 
    $('.btn').removeAttr("disabled");
    var classrm = function()
    {
        $('.panel-x').removeClass('panel-danger');
    }
    setTimeout(classrm,900);
});

$('#user_login').click(function()
          {
    
    var user_id = $('#user_id').val();
    var user_pw = $('#user_pw').val();
    
    function _showError(pram)
    {
        $('#user_id').attr("disabled", "disabled"); 
        $('#user_pw').attr("disabled", "disabled"); 
        $('#notification-panel-heading-text').text(pram);
        $('.panel-x').addClass('panel-danger');
        $('.group-id').addClass('has-error');
        $('.group-pw').addClass('has-error');
        $('#notification-panel').slideDown();
        _lockInput();
    }
    
    function _showSuccess(pram)
    {
        //$('#user_pw').val(null);
        //$('#user_id').val(null);
        $('#user_id').attr("disabled", "disabled"); 
        $('#user_pw').attr("disabled", "disabled"); 
        $('#notification-panel-heading-text').text(pram);
        $('.panel-x').addClass('panel-success');
        $('.group-id').addClass('has-success');
        $('.group-pw').addClass('has-success');
        $('#notification-panel').slideDown();
        _lockInput();
    }
    
    function _lockInput()
    {
        $('#user_id').attr("disabled", "disabled"); 
        $('#user_pw').attr("disabled", "disabled"); 
        $('.btn').attr("disabled", "disabled"); 
    }
    
    function _removeALLDanger()
    {
        /*
        
        $('#user_pw').val(null);
        $('#user_id').val(null);
        var delay = function()
        {
            $('#notification-panel').slideUp();
            $('.group-id').removeClass('has-error');
            $('.group-pw').removeClass('has-error');
            var classrm = function()
            {
                $('.panel-x').removeClass('panel-danger');
            }
            setTimeout(classrm,1000);
        };
        setTimeout(delay,5000);
        
        */
    }
    
    if(user_id == '' || user_pw == '')
    {
        if(user_id == '')
        {
            $('.group-id').addClass('has-error');
            _lockInput();
            _removeALLDanger();
        }
        if(user_pw == '')
        {
            $('.group-pw').addClass('has-error');
            _lockInput();
            // _removeALLDanger();
        }
        $('#notification-panel-heading-text').text('ID | Password not found.');
        $('.panel-x').addClass('panel-danger');
        $('#notification-panel').slideDown();
        _removeALLDanger();
        _lockInput();
    }
    else
    {
        $.ajax(
            {
                url: 'app/http_scripts/welcome_script.php',
                type: 'POST',
                data: $('.inpbx').serialize(),
                success: function(result)
                {
                    //alert(result);  //THIS IS FOR DEBUGGING PURPOSE
                    if(result == 0)
                    {
                        _showError('ID | Password not found.');
                        _removeALLDanger();
                    }
                    else
                    {
                        _showSuccess('SUCCESS [ You will be redirected in 5 seconds ]');
                        $('.btn').fadeOut();
                        var delay = function()
                        {
                            location.reload();
                        };
                        setTimeout(delay,5000);
                    }
                }
            });
    }
});