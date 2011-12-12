   <?php include('includes/header.php'); ?>

   <div id="content">
      <div class="pacific" data-columns="18" data-rows="12" data-cellSize="40" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="true" data-lineWidth="8">
         <ul data-color="#FF0000" data-label="Pearl Harbor">
            <li data-coords="17, 6.75" class="battle">Pearl Harbor</li>
         </ul>
         <ul data-color="#FF0000" data-label="Midway">
            <li data-coords="14.2, 5.55">Midway</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Battle of Coral Sea">
            <li data-coords="10.2, 11.1">Battle of Coral Sea</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Solomon Islands">
            <li data-coords="10.8, 10.4">Solomon Islands Campaign</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Guadacanal">
            <li data-coords="11.5, 10.8">Guadalcanal Campaign</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Java">
            <li data-coords="5.2, 10.4">Java Campaign</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Leyte">
            <li data-coords="6.2, 8">Leyte Gulf Campaign</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Truk">
            <li data-coords="9.9, 8.25">The Destruction of Truk</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Philippines">
            <li data-coords="9.15, 7.2">The Battle of The Philippine Sea</li>
         </ul>
         
         <ul data-color="#FF0000" data-label="Okinawa">
            <li data-coords="7.0, 5.7">Okinawa</li>
         </ul>
         
         <ul>
            <li data-coords="13, 1.3">The Battle of Komandorski Islands</li>
         </ul>
      </div>
      <div id="legend"></div>
      
      <script type="text/javascript">
         $(".pacific").subwayMap({debug: true});
      </script>
   </div>

<?php include('includes/footer.php'); ?>