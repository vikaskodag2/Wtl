<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Your Order - McDonalds</title>
	<meta charset="utf-8">
	<link href="CSS/style1.css" rel="stylesheet" type="text/css">

	<style>
	        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style> 

	<script src="MISC/jquery/jquery.min.js"></script>

	<script >
	$(document).ready(function(){	
	});
	
	function hello()
	{
 /* Get from elements values */
	var values = $('#form1').serialize();
	$.ajax({url: "localhost://App/PHP/blog.php",
			type: "post",
			data: values ,
			success: function (response) {
           // you will get response from your php page (what you echo or print)  
			alert('Your order is confirmed!');
        },
        error: function(jqsXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

	};

	</script>		

	</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="Images/mcdlogo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="Images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="list.html">Menu</a>
				</li>
				<li>
					<a class="active" href="blog.php">Your Order</a>
				</li>
				<li>
					<a href="ship.php">Show Bill</a>
				</li>

			</ul>
		</div>
	</div>
	<div id="body">
		<div id="section">

	
  <form id="form1" method="post">
    <div><h1>Please fill the follwing form to continue...</h1></div>
<legend><fieldset>

  <h3 style='font-size:20px;border-bottom:1px solid rgb(233, 232, 232);padding-bottom:5px;'>Contact Information</h3>

	<div id='continer_div2' class='view_wrapper' onclick=view_select('continer_div2',2) >
	<div class='fg-outlined'>
			<input onfocus=view_select('continer_div2',2) type='text' name='name' id='text_element0' data-title='true' data-label='First Name' placeholder='First Name'  />
	</div></div>


	<div id='continer_div4' class='view_wrapper' onclick=view_select('continer_div4',4)>
	<div class='fg-outlined'>
			<input onfocus=view_select('continer_div4',4) type='text' name='number' id='text_element2' data-title='true'  data-label='Phone ' placeholder='Phone ' />
	</div></div>


	<div id='continer_div5' class='view_wrapper' onclick=view_select('continer_div5',5)>
	<div class='fg-outlined'>
			<textarea onfocus=view_select('continer_div5',5) name='address' id='text_element4'  rows='6' cols='40' data-label='Address' placeholder='Address' ></textarea>
	</div></div>

	<div class='fg-outlined'><span></span></div>

 						<input id="form1" type="button" value="Submit  Details" onClick="hello()">
</legend></fieldset>
</form>
 </div> </div>
</body>
</html>