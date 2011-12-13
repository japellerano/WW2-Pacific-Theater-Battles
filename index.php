   <?php include('includes/header.php'); ?>

   <div id="content">   
       <div id="timeline">
          <ul id="dates">
            <li><a href="#07DEC41">07 December 1941</a></li>
            <li><a href="#11DEC41">11 December 1941</a></li>
          </ul>
          
          <ul id="issues">
            <li id="07DEC41">
                <div class="left">                
                    <h1 class="title">Japanese Attack Pearl Harbor</h1>
                    <div id="legend">
                    </div>
                </div>
                
                <div class="map" data-columns="12" data-rows="10" data-cellSize="25" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="true" data-lineWidth="8">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Wahiawa,HI&zoom=09&size=300x250&maptype=terrain&sensor=false" />
                    <ul data-color="#FF0000" data-label="First Wave Japanese">
                        <li data-coords="2,2"></li>
                    </ul>
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
    
    <script type="text/javascript">
        $(".map").subwayMap({debug: true});
    </script>

<?php include('includes/footer.php'); ?>