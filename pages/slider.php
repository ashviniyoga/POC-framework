<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Image Sliders</h1>
            <p>Slide shows will make your site more attractive and interactive. They are easy to include. All you need is several images that have the same size. Ideally the size you want them to be displayed in.</p>
            <p>All POC sliders are fully responsive.</p>


            <!-- CENTERED SLIDER ------------------------------------------------------------------------------------------------------->
            <h2>Centered Image Slider</h2>

            <div class="poc-sliderCenter">

                <div class="poc-mySlides poc-fade">
                    <img src="images/pic04.jpg" alt="pic04">
                    <div class="poc-capText">Caption Text</div>
                </div>
                <div class="poc-mySlides poc-fade">
                    <img src="images/pic02.jpg" alt="pic02">
                    <div class="poc-capText">Caption Two</div>
                </div>
                <div class="poc-mySlides poc-fade">
                    <img src="images/pic03.jpg" alt="pic003">
                    <div class="poc-capText">Caption Three</div>
                </div>
                <div class="poc-mySlides poc-fade">
                    <img src="images/pic06.jpg" alt="pic006">
                    <div class="poc-capText">Caption Four</div>
                </div>
                <div class="poc-mySlides poc-fade">
                    <img src="images/pic05.jpg" alt="pic05">
                    <div class="poc-capText">Caption Five</div>
                </div>
                <a class="poc-prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="poc-next" onclick="plusSlides(1)">&#10095;</a>

            </div>

            <div style="text-align:center">
                <span class="poc-dot" onclick="currentSlide(1)"></span>
                <span class="poc-dot" onclick="currentSlide(2)"></span>
                <span class="poc-dot" onclick="currentSlide(3)"></span>
                <span class="poc-dot" onclick="currentSlide(4)"></span>
                <span class="poc-dot" onclick="currentSlide(5)"></span>
            </div>
            <div class="map-form-item">


                <h3>HTML Code</h3>
                <pre>
&lt;div class="poc-sliderCenter">
&lt;div class="poc-mySlides poc-fade">
&lt;img src="../yourPath/pic01.jpg">
&lt;div class="poc-capText">Caption Text&lt;/div>
&lt;div class="poc-mySlides poc-fade">
&lt;img src="../yourPath/pic02.jpg">
&lt;div class="poc-capText">Caption Two&lt;/div>
                </pre>
                <p class="mapFormInsert">Insert as many slides as desired here...</p>
                <pre>
&lt;a class="poc-prev" onclick="plusSlides(-1)">&#10094;&lt;/a>
&lt;a class="poc-next" onclick="plusSlides(1)">&#10095;&lt;/a>
&lt;/div>
&lt;div style="text-align:center">
&lt;span class="poc-dot" onclick="currentSlide(1)">&lt;/span>
&lt;span class="poc-dot" onclick="currentSlide(2)">&lt;/span>
               </pre>
                <p class="mapFormInsert">Repeat this line for as many images that you have inserted.</p>
                <pre>        &lt;/div>
                    </pre>

            </div>
            <!-- end map-form-item-->
            <p>The last thing you have to do is to link to the pocSlider.js file that is included in the downloaded folder. It's best to include it just above the closing body tag at the bottom of your html page.</p>
            <div class="map-form-item">
                <h3>File link</h3>
                <pre>
&lt;script type="text/javascript" src="../js/jquery.pocSliders.js">&lt;/script>
             </pre>
            </div>
            <!-- end map-form-item-->


            <!-- FULL WIDTH IMAGE SLIDER ----------------------------------------------------------------------------------------------->
            <h2>Full Width Image Slider</h2>
            <p>The full width image slider will look great at the top of your page. Please note, that your images will display in the size and aspect ratio of your original images used. The example images are imported as 1000px by 430px.</p>

            <div class="poc-sliderCover">

                <div class="poc-mySlidesCover poc-fade">
                    <img src="images/pic01wide.jpg" alt="pic01wide">
                    <div class="poc-capText">Caption Text</div>
                </div>
                <div class="poc-mySlidesCover poc-fade">
                    <img src="images/pic02wide.jpg" alt="pic02wide">
                    <div class="poc-capText">Caption Two</div>
                </div>
                <div class="poc-mySlidesCover poc-fade">
                    <img src="images/pic03wide.jpg" alt="pic03wide">
                    <div class="poc-capText">Caption Three</div>
                </div>
                <div class="poc-mySlidesCover poc-fade">
                    <img src="images/pic04wide.jpg" alt="pic04wide">
                    <div class="poc-capText">Caption Four</div>
                </div>
                <div class="poc-mySlidesCover poc-fade">
                    <img src="images/pic05wide.jpg" alt="pic05wide">
                    <div class="poc-capText">Caption Five</div>
                </div>
                <a class="poc-prev" onclick="plusSlidesCover(-1)">&#10094;</a>
                <a class="poc-next" onclick="plusSlidesCover(1)">&#10095;</a>

            </div>

            <div style="text-align:center">
                <span class="poc-dotCover" onclick="currentSlideCover(1)"></span>
                <span class="poc-dotCover" onclick="currentSlideCover(2)"></span>
                <span class="poc-dotCover" onclick="currentSlideCover(3)"></span>
                <span class="poc-dotCover" onclick="currentSlideCover(4)"></span>
                <span class="poc-dotCover" onclick="currentSlideCover(5)"></span>
            </div>
            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>
