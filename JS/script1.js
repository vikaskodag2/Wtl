(function($) {
//this script is for dynamically changing comments.
$(document).ready(function () {
     $.ajax({
        method : "GET",
        url : "../PHP/comment_fetch.php",
     }).done(function( data ){
        var result = $.parseJSON(data);
        var i = 0;
        $.each( result, function(key, value) {
            i = i + 1;

            //replace columns with actual columns in mysql table!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            var img_id = value['column_name_for_image_source'];
            var name = value['user_name'];
            var comment = value['comment'];

            if(i == 1) {
                var img_attr = document.getElementById('dynamic_img1');
                img_attr.src = img_id;
                $(#dynamic_user1).html(name);
                $(#dynamic_comment1).html(comment);
            }
            else if(i == 2) {
                var img_attr = document.getElementById('dynamic_img2');
                img_attr.src = img_id;
                $(#dynamic_user2).html(name);
                $(#dynamic_comment2).html(comment);
            }
            else if(i == 3) {
                var img_attr = document.getElementById('dynamic_img3');
                img_attr.src = img_id;
                $(#dynamic_user3).html(name);
                $(#dynamic_comment3).html(comment);   
            }
            else if(i == 4) {
                var img_attr = document.getElementById('dynamic_img4');
                img_attr.src = img_id;
                $(#dynamic_user4).html(name);
                $(#dynamic_comment4).html(comment);
            }

        })
     })
  });
})(jQuery);