<?php
    $errors = array();

    if(isset($_POST['login_admin']))
    {
        $admname = mysqli_real_escape_string($db, $_POST['admname']);
        $admpassword = mysqli_real_escape_string($db, $_POST['admpassword']);
      
        if (empty($admusername)) {
            array_push($errors, "Username is required");
        }
        if (empty($admpassword)) {
            array_push($errors, "Password is required");
        }
        if($admname=="Omkar" && $admpassword=="968956")
        {
            $db = mysqli_connect('localhost:3308', 'root', '', 'user');

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }



            $sql = "SELECT username,email FROM login";
            $result = mysqli_query($db,$sql);


            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table border=10px solid black>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Email</th></tr>";
                while($row = $result->fetch_assoc()) 
                {
                    print "<tr>";
                    print "<td>".$row["username"]."</td>";
                    print "<td>".$row["email"]."</td>";
                    print "</tr>";
                
                }
                echo "</table>";
            } else {
                print "0 results";
            }
            $db->close();
        }
        else
        {
            array_push($errors, "Wrong username/password combination");
        }
    }
    elseif(isset($_POST['reg_user']))
    {
        header('location:register.php');
    }
    elseif(isset($_POST['login_user']))
    {
        header('location:login.php');
    }
?>