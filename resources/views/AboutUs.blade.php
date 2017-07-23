<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/project.css') }}" rel="stylesheet">
    <title>About Us</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <img src="{{ asset('images/CornFedLogo4.jpg') }}" height="300" alt="Logo" class="monitor" />
    </div>
    <nav id="mainNav">
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/AboutUs">ABOUT US</a></li>
            <li><a href="/ContactUs">CONTACT US</a></li>
            <li><a href="/WorkSpaces">WORK SPACES</a></li>
            <li><a href="/Registration">SIGN UP</a></li>
            <li><a href="/login">LOGIN</a></li>
        </ul>
    </nav>
    <div id="main">
        <section>
            <div id="wMessage">
                <input name="submit" type="submit" id="submit" align="center" onClick="" value="Sign In">
                <h5>Welcome &nbsp; &nbsp; &nbsp; ""</h5>
            </div>
        </section>
        <div id="whyBecome">
            <h1>Why Become a Member of Cornfed?</h1>
            <h3>UNIQUE SPACES</h3>
            <img src="{{ asset('images/chair.png') }}" height="96" alt="red chair">
            <p>Cornfed offers unique, comfortable spaces for it's Members to use.  Whether you simply need desk space or a entire office, Cornfed can accomidate your needs.</p>
            <p><a href="/Registration">Become a Member Now!</a></p>
            <h3>COFFEE BAR</h3>
            <img src="{{ asset('images/coffeeCup.png') }}" height="96" alt="coffeeCup">
            <p>When your meeting has gone extra innings, take a break at the "Cornfed Coffee Cove."  We offer a wide variety of both caffinated and decaffinated coffee.  You can also pick up a pastry, delivered daily from Fremont's local bakery.</p>
            <p><a href="/Registration">Become a Member Now!</a></p>
			<h3>SPECIAL MEMBER EVENTS</h3>
            <img src="{{ asset('images/gamePad.png') }}" height="96" alt="Playstation controller">
            <p>All work and no play makes ANYONE a dull person. Kick back with other Members during one of Cornfed's special events.  
			One of our most popular events, CORNFED GAME NIGHT, happens every weekend.  
			We also invite business leaders from Lincoln and Omaha to talk to our Member's each quarter.  Topics range from Updating Your Resume to Better Communication with Your CoWorkers.  
			Member will automatically get alerts in their inboxes with the opportunity to attend the next Talk</p>
            <p><a href="/Registration">Become a Member Now! </a></p>
        </div>
        <div id="iconSpace">
            <div id="direction">
                <img src="{{ asset('images/mapMarker.png') }}" height="96" alt="Map with Marker" >
                <p>1652 Cyber Drive<br />
                    Fremont, NE 68888
                </p>
            </div>
            <div id="phoneIcon">
                <img src="{{ asset('images/phone.png') }}" height="96" alt="green phone icon">
                <p>402-122-3334</p>
            </div>
            <div id="emailIcon">
                <img src="{{ asset('images/email.png') }}" height="96" alt="blue envelope symbol">
                <p>cornfed@cox.net</p>
            </div>
        </div>
        <div id="footer">
            <ol>
                <li><a href="/Home2">HOME</a></li>
                <li><a href="/ContactUs">CONTACT US</a></li>
                <li><a href="/WorkSpaces">WORK SPACES</a></li>
            </ol>
            <ul>
                <li><a href="https://www.facebook.com"><img src="images/facebookIcon.png" height="96" alt="facebook symbol"></a></li>
                <li><a href="https://www.twitter.com"><img src="images/twitterIcon.png" height="96" alt="twitter symbol"></a></li>
                <li><a href="https://www.linkedin.com"><img src="images/linkedInIcon.png" height="96" alt="linkedin symbol"></a></li>
            </ul>
            <p>CORNFED COWORKING SPACE | 1652 CYBER DRIVE| FREMONT, NE 68888| 402-122-3334</p>
        </div>
    </div>
</div>
</body>
</html>
