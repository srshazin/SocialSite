
<?php include 'action.php'?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Chat System in PHP</title>
	<!-- <script type="text/javascript" src="jquery-3.1.1.min.js"></script> -->
	    <link rel="stylesheet" type="text/css" href="Chatroom/css/ScrollBar.css">
		<link rel="stylesheet" type="text/css" href="Chatroom/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="Chatroom/js/main.js"></script>
	
	<style type="text/css">
		hr{
			height: 2px;
		}
		.btn{
			height: 24px;
			line-height: 12px;
		}
.chat2 {
  width: 50%;
  margin-bottom: 40px;
  border: 1px solid #ddd ;
 align-content: left;
 text-align: left;
 align-items: left;
  background: #fff;
  padding: 10px;
}
		
	</style>
	</head>
	<br><br><br><br><br>
<body>

<div class="container">

	<div class="row">
		<h3  align="center"><font color="#E32F75"></font></h3>
				<hr color="#E32F75">
		<div class="col-sm-3">
			<div class="panel panel-success">
				<div class="panel-heading" align="center"></div>
				<div class="panel-body">
					<div id="Userlog"> 
						<!-- <a href="logout.php" style="float: right;" class="btn btn-danger btn-sm">Logout</a> --></div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-success">
				<div class="panel-heading" align="center"></div>
				<div class="panel-body" style="" class="scrollbar" id="style-2">
					<div class="chat2"><div id="show"></div>

			
				<div class="panel-footer" id="footer">
					<div class="row">
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['username'] ?>"  class="form-control" >




						<table><td><div class="col-sm-10"><input type="text" name="msg" id="msg"  class="form-control" size="45"></div></td>
						<td valign="middle"><div class="mm" style="margin-left: -20px">
							<input type="reset" name="send" id="send" value="Send" style="margin-left: -15px; padding: 5px; margin-right: 50px; background: #03c6b6;color: #fff; border: 1px solid: #03c6b6"></td></table>
						</form>
						</div>
					</div></div>
					
					
					
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

</body>
</html>
<script type="text/javascript">$(document).ready(function(){

             $("#send").click(function(){

             	var name = $("#name").val();
				var msg = $("#msg").val();

             	$.post("action.php", {submit:1,userName:name,userMsg:msg}, function(data){

             		$("#done").text(data);
             	});
             });

     setInterval(function () {
                $('#show').load('data.php')
            }, 1000);

		});</script>