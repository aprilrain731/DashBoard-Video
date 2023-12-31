<?php
require_once("pdo-connect.php");
session_start();

$message = ""; 

if(isset($_POST['submit'])) {
    $email_login = $_POST['email'];
    $pwd_login = $_POST['password'];
    
    
    if(empty($email_login) || empty($pwd_login)) {
        $message = "此欄位為必填";
    } else {
        $sql = "SELECT `name`,`avatarname`,`email`, `password` FROM `employee`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        
        foreach ($rows as $row) {
            if ($email_login == $row["email"] && $pwd_login == $row["password"]) {
                $_SESSION["email"] = $email_login;
                $_SESSION["user"] = $row["name"];
                $_SESSION["avatar"] = $row["avatarname"];
				echo "<script>alert('登入成功'); location.href ='../../index.php';</script>";
				
                exit();
            } else {
                $message = "帳號密碼錯誤";
            }
        }
    }
}
?>

<html>
  <head>
    <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>員工登入</title>
<!-- 	Add in production:normalize,	main.css	 -->
 <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
 
 <style>
    /* TODO 
   1.Add moving asteroids
   2.
*/

*,*:before, *:after {
	box-sizing:border-box;
}

body {
/* 	background-color:#C9C9C9; */
	font-family:"Lato",sans-serif;
	color:#fff;
}

form {
	max-width:300px;
	margin:70px auto 10px;
	padding:10px 20px;
	position:relative;
	opacity:1;
	box-shadow: 0px 10px 120px -8px rgba(0,0,0,1.53);
}

form:before {
	content:"";
	display:block;
	position:absolute;
	top:0;
	left:0;
	background-image:url(http://farm8.staticflickr.com/7025/6843559729_635a06485d.jpg);
	background-size:fill;
	background-position:center;
	background-color:#000;
	width:100%;
	height:100%;
	opacity:1.5;
	z-index:-1;
}

#orbit{
	width: 44px;
	position: absolute;
	bottom: 60px;
 left: 430px;
	fill:#fff;
}

/* 
ICON CREDIT:
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div> */

h4{
    font-size:35px;
	margin:40px 0 30px 160px;
	text-align:left;
}

h4:after{
	content:"";
	height:2px;
	width:50px;
	display:block;
	border-bottom:1px solid #FFF;
	background:white;
}

input[type="text"],
input[type="password"]{
	border:none;
	font-size:16px;
	height:auto;
	margin:0;
	outline:0;
	padding:10px;
	margin-bottom:20px;
	color:#fff;
	background:none;
	width:100%;
	border-bottom:1px solid #fff;
}

input[type="checkbox"]{
	margin:9px 10px 0px 0;
	zoom:.99;
}

button {
	padding:10px;
	margin:0 0 0 50px;
	color:#fff;
	background-color:#307FE4;
	font-size:11px;
	text-align:center;
	font-style:normal;
	border-radius:35px;
	width:30%;
	border:1px solid #307FE4;
}

label{
	color:#FFFFFF;
	clear:both;
	float:left;
}

span{
	font-size:14px;
}

#forgot{
	text-align: center;
	background: none;
	display: block;
	color: rgba(255, 255, 255, 0.42);
	text-decoration: none;
	padding:20px;
	margin-top:10px;
	font-size:13px;
}

#remember{
	
}

#checkbox:after{
	content="Remember me";
	width:100%;
	height:100%;
	background:grey;
}

/*********************Media Queries**********************/
@media screen and (min-width:480px){
	form{
		max-width:500px;
	}
}
 </style>
	</head>
  <body>
			<div class="container">
			 <form action="" method="post">
