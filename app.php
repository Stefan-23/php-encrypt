<html>
    <head>
        <title> Crypt your password </title>
    </head>
	<style>
	body{
		background-image: url('app.jpg');
		background-position:bottom;
		background-repeat:no-repeat;
		padding:0px;
		margin:0px;
	}
	#breaker{
		height:300px;
	}
	.wrapper{
		height:250px;
		width:300px;
		margin:auto;
	}
	h1{
		font-family: Aerial sans-serif;
		color: red;
	}
	#hash{
		width:300px;
		height:20px;
		background-color:green;
		margin:auto;
		padding:5px;
		border:2px solid red;
	}
	input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
		border: 2px solid black;
		border-radius:5px;
        
    }
	input[type=submit]{
        background-color: #000000;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
		margin-left: 95px;
		border-radius: 8px;
    }
	#result{
		height:16px;
		background-color: #FFFFFF;
		border-radius:6px;
		border: 2px solid black;
		padding:2px;
		font-family: Aerial, sans-serif;
	}

	</style>
<body>
    <div id="breaker"> </div>
    <div class="wrapper">
	<form action="#" method="GET" id="form">
        <input type="text" name="cryp">
		<br>
        <input type="submit" value="Submit" name="insert" id="btn">
		<br> <br>
		<div id="result">
		<?php
    
	    if(isset($_GET['insert'])){
		    if(isset($_GET['cryp'])){
			    if(!empty($_GET['cryp'])){
			        $name=trim($_GET['cryp']);
			        echo md5($name);
		        }else echo "Type in somehing....";
	        }
        }
?>
    <div>
    </form>
	</div>
</body>
</html>

