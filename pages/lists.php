<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Lists</h1>
            <p>The Piece Of Cake Framework offers basic list styling. Use them as a foundation and add additional styling as needed.</p>

            <ul>
                <li><a href="#lists">Basic Lists</a></li>
                <li><a href="#bordered">Bordered Lists</a></li>
                <li><a href="#colored">Colored Lists</a></li>
            </ul>

            <h3 id="lists">Basic Lists</h3>
            <p>The .poc-ul class is used to display a basic list:</p>
            <div class="map-form-item">

                <ul class="poc-ul">
                    <li>Volkswagen</li>
                    <li>Ford</li>
                    <li>Toyota</li>
                    <li>Honda</li>
                </ul>
                <h3>Code</h3>
                <pre>
&lt;ul class="poc-ul"&gt;
    &lt;li&gt;Volkswagen&lt;/li&gt;
    &lt;li&gt;Ford&lt;/li&gt;
    &lt;li&gt;Toyota&lt;/li&gt;
    &lt;li&gt;Honda&lt;/li&gt;
&lt;/ul&gt;
               </pre>
            </div>


            <h3 id="bordered">Bordered Lists</h3>
            <p>.Poc-ul and .poc-border combined will define a list with borders:</p>

            <div class="map-form-item">
                <ul class="poc-ul poc-border">
                    <li>Volkswagen</li>
                    <li>Ford</li>
                    <li>Toyota</li>
                    <li>Honda</li>
                </ul>

                <h3>Code</h3>
                <pre>
&lt;ul class="poc-ul poc-border"&gt;
    &lt;li&gt;Volkswagen&lt;/li&gt;
    &lt;li&gt;Ford&lt;/li&gt;
    &lt;li&gt;Toyota&lt;/li&gt;
    &lt;li&gt;Honda&lt;/li&gt;
&lt;/ul&gt;
               </pre>
            </div>

            <h3 id="colored">Colored Lists</h3>
            <p>To add colors, simply add one of the poc-color classes:</p>
            <div class="map-form-item">
                <ul class="poc-ul">
                    <li class="poc-pale-green">Volkswagen</li>
                    <li>Ford</li>
                    <li class="poc-pale-green">Toyota</li>
                    <li>Honda</li>
                </ul>
                <h3>Code</h3>
                <pre>
&lt;ul class="poc-ul poc-border"&gt;
    &lt;li class="poc-pale-green&gt;Volkswagen&lt;/li&gt;
    &lt;li&gt;Ford&lt;/li&gt;
    &lt;li class="poc-pale-green&gt;Toyota&lt;/li&gt;
    &lt;li&gt;Honda&lt;/li&gt;
&lt;/ul&gt;
               </pre>

            </div>

        </div>
    </div>

</section>
