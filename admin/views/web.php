<?php 

include('header.php');
include('navbar.php');

?>

<div class="web">
    <div class="container">
        <a href="users.php" class="btn btn-primary">Back</a>
        <table class="table table-bordered table-striped table-responsive" id="datatable">
        <?php
                    
            $connection = mysqli_connect("localhost","root","","tax_heal");

            $query = "SELECT * FROM `web_form`";
            $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    
        ?>
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">fname</th>
                    <th scope="col">mname</th>
                    <th scope="col">lname</th>
                    <th scope="col">mother_name</th>
                    <th scope="col">email</th>
                    <th scope="col">birth_date</th>
                    <th scope="col">age</th>
                    <th scope="col">address</th>
                    <th scope="col">city</th>
                    <th scope="col">pin_code</th>
                    <th scope="col">state</th>
                    <th scope="col">ssc</th>
                    <th scope="col">hsc</th>
                    <th scope="col">Hq</th>
                    <th scope="col">skills</th>
                    <th scope="col">work_exp</th>
                    <th scope="col">exp</th>
                    <th scope="col">company</th>
                    <th scope="col">department</th>
                    <th scope="col">position</th>
                    </tr>
                </thead>
            <tbody>
            <?php
                                
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($data = mysqli_fetch_assoc($query_run))
                {
            ?>
                <tr>
                    <th scope="col"><?php echo $data['id'] ?></th>
                    <th scope="col"><?php echo $data['fname'] ?></th>
                    <th scope="col"><?php echo $data['mname'] ?></th>
                    <th scope="col"><?php echo $data['lname'] ?></th>
                    <th scope="col"><?php echo $data['mother_name'] ?></th>
                    <th scope="col"><?php echo $data['email'] ?></th>
                    <th scope="col"><?php echo $data['birth_date'] ?></th>
                    <th scope="col"><?php echo $data['age'] ?></th>
                    <th scope="col"><?php echo $data['address'] ?></th>
                    <th scope="col"><?php echo $data['city'] ?></th>
                    <th scope="col"><?php echo $data['pin_code'] ?></th>
                    <th scope="col"><?php echo $data['state'] ?></th>
                    <th scope="col"><?php echo $data['ssc'] ?></th>
                    <th scope="col"><?php echo $data['hsc'] ?></th>
                    <th scope="col"><?php echo $data['Hq'] ?></th>
                    <th scope="col"><?php echo $data['skills'] ?></th>
                    <th scope="col"><?php echo $data['work_exp'] ?></th>
                    <th scope="col"><?php echo $data['exp'] ?></th>
                    <th scope="col"><?php echo $data['company'] ?></th>
                    <th scope="col"><?php echo $data['department'] ?></th>
                    <th scope="col"><?php echo $data['position'] ?></th>
                </tr>
                <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
                                
                    ?>
            </tbody>
        </table>
    </div>
</div>
      




<?php 

include('scripts.php');
include('footer.php');

?>