&lt;div class="poc-sliderCover">
    &lt;div class="poc-mySlidesCover poc-fade">
        &lt;img src="images/pic01.jpg">
        &lt;div class="poc-capText">Caption Text&lt;/div>
    &lt;/div>
    &lt;div class="poc-mySlidesCover poc-fade">
        &lt;img src="../images/pic02.jpg">
        &lt;div class="poc-capText">Caption Two&lt;/div>
    &lt;/div>
    </pre>
                <p class="mapFormInsert">Insert as many slides as desired here...</p>
                <pre>
    &lt;a class="poc-prev" onclick="plusSlidesCover(-1)">&#10094;&lt;/a>
    &lt;a class="poc-next" onclick="plusSlidesCover(1)">&#10095;&lt;/a>
&lt;/div>
    &lt;div style="text-align:center">
&lt;span class="poc-dotCover" onclick="currentSlideCover(1)">&lt;/span>
&lt;span class="poc-dotCover" onclick="currentSlideCover(2)">&lt;/span>
           </pre>
                <p class="mapFormInsert">Repeat this line for as many images that you have inserted.</p>
                <pre>
&lt;/div>
                </pre>

            </div>
            <!-- end map-form-item-->

            <p>The last thing you have to do is to link to the pocSlider.js file that is included in the downloaded folder. It's best to include it just above the closing body tag at the bottom of your html page.</p>
            <div class="map-form-item">
                <h3>File link</h3>
                <pre>
&lt;script type="text/javascript" src="../js/jquery.pocSliders.js">&lt;/script>
                </pre>

            </div>
            <!-- end map-form-item-->
            
            
<!-- FULL WIDTH AUTOMATIC SLIDER ----------------------------------------------------------------------------------------------->
            <h2>Full Width Automatic Slider</h2>
            <p>The full width automatic slider will look great at the top of your page as a banner image or billboard. It will grab anyone's attention.</p>

            <div class="poc-sliderAuto">

                <div class="poc-mySlidesAuto poc-fade">
                    <img src="images/pic01wide.jpg" alt="pic01wide">
                </div>
                <div class="poc-mySlidesAuto poc-fade">
                    <img src="images/pic02wide.jpg" alt="pic02wide">
                </div>
                <div class="poc-mySlidesAuto poc-fade">
                    <img src="images/pic03wide.jpg" alt="pic03wide">
                </div>
                <div class="poc-mySlidesAuto poc-fade">
                    <img src="images/pic04wide.jpg" alt="pic04wide">
                </div>
                <div class="poc-mySlidesAuto poc-fade">
                    <img src="images/pic05wide.jpg" alt="pic05wide">
                </div>

            </div>


            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>
&lt;div class="poc-sliderAuto">
   &lt;div class="poc-mySlidesAuto poc-fade">
     &lt;img src="../images/pic01.jpg">
   &lt;/div>
   &lt;div class="poc-mySlidesAuto poc-fade">
       &lt;img src="../images/pic02.jpg">
   &lt;/div>
   &lt;div class="poc-mySlidesAuto poc-fade">
     &lt;img src="../images/pic03.jpg">
   &lt;/div>
   &lt;div class="poc-mySlidesAuto poc-fade">
     &lt;img src="../images/pic04.jpg">
   &lt;/div>
   &lt;div class="poc-mySlidesAuto poc-fade">
     &lt;img src="../images/pic05.jpg">
   &lt;/div
