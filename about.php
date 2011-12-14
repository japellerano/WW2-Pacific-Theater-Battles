<?php include('includes/header.php'); ?>

<div id="container">
    <div id="content-left">
        <h1 class="section">About the Project</h1>
        <div class="about">
            This is the third and final project for ARTG 3352 - Interactive Design. The project focuses on time and information which has time relevancy.
        </div>
        
        <h1 class="section">The Technologies Used</h1>
        <div class="about">
            <article>
                <h3 class="tech-header">Google Static Map API</h3>
                <p>
                    <a href="http://code.google.com/apis/maps/documentation/staticmaps/">http://code.google.com/apis/maps/documentation/staticmaps/</a>
                </p>
            </article>
            <article>
                <h3 class="tech-header">jQuery Subway Map Visualization Plugin</h3>
                <p>
                    <a href="http://www.kalyani.com/2010/10/subway-map-visualization-jquery-plugin/">http://www.kalyani.com/2010/10/subway-map-visualization-jquery-plugin/</a>
                </p>
            </article>
            <article>
                <h3 class="tech-header">jQuery Timelinr</h3>
                <p>
                    <a href="http://www.csslab.cl/2011/08/18/jquery-timelinr/">http://www.csslab.cl/2011/08/18/jquery-timelinr/</a>
                </p>
            </article>
            <article>
                <h3 class="tech-header">Git Version Control</h3>
                <p>
                    <a href="http://git-scm.com/">http://git-scm.com/</a>
                </p>
            </article>
            <article>
                <h3 class="tech-header">GitHub - Git Code Repository</h3>
                <p>
                    <a href="http://github.com">http://github.com</a>
                </p>
            </article>
        </div>
        
        <h1 class="section">About The Author</h1>
        <p class="about">
            My name is James Addison Pellerano, I am a student at Northeastern University, majoring in Digital Art. Front-End Web Developer specializing in WordPress theme development and front-end coding. Check out my projects on GitHub: <a href="http://github.com/japellerano/">http://github.com/japellerano/</a>.
        </p>
    </div>
    <div id="content-right">
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 4,
          interval: 30000,
          width: 250,
          height: 300,
          theme: {
            shell: {
              background: '#333333',
              color: '#ffffff'
            },
            tweets: {
              background: '#000000',
              color: '#ffffff',
              links: '#4aed05'
            }
          },
          features: {
            scrollbar: false,
            loop: false,
            live: false,
            behavior: 'all'
          }
        }).render().setUser('frontendjames').start();
        </script>
    </div>
</div>


<?php include('includes/footer.php'); ?>