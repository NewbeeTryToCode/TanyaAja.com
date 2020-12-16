<!-- Side Bar -->
<nav id="sidebar" class="shadow-lg p-4">
    <?php
            $tampil = mysqli_query($conn, "SELECT * FROM users");
            $data = mysqli_fetch_array($tampil)
    ?>
    <div class="sidebar-header d-flex flex-column align-items-center">
        <img class="avatarImg" src="../CRUD/Profile/uploads/<?=$data['prof']?>"  alt="<?=$data['prof']?>">
        <h5 class="mt-3 biru"><?=$data['username']?></h5>
        <p class="biru"><?=$data['email']?></p>
    </div>
    <div class="container shadow-sm">
        <ul class="list-group list-group-flush">
            <li class="list-group-item abu">
                <a href="profile.php">Profile</a>
            </li>
            <li class="list-group-item abu">
                <a href="#Questions" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Questions</a>
                <ul type="none" class="list-group list-group-flush" id="Questions">
                    <li class="abu">
                        <div class="container menuItem">
                            <div>
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <a href="public_questions.php">Public Questions</a>
                        </div>
                    </li>
                    <li class="abu">
                        <div class="container menuItem">
                            <div>
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="my_questions.php">My Questions</a>
                        </div>
                    </li>
                </ul>
            </li>
            <?php if( $user['role'] == 'admin' ) : ?>
                <li class="list-group-item abu">
                    <a href="#AdminTools" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin Tools</a>
                    <ul type="none" class="list-group list-group-flush" id="AdminTools">
                        <li class="abu">
                            <div class="container menuItem">
                                <div>
                                    <i class="fas fa-tools"></i>
                                </div>
                                <a href="admin_manage_question.php">Questions Manager</a>
                            </div>
                        </li>
                        <li class="abu">
                            <div class="container menuItem">
                                <div>
                                    <i class="fas fa-bell"></i>
                                </div>
                                <a href="admin_notif.php">Notifications</a>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<!-- Side Bar -->