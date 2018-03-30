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
	  var rootRef = firebase.database().ref();
          var storesRef = rootRef.child('Lorelle/Visitors');
          var newStoreRef = storesRef.push();
          newStoreRef.set($scope.CarModal,
            function(error) {
              //NOTE: this completion has a bug, I need to fix.
              if (error) {
                   console.log("Data could not be saved." + error);
                   Materialize.toast('Error: Failed to Submit' + error, 2000);
              } else {
                 console.log("Data saved successfully.");
                 Materialize.toast('Data Submitted, Thank You.', 2000);

                   }
                });
             }
      </script>
	
    </body>  
 </html> 
