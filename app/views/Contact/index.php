<html>

<head>
  <link rel="stylesheet" href="../resources/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<h1>Contact us</h1>
<p>Wanna reach us? Write your email information and message in the following form and then submit.</p>

<form method='post' action='../Contact/read'>


<label for id="emailInput">Email: </label>
<input class="inputFields" type="email" id="emailInput">

<br>

<div id="test">
<label style="width: 154px;" for id="messageInput">Message:</label>
<textarea class="inputFields" id="messageInput">cvxcvxc</textarea>
</div>

<input class="inputFields" id="button" type="submit" value='Send!'>

</form>
<nav>
<ul>
    <li><a href="../Main/index">Landing page</a></li>
    <li><a href="../Main/about_us">About us</a></li>
    <li><a href="../Contact/index">Contact us</a></li>
    <li><a href="../Contact/read">See the messages we get</a></li>
</ul>
</nav>

</body>
</html>