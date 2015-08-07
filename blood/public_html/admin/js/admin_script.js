$(function(){
    
    //Delete user records.
    $('a#delete').click(function(){
        var hrefs = $(this).attr('href');
        var enaId = $(this).attr('data-target');
        var confrm = confirm('Are you sure, you want to Delete this records!');
        if(confrm == true)
        {
            window.location.href = hrefs + '/delete?' + enaId;
        }
        return false;
    });
    
}) /* End of main function */