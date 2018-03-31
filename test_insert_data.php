<html> 
<head> 
<title>Data management</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<style>
  table {
      border-collapse: collapse;
      width: 100%;
  }
  th, td {
      text-align: left;
      padding: 8px;
  }
  tr:nth-child(even){background-color: #f2f2f2}
  th {
      background-color: #003366;
      color: white;   
  }
  
</style>
</head>  
	<body> 
    9
    <header class="header">   
    <div class="container-fluid">
      <h1>Data management</h1>
    </div>
    </header>


    <div class="form-item form-type-textfield form-group">  

      <div class="col-sm-4">
        <label class="control-label" for="edit-key">Key</label> 
        <input class="form-control form-text" type="text" id="insert-key" name="key" value="" size="60" maxlength="255">
      </div>

      <div class="col-sm-4">
        <label class="control-label" for="edit-key">Value</label> 
        <input class="form-control form-text" type="text" id="insert-value" name="value" value="" size="60" maxlength="255">
      </div>

      <div class="col-sm-4" style="padding-top: 25px">
        <div class="col-sm-2"><button type="submit" class="btn btn-success">Submit</button></div>
        <div class="col-sm-2"><button type="submit" class="btn btn-warning">Reset</button></div>
      </div>

    </div>

    <div class="grid-result-data" >
      <div class="table-responsive-report" style="padding: 70px 15px 10px 15px;">
        <table class="clickable table table-hover table-striped sticky-enabled tableheader-processed sticky-table" id="table-list">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>KEY</th>
                  <th>Value</th>
                  <th>Created</th>
                  <th>Operations</th>
                </tr>
            </thead>
  
            <tbody>
              <!-- data -->
              <tr>
         
                <td class="id"></td>
                <td class="key"></td>
                <td class="value"></td>
                <td class="created"></td>
                <td class="operations"><a class="glyphicon glyphicon-pencil" href="https://www.w3schools.com/html/"></a> &nbsp &nbsp <a class="glyphicon glyphicon-trash" href="https://www.w3schools.com/html/"></a></td>
              </tr>

            </tbody>

        </table>

      </div>

    </div>
 
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

      // --------------  
      var ref = firebase.database().ref();
      var data_array = [];
      var data = {};
      var tbId = document.getElementById('table-list');
      var rowIndex = 1;

      var id;
      var key; 
      var date; 
      var value; 

      ref.on("value", function(snapshot) { // อ่านค่าจากจาก filebase
        data = snapshot.val();
        console.log(data);

        for(var i = 0; i< data.length ; i++)
        {
          id    = i+1;
          key   = data[i].key; 
          date  = data[i].date; 
          value = data[i].value; 

          var row = tbId.insertRow(i);
          var c_id = row.insertCell(0);
          var c_key = row.insertCell(1);
          var c_date = row.insertCell(2);
          var c_value = row.insertCell(3);

          c_id.appendChild(document.createTextNode(id));
          c_key.appendChild(document.createTextNode(key));
          c_date.appendChild(document.createTextNode(date));
          c_value.appendChild(document.createTextNode(value));


          // var data_g = {};
          // data_g.id    = i+1;
          // data_g.key   = data[i].key; 
          // data_g.date  = data[i].date; 
          // data_g.value = data[i].value; 
          // data_array.push(data_g);
        }

      }, function (error) {
        alert("Error: " + error.code);
      });
     

      // console.log(data_array);
      // var data_send = {};
      // data_send.data = JSON.stringify(data_array);

      // $.post("https://test-project-pop.herokuapp.com/test_insert_data.php",data_send,function(data_status)
      // {
      //   window.location.href = "https://test-project-pop.herokuapp.com/test_insert_data.php";
      // })
    


      // var push_Ref = ref("key3").set("value"); // เพิ่มข้อมูลลงใน file base
      // var write_Ref = ref("a"); // แก้ไข้ข้อมูลใน a ที่ index 0 เป็น 1
      // write_Ref.update ({
      //   "0" : 1
      // });e
      // var push_Ref = ref("key3").set("value"); // เพิ่มข้อมูลลงใน file base
      // ref.child("key3").remove();    // ลบข้อมูลลงใน file base
    </script>
	
  </body>  
</html> 
