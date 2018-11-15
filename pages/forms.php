<?php include 'includes/sidebarmenu.php';?>


<section class="poc-col-sm-12 poc-col-md-8 poc-col-l-10">

    <div class="poc-row">
        <div class="poc-content">

            <h1>Forms</h1>
            <!--    Search button searches in google.com, if you want you can change it  into your domain name to search in your website only -->
            <form id="frmSearch" class="search" method="get">
                <input type="text" class="search" id="txtSearch" placeholder="Search it" value="" />
                <button class="poc-btn-sm searchit" value="Search" name="submit">Search</button>
                <!--     <input  class="search" type="submit" name="submit" value="Search it" />-->
            </form>
            <p>HTML Forms are one of the main points of interaction between a user and a web site or application. This chapter provides a variety of classes that will allow you to include HTML forms into your page.
            </p>
            <ul>
                <li><a href="#input">Input Field</a></li>
                <li><a href="#textarea">Textarea</a></li>
                <li><a href="#checkbox">Checkbox</a></li>
                <li><a href="#radio">Radio Button</a></li>
                <li><a href="#fieldset">Fieldset</a></li>
                <li><a href="#dropdown">Dropdown</a></li>
                <li><a href="#search">Search</a></li>
            </ul>
            <!--   **************************SINGLE LINE INPUT****************************************-->
            <h3 id="input">Input field</h3>
            <p>Here are some standard input fields with type set as text. The Label serves as the input's label. You can choose to use placeholder text or not. If desired, you can give the input a required attribute.</p>

            <div class="poc-form-item">
                <label>First Name <span class="required">*</span></label>
                <input type="text" class="width50" placeholder="John Smith">

                <label>Last Name</label>
                <input type="text" class="width50">

                <label>Address </label>
                <input type="text" class="width50">

                <!--Display code-->
                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;label&gt;First Name &lt;span class="required"&gt;*&lt;span&gt;&lt;label&gt;
    &lt;input type="text" class="width50" placeholder="John Smith"&gt;

    &lt;label&gt;Last Name&lt;label&gt;
    &lt;input type="text" class="width50"&gt;

    &lt;label&gt;Address &lt;label&gt;
    &lt;input type="text" class="width50"&gt;
&lt;div&gt;
                 </pre>

            </div>
            <!--end of poc-for-item-->

            <!--****MULTILINE INPUT*************-->
            <h3 id="textarea">Textarea</h3>
            <p>This is used when the user is required to give details that may be longer than a single sentence.
            </p>
            <div class="poc-form-item">
                <label>Comments/Message:</label>
                <textarea rows="6"></textarea>

                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;label&gt;Comments/Message:&lt;label&gt;
    &lt;textarea rows="6"&gt;&lt;textarea&gt;
&lt;div&gt;
                </pre>
            </div>
            <!--   ********CHECKBOX*********-->

            <h3 id="checkbox">Checkbox</h3>
            <p>Input elements of type checkbox are rendered by default as square boxes that are checked (ticked) when activated. They allow you to select single values or multiple values for submission in a form.</p>
            <div class="poc-form-item">
                <label class="checkbox">
         	 	<input type="checkbox">Check 1</label>
                <label class="checkbox">
          		<input type="checkbox">Check 2</label>
                <label class="checkbox">
          		<input type="checkbox">Check 3</label>
                <label class="checkbox">
          		<input type="checkbox">Check 4</label>
                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt;Check 1&lt;label&gt;
    &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt;Check 2&lt;label&gt;
    &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt;Check 3&lt;label&gt;
    &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt;Check 4&lt;label&gt;
&lt;div&gt;
                </pre>
            </div>

            <!--   *****Radio button***********-->

            <h3 id="radio">Radio</h3>
            <p>A radio button is a graphical control element that allows the user to choose only one of a predefined set of mutually exclusive options.</p>
            <div class="poc-form-item">
                <input type="radio" name="boolean" checked>Yes
                <input type="radio" name="boolean">No
                <input type="radio" name="boolean">N/A
                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;input type="radio" name="boolean" checked&gt;Yes
    &lt;input type="radio" name="boolean"&gt;No
    &lt;input type="radio" name="boolean"&gt;N/A
&lt;div&gt;
		</pre>
            </div>


            <!--   ******FIELD SET********-->

            <h3 id="fieldset">Fieldset</h3>
            <p>The HTML fieldset element is used to group several controls and a label within a web form.</p>

            <div class="poc-form-item">
                <fieldset>
                    <legend>Login data</legend>

                    <label>Email</label>
                    <input type="email" name="user-email" class="width50">
                    <label>Password</label>
                    <input type="password" name="user-password" class="width50">
                    <div>
                        <button>Sign In</button>
                        <button class="button secondary outline">Cancel</button>
                    </div>
                </fieldset>
                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;Login data&lt;legend&gt;
        &lt;label&gt;Email&lt;label&gt;
        &lt;input type="email" name="user-email" class="width50"&gt;
        &lt;label&gt;Password&lt;label&gt;
        &lt;input type="password" name="user-password" class="width50"&gt;
        &lt;div&gt;
        &lt;button&gt;Sign In&lt;button&gt;
        &lt;button class="button secondary outline"&gt;Cancel&lt;button&gt;
        &lt;div&gt;
    &lt;fieldset&gt;
&lt;div&gt;
  	            </pre>
            </div>


            <!--   ******DROPDOWN******-->

            <h3 id="dropdown">Dropdown</h3>
            <p>The select tag is used to create a dropdown list. Option tags are used inside the select tag to define the options list.</p>
            <div class="poc-form-item">
                <label>Month</label>
                <select>
				<option value="choose">-Select month-</option>
				<option value="jan">January</option>
				<option value="feb">February</option>
				<option value="mar">March</option>
				<option value="apr">April</option>
				<option value="may">May</option>
			</select>
                <h3>Code</h3>
                <pre>
&lt;div class="poc-form-item"&gt;
    &lt;label&gt;Month&lt;label&gt;
    &lt;select&gt;
        &lt;option value="choose"&gt;-Select month-&lt;option&gt;
        &lt;option value="jan"&gt;January&lt;option&gt;
        &lt;option value="feb"&gt;February&lt;option&gt;
        &lt;option value="mar"&gt;March&lt;option&gt;
        &lt;option value="apr"&gt;April&lt;option&gt;
        &lt;option value="may"&gt;May&lt;option&gt;
    &lt;select&gt;
&lt;div&gt;
	</pre>
            </div>

            <!--   ****SEARCH*****-->
            <h3 id="search">Search</h3>
            <p>Input elements of type "search" are text fields designed for providing a way for the user to perform a search.</p>
            <div class="poc-form-item">
                <input type="text" class="search" placeholder="Search it">

                <h3>Code</h3>
                <pre>
&lt;input type="text" class="search" placeholder="Search it"&gt;
	          </pre>
            </div>



        </div>
    </div>

</section>
