<?php include_once "_headeradmin.php";
session_start();
?>

<?php include_once "_menuadmin.php"; ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">

        <form role="form" method="post" action="insert_seo.php">
            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt" placeholder="please enter name website"
                       name="title"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt" placeholder="please enter author website"
                       name="author"
                >
            </div>

            <textarea name="description" class="form-group col-lg-10 form-control" placeholder="please enter description"></textarea>

            <textarea name="keyword" class="form-group col-lg-10 form-control" placeholder="please enter keyword"></textarea>

            <input type="submit" class="form-group col-lg-4 form-control">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
