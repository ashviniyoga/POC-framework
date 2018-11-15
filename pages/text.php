<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Text</h1>
            <p>With custom text alignment classes, Piece Of Cake allows you to easily align text on your entire page.</p>

            <ul>
                <li><a href="#alignment">Text Alignment</a></li>
                <li><a href="#centering">Centering Elements</a></li>
                <li><a href="#weight-italic">Font Weight and Italic Text</a></li>
                <li><a href="#transform">Text Transform</a></li>
                <li><a href="#quotes">Quotes</a></li>
                <li><a href="#code">Code</a></li>
                <li><a href="#variables">Variables</a></li>
                <li><a href="#effects">Special Effects</a></li>
            </ul>

            <h3 id="alignment">Text Alignment</h3>
            <p>The poc-left-align and the poc-right-align classes are used to align text as follows:</p>
            <div class="map-form-item">
                <p class="poc-left-align">Left aligned text.</p>
                <p class="poc-center">This text is centered.</p>
                <p class="poc-right-align">Right aligned text.</p>
                <p class="poc-justify">This text is justify.</p>

                <h3>Code</h3>
                <pre>
&lt;p class="poc-left-align"&gt;Left aligned text.&lt;/p&gt;
&lt;p class="poc-center"&gt;This text is centered.&lt;/p&gt;
&lt;p class="poc-right-align"&gt;Right aligned text.&lt;/p&gt;
&lt;p class="poc-justify"&gt;This text is justify.&lt;/p&gt;
                </pre>
            </div>



            <h3 id="centering">Centering Elements</h3>
            <p>The poc-center class is also used to center-align elements:</p>
            <div class="map-form-item">
                <div class="poc-center">
                    <img src="images/poc_small.png" alt="poc logotype">
                    <p>This image is centered.</p>
                </div>

                <h3>Code</h3>
                <pre>
                    &lt;div class="poc-center"&gt;
                        &lt;img src="images/poc_small.png" alt="poc logotype"/&gt;
                        &lt;p&gt;This image is centered.&lt;/p&gt;
                    &lt;/div&gt;
                </pre>
            </div>

            <h3 id="weight-italic">Font Weight and Italic Text</h3>
            <p>Quickly change the weight (boldness) of text or italicize text:</p>
            <div class="map-form-item">
                <p class="poc-bold">Bold Text.</p>
                <p class="poc-normal">Normal weight text.</p>
                <p class="poc-light">Light weight text.</p>
                <p class="poc-italic">Italic text.</p>
                <h3>Code</h3>
                <pre>
&lt;p class="poc-bold"&gt;Bold text.&lt;/p&gt;
&lt;p class="poc-normal"&gt;Normal weight text.&lt;/p&gt;
&lt;p class="poc-light"&gt;Light weight text.&lt;/p&gt;
&lt;p class="poc-italic"&gt;Italic text.&lt;/p&gt;
            </pre>

            </div>

            <h3 id="transform">Text Transform</h3>
            <p>Transform text in components with text capitalization classes.</p>
            <div class="map-form-item">
                <p class="poc-lowercase">lowercase text.</p>
                <p class="poc-uppercase">uppercase text.</p>
                <p class="poc-capitalize">capitalize text.</p>

                <h3>Code</h3>
                <pre>
&lt;p class="poc-lowercase"&gt;lowercase text.&lt;/p&gt;
&lt;p class="poc-uppercase"&gt;uppercase text..&lt;/p&gt;
&lt;p class="poc-capitalize"&gt;capitalize text.&lt;/p&gt;
            </pre>

            </div>

            <h3 id="quotes">Quotes</h3>
            <p>Quotes stand out for contrast and added variety to the text.</p>
            <div class="map-form-item">
                <div class="poc-pale-yellow poc-container">
                    <p class="poc-xxlarge poc-italic poc-serif">"This is an important quote."</p>
                    <p class="poc-small">Poc Team</p>
                </div>

                <h3>Code</h3>
                <pre>
&lt;div class="poc-pale-yellow"&gt;
    &lt;p class="poc-xxlarge poc-italic poc-serif"&gt;"This is an important quote."&lt;/p&gt;
    &lt;p class="poc-small"&gt;Poc Team&lt;/p&gt;
&lt;/div&gt;
            </pre>

            </div>

            <h3 id="code">Code</h3>
            <p>Wrap inline snippets of code with &lt;code&gt;. Be sure to escape HTML angle brackets.</p>
            <div class="map-form-item">
                <h4>Inline Code</h4>
                <p>For example, &lt;head&gt; should be wrapped as inline.</p>

                <h3>Code</h3>
                <pre>
&lt;code&gt;
    &amp;lt;head&amp;gt;
&lt;/code&gt;
            </pre>

                <h4>Code Blocks</h4>
                <p>Use &lt;pre&gt; for multiple lines of code. Once again, be sure to escape any angle brackets in the code for proper rendering.</p>

                <pre>
&lt;pre&gt;
    &amp;lt;div class="poc-dark-blue"&amp;gt;
        &amp;lt;p&amp;gt;This is how pre tag should be written.&amp;lt;/p&amp;gt;
    &amp;lt;/div&amp;gt;
&lt;/pre&gt;
            </pre>

            </div>


            <h3 id="variables">Variables</h3>
            <p>For indicating variables use the &lt;var&gt; tag.</p>
            <div class="map-form-item">
                <var>x</var> = 2<var>y</var> + <var>b</var>

                <h3>Code</h3>
                <pre>
&lt;var&gt; x &lt;/var&gt; = 2&lt;var&gt; y &lt;/var&gt; + &lt;var&gt; b &lt;/var&gt;    
            </pre>

            </div>


            <h3 id="effects">Special Effects</h3>
            <p>The poc-opacity class is designed to work with all colors, opacity and text-shadow.</p>

            <div class="map-form-item">
                <h4>Text-Opacity</h4>
                <div class="poc-brown poc-container">
                    <h1 class="poc-opacity">poc-opacity</h1>
                </div>
                <div class="poc-dark-red poc-container">
                    <h1 class="poc-opacity-max">poc-opacity-max</h1>
                </div>
                <div class="poc-pale-green poc-container">
                    <h1 class="poc-opacity-min">poc-opacity-min</h1>
                </div>
                <div class="poc-pale-yellow poc-container poc-border-blue">
                    <h1 class="poc-opacity-off">poc-opacity-off</h1>
                </div>

                <h4>Text-Shadow</h4>
                <div class="poc-pale-red poc-container">
                    <h1 class="poc-text-shadow">poc-text-shadow</h1>
                </div>
            </div>

        </div>
    </div>

</section>
