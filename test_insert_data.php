<html>  
    <head>  test
	<title>Save to Data file using PHP</title>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>  
	
    <body> 
<script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
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
	      
	var ref = firebase.database().ref();
	ref.on("value", function(snapshot) { // อ่านค่าจากจาก filebase
	   console.log('y');
	   console.log(snapshot.val());
	   
	}, function (error) {
	   console.log("Error: " + error.code);
	})
	      
// 	var write_Ref = firebase.database().ref("a"); // แก้ไข้ข้อมูลใน a ที่ index 0 เป็น 1
// 	write_Ref.update ({
// 	   "0" : 1
// 	});
	      
	var push_Ref = firebase.database().ref("id").push ({"key":"value"}); // เพิ่มข้อมูลลงใน file base
	
	     
	      
      </script>
	
    </body>  
 </html> 
