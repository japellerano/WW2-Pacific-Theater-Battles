   <?php include('includes/header.php'); ?>

   <div id="content">   
       <div id="timeline">
          <ul id="dates">
            <li><a href="#07DEC41">07 December 1941</a></li>
            <li><a href="#11DEC41">11 December 1941</a></li>
            <li><a href="#04MAY42">04 May 1942</a></li>
            <li><a href="#03JUN42">03 June 1942</a></li>
            <li><a href="#04JUN42">04 June 1942</a></li>
            <li><a href="#06AUG45">06 August 1945</a></li>
            <li><a href="#09AUG45">09 August 1945</a></li>
          </ul>
          
          <ul id="issues">
            <li id="07DEC41">
                <div class="left">                
                    <h1 class="title">Japanese Attack Pearl Harbor</h1>
                    <p class="descript">
                        <!-- TEXT HERE -->
                    </p>
                    <div class="legend">
                        <h3>Legend</h3>
                        <p class="key">Level Bombers <span class="color" style="background-color: #FF0000;"></span></p>
                        <p class="key">Torpedo Bombers <span class="color" style="background-color: #00FF00;"></span></p>
                        <p class="key">Dive Bombers <span class="color" style="background-color: #0000FF;"></span></p>
                    </div>
                </div>
                
                <div class="map" data-columns="12" data-rows="10" data-cellSize="25" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="true" data-lineWidth="2">
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
                    <ul data-color="#FF0000">
                        <li data-coords="10.15,0" data-dir="S"></li>
                        <li data-coords="10.15,3.5" data-dir="S"></li>
                        <li data-coords="11.5,7" data-dir="S"></li>
                        <li data-coords="9.7,9.5" data-dir="S"></li>
                        <li data-coords="6.8, 7.5" data-dir="S"></li>
                    </ul>
                    <ul data-color="#FF0000">
                        <li data-coords="10.7,5" data-dir="W"></li>
                        <li data-coords="9.7,5.8" data-dir="W"></li>
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
                    <ul data-color="#0000FF">
                        <li data-coords="10,0" data-dir="S"></li>
                        <li data-coords="10,3.5" data-dir="S"></li>
                        <li data-coords="6.9,7.4" data-dir="S"></li>
                    </ul>

                </div>
            </li>
            <li id="11DEC41">
                <div class="left">
                    <h1 class="title">United States Declares War on Axis Powers</h1>
                    <p class="descript">
                        The Axis powers declare war on the United States. The United States declares war on the Axis powers. The Axis powers are Italy, Germany and Japan.
                    </p>
                </div>
                <div class="map">
                    <img src="images/declares_war.jpg" />
                </div>
            </li>
            
            <li id="04MAY42">
                <div class="left">
                    <h1 class="title">Battle of the Coral Sea</h1>
                    <p class="descript">
                        04 May 1942 - 08 May 1942.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-12.6,156.7&zoom=05&size=300x250&maptype=terrain&sensor=false" />
                </div>
            </li>
            
            <li id="03JUN42">
                <div class="left">
                    <h1 class="title">Aleutian Island Campaign</h1>
                    <p class="descript">
                        03 June 1942 - 15 August 1943
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=51.67,-177.3&zoom=04&size=300x250&maptype=terrain&sensor=false" />
                </div>
            </li>
            
            <li id="04JUN42">
                <div class="left">
                    <h1 class="title">Battle of Midway</h1>
                    <p class="descript">
                        04 June 1942 - 07 June 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=28.233,-177.352&zoom=11&size=300x250&maptype=terrain&sensor=false" />
                </div>
            </li>
            
            <li id="06AUG45">
                <div class="left">
                    <h1 class="title">United States Drops the First Atomic Bomb on Hiroshima</h1>
                    <p class="descript">
                    </p>
                </div>
                <div class="map">
                </div>
            </li>
            
            <li id="09AUG45">
                <div class="left">
                    <h1 class="title">United States Drops the Second Atomic Bomb on Nagasaki</h1>
                    <p class="descript">
                    </p>
                </div>
                <div class="map">
                </div>
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