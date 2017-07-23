<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CornFed Workspaces</title>
    <link href=" {{ URL::asset('css/project.css') }}" rel="stylesheet" media="screen, projection">
</head>
<body>
<div id="wrapper">
    <div id="header"><img src="{{ URL::asset('images/cornFedLogo4.jpg') }}" alt="Logo" class="monitor"/>
        <img src="{{ URL::asset('images/mobileLogo.jpg') }}" alt="" class="mobile">
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

        <h1>CORNFED COWORKING WORKSPACES</h1>

        <div id="spaces">
            <h2>Table Space</h2>
            <img src="images/tableSpace.jpg" width="450" height="299" alt="Table Space"/>
            <p><span class="info">Our Table Space gives you a guarenteed spot inside the Coworking Space.  This space is perfect for the solo worker who wants to make new business contacts or network.  You never know who will be sitting right next to you!</span></p>



            <div class="pricing">
                <ol>
                    <li>$15.00 per hour</li>
                    <li>1/2 hour minimum</li>
                    <li><a href="{{url('/calendar')}}"><button type="submit" value="submit" onclick="">RESERVE A SPOT</button></a></li>
                </ol>
            </div>
            <hr>
            <h2>Desk Space</h2>
            <img src="images/deskSpace.jpg" width="450" height="299" alt="Desk with computer monitor"/>
            <p><span class="info">If you need a bit more room, Cornfed has desk space available.  These areas allow you to work on a PC or your own laptop while giving you enough space for reviewing paperwork or having a colleague pull up a chair along side.</span>
            </p>
            <div class="pricing">
                <ol>
                    <li>$15.00 per hour</li>
                    <li>1 hour minimum</li>
                    <li><a href="{{url('/calendar')}}"><button type="submit" value="submit" onclick="">RESERVE A SPOT</button></a></li>
                </ol>
            </div>
            <hr>
            <h2>Small Office</h2>
            <img src="images/officeSpace1.jpg" width="450" height="299" alt="Small Office"/>
            <p><span class="info">If you need more privacy, our Small Office can accomedate you.  Close the door, work alone or with a colleague or two.  All our Small Offices feature a view of green spaces, comfortable chairs, and desk lamps.</span>
            </p>
            <div class="pricing">
                <ol>
                    <li>$20.00 per hour</li>
                    <li>1 hour minimum</li>
                    <li><a href="{{url('/calendar')}}"><button type="submit" value="submit" onclick="">RESERVE A SPOT</button></a></li>
                </ol>
            </div>
            <hr>
            <h2>Mid-sized Office</h2>
            <img src="images/officeSpace2.jpg" width="450" height="299" alt="Mid-Sized Office"/>
            <p><span class="info">Need more space? Cornfed's Mid-sized OFfice is for you.  Spread your things out, there's plenty of room!  Perfect for larger project where documents need to be laid out for easy access.  Great gathering spot for 2 or 3 people.</span>
            </p>

            <div class="pricing">
                <ol>
                    <li>$25.00 per hour</li>
                    <li>1 hour minimum</li>
                    <li><a href="{{url('/calendar')}}"><button type="submit" value="submit" onclick="">RESERVE A SPOT</button></a></li>
                </ol>
            </div>
            <hr>
            <h2>Small Meeting Room</h2>
            <img src="images/smallMeetingRoom.jpg" width="450" height="309" alt="Small Meeting Room"/>
            <p><span class="info">Cornfed can also accomidate an even larger group of co-orkers.  Our Small Meeting Rooms can handle up to 8 people.  Our meeting rooms include a white board, large board-room-like table, and of course a great wi-fi connection.</span>
            </p>

            <div class="pricing">

                <ol>
                    <li>$45.00 per hour</li>
                    <li>1 hour minimum</li>
                    <li><a href="{{url('/calendar')}}"><button type="submit" value="submit" onclick="">RESERVE A SPOT</button></a></li>
                </ol>
            </div>
        </div>
        <div id="footer">
            <ol>
                <li><a href="/">HOME</a></li>
                <li><a href="/ContactUs">CONTACT US</a></li>
                <li><a href="/WorkSpaces">WORK SPACES</a></li>
            </ol>
            <ul>
                <li><a href="https://www.facebook.com"><img src="images/facebookIcon.png" height="96" alt="facebook symbol"></a></li>
                <li><a href="https://www.twitter.com"><img src="images/twitterIcon.png" height="96" alt="twitter symbol"></a></li>
                <li><a href="https://www.linkedin.com"><img src="images/linkedInIcon.png" height="96" alt="linkedin symbol"></a></li>
            </ul>
            <h5>CORNFED COWORKING SPACE | 1652 CYBER DRIVE| FREMONT, NE 68888| 402-122-3334 </h5>
        </div>
    </div>
</body>
</html>
