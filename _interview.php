<?php
include_once "admin/CssCms.php";

$query = CssCms::SelectCms();
$item = [];
$item = mysqli_fetch_assoc($query);
?>

<section class="section" id="call-to-action" style="background:url('images/interview/<?php echo $item['image']; ?> ') fixed no-repeat center center ; background-size:cover ; height:<?php echo $item['height']."px";  ?> ;">
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 offset-lg-1">
                <div class="cta-content">
                    <h2 style="color:<?php echo $item['color']; ?> ;">فکرنکنید, امروز شروع کنید!</h2>
                    <p style="font-family:<?php echo $item['font']  ?> ; font-size:20px; color:<?php echo $item['color']; ?> ; ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و </p>

                </div>
            </div>
        </div>
    </div>
</section>