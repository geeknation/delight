<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>finished orders</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		
		<style type="text/css">
			.wrap{
				width:70%;
				margin:0 auto;
				margin-top:2%;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<table class="table table-bordered table-condensed">
			<thead>
				<th>Names</th>
				<th>Number</th>
				<th>Email</th>
				<th>Action</th>
			</thead>
			<tbody>
				<tr>
					<td>Hellen Kimberley</td>
					<td>0705433923</td>
					<td>hellen@gmail.com</td>
					<td><button id="0705433923">Alert customer</button></td>
				</tr>
				<tr>
					<td>Mike Odongo</td>
					<td>0705433923</td>
					<td>mike@live.com</td>
					<td><button id="0705433923">Alert Customer</button></td>
				</tr>
				<tr>
					<td>Good Customer</td>
					<td>0705433923</td>
					<td>good@customer.com</td>
					<td><button id="0705433923">Alert Customer</button></td>
				</tr>
				<tr>
					<td>Ian Mukunya</td>
					<td>0720121341</td>
					<td>ian@mukunya.com</td>
					<td><button id="0720121341">Alert Customer</button></td>
				</tr>
				<tr>
					<td>Maureen Chege</td>
					<td>0705433923</td>
					<td>maureen@yahoo.com</td>
					<td><button id="0705433923">Alert customer</button></td>
				</tr>
			</tbody>
		</table>
		
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="AlertifyJS/build/alertify.min.js"></script>
		<link rel="stylesheet" href="AlertifyJS/build/css/alertify.min.css">
		<link rel="stylesheet" href="AlertifyJS/build/css/themes/default.min.css">
		<script>
		
				$("button").addClass("btn btn-success");
				$("button").click(function(){
					
					var phone=$(this).attr("id");
					
					$.post("sendAlert.php",{phonenumber:phone},function(data){
						 console.log(data.success);
						if(data.success=="true"){
							alertify.set('notifier','position', 'top-right');
							alertify.notify(data.response, 'success', 5);
						}else{
							alertify.set('notifier','position', 'top-right');
							alertify.notify(data.response, 'error', 5);
						}
					},"json");
					
					
				});
				
			
			
		</script>

	</body>
</html>
