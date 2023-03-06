<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>

        <br /> <br />

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add']; //display session message
            unset($_SESSION['add']); //removing session message
        }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter the Name"></td>
                </tr>
                <tr>
                    <td>user name:</td>
                    <td><input type="text" name="username" placeholder="Your UserName"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Your password"></td>

                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>

<?php
// ??process the value from from an save it in database
// check whether the button is clicked or not

if (isset($_POST['submit'])) {
    //button clicked
    //echo "Button Clicked";

    //get the data from form

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //password encrypted

    //2.sql query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'
    ";

    // //3.Excute the query and save the data in the database
    // $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    // $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());

    //3.Excuting qury and saving data into data base
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    // 4.check wheather the (query is executed ) data is inserted or not and display appropriate message
    if ($res == TRUE) {
        //data inserted
        // echo "Data Insertrd";

        //create a session variable to display the message
        $_SESSION['add'] = "Admin Added Successfully";
        //redirect page TO MANAGE ADMIN
        header("location:" . SITEURL . 'admin/manage-admin.php');
    } else {
        //failed to insert data
        //echo "NOT inserted";
        //create a session variable to display the message
        $_SESSION['add'] = "Failed to Add Admin";
        //redirect page TO ADD ADMIN
        header("location:" . SITEURL . 'admin/add-admin.php');
    }
}

?>