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
                        <li class="scroll-to-section"><a href="#top" class="active">اسلایدر</a></li>
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
                    <th>title</th>
                    <th>description</th>
                    <th>keyword</th>
                    <th>author</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once "SeoWebsite.php";
                $query = SeoWebsite::SelectSeoData();
                $item = [];
                ?>

<?php

while ($item = mysqli_fetch_assoc($query)):
    ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['title'] ?></td>
                    <td><?php echo $item['description'] ?></td>
                    <td><?php echo $item['keyword'] ?></td>
                    <td><?php echo $item['author'] ?></td>
<!--                    <td><a href="deleteSeo.php?id=--><?php //echo $item['id'];  ?><!--">Delete</a></td>-->
                    <td>
                        <form method="post" action="deleteSeo.php">
                            <input type="hidden" name="id" value="<?php echo $item['id'];  ?>">
                            <input type="submit" value="Delete">
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