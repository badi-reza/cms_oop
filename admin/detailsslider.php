<?php include_once "_headeradmin.php";  ?>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown"> تنطیمات
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin.php" class="active">تنطیمات</a></li>
                                    <li><a href="detailSeo.php">جزییات</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#"> اسلایدر
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="formslider.php">تنطیمات</a></li>
                                    <li><a href="detailsslider.php">جزییات</a></li>
                                </ul>
                            </li>
                            <li class="main-button"><a href="../index.php" target="_blank">نمایش وبسایت </a></li>
                            <li class="main-button"><a href="logout.php">خروج</a></li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container" style="margin-top: 100px">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name image</th>
                    <th>image</th>
                    <th>caption</th>
                    <th>link</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once "Slider.php";
                $query = Slider::SelectSlider();
                $item = [];
                ?>

                <?php

                while ($item = mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['image'] ?></td>
                        <td><img src="../images/slider/<?php echo $item['image'] ?>" width="100px" height="100px"/></td>
                        <td><?php echo $item['caption'] ?></td>
                        <td><?php echo $item['link'] ?></td>
                        <!--                    <td><a href="deleteSeo.php?id=--><?php //echo $item['id'];  ?><!--">Delete</a></td>-->
                        <td>
                            <form method="post" action="deleteslider.php">
                                <input type="hidden" name="id" value="<?php echo $item['id'];  ?>">
                                <input type="hidden" name="path" value="../images/slider/<?php echo $item['image'] ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>

                        <td>
                            <form method="post" action="edit_slider.php">
                                <input type="hidden" name="id" value="<?php echo $item['id'];  ?>">
                                <input type="submit" value="Update">
                            </form>
                        </td>

                    </tr>

                <?php

                endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once "_jsadmin.php"; ?>