<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Images</h1>
            <p>Images can make your website a lot more interesting and appealing. Here are some examples how POC likes to style them. <br>Please note, that not all images displayed are responsive and will appear at the width/height in which they are imported.</p>

            <h3>Responsive Full Width Image</h3>
            <p>Responsive images will automatically adjust with the size of the screen. These are great as a header or billboard image at the top of the page.</p>
            <img class="poc-img100" src="images/funimal01.jpeg" alt="donkeys" />
            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;img class="poc-img100" src="../yourPath/donkeys.jpg" alt="donkeys" />
                </pre>

            </div>
            <!-- end map-form-item-->

            <h3>Rounded Corners</h3>
            <p>The corners are set to a default border-radius of 5px or 15px. Just apply either class "poc-corners5" or "poc-corners15" to the image tag.</p>

            <img class="poc-corner5 deer" src="images/funimal02.jpeg" alt="deer" />
            <img class="poc-corner15 cow" src="images/funimal08.jpeg" alt="cow" />
            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;img class="poc-corner5" src="../yourPath/deer.jpg" alt="deer" />
&lt;img class="poc-corner15" src="../yourPath/cow.jpg" alt="cow" />
                </pre>

            </div>
            <!-- end map-form-item-->


            <h3>Circle or Rounded Images</h3>
            <p>Circle images are a great choice for profile images. If you want the image to be a perfectly shaped circle, the original image must be square.</p>
            <img class="poc-imgCircle imgCircle" src="images/frog_sq.jpg" alt="frog" />
            <img class="poc-imgRounded imgRounded" src="images/bird04.jpg" alt="cow" />

            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;img class="poc-imgCircle" src="../yourPath/frog_sqare.jpg" alt="frog" />
&lt;img class="poc-imgRounded" src="../yourPath/owl.jpg" alt="owl" />
                </pre>

            </div>
            <!-- end map-form-item-->

            <h3>Centered Image</h3>
            <p></p>
            <img class="poc-imgCentered" src="images/pic04.jpg" alt="flower" />

            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;class="poc-imgCentered" src="../yourPath/pic04.jpg" alt="flower" />
                </pre>

            </div>
            <!-- end map-form-item-->

            <h3>Responsive Image Gallery</h3>
            <p>If you have some images to share, make use of our responsive POC Gallery. You can include as many images as you like. They will go from one to two to four images per row depending on the size of the browser-window or device.</p>
            <div class="poc-wrapGallery gallery">
                <img class="poc-imgGallery respGallery" src="images/pic01.jpg" alt="flower" />
                <img class="poc-imgGallery respGallery" src="images/pic02.jpg" alt="chameleon" />
                <img class="poc-imgGallery respGallery" src="images/pic03.jpg" alt="snake" />
                <img class="poc-imgGallery respGallery" src="images/pic05.jpg" alt="aligator" />

            </div>
            <!-- end imgGallery-->

            <div class="map-form-item">
                <h3>Code</h3>
                <pre>

&lt;div class="poc-wrapGallery">
    &lt;img class="poc-imgGallery" src="../yourPath/pic01.jpg" alt="leaf" />
    &lt;img class="poc-imgGallery" src="../yourPath/pic02.jpg" alt="chameleon" />
    &lt;img class="poc-imgGallery" src="../yourPath/pic03.jpg" alt="snake" />
    &lt;img class="poc-imgGallery" src="../yourPath/pic04.jpg" alt="aligator" />
&lt;/div>
                </pre>

            </div>
            <!-- end map-form-item-->

            <h3>Image Hover States</h3>
            <p>Add a hover state to your images on mouse-over to enhace user experience and interactivity. We have four different effects readily available. Change the transparency with "poc-imgHover-op". <br> Convert all colored images to sepia by default and reveal the color on the hover state. Use class "poc-imgHover-sepia" for this effect.<br> Use the hover state class "poc-imgHover-bw" to turn your image into a black and white photo.<br>Finally, class "poc-imgHover-blur" will put a beautiful blur effect on the image.</p>
            <h4></h4>
            <div class="poc-wrapGallery gallery">
                <img class="poc-imgGallery respGallery poc-imgHover-op" src="images/pic01.jpg" alt="flower" />
                <img class="poc-imgGallery respGallery poc-imgHover-sepia" src="images/pic02.jpg" alt="chameleon" />
                <img class="poc-imgGallery respGallery poc-imgHover-bw" src="images/pic03.jpg" alt="snake" />
                <img class="poc-imgGallery respGallery poc-imgHover-blur" src="images/pic05.jpg" alt="aligator" />

            </div>
            <!-- end imgGallery-->
            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;img class="poc-imgHover-op" src="pic01.jpg" alt="leaf" />
&lt;img class="poc-imgHover-sepia" src="pic02.jpg" alt="chameleon" />
&lt;img class="poc-imgHover-bw" src="pic03.jpg" alt="snake" />
&lt;img class="poc-imgHover-blur" src="pic04.jpg" alt="aligator" />
                </pre>

            </div>
            <!-- end map-form-item-->

            <h3>Image Caption</h3>
            <p>Add some text to your image with a beautiful overlay. You can have it on top of the image by default by adding the class "poc-imgOverlay". Alternatively, just have it appear on the hover state by adding the class "poc-imgOverlayHover".</p>
            <div class="poc-imgOverlay imgOverlay">
                <img src="images/bird07.jpg" alt="bird" />
                <div class="overlay">Your caption text goes here</div>
            </div>
            <div class="poc-imgOverlayHover imgOverlayHover">
                <img src="images/pic04.jpg" alt="flower" />
                <div class="overlay">Your caption text goes here</div>
            </div>
            <div class="map-form-item">
                <h3>Code</h3>
                <pre>
&lt;div class="poc-imgOverlay">
    &lt;img src="yourPath/pic.jpg" alt="flower"/>
    &lt;div class="overlay">Your caption text goes here&lt;/div>
&lt;/div>

Alternatively:

&lt;div class="poc-imgOverlayHover">
    &lt;img src="yourPath/pic.jpg" alt="flower"/>
    &lt;div class="overlay">Your caption text goes here&lt;/div>
&lt;/div>
                </pre>

            </div>

        </div>
    </div>

</section>
