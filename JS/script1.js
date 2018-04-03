$(document).ready(function () {
    //this script is for dynamically changing comments.
    
    $.ajax({
        type: "POST",
        url: "http://localhost/App/PHP/comment_fetch.php",
        success: function( data ) {
            var result = $.parseJSON(data);
            var i = 0;
            $.each(result, function(key, value){
                i += 1;
                var name = value['user_name'];
                var comm = value['comment'];
                if(i == 1) {
                    $('#dynamic_user1').text(name);
                    $('#dynamic_comment1').text(comm);
                }
                if (i == 2) {
                    $('#dynamic_user2').text(name);
                    $('#dynamic_comment2').text(comm);
                }
                if (i == 3) {
                    $('#dynamic_user3').text(name);
                    $('#dynamic_comment3').text(comm);
                }
                else if (i == 4) {
                    $('#dynamic_user4').text(name);
                    $('#dynamic_comment4').text(comm);
                }
            })
        }
    })

});