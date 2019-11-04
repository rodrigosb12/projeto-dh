<?php include_once('header.php'); ?>

<main>
<body>

<section class="container header-profile">
    <div class="cover row">
        <div class="col upload-btn my-3">
            <div class="upload">
                <p class="profile-bg-edit d-inline">+ Upload Cover Photo</p>
                <i class="far fa-image fa-lg"></i>
            </div>
        </div>
    </div>
    <div class="edit-btn row">
        <button class="profile-photo-edit-bt btn btn-primary">
            <p class="profile-photo-upload-text d-inline">Edit</p>
            <i class="fas fa-camera"></i>
        </button>
    </div>
    
    <div class="row user-img img-fluid">
        <div class="col profile-img my-4">
        </div>
    </div>

    <div class="row user-name">
        <div class="col">
            <h2 class="user-name d-flex justify-content-center">
                UserName
            </h2>
            <p class="since d-flex justify-content-center">
                Member Since Always
            </p>
        </div>
    </div>

    <div class="container">
        <div class="profile-metrics-container row mt-3">
            <div class="profile-metrics col-md-12 col d-flex">
                <div class="group">
                <div class="profile-metrics-value">0</div>
                <div class="metric">Posts</div>
                </div>
                <div class="group">
                <div class="profile-metrics-value">0</div>
                <div class="metric">Coments</div>
                </div>
                <div class="group">
                <div class="profile-metrics-value">0</div>
                <div class="metric">Followers</div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light profile-navbar ">
        <div class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item px-5">
                    <a class="nav-link active" href="#">About <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="#">Discussions</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="container about mt-3">
    <div class="row about">
        <div class="col-6">
            <h4>About</h4>
        </div>
        <div class="col-6 d-flex edit-btn">
            <button class="profile-about-edit-bt btn">
                <p class="profile-about d-inline">Edit</p>
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </div>
    <div class="row description">
    <p class="col">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur minus molestiae, laboriosam maxime eveniet eaque quia deleniti hic provident nisi! Molestiae nisi iusto totam quae perspiciatis cupiditate ipsum deleniti. Deserunt!
    </p>
    </div>

    <div class="row communities">
        <div class="col-1">
            <h4>Minhas Comunidades</h4>
        </div>
    <div class="col-12 communities-icons d-flex">
        <div class="col c-icons">
        </div>
        <div class="col c-icons">
        </div>
        <div class="col c-icons">
        </div>
    </div>
    </div>

    
    
</section>


</body>
</main>




<?php include_once('footer.php'); ?>