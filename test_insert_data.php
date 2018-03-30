<html>  
    <head>  test
	<title>Save to Data file using PHP</title>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>  
    <body>  
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
      <script>
        // Initialize Firebase
        var config = {
          apiKey: "AIzaSyDd1JiN7FNLo9KvG9OCe1Mrn-ZB_9_bNFE",
          authDomain: "ksbot-ecbd2.firebaseapp.com",
          databaseURL: "https://ksbot-ecbd2.firebaseio.com",
          projectId: "ksbot-ecbd2",
          storageBucket: "ksbot-ecbd2.appspot.com",
          messagingSenderId: "421898172154"
        };
        firebase.initializeApp(config);
	      
	  // ------  
	// Import Admin SDK
	var admin = require("firebase-admin");

	// Get a database reference to our posts
	var db = admin.database();
	var ref = db.ref("server/saving-data/fireblog/posts");

	// Attach an asynchronous callback to read the data at our posts reference
	ref.on("value", function(snapshot) {
	  console.log(snapshot.val());
	}, function (errorObject) {
	  console.log("The read failed: " + errorObject.code);
	});
      </script>
	
    </body>  
 </html> 
