<html>  
    <head>  test5
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
	      
	var ref = firebase.database().ref("ksbot-ecbd2");

	ref.on("value", function(snapshot) {
	   console.log(snapshot.val());
	}, function (error) {
	   console.log("Error: " + error.code);
	});
	      
// 	var database = firebase.database();
// 	var leadsRef = database.ref('ksbot-ecbd2');
// 	var newClientKey = database.ref().child('ksbot-ecbd2').push().key;
// 	console.log(newClientKey);
// 	var childData;
// 	var childKey;
// 	leadsRef.on('value', function(snapshot) {
// 		console.log("YYY");
		
// 	    snapshot.forEach(function(childSnapshot) {
// 	      	childKey  = childSnapshot.key;
//     		childData = childSnapshot.val();
// 		console.log(childData);
// 		console.log('---------------');
// 	    });
// 		console.log(childData);
// 	});
	
	      
	      
// 	DatabaseReference mRootRef = FirebaseDatabase.getInstance().getReference();
// 	DatabaseReference mUsersRef = mRootRef.child("users");
// 	DatabaseReference mMessagesRef = mRootRef.child("messages");
// 	mUsersRef.child("ขอคืนเงิน").setValue("Jirawatee"); // แก้ไข 
// 	FriendlyMessage friendlyMessage = new FriendlyMessage("test", "test"); // เพิ่มข้อมูล
// 	mMessageRef.push().setValue(friendlyMessage);
	      
      </script>
	
    </body>  
 </html> 
