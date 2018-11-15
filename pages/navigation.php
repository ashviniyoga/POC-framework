<?php include 'includes/sidebarmenu.php';?>

<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Navigation</h1>
            <p>A simple navigation bar styling is available that you just have to include inside the header tag. If desired, styling is also provided for a simple dropdown menu. Use it as a foundation and custom style it to your liking.</p>

            <div class="map-form-item">
               <h3>Example</h3>
                <div class="nav-example">
                    <div class="poc-header">
                        <ul class="poc-menu">
                            <li><a href=""> Link1 </a></li>
                            <li><a href=""> Link2 </a></li>
                            <li>
                                <div class="dropdown">
                                    <a href="" class="">Dropdown</a>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="poc-clear"></div>
                    </div>
                </div>
                
                <h3>Code</h3>

                <pre>
&lt;header&gt;
    &lt;input class="poc-menu-btn" type="checkbox" id="poc-menu-btn" /&gt;
    &lt;label class="poc-menu-icon" for="poc-menu-btn"&gt;&lt;span class="poc-navicon"&gt;&lt;/span&gt;&lt;/label&gt;

    &lt;ul class="poc-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;Link1 &lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Link2 &lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;div class="dropdown"&gt;
                &lt;a href="" class=""&gt;Dropdown&lt;/a&gt;
                &lt;div class="dropdown-content"&gt;
                    &lt;a href="#"&gt;Link 1&lt;/a&gt;
                    &lt;a href="#"&gt;Link 2&lt;/a&gt;
                    &lt;a href="#"&gt;Link 3&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/header&gt;           
            </pre>
            </div>
        </div>
    </div>

</section>
