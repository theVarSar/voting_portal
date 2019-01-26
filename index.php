<!DOCTYPE html>
<html>
<head>
	<title>
		Voting Portal
	</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container-fluid"  style="background-color:#2196F3; color:#fff; height:120px;">
        <br>
        <h1>National Voting Portal</h1>      
        </div>		
	</div>

	<div class="container-fluid">
<center><br><br>
	<form method="post" action="vote.php">
    <div class="col-lg-3">
    	<div class="well well-lg">
    		<img src="img/bjp.png" width="80" height="80">
    		<h4>BHARTIYA JANTA <br>PARTY</h4>
    		<p>Amit Shah</p> 
    		<button name="1" type="submit" class="btn btn-primary">VOTE</button>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="well well-lg">
    	    <img src="img/cong.png" width="85" height="85">
    		<h4>INDIAN NATIONAL CONGRESS</h4>
    		<p>Rahul Gandhi</p>
    		<button name="2" type="submit" class="btn btn-primary">VOTE</button>
    	</div>
    </div>
    <div class="col-lg-3">
    	<div class="well well-lg">
    		<img src="img/aap.png" width="80" height="65">
    		<h4><br>AAM AADMI <br>PARTY</h4>
    		<p>Arvind Kejriwal</p>
    		<button name="3" type="submit" class="btn btn-primary">VOTE</button>
    	</div>
    </div>
    <div class="col-lg-3">
    	<div class="well well-lg">
    		<img src="img/bsp.png" width="80" height="80">
    		<h4>BAHUJAN SAMAJ <br>PARTY</h4>   		
    		<p>Mayawati</p>
    		<button name="4" type="submit" class="btn btn-primary">VOTE</button>
    	</div>
    </div>
    </form>
  </div>
  <?php

  ?>

<script type="text/javascript">

$params = getAllUrlParams(window.location.href);

if($params.message != "")
{
   alert(decodeURI($params.message));	
}

function getAllUrlParams(url) {

  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

  // we'll store the parameters here
  var obj = {};

  // if query string exists
  if (queryString) {

    // stuff after # is not part of query string, so get rid of it
    queryString = queryString.split('#')[0];

    // split our query string into its component parts
    var arr = queryString.split('&');

    for (var i = 0; i < arr.length; i++) {
      // separate the keys and the values
      var a = arr[i].split('=');

      // set parameter name and value (use 'true' if empty)
      var paramName = a[0];
      var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

      // (optional) keep case consistent
      paramName = paramName.toLowerCase();
      if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

      // if the paramName ends with square brackets, e.g. colors[] or colors[2]
      if (paramName.match(/\[(\d+)?\]$/)) {

        // create key if it doesn't exist
        var key = paramName.replace(/\[(\d+)?\]/, '');
        if (!obj[key]) obj[key] = [];

        // if it's an indexed array e.g. colors[2]
        if (paramName.match(/\[\d+\]$/)) {
          // get the index value and add the entry at the appropriate position
          var index = /\[(\d+)\]/.exec(paramName)[1];
          obj[key][index] = paramValue;
        } else {
          // otherwise add the value to the end of the array
          obj[key].push(paramValue);
        }
      } else {
        // we're dealing with a string
        if (!obj[paramName]) {
          // if it doesn't exist, create property
          obj[paramName] = paramValue;
        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
          // if property does exist and it's a string, convert it to an array
          obj[paramName] = [obj[paramName]];
          obj[paramName].push(paramValue);
        } else {
          // otherwise add the property
          obj[paramName].push(paramValue);
        }
      }
    }
  }

  return obj;
}
</script>
</body>
</html>