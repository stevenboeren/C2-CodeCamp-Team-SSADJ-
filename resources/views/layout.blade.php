<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MediaPortal</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}">

    </head>
    <body>
        <header>
            <div class="container header">
                <div class="nav-section">
                    <img class="logo" src="/img/logo.png" alt="logo">
                    <h1>MediaPortal</h1>
                </div>
                @yield('nav')
                <body onload="startTime()">
                <div class="nav-section">
                    <div class="clock">
                        <h2 id="time"></h2>
                        <p id="date"></p>
                    </div>
                </div>    
                <script>
                    function startTime() {
                    const today = new Date();

                    let h = today.getHours();
                    let m = today.getMinutes();
                    m = checkTime(m);
                    document.getElementById('time').innerHTML =  h + ":" + m;
                    setTimeout(startTime, 1000);
                    
                    let day = (("0"+today.getDate()).slice(-2));
                    let month = (("0"+(today.getMonth()+1)).slice(-2));
                    let year = (today.getFullYear());

                    document.getElementById('date').innerHTML = day + "/"+ month + "/" + year;
                    }

                    function checkTime(i) {
                    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                    return i;
                    }
                </script>
            </div>
        </header>
        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div>
                    <p>E-mail:&nbsp; info@mediaportal.com</p>
                    <p>Tel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +31 6525 1566525</p>
                </div>
                <div class="social-links">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-skype"></a>
                </div>
            </div>
        </footer>
    </body>
</html>
