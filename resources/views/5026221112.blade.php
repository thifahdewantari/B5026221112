<html>

<head>
    <title>Aathifah Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">


    <script>
        function validateform() {
            var nrp = document.getElementById("msg");
            var msg = document.getElementById("msg");

            //cek hanya yang invalid
            if (nrp.value == "") {
                nrp.focus();
                nrp.placeholder = "ex: hello"
                alert("Please fill out this field");
                return false;
            }
        }
    </script>

</head>

<body>
    <div class="container-fluid" style="background-color:fefae0; padding: 0px;">
        <nav class="navbar navbar-dark fixed-top" style="background-color: #606c38;">
            <a class=" navbar-brand" href="#" style="padding-left: 1px;"><img src="{{ asset('img/thifah.jpg') }}"
                    style="height: 35px;"></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links-->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#section1">About Myself</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section5">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section6">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Page Title-->
        <div class="jumbotron text-center" style="background-color:fefae0;">
            <h1 style="padding-top: 40px;">Aathifah Dewantari</h1>
            <p>Bonjour | 여보세요 | Olá | Hello | 你好</p>
        </div>

        <!--Get To Know Me-->
        <div class="jumbotron text-center" id="section1" style="background-color: #fefae0;">
            <h2 style="text-align: center;">♡ Get To Know Me! ♡</h2>
            <p>Howdy! I'm Thifah, a dreamer, finding magic in everyday, and a firm believer in the art of slow living
                ༊*·˚</p>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/about me.png') }}" style="padding-left: 100px; height: 237px; ">
            </div>
            <div class="col-md-7">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td>: Aathifah Dewantari Wirya Massangka</td>
                        </tr>
                        <tr>
                            <td>Nick Name</td>
                            <td>: Thifah</td>
                        </tr>
                        <tr>
                            <td>NRP</td>
                            <td>: 5026221112</td>
                        </tr>
                        <tr>
                            <td>Place and Date of Birth</td>
                            <td>: Surabaya, 14 May 2004</td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>: 19 y.o.</td>
                        </tr>
                        <tr>
                            <td>Hobby</td>
                            <td>: Travelling</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--Travel as a hobby-->
        <div class="container" id="section2">
            <h2 style="text-align: center; padding-top: 20px; padding-bottom: 15px;"> Travel's Pict✈️</h2>
            <div class="card-deck" style="margin-left: 120px; margin-right: 120px;">
                <div>
                    <img src="{{ asset('img/korea.jpg') }}" style="height: 200px; margin-right: 15px;">
                    <div class="card-body text-center">
                        <p class="card-text">South Korea, 2018</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/china.jpg') }}" style="height: 200px; margin-right: 15px;">
                    <div class="card-body text-center">
                        <p class="card-text">China, 2019</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/thailand.jpg') }}" style="height: 200px; margin-right: 15px;">
                    <div class="card-body text-center">
                        <p class="card-text">Thailand, 2022</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/bali.jpg') }}" style="height: 200px; margin-right: 15px;">
                    <div class="card-body text-center">
                        <p class="card-text">Bali, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Experience-->
        <div class="container" id="section3">
            <h2 style="text-align: center; padding-top: 20px; padding-bottom: 15px;">Experiences</h2>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>

                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/ilits23.jpg') }}" alt="Los Angeles" width="800" height="363"
                            style="margin-left: 14%;">
                        <div class="carousel-caption" style="text-align: center;">
                            <h4>Ini Lho ITS! 2023</h4>
                            <p>Staff of Public Relation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/gerigi.jpg') }}" alt="Chicago" width="800" height="363"
                            style="margin-left: 14%;">
                        <div class="carousel-caption" style="text-align: center;">
                            <h4>Gerigi ITS 2023</h4>
                            <p>Staff of Secretarial</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/mabacup.jpg') }}" alt="New York" width="800" height="363"
                            style="margin-left: 14%;">
                        <div class="carousel-caption" style="text-align: center;">
                            <h4>Maba Cup 2022</h4>
                            <p>Staff of Public Relation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/ise.jpg') }}" alt="Chicago" width="800" height="363"
                            style="margin-left: 14%;">
                        <div class="carousel-caption" style="text-align: center;">
                            <h4>Information Systems Expo</h4>
                            <p>Staff of Public Relation</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev" style="margin-left: 14%;">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-right: 14%;">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <!--Education-->
        <div class="container" id="section4">
            <h2 style="text-align: center; padding-top: 20px; padding-bottom: 15px;">Education</h2>
            <div class="card-deck">
                <div class="card bg-basic">
                    <div class="card-body text-center">
                        <p class="card-text">2010-2016
                            <br> SDN Dr.Soetomo V Surabaya
                            <br> National Exam Score: 284.5/300
                        </p>
                    </div>
                </div>
                <div class="card bg-basic">
                    <div class="card-body text-center">
                        <p class="card-text">2016-2019
                            <br> SMP Negeri 12 Surabaya
                            <br> National Exam Score: 366.5/400
                        </p>
                    </div>
                </div>
                <div class="card bg-basic">
                    <div class="card-body text-center">
                        <p class="card-text">2019-2022
                            <br> SMA Negeri 6 Surabaya
                            <br> Final Score: 92/100
                        </p>
                    </div>
                </div>
                <div class="card bg-basic">
                    <div class="card-body text-center">
                        <p class="card-text">2022-Present
                            <br> Information Systems ITS
                            <br> GPA: 3.5/4
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Skills-->
        <div class="container" id="section5">
            <h2 style="text-align: center; padding-top: 20px; padding-bottom: 15px;">My Skills</h2>
            <p style="text-align: center;">Elevate myself, one talent at a time</p>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar"
                    style="width: 75%; background-color: #bc6c25; text-align: left; padding-left: 5px;">
                    Team Leadership
                </div>
            </div><br>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar"
                    style="width: 90%; background-color: #283618; text-align: left; padding-left: 5px;">
                    Public Relation
                </div>
            </div><br>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar"
                    style="width: 88%; background-color: #bc6c25; text-align: left; padding-left: 5px;">
                    Public Speaking
                </div>
            </div><br>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar"
                    style="width: 70%; background-color: #283618; text-align: left; padding-left: 5px;">
                    Event Management
                </div>
            </div>
        </div>

        <!--Contact Me-->
        <div class="container" id="section6">
            <h2 style="text-align: center; padding-top: 20px; padding-bottom: 15px;">Send Me A Message</h2>
            <form action="#" method="get" onsubmit="return validateform()">
                <div class="form-group">
                    <label for="msg"> Drop Your Message: </label>
                    <input type="text" class="form-control" id="msg">
                    <div id="msg" class="btn-danger"></div>
                </div>

                <input type="submit" value="SEND" class="btn" style="background-color: #bb9457;">
            </form>
        </div>

        <div class="container" style="text-align: center;">
            <div class="contact-info">
                <h3 class="title" style="text-align: center; padding-top: 20px; padding-bottom: 15px;">Let's get in
                    touch</h3>
                <p class="text">
                    You can contact me through:
                </p>

                <div class="info">
                    <div class="information">
                        <i class="fas fa-envelope icon"></i>
                        <p>thifahdewantari@gmail.com</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-phone-volume icon"></i>
                        <p>081357847701</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <ul>
                    <li><a href="http://localhost/B5026221112/public/hello"> Tugas Hello </a></li>
                    <li><a href="http://localhost/B5026221112/public/style"> Tugas Style </a></li>
                    <li><a href="http://localhost/B5026221112/public/link"> Tugas Link </a></li>
                    <li><a href="http://localhost/B5026221112/public/layout5026221112"> Tugas Layout </a></li>
                    <li><a href="http://localhost/B5026221112/public/js1"> Tugas Javascript 1 </a></li>
                    <li><a href="http://localhost/B5026221112/public/js2"> Tugas Javascript 2 </a></li>
                    <li><a href="http://localhost/B5026221112/public/clonelinktree5026221112"> Tugas Clone Linktree</a></li>
                    <li><a href="http://localhost/B5026221112/public/validasi"> Tugas Form Validation </a></li>
                    <li><a href="http://localhost/B5026221112/public/5026221112"> ETS </a></li>
                    <li><a href="http://localhost/B5026221112/public/responsive"> Tugas Responsive </a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
