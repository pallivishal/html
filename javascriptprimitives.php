<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>M.E.R.N Stack</title>
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
          <!--navbar init-->
          <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="glyphicon glyphicon-cog"></span>
            </button>
            <a class="navbar-brand" href="#">Chamber Of Chiku</a>
          </div><!-- /.nav-collapse -->
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">L.A.M.P Stack</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-hashpopup="true">M.R.E.N Stack<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <div class="nav nav-pill nav-stacked">
                    <li role="presentation"><a href="mernstack.php">Nodejs</a></li>
                    <li role="presentation"><a href="javascriptconsole.php">JavaScript</a></li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </div><!-- /.container -->
      </nav>
          <!--navbar end-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="nav nav-tabs nav-justified">
              <li role="presentation"><a href="javascriptconsole.php">JavaScript : Introduction</a></li>
              <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="javascriptprimitives.php">JavaScript Basics: Primitives</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-md-8">
            <h1>JavaScript Basics: Primitives</h1>
            <article class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">JavaScript Console</h3>
              </div>
              <div class="panel-body">
                <div><strong>JavaScript Data Types</strong></div>
                <p>JavaScript variable is able to hold many data types.</p><hr>
                <div><strong><small>Numbers</small></strong></div>
                <p>JavaScript has only one type of numbers i.e. Numbers can be written with, or without decimal:</p>
                <p><small>Example</small></p>
                <p><code>var x1 = 34.00;     // Written with decimals<br>var x2 = 34;        // Written without decimals </code></p>
                <p>Extra large or extra small numbers can be written with scientific (exponential) notation:</p>
                <p><small>Example</small></p>
                <p><code>var y = 123e5;      // 12300000<br>var z = 123e-5;     // 0.00123</code></p><hr>
                <div><strong><small>Boolean</small></strong></div>
                <p>Boolean can only have two values: <samp>true</samp> or <samp>false</samp>.</p>
                <p><small>Example</small><br><code>var x = 5;<br>var y = 5;<br>var z = 6;<br>(x == y)       // Returns true<br>(x == z)       // Returns false </code></p><hr>
                <div><strong><small>Undefined/Null</small></strong></div>
                <p>In JavaScript, a variable without a value, has the value <em>undefined</em>. The type is also <samp>undefined</samp>.</p><hr>
                <div><strong><small>Difference Between Undefined and Null</small></strong></div>
                <p><samp>undefined</samp> and <samp>null</samp> are equal in value but different in type:</p>
                <div><small>Example</small>:<br><code>typeof undefined           // undefined<br>typeof null                // object<br>null === undefined         // false<br>null == undefined          // true</code></div><br>
                <div><small>Example</small>:</div>
                <div><code>var car;    // Value is undefined, type is undefined </code></div><hr>
                <div><strong><small>Primitive Data</small></strong></div>
                <p>A primitive data value is a single simple data value with no additional properties and methods.</p>
                <p>The <samp>typeof</samp> operator can return one of these primitive types:</p>
                <ul>
                  <li>String</li>
                  <li>Number</li>
                  <li>Boolean</li>
                  <li>Undefined</li>
                </ul>
                <div><small>Example</small>:</div>
                <div><code>typeof "John"              // Returns "string"<br>typeof 3.14                // Returns "number"<br>typeof true                // Returns "boolean"<br>typeof false               // Returns "boolean"<br>typeof x                   // Returns "undefined" (if x has no value)</code></div>
              </div>
              <div class="panel-footer">
                <h4>Resources</h4>
                <ol>
                  <li><a href="https://www.w3schools.com/js/js_datatypes.asp">JavaScript Data Types</a></li>
                  <li><a href="https://www.udemy.com/share/101W9CBEMTeVxTTXg=/">The Web Developer Bootcamp</a></li>
                </ol>
              </div>
            </article>
            <!--Page nav start -->
            <nav aria-label="Page navigation">
              <ul class="pager">
                <li class="previous"><a href="javascriptconsole.php"><span aria-hidden="true">&larr;</span>Previous</a></li>
                <li class="next disabled"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
              </ul>
            </nav>
            <!-- page nav end-->
          </div>
          <div class="col-md-2"></div>
        </div>
        <!-- nav end -->
      </div>
      <!--container fluid end -->
      </main>
    <!-- scripts -->
        <script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </body>
</html>
