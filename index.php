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
                
                <div class="map" data-columns="12" data-rows="10" data-cellSize="25" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="true" data-lineWidth="3">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Wahiawa,HI&zoom=09&size=300x250&maptype=terrain&sensor=false" />
                    <ul data-color="#FF0000" data-label="Level Bombers">
                        <li data-coords="6.5,0" data-dir="S"></li>
                        <li data-coords="6,1.2" data-dir="S"></li>
                        <li data-coords="3.1,3" data-dir="S"></li>
                        <li data-coords="2.7,4" data-dir="S"></li>
                        <li data-coords="2.5,5" data-dir="S"></li>
                        <li data-coords="2.7,6" data-dir="S"></li>
                        <li data-coords="3,7" data-dir="S"></li>
                        <li data-coords="4,8.5" data-dir="S"></li>
                        <li data-coords="5,8.6" data-dir="E"></li>
                        <li data-coords="6,8.5" data-dir="E"></li>
                        <li data-coords="6.8,7.45" data-dir="E"></li>
                    </ul>
                    <ul data-color="#00FF00" data-label="Torpedo Bombers">
                        <li data-coords="6.65,0" data-dir="S"></li>
                        <li data-coords="6.15,1.2" data-dir="S"></li>
                        <li data-coords="3.25,3"></li>
                        <li data-coords="3.35,4" data-dir="S"></li>
                        <li data-coords="3.55,5" data-dir="S"></li>
                        <li data-coords="5.4,7.8" data-dir="S"></li>
                        <li data-coords="6.7, 7.5" data-dir="S"></li>
                    </ul>
                    <ul data-color="#00FF00">
                        <li data-coords="5.4,7.8" data-dir="E"></li>
                        <li data-coords="6.5,8.2" data-dir="S"></li>
                        <li data-coords="7.5,7.3" data-dir="E"></li>
                        <li data-coords="6.9,7.5" data-dir="W"></li>
                    </ul>
                    <ul data-color="#0000FF" data-label="Dive Bombers">
                        <li data-coords="6.8,0" data-dir="S"></li>
                        <li data-coords="5.6,1" data-dir="S"></li>
                        <li data-coords="4.8,1.3" data-dir="S"></li>
                        <li data-coords="3.75,2.4" data-dir="W"></li>
                        <li data-coords="4.6,4.3" data-dir="S"></li>
                        <li data-coords="5.4,6" data-dir="S"></li>
                        <li data-coords="6.8,7.5" data-dir="S"></li>
                    </ul>
                    <ul data-color="#0000FF">
                        <li data-coords="4.2,3.4" data-dir="S"></li>
                        <li data-coords="5.5,4" data-dir="E"></li>
                        <li data-coords="5.5,5" data-dir="W"></li>
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