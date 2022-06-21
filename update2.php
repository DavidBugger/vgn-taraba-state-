<?php

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];
        $user_id = $_POST['id'];

        $address = $_POST['address'];

        $salary = $_POST['salary'];



        $sql = "UPDATE `employees` SET `name`='$name',`address`='$address',`salary`='$salary', WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `employees` WHERE `id`='$user_id'";

    $result = $link->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['name'];

            $lastname = $row['address'];

            $email = $row['salary'];



        }

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="address" value="<?php echo $address; ?>">

            <br>

            Email:<br>

            <input type="email" name="salary" value="<?php echo $salary; ?>">

            <br>



            <input type="submit" value="Update" name="update">

          </fieldset>

        </form>

        </body>

        </html>

    <?php

    } else{

        header('Location: view.php');

    }

}

?>
