<?php
include_once "admin/TeamCms.php";

$query = TeamCms::SelectTeam();
$item =[];
?>

<div class="row">
    <?php
    while ($item=mysqli_fetch_assoc($query)):
    ?>
    <div class="col-lg-3">
        <div class="trainer-item">
            <div class="image-thumb">
                <img src="images/team/<?php echo $item['image'];?>" alt="<?php echo $item['image'];?>">
            </div>
            <div class="down-content">
                <h4><?php echo $item['title']?></h4>
                <p><?php echo $item['summary']?></p>
                <ul class="social-icons">
                    <form method="post" action="team.php">
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <input type="submit" value="Read More" class="btn btn-success">
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <?php
    endwhile;
    ?>
</div>