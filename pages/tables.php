<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Tables</h1>
            <p>Table Description
            </p>
             <ul>
                <li><a href="#basic">Basic</a></li>
                <li><a href="#border">Bordered</a></li>
                <li><a href="#striped">Striped</a></li>
                <li><a href="#hover">Hover</a></li>
            </ul>
            <!-- ******Basic Table************-->
            <div class="map-form-item">
                <h3 id="basic">Basic Table</h3>
                <p>A simple HTML table, containing three columns and three rows:</p>

                <table class="poc-basic-table">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Ashley </td>
                        <td>Kim</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>Bella</td>
                        <td>Kim</td>
                        <td>45</td>
                    </tr>
                </table>
                <button class="poc-btn-default poc-btn-xs" onclick="moveTop()" id="top" title="Go to top">Top</button>
                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;table class="poc-basic-table"&gt;
    &lt;tr&gt;
        &lt;th&gt;Firstname&lt;th&gt;
        &lt;th&gt;Lastname&lt;th&gt; 
        &lt;th&gt;Age&lt;th&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Ashley&lt;td&gt;
        &lt;td&gt;Kim&lt;td&gt;
        &lt;td&gt;15&lt;td&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Eve&lt;td&gt;
        &lt;td&gt;Jackson&lt;td&gt;
        &lt;td&gt;34&lt;td&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Bella&lt;td&gt;
        &lt;td&gt;Kim&lt;td&gt;
        &lt;td&gt;45&lt;td&gt;
    &lt;tr&gt;
&lt;table&gt;
		</pre>

            
            </div>

            <!--********BORDERED TABLE ******-->
            <div class="map-form-item">
                <h3 id="border">Bordered Table</h3>
                <p>The following HTML table will be displayed with borders around the table cells:</p>
                <table class="poc-border-table">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Ashley </td>
                        <td>Kim</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>Bella</td>
                        <td>Kim</td>
                        <td>45</td>
                    </tr>
                </table>

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;table class="poc-border-table"&gt;
    &lt;tr&gt;
        &lt;th&gt;Firstname&lt;th&gt;
        &lt;th&gt;Lastname&lt;th&gt; 
        &lt;th&gt;Age&lt;th&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Ashley &lt;td&gt;
        &lt;td&gt;Kim&lt;td&gt;
        &lt;td&gt;15&lt;td&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Eve&lt;td&gt;
        &lt;td&gt;Jackson&lt;td&gt;
        &lt;td&gt;34&lt;td&gt;
    &lt;tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Bella&lt;td&gt;
        &lt;td&gt;Kim&lt;td&gt;
        &lt;td&gt;45&lt;td&gt;
    &lt;tr&gt;
&lt;table&gt;
	   </pre>
            </div>

            <!--   ***Striped**********-->
            <div class="map-form-item">
                <h3 id="striped">Striped</h3>
                <p>For zebra-striped tables add a background-color to all even (or odd) table rows:</p>

                <table class="poc-stripe-table">
                    <thead>
                        <tr class="heading">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ashley</td>
                            <td>Kim</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>Bella</td>
                            <td>Kim</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>Alex</td>
                            <td>James</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>Shrey</td>
                            <td>Bharat</td>
                            <td>25</td>
                        </tr>
                    </tbody>
                </table>
                <!---Display Code--->
                <h3>Code</h3>
                <pre>
&lt;table class="poc-stripe-table"&gt;
    &lt;thead&gt;
        &lt;tr class="heading"&gt;
            &lt;th&gt;First Name&lt;th&gt;
            &lt;th&gt;Last Name&lt;th&gt;
            &lt;th&gt;Points&lt;th&gt;
        &lt;tr&gt;
    &lt;thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
           &lt;td&gt;Ashley&lt;td&gt;
            &lt;td&gt;Kim&lt;td&gt;
            &lt;td&gt;15&lt;td&gt;
        &lt;tr&gt;
        &lt;tr&gt;
             &lt;td&gt;Eve&lt;td&gt;
             &lt;td&gt;Jackson&lt;td&gt;
             &lt;td&gt;34&lt;td&gt;
        &lt;tr&gt;
        &lt;tr&gt;
             &lt;td&gt;Bella&lt;td&gt;
             &lt;td&gt;Kim&lt;td&gt;
             &lt;td&gt;45&lt;td&gt;
        &lt;tr&gt;
        &lt;tr&gt;
             &lt;td&gt;Alex&lt;td&gt;
             &lt;td&gt;James&lt;td&gt;
             &lt;td&gt;25&lt;td&gt;
        &lt;tr&gt;
            &lt;tr&gt;
             &lt;td&gt;Shrey&lt;td&gt;
             &lt;td&gt;Bharat&lt;td&gt;
             &lt;td&gt;25&lt;td&gt;
        &lt;tr&gt;
    &lt;tbody&gt;
&lt;table&gt;
            </pre>
            </div>
            <!-- ***Hover**********-->
            <div class="map-form-item">
                <h3 id="hover">Hover Table</h3>
                <p>This table adds a great hover effect on table rows:</p>
                <table class="poc-hover-table">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Ashley </td>
                        <td>Kim</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>Bella</td>
                        <td>Kim</td>
                        <td>45</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

</section>