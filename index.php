   <?php include('includes/header.php'); ?>

   <div id="content">   
       <div id="timeline">
          <ul id="dates">
            <li><a href="#07DEC41">07 December 1941</a></li>
            <li><a href="#11DEC41">11 December 1941</a></li>
          </ul>
          
          <ul id="issues">
            <li id="07DEC41">
                <h1 class="title">Japanese Attack Pearl Harbor</h1>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Pearl+Harbor,HI&zoom=08&size=250x250&maptype=terrain&sensor=false" />
                </div>
            </li>
            <li id="11DEC41">
                <h1 class="title">United States Declares War on Axis Powers</h1>
                <p class="text"></p>
            </li>
          </ul>
          
          <a href="#" id="next">+</a>
          <a href="#" id="prev">-</a>
       </div>
    </div>

<?php include('includes/footer.php'); ?>