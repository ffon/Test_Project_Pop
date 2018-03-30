(function($)
{
console.log("1");
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

      // --------------  
      var ref = firebase.database().ref();
      
      
      ref.on("value", function(snapshot) { // อ่านค่าจากจาก filebase
      
        console.log("y");
        var data = {};
        var data_array = [];
        data = snapshot.val();
        console.log(data);
        for(var i = 0; i< data.length ; i++)
        {
          var data_g = {};
            data_g.id    = i+1;
            data_g.key   = data[i].key; 
            data_g.date  = data[i].date; 
            data_g.value = data[i].value; 

            data_array.push(data_g);
        }

      }, function (error) {
        alert("Error: " + error.code);
      });
     
     console.log(data_array);
})(jQuery);