&lt;/div>
                </pre>

                <p>To get the slideshow running just include the pocSlider.js file that is included in the downloaded folder. It's best to include it just above the closing body tag at the bottom of your html page. </p>

                <div class="map-form-item">
                    <h3>File link</h3>
                    <pre>
&lt;script type="text/javascript" src="../js/jquery.pocSliders.js">&lt;/script>
                   </pre>

                </div>
            </div>
            <!-- end map-form-item-->
           

            <!-- ROTATING SLIDER ------------------------------------------------------------------------------------------------------->
            <h2 class="poc-apTop">Cool Rotator Slider</h2>
            <p>This cool slider with a <a class="textLink" href="https://opensource.org/licenses/MIT" target="_blank">MIT licence</a> holds six images. To make this slider work add the id "pocRotator" to your section tag that wraps the HTML code from below.</p>
            <p>Warning: DO NOT change any of the classes within the code or the slider will not work.</p>

            <section id="pocRotator">
                <div class="rotating-slider">
                    <ul class="slides">
                        <li>
                            <div class="inner">
                                <h2>Slide 1</h2>
                                <p>This is a cool rotator plugin.</p>
                            </div>
                        </li>
                        <li>
                            <div class="inner"></div>
                        </li>
                        <li>
                            <div class="inner">
                                <h2>Slide 2</h2>
                                <p>This is a subtitle for slide 2</p>
                            </div>
                        </li>
                        <li>
                            <div class="inner"> </div>
                        </li>
                        <li>
                            <div class="inner">
                                <h2>Slide 3</h2>
                                <p>This is slide 3</p>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <h2>Slide 4</h2>
                                <p>This is a subtitle for slide 4</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- end section rotator -->

            <div class="map-form-item">
                <h3>HTML Code</h3>
                <pre>
&lt;section id="pocRotator">
    &lt;div class="rotating-slider">
      &lt;ul class="slides">
        &lt;li>
          &lt;div class="inner">
            &lt;h2>Title&lt;/h2>
            &lt;p>Your desired subtitle goes here&lt;/p>
          &lt;/div>
        &lt;/li>
        &lt;li>
          &lt;div class="inner">&lt;/div>
        &lt;/li>
        &lt;li>
          &lt;div class="inner">
            &lt;h2>Title Slide 3&lt;/h2>
            &lt;p>Your desired subtitle goes here&lt;/p>
          &lt;/div>
        &lt;/li>
        &lt;li>
          &lt;div class="inner"> &lt;/div>
        &lt;/li>
        &lt;li>
          &lt;div class="inner">&lt;/div>
        &lt;/li>
        &lt;li>
          &lt;div class="inner">
            &lt;h2>Slide 6&lt;/h2>
            &lt;p>Your desired subtitle goes here&lt;/p>
          &lt;/div>
          &lt;/li>
      &lt;/ul>
    &lt;/div>
&lt;/section>
            </pre>

            </div>
            <!-- end map-form-item-->

            


            <h3 class="poc-apTop">Next Steps</h3>

            <p>Next, add the following files from your downloaded POC folder to your root folder and create the links for them. These are the files you will need:</p>
            <p class="poc-apLeft">jquery.rotating-slider.min.js<br> rotating-slider.min.css
                <br> pocRotator.css
            </p>

            <p>These links go into your head tag:</p>

            <div class="map-form-item">
                <h3>File links</h3>
                <pre>
&lt;link rel="stylesheet" href="../css/pocRotator.css">
&lt;link rel="stylesheet" href="../css/rotating-slider.min.css">
&lt;script type="text/javascript" src="../js/jquery.rotating-slider.min.js">&lt;/script>

         </pre>
            </div>
            <!-- end map-form-item-->

            <p>Then there is one more file you have to link to - the pocSlider.js file. It's best to include it just above the closing body tag at the bottom of your html page.</p>
            <div class="map-form-item">
                <h3>File link</h3>
                <pre>
&lt;script type="text/javascript" src="../js/jquery.pocSliders.js">&lt;/script>
            </pre>
            </div>
            <!-- end map-form-item -->


            <h3 class="poc-apTop">Final Step</h3>

            <p>The final step will be to include your images. Open your pocRotator.css and include your files as background images. If you wish to change the background-color for the entire slider you can do so in the third line of your pocRotator.css-file.</p>


        </div>
    </div>

</section>
