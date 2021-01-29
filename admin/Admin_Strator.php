<?php include_once "_headeradmin.php";
session_start();
?>

<?php include_once "_menuadmin.php"; ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">

        <?php
        include_once "LoginAdmin.php";
        $id = $_SESSION['id'];
        $query = LoginAdmin::SelectUserId($id);
        $item = [];
        $item = mysqli_fetch_assoc($query);

        ?>

        <form role="form" method="post" action="UpdateLogin.php">
            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt" value="<?php echo $item['username']?>"
                       name="username"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt"
                       name="password"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="hidden" class="form-control" id="txt"
                       name="id" value="<?php echo $id; ?>"
                >
            </div>

            <input type="submit" class="form-group col-lg-4 form-control" value="submit">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
