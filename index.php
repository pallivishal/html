<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello World!</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Chamber Of Chiku</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-8">
        <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><samp>Hey User, Your using</samp></h3>
          </div>
          <div class="panel-body">
            <?php
             function getBrowser() {
                $u_agent = $_SERVER['HTTP_USER_AGENT'];
                $bname = 'Unknown';
                $platform = 'Unknown';
                $version = "";

                //First get the platform?
                if (preg_match('/linux/i', $u_agent)) {
                   $platform = 'linux';
                }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                   $platform = 'mac';
                }elseif (preg_match('/windows|win32/i', $u_agent)) {
                   $platform = 'windows';
                }

                // Next get the name of the useragent yes seperately and for good reason
                if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
                   $bname = 'Internet Explorer';
                   $ub = "MSIE";
                } elseif(preg_match('/Firefox/i',$u_agent)) {
                   $bname = 'Mozilla Firefox';
                   $ub = "Firefox";
                } elseif(preg_match('/Chrome/i',$u_agent)) {
                   $bname = 'Google Chrome';
                   $ub = "Chrome";
                }elseif(preg_match('/Safari/i',$u_agent)) {
                   $bname = 'Apple Safari';
                   $ub = "Safari";
                }elseif(preg_match('/Opera/i',$u_agent)) {
                   $bname = 'Opera';
                   $ub = "Opera";
                }elseif(preg_match('/Netscape/i',$u_agent)) {
                   $bname = 'Netscape';
                   $ub = "Netscape";
                }

                // finally get the correct version number
                $known = array('Version', $ub, 'other');
                $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

                if (!preg_match_all($pattern, $u_agent, $matches)) {
                   // we have no matching number just continue
                }

                // see how many we have
                $i = count($matches['browser']);

                if ($i != 1) {
                   //we will have two since we are not using 'other' argument yet

                   //see if version is before or after the name
                   if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                      $version= $matches['version'][0];
                   }else {
                      $version= $matches['version'][1];
                   }
                }else {
                   $version= $matches['version'][0];
                }

                // check if we have a number
                if ($version == null || $version == "") {$version = "?";}
                return array(
                   'userAgent' => $u_agent,
                   'name'      => $bname,
                   'version'   => $version,
                   'platform'  => $platform,
                   'pattern'   => $pattern
                );
             }

             // now try it
             $ua = getBrowser();
             $yourbrowser = "Your browser: " . $ua['name'] . " " . $ua['version'] .
                " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];

             print_r($yourbrowser);
          ?>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-4"></div>
    </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer">
      <div class="container">
          <p class="text-muted"> &copy <a href="https://linkedin.com/in/vishal-palli-9958b116a"><samp>Vishal Palli</samp></a></p>
      </div>
    </footer>

<!-- bootstrap javascript core -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </div>
  </body>
</html>
