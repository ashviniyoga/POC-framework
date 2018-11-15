<?php include 'includes/sidebarmenu.php';?>

<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Accordions</h1>
            <p>Accordions can add a nice touch to your site and save you some space. They are useful when you want to toggle between hiding and showing large amout of content. They are also great for testimonials.</p>

            <h3>Simple Accordion</h3>
            <p>To make this accordion work, you have to include the accordions.js file into your scripts folder. Then add a button with a class of "poc-accordion" and a div with a nested paragraph with the class of "pocPanel". You will find the code snippet below the accordion.</p>
            <button class="poc-accordion">Section 1</button>
            <div class="pocPanel">
                <p>Webtwo ipsum plickers zoodles unigo mozy boxbe grockit bitly imvu, ngmoco vimeo grockit ebay ideeli glogster. weebly handango. octopart koofers. Chartly twones appjet ning blekko diigo, heekya boxbe spock. Hojoki quora zappos chartly sococo chegg, imvu omgpop stypi. </p>
            </div>

            <button class="poc-accordion">Section 2</button>
            <div class="pocPanel">
                <p>Octopart hulu voki flickr doostang omgpop, blippy napster wufoo. Babblely kippt weebly shopify bubbli, kiko akismet. Revver plickers stypi convore, meebo octopart. Doostang vuvox bebo doostang akismet prezi unigo edmodo, zimbra gsnap bebo disqus geni. </p>
            </div>

            <button class="poc-accordion">Section 3</button>
            <div class="pocPanel">
                <p>Koofers bitly vuvox ideeli ngmoco flickr, wakoopa handango blyve. Twitter chegg dogster hipmunk oovoo, wakoopa twones. zappos dopplr qeyno. Jabber qeyno greplin hojoki insala mzinga, jaiku jajah ideeli. Airbnb klout tumblr glogster, wikia.</p>
            </div>

            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>
&lt;button class="poc-accordion">Section 1&lt;/button>
    &lt;div class="pocPanel">
      &lt;p>Your content here...&lt;/p>
    &lt;/div>

&lt;button class="poc-accordion">Section 2&lt;/button>
    &lt;div class="pocPanel">
      &lt;p>Your content here...&lt;/p>
    &lt;/div>

&lt;button class="poc-accordion">Section 3&lt;/button>
    &lt;div class="pocPanel">
      &lt;p>Your content here...&lt;/p>
&lt;/div>
                    </pre>

            </div>
            <!-- end map-form-item-->


            <h3>Animated Slide Down Accordion</h3>

            <p>This accordion has a nice effect added to it. When the user clicks on the button, the content will slide down smoothly. </p>
            <p>To make this accordion work, you have to include the accordions.js file into your scripts folder. Then add a button with a class of "poc-accordion" and a div with a nested paragraph with the class of "pocPanelAni". You will find the code snippet below the accordion.</p>
            <button class="poc-accordion">Section 1</button>
            <div class="pocPanelAni">
                <p>Webtwo ipsum plickers zoodles unigo mozy boxbe grockit bitly imvu, ngmoco vimeo grockit ebay ideeli glogster. weebly handango. octopart koofers. Chartly twones appjet ning blekko diigo, heekya boxbe spock. Hojoki quora zappos chartly sococo chegg, imvu omgpop stypi. </p>
            </div>

            <button class="poc-accordion">Section 2</button>
            <div class="pocPanelAni">
                <p>Octopart hulu voki flickr doostang omgpop, blippy napster wufoo. Babblely kippt weebly shopify bubbli, kiko akismet. Revver plickers stypi convore, meebo octopart. Doostang vuvox bebo doostang akismet prezi unigo edmodo, zimbra gsnap bebo disqus geni. </p>
            </div>

            <button class="poc-accordion">Section 3</button>
            <div class="pocPanelAni">
                <p>Koofers bitly vuvox ideeli ngmoco flickr, wakoopa handango blyve. Twitter chegg dogster hipmunk oovoo, wakoopa twones. zappos dopplr qeyno. Jabber qeyno greplin hojoki insala mzinga, jaiku jajah ideeli. Airbnb klout tumblr glogster, wikia.</p>
            </div>


            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>
&lt;button class="poc-accordion">Section 1&lt;/button>
    &lt;div class="pocPanelAni">
      &lt;p>Your content here...&lt;/p>
    &lt;/div>

&lt;button class="poc-accordion">Section 2&lt;/button>
    &lt;div class="pocPanelAni">
      &lt;p>Your content here...&lt;/p>
    &lt;/div>

&lt;button class="poc-accordion">Section 3&lt;/button>
    &lt;div class="pocPanelAni">
      &lt;p>Your content here...&lt;/p>
&lt;/div>
                    </pre>

            </div>
            <!-- end map-form-item-->
            
<!-- HORIZONTAL ACCORDION NEEDS MORE WORK --------------------
           
            <h3>Horizontal Accordion</h3>

            <p>This accordion is great and eye-catching if you do not have a lot of content. It would also make a great slide show!</p>
            <p>All you need to add is the class of "poc-accHor". There is no JavaScipt or jQuery necessary for this one. It looks best with 5 sections.</p>

            <article class="poc-accHor">
                <section id="poc-accHor1">
                    <h2><a href="#poc-accHor1">Section 1</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </section>
                <section id="poc-accHor2">
                    <h2><a href="#poc-accHor2">Section 2</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </section>
                <section id="poc-accHor3">
                    <h2><a href="#poc-accHor3">Section 3</a></h2>
                    <p>Culpa suscipit eaque expedita cupiditate fuga itaque consequatur eius nemo.</p>
                </section>
                <section id="poc-accHor4">
                    <h2><a href="#poc-accHor4">Section 4</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </section>
                <section id="poc-accHor5">
                    <h2><a href="#poc-accHor5">Section 5</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </section>
            </article>
-->
            <!-- end poc-accHor -->
<!--
            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>

&lt;article class="poc-accHor">
    &lt;section id="poc-accHor1">
        &lt;h2>&lt;a href="#poc-accHor1">Section 1&lt;/a>&lt;/h2>
        &lt;p>Your content here...&lt;/p>
    &lt;/section>

    &lt;section id="poc-accHor2">
        &lt;h2>&lt;a href="#poc-accHor2">Section 1&lt;/a>&lt;/h2>
        &lt;p>Your content here...&lt;/p>
    &lt;/section>

    &lt;section id="poc-accHor3">
        &lt;h2>&lt;a href="#poc-accHor3">Section 1&lt;/a>&lt;/h2>
        &lt;p>Your content here..&lt;/p>
    &lt;/section>
&lt;/article>
                    </pre>

            </div>
-->

        </div>
    </div>

</section>
