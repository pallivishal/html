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
              <li class="active"><a href="index.php">L.A.M.P Stack</a></li>
              <li class="active"><a href="mernstack.php">M.R.E.N Stack</a>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-hashpopup="true">Nodejs <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <div class="nav nav-pill nav-stacked">
                      <li role="presentation"><a href="#create">Getting Started</a></li>
                    </div>
                  </ul>
                </li>
              </li>
            </ul>
          </div>
        </div><!-- /.container -->
      </nav>
          <!--navbar end-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2"></div>
          <div class="col-xs-12 col-md-8">
            <h1>Nodejs</h1>
            <article class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Getting Started</h3>
              </div>
              <div class="panel-body">
                <p><strong>Introduction to Node</strong></p>
                <p><strong><small>What is Node?</small></strong></p>
                <ul>
                  <li>Node.js is an open source server environment</li>
                  <li>Node.js uses JavaScript on the server</li>
                </ul>
                <div><strong>Download and Getting Started</strong></div>
                <ol>
                  <li><div><small>Download Node.js</small></div>
                  <p>The official Node.js website has installation instructions for Node.js: <samp>https://nodejs.org</samp>. Well, I am using WSL Ubuntu Linux. So ,the process to download node.js is to first download nvm and then install node using it :</p>
                  <div><code>#sudo apt-get install curl<br>#curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash<br>#export NVM_DIR="$HOME/.nvm"</code></div><br>
                  <p>Restart the terminal to apply changes. Then type below command to install node.js:</p>
                  <div><code>#nvm ls<br>#nvm install node<br>#node -v && npm -v</code></div><br>
                </li>
                <li><div><small>Getting Started</small></div>
                <p>Once you have downloaded and installed Node.js on your computer, let’s try to display “Hello World” in a web browser.</p>
                <p>Create a Node.js file named “myfirst.js” with the following command:</p>
                <div><code>#sudo touch myfirst.js</code></div><br>
                <p>Then, open the file by :</p>
                <div><code>#sudo vim myfirst.js</code></div><br>
                <p>And add below Lines to it:</p>
                <div><code>var http = require('http');<br>http.createServer(function (req, res) {<br>  res.writeHead(200, {'Content-Type': 'text/html'});<br>  res.end('Hello World!');<br>}).listen(8080);</code></div><br>
                </li>
                </ol>
                <div><strong>Command Line Interface</strong></div>
                <p>Node.js files must be initiated in the “Command Line Interface” program of your computer.</p>
                <div><strong>Initiate the Node.js File</strong></div>
                <p>Start your command line interface, write node myfirst.js and hit enter:</p>
                <div><code>node myfirst.js</code></div><br>
                <p>Start your internet browser, and type in the address: <samp>http://localhost:8080</samp></p>
              </div>
              <div class="panel-footer">
                <h4>Resources</h4>
                <ol>
                  <li><a href="https://www.w3schools.com/nodejs/nodejs_intro.asp">Node.js Introduction</a></li>
                  <li><a href="https://www.w3schools.com/nodejs/nodejs_get_started.asp">Node.js Get Started</a></li>
                  <li><a href="https://www.udemy.com/share/101W9CBEMTeVxTTXg=/#">The Web Developer Bootcamp</a></li>
                </ol>
              </div>
            </article>
          </div>
          <div class="col-md-1"></div>
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
