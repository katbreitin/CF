@php
    use Illuminate\Support\Facades\Auth;
    use App\User;
@endphp
<!doctype html>
<html><!-- InstanceBegin template="/Templates/aboutUs.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Update</title>

    <link href="{{asset('css/project.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/print.css')}}"  media="print">
    <script type="text/javascript">
        function MM_validateForm() {
            if (document.getElementById){
                var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
                for (i=0; i<(args.length-2); i+=3) {
                    test=args[i+2]; val=document.getElementById(args[i]);
                    if (val) { nm=val.name; if ((val=val.value)!="") {
                        if (test.indexOf('isEmail')!=-1) {
                            p=val.indexOf('@');
                            if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
                        } else if
                        (test!='R') { num = parseFloat(val);
                            if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
                            if (test.indexOf('inRange') != -1) {
                                p=test.indexOf(':');
                                min=test.substring(8,p); max=test.substring(p+1);
                                if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
                            } } }
                    else if
                    (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
                }
                if (errors) alert('The following error(s) occurred:\n'+errors);
                document.MM_returnValue = (errors == '');
            } }
    </script>
    <!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper">
    <div id="header"><!-- TemplateBeginEditable name="header" --><img src="{{ URL::asset('images/cornFedLogo4.jpg') }}" height="300" alt="Logo" class="monitor" /><!-- TemplateEndEditable -->

        <img src="{{ URL::asset('images/mobileLogo.jpg') }}" alt="Logo for mobile phones" class="mobile">

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

    <!-- InstanceBeginEditable name="aside" -->
    <!-- <aside id="social">
       <h3>FOLLOW US:</h3>
       <ul>
     <li><a href="https://www.facebook.com" target="_blank" class="bodyNav">facebook.com</a> <img src="fbIcon.png" alt="facebook" longdesc="http://www.facebook.com" height="30"></li>
     <li><a href="https://www.twitter.com" target="_blank" class="bodyNav">twitter.com</a> <img src="twitIcon.png" alt="twitter Icon" longdesc="http://www.twitter.com" height="30"></li>  <li><a href="https://www.youtube.com" target="_blank" class="bodyNav">youtube.com</a><img src="ytIcon.png" alt="youtube Icon" longdesc="http://www.youtube.com" height="30"></li>
    </ul>
       <h3>CALL US</h3>
       <p>402-122-3334</p>
       <h3>HOURS</h3>
       <p>Monday: 8:00am - 4:00pm</p>
       <p>Tuesday: 800am - 5:00pm</p>
       <p>Wednesday: 8:00am - 5:00pm</p>
       <p>Thursday: 8:00am - 5:00pm</p>
       <p>Friday: 8:00am - 7:00pm</p>
       <p>Saturday: 10:00am - 6:00pm</p>
       <p>Sunday: CLOSED
     </p></aside>-->
    <!-- InstanceEndEditable -->
    @php
    $id = Auth::id();
    $user = User::findOrFail($id);
    @endphp
    <div id="main"><!-- InstanceBeginEditable name="bCrumbs" -->


        <p>Please update your account using the form below</p>
        <h2 class="colorChange">* =Required Fields</h2>

        {{--<form method="post" action="custRet.php"> --}}
        {!! Form::open(['url' => '/users/' . $user->id]) !!}
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT" />
        <input name="recipient" value="aclark49@mail.mccneb.edu" type="hidden">
        <input name="hide_blanks" value="1" type="hidden">
        <input name="subject" value="Thank you for your Question/Comment" type="hidden">
        <label for="fname"><span class="colorChange">*</span>FIRST NAME:</label>
        <input name="fname" required="" id="Fname" size="25" maxlength="30" type="text" value="{{$user->first_name}}">
        <label for="lname"><span class="colorChange">*</span>LAST NAME:</label>
        <input name="lname" required="" id="Lname" size="25" maxlength="30" type="text" value="{{$user->last_name}}">
        <label for="email"><span class="colorChange">*</span>E-MAIL:</label>
        <input name="email" required="" id="email" size="25" maxlength="30" type="text" value="{{$user->email}}">
        <label for="password"><span class="colorChange">*</span>PASSWORD:</label>
        <input name="password" required="" id="password" size="25" maxlength="30" type="password">
        <label for="TelNum">PHONE NUMBER:</label>
        <input name="TelNum" id="TelNum" placeholder="XXX-XXX-XXXX" size="25" maxlength="35" type="tel" value="{{$user->phone}}">
        <input name="required" value="Fname, Lname, email, questArea" type="hidden">
        <input name="submit" type="submit" id="submit"  onClick="MM_validateForm('Fname','','R','Lname','','R','email','','RisEmail');return document.MM_returnValue" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
        <input name="redirect" type="hidden" value="/custRet.html">
        {!! Form::close() !!}
        {{--</form>--}}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div id="footer">
        <ol>
            <li><a href="Home.html">HOME</a></li>
            <li><a href="aboutUs.html">ABOUT US</a></li>
            <li><a href="workSpaces.html">ARTISTS' PAGE</a></li>
        </ol>
        <p>Disclaimer: This site has been created as part of a school project and does not represent a real company or organization.</p>

        <p>CORNFED COWORKING SPACE | 1652 CYBER DRIVE | FREMONT, NE 68888|
            402-122-3334 </p>


    </div>


</div>
</body>
</html>