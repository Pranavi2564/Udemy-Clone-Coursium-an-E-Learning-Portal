
<?php
// db_connection.php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coursium_db';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSIUM</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/804ea5c254.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="main-header">
    <nav class="nav-header sm-font">
                <button id="menu" class="side-menu-opener"><i class="fa-solid fa-bars"></i></button>
                <button class="side-menu-opener hide"><i class="fa-solid fa-bars"></i></button>
                <div class="logo">
                    <img src="C:\Users\Pranavi N\OneDrive\Desktop\coursium.png" alt="">
                </div>
                <div class="nav-item nav-dropdown categories">
                    <span>Categories</span>
                    <div class="dropdown-content left">
                        <ul class="dropdown-list">
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">IT & Software</a></li>
                            <li><a href="#">Office Productivity</a></li>
                            <li><a href="#">Personal Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Photography & Video</a></li>
                            <li><a href="#">Health & Fitness</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Teaching & Academics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-item search-form-container">
                    <form>
                        <input type="text" placeholder="Search Anything">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <ul class="nav-right">
                    <li class="nav-item nav-dropdown">
                        <span>Coursium Business</span>
                        <div class="dropdown-content right">
                            <div class="dropdown-panel">
                                <p class="p-font mb-2 text-center">Get your team access to over 25,000 top Coursium courses, anytime, anywhere.</p>
                                <div>
                                    <a href="#" class="btn reverse">Try Coursium Business</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <span>Teach on Coursium</span>
                        <div class="dropdown-content right">
                            <div class="dropdown-panel">
                                <p class="p-font mb-2 text-center">Turn what you know into an opportunity and reach millions around the world.</p>
                                <div>
                                    <a href="#" class="btn reverse">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item m-0">
                        <a href="#" class="btn">Login</a>
                    </li>
                    <li class="nav-item m-0">
                        <a href="#" class="btn reverse">Sign Up</a>
                    </li>
                    <li class="nav-item m-0">
                        <a href="#" class="btn btn-icon"><i class="fa-solid fa-globe"></i></a>
                    </li>
                </ul>
            </nav>
    </header>

    <aside class="side-menu">
            <div class="side-menu-bar">
                <button class="close-btn">X</button>
                <div class="menu-container">
                    <ul class="p-font">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                    <div class="divider"></div>
                    <h2 class="p-font b-700 s-color mt-1 mb-1 ml-2">Most Popular</h2>
                    
                    <ul class="p-font">
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">IT & Software</a></li>
                        <li><a href="#">Office Productivity</a></li>
                        <li><a href="#">Personal Development</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Photography & Video</a></li>
                        <li><a href="#">Health & Fitness</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Teaching & Academics</a></li>
                    </ul>

                    <h2 class="p-font b-700 s-color mt-1 mb-1 ml-2">More from Coursium</h2>
                    <ul class="p-font">
                        <li><a href="#">Coursium Business</a></li>
                        <li><a href="#">Get the App</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <div class="ml-2">
                        <button class="btn">
                            <i class="fa-solid fa-globe"></i>
                            &nbsp;
                            <span>English</span>
                        </button>
                    </div>
                </div>
            </div>
    </aside>

    <section class="hero">
            <picture>
                <source srcset="assets/hero-lg-img.jpg" media="(min-width: 700px)">
                <img src="assets/hero-sm-img.jpg" alt="">
            </picture>
            <div class="hero-quote">
                <h1 class="lg-h-font mb-1">The Skills you want at a price you'll love</h1>
                <p class="p-font s-color">The #1 surging skill for 2024? GenAI. Skill up with courses from just Rs.389 during our New Year's Sale</p>
            </div>

        </section>

        <section class="trusted-brands-wrapper">
            <div class="trusted-brands">
                <h2 class="h-font text-center s-color">Trusted by over 16,000 companies and millions of learners around the world</h2>
                <div class="brands">
                    <div class="brand-img">
                        <img src="assets\brands\volkswagen.svg" alt="volkswagen">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\samsung.svg" alt="samsung">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\cisco.svg" alt="cisco">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\att.svg" alt="att">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\procter_gamble.svg" alt="procter_gamble">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\hewlett_packard_enterprise.svg" alt="hewlett_packard_enterprise">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\citi.svg" alt="citi">
                    </div>
                    <div class="brand-img">
                        <img src="assets\brands\ericsson.svg" alt="ericsson">
                    </div>
                </div>
            </div>
        </section>

    <section class="course-categories">
        <h2 class="lg-h-font">A broad selection of courses</h2>
        <p class="p-font mt-2">Choose from online courses with new additions published every month</p>


        <!-- For course adding from DB -->
        <div class="courses-wrapper mt-2">
            <div class="courses-content">
                <h2 class="h-font b-700">Available Courses</h2>
                <div class="coursium-courses mt-1 mb-1">
                    <?php
                    $sql = "SELECT * FROM courses";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $thumbnail = !empty($row['thumbnail']) ? $row['thumbnail'] : 'https://via.placeholder.com/150';
                            echo "<div class='course-wrapper'>";
                            echo "<div class='course-thumbnail'><img src='{$thumbnail}' alt='Course Thumbnail'></div>";
                            echo "<h2 class='p-font b-700 mt-1 mb-1'>{$row['name']}</h2>";
                            echo "<p class='s-color mb-1'>{$row['category']}</p>";
                            echo "<p class='p-font b-500'>₹ {$row['price']}</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>No courses found.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    
    <section class="course-review-wrapper">
            <div class="course-review">
                <h2 class="h-font b-700 mb-2">See what others are achieving through learning</h2>

                <div class="course-review-container">

                    <div class="course-box">
                        <div>
                            <img height="20" src="https://s.udemycdn.com/browse_components/student-quote-unit/quote.svg" alt="">
                            <p class="p-font mt-2 mb-2">Because of this course I was able to clear my two interviews... Thanks for making such wonderful content.</p>
                        </div>

                        <div class="review-footer">
                            <div class="author">
                                <div class="user-icon">DS</div>
                                <p class="p-font b-700 ml-1">Diksha S</p>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <div>
                                <a href="#" class="course-link">
                                    <span class="play-icon">
                                        <img src="" alt="">
                                    </span>
                                    <span class="course-title">Business Intelligence (BI)</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="course-box">
                        <div>
                            <img height="20" src="https://s.udemycdn.com/browse_components/student-quote-unit/quote.svg" alt="">
                            <p class="p-font mt-2 mb-2">I would highly recommend this Web Development Bootcamp to anyone interested in pursuing a career in web development or looking to enhance their skills in this field.</p>
                        </div>

                        <div class="review-footer">
                            <div class="author">
                                <div class="user-icon">AK</div>
                                <p class="p-font b-700 ml-1">Ankit K</p>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <div>
                                <a href="#" class="course-link">
                                    <span class="play-icon">
                                        <img src="" alt="">
                                    </span>
                                    <span class="course-title">Business Intelligence (BI)</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="course-box">
                        <div>
                            <img height="20" src="https://s.udemycdn.com/browse_components/student-quote-unit/quote.svg" alt="">
                            <p class="p-font mt-2 mb-2">This has helped me so much in my career...I joined as a frontend engineer and eventually transitioned to full stack engineer with the help of this course</p>
                        </div>

                        <div class="review-footer">
                            <div class="author">
                                <div class="user-icon">CB</div>
                                <p class="p-font b-700 ml-1">Chethan B</p>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <div>
                                <a href="#" class="course-link">
                                    <span class="play-icon">
                                        <img src="" alt="">
                                    </span>
                                    <span class="course-title">Business Intelligence (BI)</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="top-categories">
            <h2 class="h-font b-700 mt-2 mb-2">Top Categories</h2>
            <div class="top-categories-container">
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-design-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Design</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-development-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Development</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-marketing-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Marketing</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-it-and-software-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">IT & Software</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-personal-development-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Personal Development</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-business-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Business</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-photography-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Photography</h2>
                </div>
                <div class="cat-img-wrapper">
                    <div class="cat-img-container">
                        <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/top-categories/lohp-category-music-v2.jpg?raw=true" alt="">
                    </div>
                    <h2 class="p-font b-500">Music</h2>
                </div>
            </div>
        </section>

        <section class="coursium-business">
            <div class="business-promo-content">
                <h2 class="lg-h-font">Upskill your team with Coursium Business</h2>
                <ul class="p-font mt-2">
                    <li>Unlimited access to 25,000+ top Coursium courses, anytime, anywhere</li>
                    <li>International course collection in 14 languages</li>
                    <li>Top certifications in tech and business</li>
                </ul>
                <div class="action-btns mt-2 mb-2">
                    <button class="btn reverse plr-2">Get Coursium Business</button>
                    <button class="btn mt-2 plr-2">Learn More</button>
                </div>
            </div>
            <div class="cb-promo-img">
                <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/UB_Promo_800x800.jpg?raw=true" alt="">
            </div>
        </section>

        <section class="coursium-instructor">
            <div class="c-instructor-container">
                <img src="https://github.com/Rizwan17/web-development/blob/html-css-projects/html-css-udemy-clone/assets/instructor-1x-v3.jpg?raw=true" alt="">
            </div>
            <div class="instructor-content">
                <h2 class="lg-h-font">Become an Instructor</h2>
                <p class="p-font mt-2 mb-2">Instructors from around the world teach millions of learners on Coursium. We provide the tools and skills to teach what you love.</p>
                <div class="action-btns">
                    <button class="btn reverse plr-2">Start Teaching Today</button>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer-container">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Settings</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Get the App</a></li>
                    <li><a href="#">Accessibility Statement</a></li>
                </ul>
                <button class="btn reverse plr-2">
                    <i class="fa-solid fa-globe"></i>
                    <span>English</span>
                </button>
            </div>
        </footer>

        <script>
            const menu = document.getElementById("menu");
            const sideMenu = document.querySelector('.side-menu');
            const closeMenu = document.querySelector('.close-btn');
            menu.addEventListener('click', (e) =>{
                sideMenu.classList.add('active');
                document.body.style.overflow = 'hidden';
            })
            closeMenu.addEventListener('click', (e) => {
                sideMenu.classList.remove('active');
                document.body.style.overflow = 'scroll';
            })

        </script>
</body>
</html>
