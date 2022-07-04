<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. CAR</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="signup.css" />
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
                        <li><a href="index.php">Αρχική</a></li>
                        <li><a href="com.html">Επικοινωνία</a></li>
                        <li><a href="news.html">Νέα - Προσφορές</a></li>
                        <li><a href="ann.html">Ανακοινώσεις</a></li>
                        <li><a href="https://www.google.com/maps/search/συνεργεια">Συνεργεία κοντά μου</a></li>
                        <li><a href="sponsors.html">Χορηγοί</a></li>
                        <li><a href="aboutus.html">Λίγα λόγια για εμάς</a></li>
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
                        <div class="invisible">
                            <a href="#">Σύνδεση</a>
                            <a href="#">Εγγραφή</a>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <div class="preimg">
        </div>
        <div>
            <div class="container">
                <h2>Εγγραφή Νέου Μηχανικού</h2>
                <form method="POST" action="do_registere.php">
                    <p>Όνομα: <input name="fname" type="text"></p>
                    <p>Επίθετο: <input name="lname" type="text"></p>
                    <hr>
                    <p>Email: <input name="email" type="text"></p>
                    <p>Κωδικός: <input name="pwd" type="password"></p>
                    <p>Οδός: <input name="address" type="text"></p>
                    <p>ΑΦΜ: <input name="afm" type="text"></p>
                    <p>ΤΗΛ: <input name="tel" type="text"></p>
                    <button type="submit">Εγγραφή</button>
                </form>
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
            <a href="com.html">Τεχνική υποστήριξη</a>
        </div>
    </div>
</body>
</html>