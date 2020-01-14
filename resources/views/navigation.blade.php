<!--NAV BIG-->
<div class="col-lg-6">
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/venues">Venues</a></li>
            <li><a href="/events">Events</a></li>                
        </ul>
    </nav>
</div>
    
<!--OPEN FULLSCREEN NAV-->
<span class="open-button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!--FULLSCREEN OVERLAY NAV-->
<div id="fullscreen-nav" class="overlay">
    <!--BUTTON TO CLOSE OVERLAY NAV-->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    <!--OVERLAY NAV-->
    <div class="overlay-content">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/venues">Venues</a></li>
            <li><a href="/events">Events</a></li>
        </ul>
    </div>
</div>