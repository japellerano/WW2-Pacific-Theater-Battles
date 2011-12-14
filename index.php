   <?php include('includes/header.php'); ?>

   <div id="content">   
       <div id="timeline">
          <ul id="dates">
            <li><a href="#07DEC41">07 December 1941</a></li>
            <li><a href="#11DEC41">11 December 1941</a></li>
            <li><a href="#04MAY42">04 May 1942</a></li>
            <li><a href="#03JUN42">03 June 1942</a></li>
            <li><a href="#04JUN42">04 June 1942</a></li>
            <li><a href="#07AUG42">07 August 1942</a></li>
            <li><a href="#08AUG42">08 August 1942</a></li>
            <li><a href="#24AUG42">24 August 1942</a></li>
            <li><a href="#25AUG42">25 August 1942</a></li>
            <li><a href="#25OCT42">25 October 1942</a></li>
            <li><a href="#12NOV42">12 November 1942</a></li>
            <li><a href="#16NOV42">16 November 1942</a></li>
            <li><a href="#09FEB43">09 February 1943</a></li>
            <li><a href="#02MAR43">02 March 1943</a></li>
            <li><a href="#11MAY43">11 May 1943</a></li>
            <li><a href="#20NOV43">20 November 1943</a></li>
            <li><a href="#21NOV43">20 November 1943</a></li>
            <li><a href="#31JAN44">31 January 1944</a></li>
            <li><a href="#17FEB44">17 February 1944</a></li>
            <li><a href="#15JUN44">15 June 1944</a></li>
            <li><a href="#19JUN44">19 June 1944</a></li>
            <li><a href="#21JUL44">21 July 1944</a></li>
            <li><a href="#24JUL44">24 July 1944</a></li>
            <li><a href="#15SEP44">15 September 1944</a></li>
            <li><a href="#17SEP44">17 September 1944</a></li>
            <li><a href="#20OCT44">20 October 1944</a></li>
            <li><a href="#23OCT44">23 October 1944</a></li>
            <li><a href="#19FEB45">19 February 1945</a></li>
            <li><a href="#01APR45">01 April 1945</a></li>
            <li><a href="#06AUG45">06 August 1945</a></li>
            <li><a href="#09AUG45">09 August 1945</a></li>
            <li><a href="#14AUG45">14 August 1945</a></li>
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
                
                <div class="map" data-columns="12" data-rows="10" data-cellSize="25" data-legendId="legend" data-textClass="text" data-gridNumbers="false" data-grid="false" data-lineWidth="2">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Wahiawa,HI&zoom=09&size=300x250&maptype=terrain&sensor=false" alt="Map of Pearl Harbor"/>
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
                    <img src="images/declares_war.jpg" alt="News Paper Clipping" />
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
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-12.6,156.7&zoom=05&size=300x250&maptype=terrain&sensor=false" alt="Battle of the Coral Sea" />
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
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=51.67,-177.3&zoom=04&size=300x250&maptype=terrain&sensor=false" alt="Aleutian Island Campaign" />
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
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=28.233,-177.352&zoom=11&size=300x250&maptype=terrain&sensor=false" alt="Battle of Midway" />
                </div>
            </li>
            
            <li id="07AUG42">
                <div class="left">
                    <h1 class="title">Guadalcanal Campaign</h1>
                    <p class="descript">
                        07 August 1942 - 09 February 1943
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=Guadalcanal&zoom=08&size=300x250&maptype=terrain&sensor=false" alt="Guadalcanal Campaign" />
                </div>
            </li>
            
            <li id="08AUG42">
                <div class="left">
                    <h1 class="title">Battle of Savo Island</h1>
                    <p class="descript">
                        08 August 1942 - 09 August 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-9.048,159.706&zoom=10&size=300x250&maptype=terrain&sensor=false" alt="Battle of Savo Islands" />
                </div>
            </li>
            
            <li id="24AUG42">
                <div class="left">
                    <h1 class="title">Battle of the Eastern Solomons</h1>
                    <p class="descript">
                        24 August 1942 - 25 August 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-13.15,165.34&zoom=05&size=300x250&maptype=terrain&sensor=false" alt="Battle of the Eastern Solomons" />
                </div>
            </li>
            
            <li id="25AUG42">
                <div class="left">
                    <h1 class="title">Battle of Milne Bay</h1>
                    <p class="descript">
                        25 August 1942 - 07 September 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-10.422,150.657&zoom=09&size=300x250&maptype=terrain&sensor=false" alt="Battle of Milne Bay" />
                </div>
            </li>
            
            <li id="25OCT42">
                <div class="left">
                    <h1 class="title">Battle of the Santa Cruz Islands</h1>
                    <p class="descript">
                        25 October 1942 - 27 October 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-8.25,164.36&zoom=06&size=300x250&maptype=terrain&sensor=false" alt="Battle of the Santa Cruz Islands" />
                </div>
            </li>
            
            <li id="12NOV42">
                <div class="left">
                    <h1 class="title">Naval Battle of Guadalcanal</h1>
                    <p class="descript">
                        12 November 1942 - 15 November 1942
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-9.164,159.913&zoom=09&size=300x250&maptype=terrain&sensor=false" alt="Naval Battle of Guadalcanal" />
                </div>
            </li>
            
            <li id="16NOV42">
                <div class="left">
                    <h1 class="title">Battle of Buna-Gona</h1>
                    <p class="descript">
                        16 November 1942 - 22 January 1943
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-8.658,148.389&zoom=11&size=300x250&maptype=terrain&sensor=false" alt="Battle of Buna-Gona" />
                </div>
            </li>
            
            <li id="09FEB43">
                <div class="left">
                    <h1 class="title">Capture of Guadalcanal Island</h1>
                    <p class="descript">
                        09 February 1943<br />
                        The island is declared to be free of Japanese. The Japanese evacuated some 10,652 men from the island on the nights of 04 February and 07 February.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-9.603,160.181&zoom=08&size=300x250&maptype=terrain&sensor=false" alt="Capture of Guadalcanal Island" />
                </div>
            </li>
            
            <li id="02MAR43">
                <div class="left">
                    <h1 class="title">Battle of the Bismarck Sea</h1>
                    <p class="descript">
                        02 March 1943 - 04 March 1943
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=-6.107784,148.930664&zoom=06&size=300x250&maptype=terrain&sensor=false" alt="Battle of the Bismarck Sea" />
                </div>
            </li>
            
            <li id="11MAY43">
                <div class="left">
                    <h1 class="title">Battle of Attu</h1>
                    <p class="descript">
                        11 May 1943 - 30 May 1943<br />
                        Last action during WWII in the Aleutian Islands Campaign.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=52.874,172.889&zoom=09&size=300x250&maptype=terrain&sensor=false" alt="Battle of Attu" />
                </div>
            </li>
            
            <li id="20NOV43">
                <div class="left">
                    <h1 class="title">Battle of Tarawa</h1>
                    <p class="descript">
                        20 November 1943 - 23 November 1943<br />
                        First time the United States faced serious opposition during an amphibious landing.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=1.424,173.094&zoom=10&size=300x250&maptype=terrain&sensor=false" alt="Battle of Tarawa" />
                </div>
            </li>
            
            <li id="21NOV43">
                <div class="left">
                    <h1 class="title">Battle of Makin</h1>
                    <p class="descript">
                        20 November 1943 - 24 November 1943<br />
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=3.379,172.986&zoom=12&size=300x250&maptype=terrain&sensor=false" alt="Battle of Makin" />
                </div>
            </li>
            
            <li id="31JAN44">
                <div class="left">
                    <h1 class="title">Battle of Kwajalein</h1>
                    <p class="descript">
                        31 January 1944 - 03 February 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=9.19,167.41&zoom=08&size=300x250&maptype=terrain&sensor=false" alt="Battle of Kwajalein" />
                </div>
            </li>
            
            <li id="17FEB44">
                <div class="left">
                    <h1 class="title">Battle of Eniwetok</h1>
                    <p class="descript">
                        17 February 1944 - 23 February 1944.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=11.463,162.190&zoom=09&size=300x250&maptype=terrain&sensor=false" alt="Battle of Eniwetok" />
                </div>
            </li>
            
            <li id="15JUN44">
                <div class="left">
                    <h1 class="title">Battle of Saipan</h1>
                    <p class="descript">
                        15 June 1944 - 09 July 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=15.174,145.746&zoom=10&size=300x250&maptype=terrain&sensor=false" alt="Battle of Saipan" />
                </div>
            </li>

            <li id="19JUN44">
                <div class="left">
                    <h1 class="title">Battle of the Philippine Sea</h1>
                    <p class="descript">
                        19 June 1944 - 20 June 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=19.2,132.5&zoom=04&size=300x250&maptype=terrain&sensor=false" alt="Battle of the Philippine Sea" />
                </div>
            </li>
            
            <li id="21JUL44">
                <div class="left">
                    <h1 class="title">Battle of Guam</h1>
                    <p class="descript">
                        21 July 1944 - 10 August 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=13.471,144.792&zoom=10&size=300x250&maptype=terrain&sensor=false" alt="Battle of Guam" />
                </div>
            </li>
            
            <li id="24JUL44">
                <div class="left">
                    <h1 class="title">Battle of Tinian</h1>
                    <p class="descript">
                        24 July 1944 - 01 August 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=15.003,145.630&zoom=11&size=300x250&maptype=terrain&sensor=false" alt="Battle of Tinian" />
                </div>
            </li>
            
            <li id="15SEP44">
                <div class="left">
                    <h1 class="title">Battle of Peleliu</h1>
                    <p class="descript">
                        15 September 1944 - 27 November 1944.
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=7.002,134.243&zoom=10&size=300x250&maptype=terrain&sensor=false" alt="Battle of Peleliu" />
                </div>
            </li>
            
            <li id="17SEP44">
                <div class="left">
                    <h1 class="title">Battle of Angaur</h1>
                    <p class="descript">
                        17 September 1944 - 30 September 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=6.9063,134.1389&zoom=11&size=300x250&maptype=terrain&sensor=false" alt="Battle of Angaur" />
                </div>
            </li>
            
            <li id="20OCT44">
                <div class="left">
                    <h1 class="title">Battle of Leyte</h1>
                    <p class="descript">
                        20 October 1944 - 31 December 1944
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=11.146,124.600&zoom=08&size=300x250&maptype=terrain&sensor=false" alt="Battle of Leyte" />
                </div>
            </li>
            
            <li id="23OCT44">
                <div class="left">
                    <h1 class="title">Battle of Leyte Gulf</h1>
                    <p class="descript">
                        23 October 1944 - 26 October 1944<br />
                        The largest naval battle in history. 
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=11.23,126.35&zoom=07&size=300x250&maptype=terrain&sensor=false" alt="Battle of Leyte Gulf" />
                </div>
            </li>
            
            <li id="19FEB45">
                <div class="left">
                    <h1 class="title">The Battle of Iwo Jima</h1>
                    <p class="descript">
                        19 February 1945 - 26 March 1945
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=24.782,141.321&zoom=12&size=300x250&maptype=terrain&sensor=false" alt="The Battle of Iwo Jima" />
                </div>
            </li>
            
            <li id="01APR45">
                <div class="left">
                    <h1 class="title">Battle of Okinawa</h1>
                    <p class="descript">
                        01 April 1945 - 21 June 1945
                    </p>
                </div>
                <div class="map">
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=26.531,127.996&zoom=08&size=300x250&maptype=terrain&sensor=false" alt="Battle of Okinawa" />
                </div>
            </li>
            
            <li id="06AUG45">
                <div class="left">
                    <h1 class="title">United States Drops the First Atomic Bomb on Hiroshima</h1>
                    <p class="descript">
                        06 August 45
                    </p>
                </div>
                <div class="map">
                    <img src="images/Hiroshima.jpg" alt="Hiroshima" />
                </div>
            </li>
            
            <li id="09AUG45">
                <div class="left">
                    <h1 class="title">United States Drops the Second Atomic Bomb on Nagasaki</h1>
                    <p class="descript">
                        09 August 1945
                    </p>
                </div>
                <div class="map">
                    <img src="images/Nagasaki.jpg" alt="Nagasaki" />
                </div>
            </li>
            
            <li id="14AUG45">
                <div class="left">
                    <h1 class="title">Japan Surrenders</h1>
                    <p class="descript">
                        14 August 1945
                    </p>
                </div>
                <div class="map">
                    <img src="images/surrender.jpg" alt="Japan Surrenders" />
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