<!DOCTYPE HTML>
<html>
  <head>
      <link rel="stylesheet" href="/css/style.css">
      <meta charset="UTF-8">
      <title>Session Variables</title>
  </head>
  <body>

    <h1>Session Variables</h1>

<p>This is a superglobal variable.
This array is stored in the server.</p>

<h2>How to start a session</h2>
<p>session_start();</p>

  <p>Starts a new session or resumes a previous one. Most be called before outputting any HTML.

<h2>How to create/modify a session variable</h2>
<p>This is the syntax:</p>

  <p>$_SESSION['var_name'] = value;</p>

<h2>How to delete a session variable</h2>

<p>a single variable:</p>
  <p>unset($_SESSION['var_name']);</p>

    <p>all session variables:</p>
      <p>$_SESSION = array()</p>

<h2>How to destroy a session</h2>

<p>session_destroy();</p>


<h1>Cookie Variables</h1>
<p>An associative array of variables passed to the current script via HTTP Cookies.</p>
  <p>A name/value pair stored in the brower. (User computer).</p>

<h2>Set a cookie variable</h2>
<p>setcookie(name, value, expire, path, domain, secure, httponly);</p>

  <p>setcookie('myCookie', 'Ich bin Marco', strtotime('+1 year'), '/');</p>

<h2>Get a cookie variable</h2>
<p>$var1 = $_COOKIE['cookie_name'];</p>

<h2>Destroy a cookie variable</h2>
<p>setcookie('myCookie', '', strtotime('-1 year'), '/');</p>

  </body>
</html>
