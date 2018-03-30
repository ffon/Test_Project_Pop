<html> 
<head> 
<title>Data management</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

      <div class="col-sm-4">
        <div><button type="submit" class="btn btn-success">Submit</button></div>
        <div><button type="submit" class="btn btn-warning">Reset</button></div>
      </div>

    </div>

        
  


    <div class="grid-result-data">
      <div class="table-responsive-report" style="padding: 10px 15px 10px 15px;">
        <table class="clickable table table-hover table-striped sticky-enabled tableheader-processed sticky-table" id="table-vehicle">
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
                <td class="id">1</td>
                <td class="key">test_key</td>
                <td class="value">test_value</td>
                <td class="created">Created</td>
                <td class="operations">Operations</td>
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

      // var push_Ref = ref("key3").set("value"); // เพิ่มข้อมูลลงใน file base

      // ref.on("value", function(snapshot) { // อ่านค่าจากจาก filebase
      //   console.log('y');
      //   console.log(snapshot.val());

      // }, function (error) {
      //   console.log("Error: " + error.code);
      // })

      // var write_Ref = ref("a"); // แก้ไข้ข้อมูลใน a ที่ index 0 เป็น 1
      // write_Ref.update ({
      //   "0" : 1
      // });e

      // var push_Ref = ref("key3").set("value"); // เพิ่มข้อมูลลงใน file base

      // ref.child("key2").remove();    // ลบข้อมูลลงใน file base

    </script>
	
  </body>  
</html> 
