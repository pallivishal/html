<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>L.A.M.P Stack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/interests.css">
  </head>
  <body>
    <!-- header -->
      <header>
        <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-cog"></span>
          </button>
          <a class="navbar-brand" href="#">Chamber Of Chiku</a>
        </div>
        <!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
      </header>
      <!-- main -->
      <main>
      <!-- contianer-fluind start-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="lampstack.php">L.A.M.P Stack</a></li>
                <li role="presentation" class="active"><a href="mernstack.php">M.R.E.N Stack</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-md-8">
            <!-- nav start -->
            <ul class="nav nav-pills">
              <li role="presentation" class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false" aria-hashpopup="true">PHP basics <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="#comments">Comments</a></li>
                  <li role="presentation"><a href="#variables">Variables</a></li>
                  <li role="presentation"><a href="#constants">Constants</a></li>
                  <li role="presentation"><a data-toggle="collapse" data-target="#primitivedatatypes" aria-expanded="false" aria-controls="collapseExample1">Primitive Data Types</a></li>
                  <div class="collapse" id="primitivedatatypes">
                    <ul class="nav nav-pills nav-stacked">
                      <li role="presentation"><a href="#integer">Integers</a></li>
                      <li role="presentation"><a href="#string">Strings</a></li>
                      <li role="presentation"><a href="#boolean">Boolean</a></li>
                      <li role="presentation"><a href="#float">Float</a></li>
                      <li role="presentation"><a href="#null">Undefined</a></li>
                    </ul>
                  </div>
                  <li href="presentation"><a data-toggle="collapse" data-target="#referencedatatype" aria-expanded="false" aria-controls="collapseExample2">Reference Data Types</a></li>
                  <div class="collapse" id="referencedatatype">
                    <ul class="nav nav-pills nav-stacked">
                      <li role="presentation"><a href="#arrays">Arrays</a></li>
                      <li role="presentation"><a href="#fuctions">Functions</a></li>
                    </ul>
                  </div>
                  <li role="presentation"><a href="#">Conditional Statements</a></li>
                  <li role="presentation"><a data-toggle="collapse" data-target="#loops" aria-expanded="false" aria-controls="collapseExample3">Loops</a></li>
                  <div class="collapse" id="loops">
                    <ul class="nav nav-pills nav-stacked">
                      <li role="presentation"><a href="#while">While Loop</a></li>
                      <li role="presentation"><a href="#dowhile">Do While Loop</a></li>
                      <li role="presentation"><a href="#forloop">For Loop</a></li>
                    </ul>
                  </div>
                  <li role="presentation"><a href="#switch">Switch Case</a></li>
                </ul>
              </li>
              <li role="presentation" class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false" aria-hashpopup="true">SQL basics <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="#create">Create</a></li>
                </ul>
              </li>
            </ul>
            <!-- nav ends-->
            <h1 id="#phpbasics">PHP Basics</h1>
            <article class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">PHP Syntax</h3>
              </div>
              <div class="panel-body">
                <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
                <p><strong>Basic PHP Syntax is represented as follows:</strong></p>
                <code> &lt?php <br> //PHP code goes here  <br> ?&gt </code>
                <p>The Default extension for PHP files is ".php" .</p>
              </div>
            </article>
            <article class="panel panel-info" id="comments">
              <div class="panel-heading">
                <h3 class="panel-title">Comments</h3>
              </div>
              <div class="panel-body">
                <p>A comment in PHP code is a line that is not executed as a part of the program.</p>
                <p>Its only purpose is to be read by someone who is looking at the code.</p>
                <p>PHP supports several ways of commenting:</p>
                <table class="table table-striped">
                  <thead>
                    <th><strong>Syntax for single-line comments:</strong></th>
                    <th><strong>Syntax for multi-line comment:</strong></th>
                  </thead>
                  <tbody>
                    <td><code>&lt!DOCTYPE html&gt<br>&lthtml&gt<br>&ltbody&gt<br>&lt?php><br>// This is a single-line comment<br># This is also a single-line comment<br>?&gt<br>&lt/body&gt<br></code></td>
                    <td><code>&lt!DOCTYPE html&gt<br>&lthtml&gt<br>&ltbody&gt<br>&lt?php<br>/*<br>This is a multiple-lines comment block<br>that spans over multiple<br>lines<br>*/<br>?&gt<br>&lt/body&gt<br>&lt/html&gt</code></td>
                  </tbody>
                </table>
              </div>
            </article>
            <article class="panel panel-info" id="variables">
              <div class="panel-heading">
                <h3 class="panel-title">Variables</h3>
              </div>
              <div class="panel-body">
                <p>Varaiables are used to store value,data or information in computer programming.</p>
                <p>In PHP, a variable starts with the <samp>$</samp> sign, followed by the name of the variable.</p>
                <p><strong>Example</strong></p>
                <p><code>&lt?php<br>$txt = "Hello world!";<br>$x = 5;<br>$y = 10.5;<br>echo $txt . "&ltbr&gy";<br>echo $x . "&ltbr&gt";<br>echo $y . "&ltbr&gt" ;<br>?&gt</code></p>
                <p>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</p>
                <p>Rules for PHP variables:</p>
                <ul>
                  <li>A variable starts with the $ sign, followed by the name of the variable.</li>
                  <li>A variable name must start with a letter or the underscore character.</li>
                  <li>A variable name cannot start with a number</li>
                  <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
                  <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
                </ul>
              </div>
            </article>
            <article class="panel panel-info" id="constants">
              <div class="panel-heading">
                <h3 class="panel-title">Constants</h3>
              </div>
              <div class="panel-body">
                <p>Constants are like variables except that once they are defined they cannot be changed or undefined.</p>
                <p><strong>Method Of implemetation</strong></p>
                <ul>
                  <li>A constant is an identifier (name) for a simple value.</li><br>
                  <p class="text-warning">WARNING <span class="glyphicon glyphicon-alert"></span> The values cannot be changed during the script.</p>
                  <li>A valid constant name starts with a letter or underscore (no $ sign before the constant name).</li><br>
                  <p class="text-info">NOTE: Unlike variables, constants are automatically global across the entire script.</p>
                  <li>To create a constant, use the define() function.</li>
                  <p><strong>Syntax</strong></p>
                  <p><samp>define(<kbd>name</kbd>, <kbd>value</kbd>, <kbd>case-insensitive</kbd>)</samp></p>                  <strong>Parameters</strong>
                  <ol>
                    <li><kbd>name</kbd>: Specifies the name of the constant</li>
                    <li><kbd>value</kbd>: Specifies the value of the constant</li>
                    <li><kbd>case-insensitive</kbd>: Specifies whether the constant name should be case-insensitive.</li>
                  </ol>
                </ul>
              </div>
            </article>
            <article class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Primitive Data Type</h3>
              </div>
              <div class="panel-body">
                <p>Variables can store data of different types, and different data types can do different things.</p>
                <ol>
                  <li id="integer"><strong>Integers</strong>
                    <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p>
                    <ul>
                      <strong>Rules for integers:</strong>
                      <li>An integer must have at least one digit.</li>
                      <li>An integer must not have a decimal point.</li>
                      <li>An integer can be either positive or negative.</li>
                      <li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation.</li>
                    </ul>
                     <p><strong>Example</strong></p>
                     <p>In the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>
                     <p><code>&lt?php<br>$x = 5985;<br>var_dump($x);<br>?&gt</code></p>
                  </li><hr>
                  <li id="string"><strong>Strings</strong>
                    <p>A string is a sequence of characters, like "Hello world!".</p>
                    <p>A string can be any text inside quotes. You can use single or double quotes:</p>
                    <p><strong>Example</strong></p>
                    <p><code>&lt?php <br>$x = "Hello world!";<br>$y = 'Hello world!';<br>echo $x;<br>echo "<br>";<br>echo $y;<br>?&gt</code></p>
                  </li><hr>
                  <li id="boolean"><strong>Boolean</strong>
                    <p>A Boolean represents two possible states: TRUE or FALSE.</p>
                    <p>Booleans are often used in conditional testing. You will learn more about conditional testing.</p>
                  </li><hr>
                  <li id="float"><strong>Float</strong>
                    <p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>
                    <p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>
                    <p><strong>Example</strong></p>
                    <p><code>&lt?php<br>$x = 10.365;<br>var_dump($x);<br>?&gt</code></p>
                  </li><hr>
                  <li id="null">
                    <strong> Undefined/NULL</strong>
                    <p>Null is a special data type which can have only one value: NULL.</p>
                    <p>A variable of data type NULL is a variable that has no value assigned to it.</p>
                    <p class="text-info"><small>TIP:</small> If a variable is created without a value, it is automatically assigned a value of NULL.</p>
                    <p><strong>Example</strong></p>
                    <p><code>&lt?php<br>$x = "Hello world!";<br>$x = null;<br>var_dump($x);<br>?>&gt</code></p>
                  </li>
                </ol>
              </div>
            </article>
            <article class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Reference Data Type</h3>
              </div>
              <div class="panel-body">
                <ol>
                  <li id="arrays"><strong>Arrays</strong>
                    <p>An array stores multiple values in one single variable.</p>
                    <p>In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>
                    <p><strong>Example</strong></p>
                    <p><code>&lt?php <br>$cars = array("Volvo","BMW","Toyota");<br>var_dump($cars);<br>?&gt</code></p>
                  </li><hr>
                  <li id="function"><strong>Functions</strong>
                    <p>The real power of PHP comes from its functions.</p>
                    <p>A user-defined function declaration starts with the word function:</p>
                    <p><strong>Syntax</strong></p>
                    <p><samp>function <kbd>functionName()</kbd> {<br>  <var>code to be executed</var>;<br>}</samp></p>
                    <p class="text-info">Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.</p>
                    <p class="text-success">Tip: Give the function a name that reflects what the function does!</p>
                    <p>In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name followed by brackets ():</p>
                    <p><strong>Example</strong></p>
                    <p><code>&lt?php <br>function writeMsg() {<br>  echo "Hello world!";<br>}<br>writeMsg(); // call the function <br>?&gt</code></p>
                 </li>
                </ol>
              </div>
            </article>
            <article class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Conditional Statements</h3>
              </div>
              <div class="panel-body">
                <p>Very often when you write code, you want to perform different actions for different conditions.</p>
                <p>You can use conditional statements in your code to do this.</p>
                <p>In PHP we have the following conditional statements:</p>
                <ul>
                  <li>if statement - executes some code if one condition is true.</li>
                  <li>if...else statement - executes some code if a condition is true and another code if that condition is false.</li>
                  <li>if...elseif...else statement - executes different codes for more than two conditions.</li>
                  <li><a href="#switch">switch</a> statement - selects one of many blocks of code to be executed.</li>
                </ul>
                <ol>
                  <li><strong><samp>if</samp> Statement</strong>
                    <p>The if statement executes some code if one condition is true.</p>
                    <strong>Syntax</strong>
                    <p><samp>if (<kbd>condition</kbd>) {<br>  <var>code to be executed if condition is true</var>;<br>}</samp></p>
                    <strong>Example</strong>
                    <p><code>&lt?php<br>$t = date("H");<br>if ($t < "20") {<br>  echo "Have a good day!";<br>}<br>?&gt</code></p>
                  </li><hr>
                  <li><strong>The <samp>if...else</samp> Statement</strong>
                    <p>The if...else statement executes some code if a condition is true and another code if that condition is false.</p>
                    <strong>Syntax</strong>
                    <p><samp>if (<kbd>condition</kbd>) {<br> <var>code to be executed if condition is true</var>;<br>} else {<br>  <var>code to be executed if condition is false</var>;<br>}</samp></p>
                    <p><strong>Example</strong></p>
                    <p>Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:</p>
                    <p><code> &lt?php<br>$t = date("H");<br>if ($t < "20") {<br>  echo "Have a good day!";<br>} else {<br>  echo "Have a good night!";<br>}<br>?&gt</code></p>
                  </li>
                  <li><strong>The <samp>if...elseif...else</samp> Statement</strong>
                    <p>The if...elseif...else statement executes different codes for more than two conditions.</p>
                    <p><strong>Syntax</strong></p>
                    <p><samp>if (<kbd>condition</kbd>) {<br>  <var>code to be executed if this condition is true</var>;<br>} elseif (<kbd>condition</kbd>) {<br>  <var>code to be executed if first condition is false and this condition is true</var>;<br>} else {<br>  <var>code to be executed if all conditions are false</var>;<br>}</samp></p>
                    <p><strong>Example</strong></p>
                    <p>Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":</p>
                    <p><code>&lt?php<br>$t = date("H");<br>if ($t < "10") {<br>  echo "Have a good morning!";<br>} elseif ($t < "20") {<br>  echo "Have a good day!";<br>} else {<br>  echo "Have a good night!";<br>}<br>?&gt</code></p>
                  </li>
                </ol>
              </div>
            </article>
            <article class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Loops</h3>
              </div>
              <div class="panel-body">
                <p>Loops are used to execute the same block of code again and again, as long as a certain condition is true.</p>
                <p>In PHP, we have the following loop types:</p>
                <ul>
                  <li>while - loops through a block of code as long as the specified condition is true.</li>
                  <li>do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true.</li>
                  <li>for - loops through a block of code a specified number of times.</li>
                </ul>
                <ol>
                  <li id="while"><strong><samp>while</samp> Loop</strong>
                    <p>The while loop - Loops through a block of code as long as the specified condition is true.</p>
                    <p>The while loop executes a block of code as long as the specified condition is true.</p>
                    <p><strong>Syntax</strong></p>
                    <p><samp>while (<kbd>condition is true</kbd>) {<br>  <var>code to be executed</var>;<br>} </samp></p>
                    <p><strong>Example</strong></p>
                    <p>The example below displays the numbers from 1 to 5:</p>
                    <p><code>&lt?php <br>$x = 1;<br>while($x <= 5) {<br>  echo "The number is: $x <br>";<br>  $x++;<br>}<br>?&gt</code></p>
                  </li><hr>
                  <li id="dowhile"><strong><samp>do...while</samp> Loop</strong>
                    <p>The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.</p>
                    <p>The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.</p>
                    <p><strong>Syntax</strong></p>
                    <p><samp>do {<br>  <var>code to be executed;</var><br>} while (<kbd>condition is true</kbd>);</samp></p>
                    <p><strong>Example</strong></p>
                    <p>The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:</p>
                    <p><code>&lt?php<br>$x = 1;<br>do {<br>  echo "The number is: $x <br>";<br>  $x++;<br>} while ($x <= 5);<br>?&gt</code></p>
                  </li><hr>
                  <li id="forloop"><strong><samp>for</samp> Loop</strong>
                    <p>The for loop - Loops through a block of code a specified number of times.</p>
                    <p>The for loop is used when you know in advance how many times the script should run.</p>
                    <p><strong>Syntax</strong></p>
                    <p><samp>for (<kbd>init counter</kbd>; <kbd>test counter</kbd>; <kbd>increment counter</kbd>) {<br>  <var>code to be executed for each iteration</var>;<br>}</samp></p>
                    <p><strong>Parameters:</strong></p>
                    <ul>
                      <li><kbd>init counter</kbd>: Initialize the loop counter value.</li>
                      <li><kbd>test counter</kbd>: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.</li>
                      <li><kbd>increment counter</kbd>: Increases the loop counter value.</li>
                    </ul>
                    <p><strong>Example</strong></p>
                    <p>The example below displays the numbers from 0 to 10:</p>
                    <p><code>&gt?php<br>for ($x = 0; $x <= 10; $x++) {<br>  echo "The number is: $x &ltbr&gt";<br>}<br>?&gt</code></p>
                    <p>Example Explained:</p>
                    <ul>
                      <li>$x = 0; - Initialize the loop counter ($x), and set the start value to 0.</li>
                      <li>$x <= 10; - Continue the loop as long as $x is less than or equal to 10.</li>
                      <li>$x++ - Increase the loop counter value by 1 for each iteration.</li>
                    </ul>
                  </li>
                </ol>
              </div>
            </article>
            <article class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title" id="switch"><samp>switch</samp> Statement</h3>
              </div>
              <div class="panel-body">
                <p>Use the switch statement to select one of many blocks of code to be executed.</p>
                <p><strong>Syntax</strong></p>
                <p><samp>switch (<kbd>n</kbd>) {<br>  case <var>label1</var>:<br>    <var>code to be executed if n=label1</var>;<br>    break;<br>  case <var>label2</var>:<br>    <var>code to be executed if n=label2</var>;<br>    break;<br>  case <var>label3</var>:<br>    <var>code to be executed if n=label3</var>;<br>    break;<br>    <var>...</var><br>  default:<br>    <var>code to be executed if n is different from all labels</var>;<br>}</samp></p>
              </div>
            </article><hr>
            <h4>Resourses</h4>
            <ol>
              <li><a href="https://www.w3schools.com/php/"></a>w3schools PHP </li>
              <li><a href="https://youtu.be/hx38tnlYGlA"></a>Edureka - PHP tutorials for begineers</li>
            </ol><hr>
          </div>
          <div class="col-md-1"></div>
        </div>
        <!-- nav end -->
      </div>
      <!--container fluid end -->
      </main>
      <!--footer -->
<!-- scripts -->
    <script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </body>
</html>
