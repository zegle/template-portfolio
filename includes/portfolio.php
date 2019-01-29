<div class="navigation">
    <!-- shows in mobile only -->
    <div class="navigation-logo">
        <h2 class="heading-quad">Portfolio</h2>
    </div>
    <label for="toggle2" class="black" style="margin-top: .5rem;">&#9776;</label>
    <input type="checkbox" id="toggle2">
    <div class="navigation-menu">
        <a href="index.html" class="active">All</a>
        <a href="#" class="black">Websites</a>
        <a href="#" class="black">Photography</a>
        <a href="#" class="black">Design</a>
        <a href="#" class="black">Other</a>
    </div>
</div>
<div class="mb-4">
    <ul class="heading-list mhide">
        <li><h2 class="heading-quad">Portfolio</h2></li>
        <li>
            <a href="#" class="active">All</a>
        </li>
        <li>
            <a href="#" class="">Websites</a>
        </li>
        <li>
            <a href="#" class="">Photography</a>
        </li>
        <li>
            <a href="#" class="">Design</a>
        </li>
        <li>
            <a href="#" class="">Other</a>
        </li>
    </ul>
</div>

<div class="container">
    <div class="row">
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2">
                <img src="images/portfolio1.jpg" alt="road" class="portfolio-img">
                <i class="fas fa-plus portfolio-caption white"></i>
            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2">  
                <img src="images/portfolio2.jpg" alt="road" class="portfolio-img">
                <i class="fas fa-plus portfolio-caption white"></i>
            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2">
                    <img src="images/portfolio3.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>
            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2">
                
                    <img src="images/portfolio4.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>

            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-6 mb-2s mb-2xs">
                
                    <img src="images/portfolio5.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>

            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-6 mb-2s mb-2xs">
                
                    <img src="images/portfolio6.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>

            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2s mb-2xs">
                
                    <img src="images/portfolio7.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>

            </div>
        </div>
        <div class="col3l col3m col4s col12xs">
            <div class="portfolio mb-2xs">
                
                    <img src="images/portfolio8.jpg" alt="road" class="portfolio-img">
                    <i class="fas fa-plus portfolio-caption white"></i>

            </div>
        </div>
    </div>
    <div class="row">
    <?php
    $dirname = "uploads/";
    $images = glob($dirname."*.jpg");

    foreach($images as $image) {
        echo '<div class="col3l col3m col4s col12xs"><div class="portfolio mb-2xs"><img src="'.$image.'" alt="road" class="portfolio-img"><i class="fas fa-plus portfolio-caption white"></i></div></div>';
    }
    ?>
    </div>
    <div class="row mb-6 mb-6s">
        <form action="uploads/upload.php" method="post" enctype="multipart/form-data">
            <div class="col4m col4s"></div>
            <div class="col4m col4s col12xs">
                <label for="upload" class="btn-2">Upload an image</label>
                <input id="upload" type="file" onchange="this.form.submit()" name="fileToUpload" style="display:none">
            </div>
            <div class="col4m col4s"></div>
        </form>
    </div>
</div>