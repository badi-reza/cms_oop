<?php
include_once "admin/TeamCms.php";
$id = $_POST['id'];
$query = TeamCms::SelectTeamId($id);
$item =[];
?>

<div class="row">
    <?php
    while ($item=mysqli_fetch_assoc($query)):
        ?>
        <div class="col-lg-10">
            <div class="trainer-item">
                <div class="image-thumb">
                    <img src="images/team/<?php echo $item['image'];?>" alt="<?php echo $item['image'];?>">
                </div>
                <div class="down-content">
                    <h4><?php echo $item['title']?></h4>
                    <p><?php echo $item['content']?></p>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    ?>
</div>