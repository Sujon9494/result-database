<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="cs/style.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Mark</th>
                        
                    <th scope="col">year</th>
                 </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "data.php";
                            $ob= new Data;

                            $sh = $ob->viewdata();
                            if($sh->num_rows>0)
                            {
                                while($d=$sh->fetch_object())
                                {
                                    ?>
                                        <tr>
                                            <td><?php echo $d->id; ?></td>
                                            <td><?php echo $d->name; ?></td>
                                            <td><?php echo $d->roll; ?></td>

                                            <td><?php echo $d->semester; ?></td>

                                            <td><?php echo $d->sub1; ?></td>
                                            <td><?php echo $d->mark1; ?></td>

                                            <td><?php echo $d->sub2; ?></td>
                                            <td><?php echo $d->mark2; ?></td>

                                            <td><?php echo $d->sub3; ?></td>
                                            <td><?php echo $d->mark3; ?></td>

                                            <td><?php echo $d->sub4; ?></td>
                                            <td><?php echo $d->mark4; ?></td>

                                            <td><?php echo $d->sub5; ?></td>
                                            <td><?php echo $d->mark5; ?></td>

                                            <td><?php echo $d->sub6; ?></td>
                                            <td><?php echo $d->mark6; ?></td>

                                            <td><?php echo $d->year; ?></td>
                                            
                                        </tr>
                                    <?php
                                }
                            } 
                        ?>
                    </tbody>
            </table> 
    </div>
</body>
</html>
