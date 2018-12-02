<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</head>
<body>
    <div class="container">               
            <?php
            include "data.php";

            $search = new Data;

            if(isset($_GET['search']))
            {
                $roll=$_GET['search'];
                $year=$_GET['year'];
                $data=$search->search($roll,$year);
            }
            else{
               echo "data not found";
            }

            if($data->num_rows>0)
            {
                while($d=$data->fetch_object())
                {
                   ?>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row mt-5">
                                <div class="col-md-4 mx-auto">
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <span>Name:<?php echo $d->name; ?></span>
                                            <span>Roll:<?php echo $d->roll; ?></span>
                                            <span>Reg:<?php echo $d->reg; ?></span>
                                            <span>Semester:<?php echo $d->semester; ?></span>
                                            <span>GPA:<?php echo $d->GPA; ?></span>

                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php
                }

            }
            else
            {
                echo "no result fuond";
            }
        
            ?>
        
     </div>       
</body>
</html>