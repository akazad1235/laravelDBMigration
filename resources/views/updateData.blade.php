<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>





	
	<input type="text" name="id" id="myId" placeholder="enter yout id" ><br>
	<input type="text" name="name" id="myName" placeholder="name" ><br>
	<input type="text" name="roll" id="myRoll"  placeholder="roll"><br>
	<input type="text" name="class" id="myClass"  placeholder="class"><br>
	<input type="text" name="dpt" id="myDpt"  placeholder="depertment"><br>
	<button  onclick="SendUpdate()">Update</button>
		

	<script type="text/javascript" src="{{ asset('js/axios.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
</body>
</html>