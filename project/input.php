<?php
    include "data.php";
    $ob=new Data;
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $roll=$_POST['roll'];
        $semester=$_['sem'];
        $sub1=$_POST['suba'];
        $sub2=$_POST['subb'];
        $sub3=$_POST['subc'];
        $sub4=$_POST['subd'];
        $sub5=$_POST['sube'];
        $sub6=$_POST['subf'];

        $num1=$_POST['num_1'];
        $num2=$_POST['num_2'];
        $num3=$_POST['num_3'];
        $num4=$_POST['num_4'];
        $num5=$_POST['num_5'];
        $num6=$_POST['num_6'];

        $ob->insert($name,$roll,$semester,$sub1,$num1,$sub2,$num2,$sub3,$num3,$sub4,$num4,$sub5,$num5,$sub6,$num6);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/anp.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <h2>Fill up the result form <h2>
            <p class="bot"></P>
            <form method="post" action="#">
				<select class="form-control" name="sem">
                    <option>Select your semester</option>
					<option  value="1st">1st</option>
					<option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
				</select>
                <div class="row mt-4 ">
                    <div class="col-6">
                        <input type="text" name="name" class="form-control" placeholder="Your name">
                    </div>
                    <div class="col-6">
                        <input type="number" name="roll" class="form-control" placeholder="Your roll" require>
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="suba" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_1" class="form-control" placeholder="mark">
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="subb" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_2" class="form-control" placeholder="mark">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="subc" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_3" class="form-control" placeholder="mark">
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="subd" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_4" class="form-control" placeholder="mark">
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="sube" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_5" class="form-control" placeholder="mark">
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-6">
                        <input type="text" name="subf" class="form-control" placeholder="Your subject">
                    </div>
                    <div class="col-6">
                        <input type="number" name="num_6" class="form-control" placeholder="mark">
                    </div>
                </div>  
				<button type="submit" class="btn btn-info btn-lg mt-3" name="submit">Submit</button>
			    <button type="reset" class="btn btn-danger btn-lg mt-3" name="reset">Clean</button>
			</form>
    </div>
</body>
</html>