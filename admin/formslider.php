<?php include_once "_headeradmin.php";  ?>

<?php include_once "_menuadmin.php";  ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid orangered ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">

        <form method="post" action="insert_slider.php" enctype="multipart/form-data" >

                <input type="file" placeholder="please enter image"
                       name="image">



                <input type="text" class="form-control" placeholder="please enter caption website"
                       name="caption">



                <input type="text" class="form-control" placeholder="please enter link website"
                       name="link">

            <input type="submit" value="submit" class="form-group col-lg-4 form-control">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
