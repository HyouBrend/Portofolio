<?php
if (isset($_POST['send'])) {
    $koneksi = mysqli_connect('localhost', 'root', '', 'contactme_db');

    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $number = mysqli_real_escape_string($koneksi, $_POST['number']);
    $msg = mysqli_real_escape_string($koneksi, $_POST['message']);

    $query = "INSERT INTO contactme_form (name, email, number, message) VALUES ('$name','$email','$number','$msg')";

    if (mysqli_query($koneksi, $query)) {
        echo 'Your massage successfully!';
    } else {
        echo 'Failed to sent massage. ' . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>
    <?php
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '
        <div class="messages">
            <span>
            ' . $msg . '
            </span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
    ?>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars" data-aos="fade-right"></div>
        <a href="#home" class="logo">Portofolio</a>
        <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="social">
            <a href="https://github.com/HyouBrend" class="fab fa-github"></a>
            <a href="https://www.linkedin.com/in/theochristiansir/" class="fab fa-linkedin"></a>
            <a href="https://www.instagram.com/theochristian.sir/" class="fab fa-instagram"></a>
            <a href="https://wa.me/+6285710845996" class="fab fa-whatsapp"></a>
            <a href="mailto:theochristian.sir@gmail.com" class="fa fa-envelope"></a>
        </div>
    </header>
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="assets/foto.jpg" alt="foto">
        </div>
        <div class="content">
            <h3 data-aos="fade-up">Hi, I am</h3>
            <h3 data-aos="fade-up">
                Theodorus Christian Siringo Ringo
            </h3>
            <span data-aos="fade-up">
                Web Development & Web Design
            </span>
            <p data-aos="fade-up">
                A Web Development and Web Designer who has several skills. Previously worked also as Content Writing.
            </p>
            <a href="#about" class="btn" data-aos="fade-up">About Me</a>
        </div>
    </section>
    <section class="about" id="about">
        <h1 class="heading data-aos=" fade-up""><span>Biography</span></h1>
        <div class="biography">
            <p data-aos="fade-up">A graduate from West Jakarta High School, majoring in Mathematics and Natural Sciences
                who aspires to be a programmer. Achieved several achievements through several platforms to learn
                Programming. Besides that, he also studied other external learning, such as Programming languages,
                learning about Machine Learning, Creating websites with HTML, CSS, & JavaScript and Multi-Platform App
                Development with Flutter and Google at Dicoding. In addition, it can do graphic design by creating
                labels and photos and can also do web design with Figma. Not only that, can create high quality and
                informative articles with previous experience being Content Writing.</p>
            <div class="bio">
                <h3><span data-aos="zoom-in">Name: </span>Theodorus Christian Siringo Ringo</h3>
                <h3><span data-aos="zoom-in">Email: </span>theochristian.sir@gmail.com</h3>
                <h3><span data-aos="zoom-in">Addres: </span>DKI Jakarta, Indonesia</h3>
                <h3><span data-aos="zoom-in">Phone: </span>+62 857-1084-5996</h3>
            </div>
            <a href="https://drive.google.com/drive/folders/1eaumnB6WfgRHzGrU_uGxUqkghxdEJXBS?usp=sharing" class="btn"
                data-aos="fade-up">Download CV</a>
        </div>
        <div class="skills" data-aos="fade-up">
            <h1 class="heading"><span>Skills</span></h1>
            <div class="progress">
                <div class="bar" data-aos="fade-right">
                    <h3><span>HTML</span><span>95%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>CSS</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>React.JS</span><span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JavaScript</span><span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>PHP</span><span>50%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>Flutter</span><span>55%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>Python</span><span>50%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>MySQL</span><span>60%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>Content Writing</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>SEO Specialist</span><span>70%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>Design</span><span>70%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>Figma</span><span>80%</span></h3>
                </div>
            </div>
            <div class="edu-exp">
                <h1 class="heading" data-aos="fade-up"><span>Education & Experience</span></h1>
                <div class="row">
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-right">Education</h3>
                        <div class="box" data-aos="fade-right">
                            <span>2019-2022</span>
                            <h3>SMA Negeri 85 Jakarta Barat</h3>
                            <p>Final Grade : 90.8 at Semester 6</p>
                        </div>
                    </div>
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-left">Experience</h3>
                        <div class="box" data-aos="fade-left">
                            <span>2022-2023</span>
                            <h3>Content Writing (PT Promedia Teknologi Indonesia)</h3>
                            <p>Wrote and edited high-quality articles, blog posts, and website copy that drove organic
                                traffic to the company website and wrote and edited press releases that increased media
                                coverage and wrote articles reaching a daily target of 10 articles/day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <h1 class="heading" data-aos="fade-up"><span>Services</span></h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>Front-end development uses HTML, CSS, and JavaScript, with Frameworks such as ReactJS and Angular.
                </p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-pen-nib"></i>
                <h3>Graphic Design</h3>
                <p>Create several designs such as catalogs, flyers, and logos. In addition, it can edit several photos
                    and videos.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-regular fa-newspaper"></i>
                <h3>Content Writing</h3>
                <p>Content writers create writing for various purposes, such as websites, blogs, articles, social media,
                    and more. </p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-chart-line"></i>
                <h3>Digital Marketing</h3>
                <p>Marketing by posting some content to social media to publicize some products.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-wordpress"></i>
                <h3>Wordpress</h3>
                <p>Create with WordPress, different types of websites, such as blogs, business websites, portfolios, and
                    e-commerce stores.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-figma"></i>
                <h3>Web Design</h3>
                <p>Designing websites through Figma, designing web pages with visual elements such as layout, color, and
                    typography.</p>
            </div>
        </div>
    </section>
    <section class="portofolio" id="portofolio">
        <h1 class="heading" data-aos="fade-up"><span>Portofolio</span></h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="assets/c1.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c2.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c3.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c4.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c5.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c6.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c7.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c8.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c9.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c10.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c11.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c12.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c13.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c14.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c15.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c16.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c17.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c18.jpg" alt="">
                <h3>Sertificate</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="assets/c19.png" alt="">
                <h3>Portofolio Web Design</h3>
            </div>
    </section>
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"><span>Contact Me</span></h1>
        <form action="" method="post" class="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box"
                    required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box"
                required>
            <textarea data-aos="fade-up" name="message" required placeholder="Enter your message" cols="30" rows="10"
                class="box"></textarea>
            <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
        </form>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <a href="https://wa.me/+6285710845996" class="btn">+62 857-1084-5996</a>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <a href="mailto:theochristian.sir@gmail.com" class="btn">theochristian.sir@gmail.com</a>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Addres</h3>
                <a href="https://goo.gl/maps/7C3hDp6ZyWE1xarw8" class="btn">DKI Jakarta, Indonesia</a>
            </div>
        </div>
    </section>
    <div class="credit">&copy; copyright @ 2023 by <span>Theodorus Christian Siringo Ringo</span></div>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            delay: 300
        }
        );
    </script>
</body>

</html>