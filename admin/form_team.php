<?php include_once "_headeradmin.php";  ?>

<?php include_once "_menuadmin.php";  ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">

        <form role="form" method="post" action="Insert_Team.php" enctype="multipart/form-data">
            <div class="form-group col-lg-10 ">
                <input type="file" class="form-control" id="txt" placeholder="please enter image"
                       name="image"
                >
            </div>

            <div class="form-group col-lg-10 ">
                <input type="text" class="form-control" id="txt" placeholder="please enter title website"
                       name="title"
                >
            </div>

            <textarea name="summary" class="form-group col-lg-10 form-control" placeholder="please enter summary"></textarea>

            <textarea name="content" class="form-group col-lg-10 form-control" placeholder="please enter content"></textarea>

            <input type="submit" class="form-group col-lg-4 form-control">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
