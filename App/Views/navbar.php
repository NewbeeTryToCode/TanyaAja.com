<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light abu">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn abu mr-4">
            <i class="fas fa-bars"></i>
        </button>


        <!-- judul -->
        <?php if( isset($judul) ) : ?>
            <a class="navbar-brand" href="#"><h3 class="judul"><?php echo $judul ?></h3></a>
        <?php else : ?>
            <a class="navbar-brand" href="#"><h3 class="judul">Title</h3></a>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="#" class="btn abu shadow-sm rounded ml-2 "><i class="far fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn abu shadow-sm rounded ml-2"><i class="far fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn abu shadow-sm rounded ml-2"><i class="fas fa-cog"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../CRUD/Auth/logout.php" class="btn abu shadow-sm rounded ml-2"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- Nav Bar -->