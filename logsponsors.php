<?php session_start(); ?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. CAR</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <div id="logo">
        <img src="images/logo.png" />
    </div>
    <div>
        <div>
            <div id="prenav">
                <div>
                    <ul class="navbar">
                        <li><a href="logindex.php">Αρχική</a></li>
                        <li><a href="logcom.php">Επικοινωνία</a></li>
                        <li><a href="lognews.php">Νέα - Προσφορές</a></li>
                        <li><a href="logann.php">Ανακοινώσεις</a></li>
                        <li><a href="https://www.google.com/maps/search/συνεργεια">Συνεργεία κοντά μου</a></li>
                        <li><a href="logsponsors.php">Χορηγοί</a></li>
                        <li><a href="logaboutus.php">Λίγα λόγια για εμάς</a></li>
                        <li><a href="booking.php">Κρατήσεις</a></li>
                    </ul>
                </div>
                <div>
                    <img src="images/sponsors.jpg" />
                </div>
            </div>
            <div>
                <div id="login">
                    <header>
                        <div>
                            <img src="images/login.png" />
                        </div>
                        <div>
                            <input type="text" placeholder="Αναζήτηση">
                        </div>
                        <div>
                            <a>Γειά σας <?php echo $_SESSION['email'] ?></a>
                            <a href="logout.php">Έξοδος</a>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <div class="preimg" id="cont">
            <div>
                Ευχαριστούμε πολύ τους:
                <ul>
                    <li><a href="https://www.delphiautoparts.com/gbr/en">Delphi</a></li>
                    <li><a href="https://www.randstad.gr/">Randstad</a></li>
                    <li><a href="https://corporate.exxonmobil.com/">Exxonmobil</a></li>
                    <li><a href="https://www.airbus.com/">Airbus</a></li>
                    <li><a href="https://www.williamsf1.com/">Williams Martini Racing</a></li>
                    <li><a href="https://www.jaguar.gr/">Jaguar</a></li>
                    <li><a href="https://www.landrover.gr/">LandRover</a></li>
                    <li><a href="https://www.mbda-systems.com/">MBDA</a></li>
                    <li><a href="https://www.leoni.com/en/">Leoni</a></li>
                    <li><a href="https://www.ferrari.com/en-EN/formula1">Scuderia Ferrari</a></li>
                    <li><a href="https://www.infiniti.com/vehicles.html">Infiniti</a></li>
                    <li><a href="https://www.ferrari.com/en-EN">Ferrari</a></li>
                    <li><a href="https://www.ricardo.com.sg/">Rickardo</a></li>
                    <li><a href="https://www.ptc.com/">Ptc</a></li>
                    <li><a href="https://www.autodesk.com/">Autodesk</a></li>
                    <li><a href="https://www.saicmotor.com/">Saic</a></li>
                    <li><a href="https://www.toyota.gr/">Toyota</a></li>
                    <li><a href="https://www.ni.com/en-us.html">National Instruments</a></li>
                    <li><a href="https://www.ford.gr/">Ford</a></li>
                    <li><a href="https://www.siemens-home.bsh-group.com/gr/">Siemens</a></li>
                    <li><a href="https://www.jonlee.co.uk/">JonathanLee</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar" id="footer">
        <nav>
            <button>
                <a href="https://www.facebook.com/DrCAR-111304663988128/?modal=admin_todo_tour"><img src="images/fbblack.jpg" /></a>
            </button>
            <button>
                <a href="https://www.instagram.com/drcar4916/"><img src="images/instablack.png" /></a>
            </button>
        </nav>
        <div>
            <a href="logcom.php">Τεχνική υποστήριξη</a>
        </div>
    </div>
</body>
</html>