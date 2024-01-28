 <!--doctype html-->
<html>
    <head>
    <meta charset="utf-8">
    <title>JED Cinema</title>
    <link rel="stylesheet" href="syle1.css">
    <link rel="shortcut icon" href="images/fav icon.png"/>
    <script src="jquery-3.7.1.js"></script>
          <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <!--logo--------------->
            <a href="#" class="logo">
                <img src="images/logo.png"/>
            </a>
            <!--menu--btn----------------->
            <input type="checkbox" class="menu-btn" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <!--menu-------------->
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="registration.html">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <!--search------------->
            <div class="search">
                <input type="text" placeholder="Find Your Favourtie Movies"/>
                <!--search-icon----------->
                <i class="fas fa-search"></i>
            </div>
        </nav>   
        <!--movies---------------------------->
        <div class="movies-heading">
            <h2>Movies</h2>
        </div>
        <section id="movies-list">
            <!--box-1------------------------>
            <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-1.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Titanic (Romantic Drama)')" target="_blank">>
                    Titanic (Romantic Drama)
                </a>
            </div>
             <!--box-2------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-2.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('The Nun(Horror)')" target="_blank">>
                    The Nun(Horror)
                </a>
            </div>
             <!--box-3------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-3.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Fast and Forious 10 (Action)')"  target="_blank">>
                    Fast and Forious 10 (Action)
                </a>
            </div>
             <!--box-4------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-4.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Home Alone(Comedy)')" target="_blank">>
                    Home Alone(Comedy)
                </a>
            </div>
             <!--box-5------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-5.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Mission Impossible dead reckoning(Action)')" target="_blank">>
                    Mission Impossible dead reckoning(Action)
                </a>
            </div>
             <!--box-6------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-6.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Gran Turismo')"  target="_blank">>
                    Gran Turismo
                </a>
            </div>
             <!--box-7------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-7.jpg">
                </div>
                <!--text--------->
                <a  onclick="selectMovie('Barbie')" target="_blank">>
                    Barbie
                </a>
            </div>
             <!--box-8------------------------>
             <div class="movies-box">
                <!--img------------>
                <div class="movies-img">
                    <div class="quality">HDRip</div>
                    <img src="images/l-8.jpg">
                </div>
                <!--text--------->
                <a onclick="selectMovie('Minions')"  target="_blank">>
                    Minions
                </a>
            </div>
        </section>
        <div class="btns">
            <a href="#">Previous</a>
            <a href="#">Next</a>
        </div>
        <footer>
            <p>Going To Internet, Ltd Consumer Website</p>
            <p>Copyright 2020 - GoingToInternet</p>
        </footer>
        <script>
            function selectMovie(movieName){
                window.location.href ='setsession.php?MovieName='+movieName;
            }
        </script>

    </body>
    </html>
 
 
 
