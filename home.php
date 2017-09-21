<?php
  $title = "Home | Makeroid";
  include "assets/templates/header.php";

  $servername = "localhost";
  $username = "";
  $password = "";
  $dbname = "";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM testimonials ORDER BY RAND() LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
?>

<section class="header12 cid-qqY0BFdvY6 mbr-parallax-background" id="header" data-rv-view="101">
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(15, 118, 153);">
    </div>
    <div class="container">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">
                        MAKEROID</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">
                        A modern app builder without coding<br>
                    </p>
                    <div class="mbr-section-btn align-center py-2">
                        <a class="btn btn-md btn-primary-outline display-4" href="#features"><span class="mbri-arrow-down mbr-iconfont mbr-iconfont-btn"></span>SEE MORE FEATURES</a> <a class="btn btn-md btn-secondary display-4" href="http://builder.makeroid.io" target="_blank"><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span>START NOW!</a>
                    </div>

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">

                                <span class="mbr-iconfont mbri-cloud" media-simple="true"></span>

                            </div>
                            <h5 class="mbr-fonts-style display-5">Cloud-Based Tool<br><em>No software required</em></h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">

                                    <span class="mbr-iconfont mbri-user" media-simple="true"></span>

                            </div>
                            <h5 class="mbr-fonts-style display-5">Google integration<br><em>No signup/login</em></h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">

                                    <span class="mbr-iconfont mbri-website-theme" media-simple="true"></span>

                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Easy to use<br><em>No coding</em></h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">

                                    <span class="mbr-iconfont mbri-responsive" media-simple="true"></span>

                            </div>
                            <h5 class="mbr-fonts-style display-5">Powerful tool<br><em>No waiting time</em></h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="features8 cid-qqY2eKt651 mbr-parallax-background" id="features" data-rv-view="104">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-cart-full" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Monetization</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Do you need to make an app for your business or just want to gain money?<br>Just add ads or InApp Purchases with us!</p>

                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-alert" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Push Notifications</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Thanks to our amazing engineer team, you can use a background push notification system!<br>This will allow you to send notifications to your users even if the app is closed</p>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-change-style" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Material Design</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       We have added Material Design theme to all app builds with us. If you run Android 5.0+, you will get an app with latest design templates from Google</p>

                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-plus" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Much more</h4>
                    <p class="mbr-text mbr-fonts-style display-7">We are open to every suggestion you want to add<br>If it's possible, we will do it to improve our builder</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info2 cid-qrhARMpiZE" id="status" data-rv-view="83">
    <div class="container">
        <div class="row">
            <div class="media-container-column col-12 col-lg-3 col-md-4 offset-md-1">
                <div class="mbr-section-btn align-left py-4">
                    <a class="btn btn-primary display-4" target="_blank" href="https://status.makeroid.io"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span>
                    STATUS</a>
                </div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    ARE OUR SERVERS DOWN?</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Check that at our status server!</h3>
            </div>
        </div>
    </div>
</section>

<section class="testimonials5 cid-qrmT11vsHd" id="testimonials" data-rv-view="86">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    OUR THOUGHTS
                </h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    Check here to see some of our thoughts
                </h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="media-container-column">
        <div class="mbr-testimonial align-center col-12 col-md-10">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src=<?php echo '"'.$row['image'].'"'; ?> media-simple="true">
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7">
                           <?php echo $row['text']; ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-7">
                             <?php echo $row['name']; ?>
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                               <?php echo $row['bio']; ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
  }
  include "assets/templates/footer.php";
?>
