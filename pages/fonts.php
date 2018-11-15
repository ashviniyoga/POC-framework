<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Fonts</h1>
            <p>Piece Of Cake pages are easy to read, even for people with slight reading disabilities. The default font-size is 14px, font is Roboto, which has a good letter spacing and line-spacing (1.5).</p>

            <ul>
                <li><a href="#headings">Headings</a></li>
                <li><a href="#size">Font Size Classes</a></li>
                <li><a href="#external-fonts">Using External Fonts</a></li>
            </ul>

            <h3 id="headings">Headings</h3>
            <p>By default, Piece Of Cake styles HTML headings this way:</p>
            <div class="map-form-item">

                <h1>Heading h1 (36px)</h1>
                <h2>Heading h2 (30px)</h2>
                <h3>Heading h3 (24px)</h3>
                <h4>Heading h4 (20px)</h4>
                <h5>Heading h5 (18px)</h5>
                <h6>Heading h6 (16px)</h6>
            </div>

            <h3 id="border-colors">Font Classes</h3>
            <p>Font sizes can be styled with the following poc-size classes:</p>
            <div class="map-form-item">
                <p class="poc-tiny">poc-tiny (10px)</p>
                <p class="poc-small">poc-small (12px)</p>
                <p class="poc-medium">poc-medium (15px)</p>
                <p class="poc-large">poc-large (18px)</p>
                <p class="poc-xlarge">poc-xlarge (24px)</p>
                <p class="poc-xxlarge">poc-xxlarge (36px)</p>
                <p class="poc-xxxlarge">poc-xxxlarge (48px)</p>
                <p class="poc-jumbo">poc-jumbo (64px)</p>

                <h3>Code</h3>
                <pre>
&lt;p class="poc-large"&gt;.poc-large&lt;/p&gt;
               </pre>
            </div>


            <h3 id="external-fonts">Using External Fonts</h3>
            <p>With Piece Of Cake it is extremely easy to add new fonts to a web page (only CSS and HTML) and take advantage of unlimited use of external font libraries (like Google Fonts) that work in all modern browsers.</p>

            <div class="map-form-item">
                <p>First, you need to give your font a class name in your custom CSS file:</p>

                <h3>Code</h3>
                <pre>
.poc-raleway: &#123;"Raleway", sans-serif;&#125;  
               </pre>

                <p>Second, include the link for this external font in the head section of your html page:</p>
                <pre>
&lt;link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"&lt;/p&gt;  
               </pre>

            </div>
        </div>
    </div>

</section>
