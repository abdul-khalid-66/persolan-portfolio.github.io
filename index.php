<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link  -->
    <link rel="stylesheet" href="css/skin/color-1.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

    <!-- Style alternative colors -->
    <link rel="stylesheet" href="css/skin/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/skin/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/skin/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/skin/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/skin/color-5.css" class="alternate-style" title="color-5" disabled >
    <link rel="stylesheet" href="css/style.switcher.css">


    <title>Document</title>

</head>

<body>

    <!-- =========main container start   ========= -->
    <div class="main-container">
        <!-- ========= Aside start   ========= -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>K</span>han</a>
            </div>
            <div class="nav-toggler">
                <span><i class="fa fa-bars"></i></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fas fa-home"></i>home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>Service</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
        </div>
        <!-- ========= Aside end   ========= -->
        <!-- ========= main containt start   ========= -->
        <div class="main-containt">

            <!-- ========= home section start   ========= -->
            <?php
                    
                    $sql="SELECT * FROM `home_section_1` WHERE name='Abdul Khalid'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        $row=mysqli_fetch_assoc($result);
                        $name    =$row['name'];                         
                        $skill_1 = $row['skill_1'];                        
                        $skill_2 =$row['skill_2'];                         
                        $h_dic   = $row['h_disc'];
                    }
            ?>
            <section class="home section hidden-t" id="home">
    
                <div class="container padd-15" >
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello my name is <span class="name"> <?php echo $name; ?> </span></h3>
                            <h3 class="my-profession">I'm a <span class="typing"> <?php echo $skill_1;?> </span></h3>
                            <p><?php echo $h_dic;?></p>
                            <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="image/image.jpg" alt="">
                        </div>
                    </div>
                </div>

                

            </section>
            
            <!-- ========= home section end   ========= -->
            <!-- ========= About section start   ========= -->
            <?php
            $sql="SELECT * FROM `about_section_2` WHERE name='Abdul khalid'";
            $result = mysqli_query($con,$sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                $name           = $row['name'];
                $abo_h_skill    = $row['abo_h_skill'];
                $about_h_disc   = $row['about_h_disc'];
                $brithday       = $row['brithday'];
                $ages            = $row['age'];
                $website        = $row['website'];
                $email          = $row['email'];
                $degree         = $row['degree'];
                $phon           = $row['phon'];
                $address        = $row['address'];
                $freelance      = $row['freecance'];
            }
            
            else{
                echo "connection Problem";
            }
            $currentDate=date("Y-m-d");
            $age=date_diff(date_create($brithday),date_create($currentDate));


            ?>
            <section class="about section hidden-t" id="about">
                <div class="container">
                    <!-- row_1 -->
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About me</h2>
                        </div>
                    </div>
                    <!-- row_2 -->
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3> I'm Abdul khalid and I'm a <span> <?php echo "$abo_h_skill"?> </span></h3>
                                    <p><?php echo "$about_h_disc"?></p>
                                </div>
                            </div>
                            <!-- start-row_2.1 -->
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <!-- start-row_2.1.1 -->
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Brithday : <span><?php echo $brithday;?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>age : <span><?php echo  $age->format("%y"); ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>website : <span><?php echo "$website"?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span><?php echo "$email"?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>degree : <span><?php echo "$degree"?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>phon : <span><?php echo "$phon"?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span><?php echo "$address"?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance : <span><?php echo "$freelance"?></span></p>
                                        </div>
                                    </div>
                                    <!-- end-row_2.1.1 -->
                                    <!-- start-row_2.1.2 -->
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="image/image.jpg" Download rel='noopener noreferrer' target='' class="btn">Download CV</a>
                                            <a href="#contact" class="btn hire-me">Hire me</a>
                                        </div>
                                    </div>
                                    <!-- end-row_2.1.2 -->
                                </div>

                                <div class="skill padd-15">
                                    <!-- start-row_2.1.3 -->
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <!-- <input type="range"> -->
                                                <div class="progress-in" style="width: <?php echo '86%'?>;"></div>
                                                <div class="skill-percent"> 86%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 66%;"></div>
                                                <div class="skill-percent"> 66%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 96%;"></div>
                                                <div class="skill-percent"> 96%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent"> 90%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Bootstrap</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 80%;"></div>
                                                <div class="skill-percent"> 76%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end-row_2.1.3 -->
                                </div>
                            </div>
                            <!-- end-row_2.1 -->
                            <!-- start-row_2.2 -->
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                                <!-- timeline item  -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2019 - 2024
                                                    </h3>
                                                    <h4 class="timeline-title">Master in Computer Science</h4>
                                                    <p class="timeline-text">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Inventore quaerat architecto vero dolores voluptatem
                                                        voluptatibus, repellendus omnis cupiditate nihil quo
                                                        odit ad ex. Iusto vero
                                                        nesciunt repellat aspernatur eligendi doloremque.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end-row_2.2 -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========= About section end   ========= -->
            <!-- ========= service section start   ========= -->
            <section class="service section hidden-t" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>service</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                        <!-- =======service item start ======== -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>web Design</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consequuntur
                                </p>
                            </div>
                        </div>
                        <!-- =======service item end ======== -->
                    </div>
                </div>
            </section>
            <!-- ========= service section end   ========= -->
            <!-- ========= portfolio section start   ========= -->
            <section class="portfolio section hidden-t" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                        <h2>My last Projects :</h2>    
                        </div>
                    </div>
                    <div class="row">
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        <!-- ========= portfolio item start   ========= -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="image/large_6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- ========= portfolio item end   ========= -->
                        
                    </div>
                </div>
            </section>
            <!-- ========= portfolio section end   ========= -->
            <!-- ========= Contact Section start   ========= -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have you any question?</h3>
                    <h4 class="contact-sbu-title padd-15">I'M AT YOUR SERVICE</h4>
                    <div class="row">
                        <!-- ========= contact info item start   ========= -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>call us on </h4>
                            <p>+923498</p>
                        </div>

                        <!-- ========= contact info item end   ========= -->
                        <!-- ========= contact info item start   ========= -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>office </h4>
                            <p>Islamabad</p>
                        </div>

                        <!-- ========= contact info item end   ========= -->
                        <!-- ========= contact info item start   ========= -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email </h4>
                            <p>abdulkhalidmasood66</p>
                        </div>

                        <!-- ========= contact info item end   ========= -->
                        <!-- ========= contact info item start   ========= -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>website </h4>
                            <p>www.khalidmsd.com</p>
                        </div>

                        <!-- ========= contact info item end   ========= -->

                    </div>
                    <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                    <h4 class="contact-sbu-title padd-15">I'M VERY RESPONSIVE TO MESSAGES</h4>

                    <!-- ========= contact Form start   ========= -->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea name="" class="form-control " id="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>

                        </div>
                    </div>                    
                    <!-- ========= contact Form end   ========= -->
                </div>
            </section>
            <!-- ========= Contact Section end   ========= -->
        </div>
        <!-- ========= main containt end   ========= -->

    </div>
    <!-- ========= main container end   ========= -->
    <!-- ========= Style Switcher start   ========= -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas"></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- ========= Style Switcher end   ========= -->





    <!-- javaScript link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js">
    <script src="js/Script.js">    </script>
    <script src="js/style-switcher.js"></script>

</body>

</html>