<!-- SVG -->
					<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="orbit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="497.398px" height="497.398px" viewBox="0 0 497.398 497.398" style="enable-background:new 0 0 497.398 497.398;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M248.699,78.499C154.85,78.499,78.5,154.85,78.5,248.687c0,93.85,76.362,170.193,170.199,170.193
			s170.194-76.344,170.194-170.193C418.893,154.85,342.536,78.499,248.699,78.499z M211.192,107.47
			c9.528-2.534,19.442-4.11,29.643-4.659c0.403,8.022,0.917,19.682,1.349,34.208h-35.86
			C208.366,123.76,210.165,113.198,211.192,107.47z M158.161,134.03c12.004-9.505,25.549-17.101,40.163-22.49
			c-1.098,6.381-2.557,15.174-4.134,25.491h-36.666C157.729,135.991,157.968,134.929,158.161,134.03z M155.101,148.988h37.326
			c-1.693,11.899-3.393,25.053-4.817,38.564h-39.229C150.518,173.166,152.982,159.678,155.101,148.988z M146.717,199.509h39.708
			c-1.337,14.848-2.248,29.654-2.318,43.141h-40.753C143.395,229.548,144.767,214.444,146.717,199.509z M141.97,148.988h0.899
			c-2.131,10.883-4.549,24.324-6.627,38.564h-20.254C122.586,173.3,131.362,160.315,141.97,148.988z M111.108,199.509h23.529
			c-1.875,14.836-3.2,29.882-3.241,43.141h-28.673C103.348,227.563,106.238,213.078,111.108,199.509z M102.711,254.607h29.047
			c0.73,13.218,2.558,28.095,4.864,42.832h-25.684C106.145,283.953,103.325,269.578,102.711,254.607z M144.364,351.037
			c-11.806-12.027-21.479-26.133-28.603-41.641h22.811c2.692,15.484,5.658,30.127,8.18,41.641H144.364z M143.739,254.607h40.56
			c0.456,13.102,1.734,27.803,3.434,42.832h-38.984C146.384,282.656,144.493,267.732,143.739,254.607z M150.757,309.396h38.383
			c1.821,14.352,3.923,28.586,6.014,41.641h-36.135C156.543,339.792,153.507,325.021,150.757,309.396z M162.551,366.661
			c-0.251-1.098-0.531-2.265-0.841-3.667h35.417c1.506,9.016,2.943,17.143,4.198,23.938
			C187.301,382.132,174.281,375.244,162.551,366.661z M238.236,394.453c-8.227-0.607-16.249-1.857-24.055-3.76
			c-1.354-7.264-3.065-16.77-4.893-27.676h29.835L238.236,394.453z M239.445,351.037h-32.142
			c-2.102-13.031-4.232-27.266-6.072-41.641h39.375L239.445,351.037z M240.951,297.439h-41.156
			c-1.746-15.11-3.071-29.847-3.55-42.832h45.914L240.951,297.439z M242.458,242.65h-46.405c0.093-13.358,1.004-28.194,2.406-43.141
			h44.589C243.024,213.119,242.854,227.598,242.458,242.65z M199.649,187.552c1.46-13.54,3.194-26.688,4.893-38.564h37.962
			c0.269,11.59,0.467,24.54,0.543,38.564H199.649z M394.674,242.65h-32.054c-0.21-13.417-1.564-28.434-3.444-43.141h27.103
			C391.16,213.078,394.055,227.563,394.674,242.65z M355.428,148.988c10.603,11.327,19.383,24.312,25.969,38.564H357.53
			c-2.125-14.503-4.555-28.008-6.609-38.564H355.428z M350.652,242.65h-38.499c0-0.49,0.022-1.039,0.022-1.53
			c0-12.868-1.027-27.155-2.568-41.611h37.483C349.029,214.298,350.454,229.391,350.652,242.65z M345.409,187.552h-37.18
			c-1.682-13.324-3.726-26.49-5.792-38.564h36.304C340.738,159.27,343.213,172.903,345.409,187.552z M334.993,130.9
			c0.21,0.917,0.654,2.96,1.308,6.131h-36.012c-1.938-10.58-3.807-19.799-5.313-26.986
			C309.478,114.896,322.895,122.037,334.993,130.9z M254.42,242.65c0.374-15.04,0.561-29.52,0.596-43.141h42.54
			c1.611,14.55,2.686,28.889,2.686,41.611c0,0.491-0.047,1.04-0.047,1.53H254.42z M299.775,254.607
			c-0.748,13.195-2.429,27.908-4.624,42.832h-42.225l1.202-42.832H299.775z M296.131,187.552h-41.115
			c-0.082-14.013-0.245-26.951-0.537-38.564h35.768C292.336,161.015,294.403,174.205,296.131,187.552z M281.956,106.373
			c1.518,7.076,3.736,17.842,6.13,30.646h-33.934c-0.432-14.503-0.945-26.245-1.343-34.401
			C262.805,102.904,272.543,104.183,281.956,106.373z M276.793,392.21c-8.629,1.682-17.515,2.615-26.611,2.709l0.899-31.902h32.159
			C280.624,375.558,278.312,385.707,276.793,392.21z M251.431,351.037l1.168-41.641h40.706c-2.335,14.539-4.998,28.831-7.59,41.641
			H251.431z M332.143,368.482c-12.798,8.945-26.997,15.998-42.317,20.506c1.564-6.797,3.538-15.671,5.698-25.994h37.857
			C332.903,365.12,332.494,366.964,332.143,368.482z M335.973,351.037h-38.009c2.581-12.879,5.196-27.148,7.509-41.641h38.441
			C341.298,324.904,338.379,339.593,335.973,351.037z M307.271,297.439c2.138-14.865,3.784-29.543,4.496-42.832H350.5
			c-0.584,12.938-2.383,27.931-4.672,42.832H307.271z M353.022,351.037h-4.811c2.452-11.688,5.324-26.273,7.87-41.641h25.55
			C374.508,324.916,364.839,339.009,353.022,351.037z M357.973,297.439c2.219-14.842,3.947-29.765,4.508-42.832h32.205
			c-0.607,14.97-3.434,29.345-8.244,42.832H357.973z"/>
		<path d="M440.25,90.287c2.674-5.237,4.297-11.093,4.297-17.37c0-21.369-17.329-38.698-38.698-38.698
			c-7.87,0-15.191,2.382-21.299,6.434C345.456,15.028,298.829,0,248.699,0C111.563,0,0,111.563,0,248.699
			s111.563,248.699,248.699,248.699s248.699-111.563,248.699-248.699C497.398,188.556,475.923,133.335,440.25,90.287z
			 M248.699,473.483c-123.935,0-224.784-100.843-224.784-224.784c0-123.935,100.85-224.784,224.784-224.784
			c44.56,0,86.002,13.201,120.975,35.633c-1.541,4.186-2.511,8.646-2.511,13.358c0,21.375,17.317,38.692,38.687,38.692
			c6.282,0,12.133-1.641,17.376-4.279c31.364,38.645,50.258,87.835,50.258,141.369C473.483,372.64,372.639,473.483,248.699,473.483z
			"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
<!-- 					/SVG -->

					<h4>員工登入</h4>
					
					<label for="username">帳號：</label>
					<input type="text" id="email" name="email" required/>
					<?php echo $message; ?>

					<label for="password">密碼：</label>
					<input type="password" id="password" name="password" required/>
					
					<label><input type="checkbox" id="checkbox" name="remember"/>Remember me</label>
					<button type="submit" name="submit">LOGIN</button>
					
    </form>
			</div>
   

			

			
  </body>
</html>

