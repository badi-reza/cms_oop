<?php include_once "_headeradmin.php";  ?>

<?php include_once "_menuadmin.php";  ?>

<div class="row">

    <div class="col-md-4" style="border: 1px solid orangered ; border-radius:10px ; margin: auto; background:white; margin-top:150px ; padding:10px ; ">
        <?php
        include_once "TeamCms.php";
        $id = $_POST['id'];
        $query = TeamCms::SelectTeamId($id);
        $item = [];
        $item = mysqli_fetch_assoc($query);
        ?>

        <form method="post" action="UpdateTeam.php" enctype="multipart/form-data" >


            <input type="text" class="form-control" value="<?php echo $item['title'] ?>"
                   name="title">


            <input type="file" placeholder="<?php echo $item['image']; ?>"
                   name="image">



            <textarea name="summary" class="form-control"><?php echo $item['summary']; ?></textarea>


            <textarea name="content" class="form-control"><?php echo $item['content']; ?></textarea>


            <input type="hidden" class="form-control" value="<?php echo $item['id'] ?>"
                   name="id">

            <input type="submit" value="submit" class="form-group col-lg-4 form-control">
        </form>

    </div>


</div>

<?php include_once "_jsadmin.php"; ?>

<!--end menu website-->
