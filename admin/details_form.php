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
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#"> team us
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="form_team.php">تنطیمات team</a></li>
                                    <li><a href="details_form.php">جزییات team</a></li>
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
                    <th>image</th>
                    <th>title</th>
                    <th>summary</th>
                    <th>content</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once "TeamCms.php";
                $query = TeamCms::SelectTeam();
                $item = [];
                ?>

                <?php

                while ($item = mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><img src="../images/team/<?php echo $item['image'] ?>" width="100px" height="100px"/></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['summary'] ?></td>
                        <td><?php echo $item['content'] ?></td>
                        <td>
                            <form method="post" action="delete_team.php">
                                <input type="hidden" name="id" value="<?php echo $item['id'];  ?>">
                                <input type="hidden" name="path" value="../images/team/<?php echo $item['image'] ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>

                        <td>
                            <form method="post" action="edit_team.php">
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