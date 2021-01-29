<?php include_once "_headeradmin.php";
session_start();
?>

<?php include_once "_menuadmin.php"; ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">

        <form role="form" method="post" action="Insert_Css.php" enctype="multipart/form-data">

            <select name="font" class="form-control form-group col-lg-4">
                <option value="B Yekan">B Yekan</option>
                <option value="B Nazanin">B Nazanin</option>
            </select>

            <div class="form-group col-lg-10 ">
                <input type="file" class="form-control" id="txt"
                       name="image"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="color" class="form-control" id="txt"
                       name="color" placeholder="color"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt"
                       name="height" placeholder="height"
                >
            </div>


            <input type="submit" class="form-group col-lg-4 form-control">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
