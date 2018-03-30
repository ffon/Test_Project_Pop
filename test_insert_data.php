<html>  
  <head>  test
    <title>Save to Data file using PHP</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
  </head>  
	<body> 

  <div id="result-process" style="padding: 22px 0px 0px 0px;">
      <fieldset class=" panel panel-default form-wrapper" id="edit-result-fieldset--2">
          <legend class="panel-heading">
              <span class="panel-title fieldset-legend">Result Prosess.</span>
          </legend>
          <div class="panel-body">
              <div class="container" style="width:1000px;height:500%;margin: 0 auto;">
                  <div class="panel panel-info" background-color="lightgrey">
                      <div class="panel-heading"><center><h><b>Report</b></h></center></div>
                      <center>
                          <div class="panel-body">
                              <b>
                                  สถานะ               :   success
                              </b>
                          </div>
                          <div class="panel-body">
                              <b>
                                  Job Amount          :   9
                              </b>
                          </div>
                          <div class="panel-body">
                              <b>
                                  Job Complete        :   9
                              </b>
                          </div>
                          <div class="panel-body">
                              <b>
                                  Job Uncomplete      :   0
                              </b>
                          </div>
                          <div class="panel-body">
                              <b>
                                  Vehicle Amount      :   2
                              </b>
                          </div>   
                          <div class="panel-body">
                              <b>
                                  Total Distance  : 91.23 &nbsp;   Km. &nbsp;&nbsp;&nbsp;&nbsp;
                                  Total Volume    : 180   &nbsp;   m³  &nbsp;&nbsp;&nbsp;&nbsp;
                                  น้ำหนักรวม        : 270   &nbsp;   Kg.
                              </b>
                          </div>
                      </center>
                  </div>
              </div>
          </div>
          <br><br>
          <div><h4><b>&nbsp;&nbsp;Information for each vehicle</b></h4></div>
          <div class="table-responsive">
              <table class="table table-hover table-striped sticky-enabled table-select-processed">
                  <thead>
                      <tr>
                          <th class="select-all">
                              <input type="checkbox" class="form-checkbox" title="เลือกทุกแถวในตารางนี้">
                          </th>
                          <th>ข้อมูลรถ</th><th>Drops</th>
                          <th>Total Distance Per Car(Km.)</th>
                          <th>Total Volume Per Car (m³)</th>
                          <th>Total Weight Per Car (Km.)</th> 
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <div class="form-item form-item-result-fieldset-show-table-output-0 form-type-checkbox checkbox">  
                                  <label class="control-label" for="edit-result-fieldset-show-table-output-0">
                                      <span class="element-invisible"> </span>
                                      <input type="checkbox" id="edit-result-fieldset-show-table-output-0" name="result_fieldset[show_table_output][0]" value="0" class="form-checkbox">
                                  </label> 
                              </div>
                          </td>
                          <td>
                              4 ล้อ ตู้ทึบ1
                          </td>
                          <td>
                              5
                          </td>
                          <td>
                              56.06
                          </td>
                          <td>
                              100
                          </td>
                          <td>
                              150
                          </td> 
                      </tr>
                      <tr>
                          <td>
                              <div class="form-item form-item-result-fieldset-show-table-output-1 form-type-checkbox checkbox">  
                                  <label class="control-label" for="edit-result-fieldset-show-table-output-1">
                                  <span class="element-invisible"> </span>
                                      <input type="checkbox" id="edit-result-fieldset-show-table-output-1" name="result_fieldset[show_table_output][1]" value="1" class="form-checkbox">
                                  </label> 
                              </div>
                          </td>
                          <td>
                              4 ล้อ ตู้ทึบ2
                          </td>
                          <td>
                              4
                          </td>
                          <td>
                              35.17
                          </td>
                          <td>
                              80
                          </td>
                          <td>
                              120
                          </td> 
                      </tr>
                  </tbody>
              </table>
          </div>
          <div><h4><b>&nbsp;&nbsp;All Result</b></h4></div>
          <div class="table-responsive">
              <table class="table table-hover table-striped sticky-enabled table-select-processed">
                  <thead>
                      <tr>
                          <th class="select-all">
                              <input type="checkbox" class="form-checkbox" title="เลือกทุกแถวในตารางนี้">
                          </th>
                          <th>
                              ข้อมูลรถ
                          </th>
                          <th>
                              Sequence
                          </th>
                          <th>
                              Job Number
                          </th>
                          <th>
                              ลูกค้า
                          </th>
                          <th>
                              ต้นทาง
                          </th>
                          <th>
                              ปลายทาง
                          </th>
                          <th>
                              Distance(Km.)
                          </th><th>
                              Sum Distance(Km.)
                          </th>
                          <th>
                              Start Date
                          </th>
                          <th>
                              End Date
                          </th> 
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <div class="form-item form-item-result-fieldset-result-table-0 form-type-checkbox checkbox">  
                              <label class="control-label" for="edit-result-fieldset-result-table-0">
                                  <span class="element-invisible"> </span>
                                  <input type="checkbox" id="edit-result-fieldset-result-table-0" name="result_fieldset[result_table][0]" value="0" class="form-checkbox">
                              </label> 
                              </div>
                          </td>
                          <td>
                              4 ล้อ ตู้ทึบ1
                          </td>
                          <td>
                              1
                          </td>
                          <td>
                              <a href="/th/job/1942" target="_blank">JOB20171000085</a>
                          </td>
                          <td>
                              <a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a>
                          </td>
                          <td>
                              คลังสินค้า ...
                          </td>
                          <td>
                              ร้าน Cafe A..
                          </td>
                          <td>
                              15.9
                          </td>
                          <td>
                              15.9
                          </td>
                          <td> 
                              07:52:51
                          </td>
                          <td> 
                              08:22:51
                          </td> 
                      </tr>
                      <tr><td><div class="form-item form-item-result-fieldset-result-table-1 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-1"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-1" name="result_fieldset[result_table][1]" value="1" class="form-checkbox"></label> 
                          </div></td><td></td><td>2</td><td><a href="/th/job/1938" target="_blank">JOB20171000081</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Tastin...</td><td>9.07</td><td>24.97</td><td> 08:55:24</td><td> 09:25:24</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-2 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-2"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-2" name="result_fieldset[result_table][2]" value="2" class="form-checkbox"></label> 
                          </div></td><td></td><td>3</td><td><a href="/th/job/1940" target="_blank">JOB20171000083</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Craft ...</td><td>4.49</td><td>29.46</td><td> 09:39:33</td><td> 10:09:33</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-3 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-3"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-3" name="result_fieldset[result_table][3]" value="3" class="form-checkbox"></label> 
                          </div></td><td></td><td>4</td><td><a href="/th/job/1941" target="_blank">JOB20171000084</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Fatty'...</td><td>2.11</td><td>31.57</td><td> 10:16:28</td><td> 10:46:28</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-4 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-4"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-4" name="result_fieldset[result_table][4]" value="4" class="form-checkbox"></label> 
                          </div></td><td></td><td>5</td><td><a href="/th/job/1939" target="_blank">JOB20171000082</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Jim's ...</td><td>4.98</td><td>36.55</td><td> 10:58:10</td><td> 11:28:10</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-5 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-5"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-5" name="result_fieldset[result_table][5]" value="5" class="form-checkbox"></label> 
                          </div></td><td>4 ล้อ ตู้ทึบ2</td><td>1</td><td><a href="/th/job/1935" target="_blank">JOB20171000078</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Wishbe...</td><td>12.13</td><td>48.68</td><td> 07:57:37</td><td> 08:27:37</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-6 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-6"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-6" name="result_fieldset[result_table][6]" value="6" class="form-checkbox"></label> 
                          </div></td><td></td><td>2</td><td><a href="/th/job/1934" target="_blank">JOB20171000077</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Strayd...</td><td>0.84</td><td>49.52</td><td> 08:29:53</td><td> 08:59:53</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-7 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-7"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-7" name="result_fieldset[result_table][7]" value="7" class="form-checkbox"></label> 
                          </div></td><td></td><td>3</td><td><a href="/th/job/1936" target="_blank">JOB20171000079</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน CRAFT ...</td><td>3.13</td><td>52.65</td><td> 09:11:03</td><td> 09:41:03</td> </tr>
                          <tr><td><div class="form-item form-item-result-fieldset-result-table-8 form-type-checkbox checkbox">  <label class="control-label" for="edit-result-fieldset-result-table-8"><span class="element-invisible"> </span><input type="checkbox" id="edit-result-fieldset-result-table-8" name="result_fieldset[result_table][8]" value="8" class="form-checkbox"></label> 
                          </div></td><td></td><td>4</td><td><a href="/th/job/1937" target="_blank">JOB20171000080</a></td><td><a href="/th/setup/customer/402" target="_blank">Hindis Co.,Ltd.</a></td><td>คลังสินค้า ...</td><td>ร้าน Craft ...</td><td>8.35</td><td>61</td><td> 10:05:01</td><td> 10:35:01</td> 
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="col-md-3" style="margin-bottom:15px;">
              <button class="btn btn-primary form-submit" type="submit" id="edit-result-fieldset-button-select-job-to--2" name="button_select_job_to" value="<span class=&quot;glyphicon glyphicon-th-list&quot; style=&quot;margin-right:4px;&quot;></span>Create Transpot.&amp;nbsp;">
                  <span class="glyphicon glyphicon-th-list" style="margin-right:4px;"></span>Create Transpot.&nbsp;
              </button>
          </div>  
      </fieldset>
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

      ref.on("value", function(snapshot) { // อ่านค่าจากจาก filebase
        console.log('y');
        console.log(snapshot.val());

      }, function (error) {
        console.log("Error: " + error.code);
      })

      var write_Ref = ref("a"); // แก้ไข้ข้อมูลใน a ที่ index 0 เป็น 1
      write_Ref.update ({
        "0" : 1
      });e

      var push_Ref = ref("key3").set("value"); // เพิ่มข้อมูลลงใน file base

      ref.child("key2").remove();    // ลบข้อมูลลงใน file base

    </script>
	
  </body>  
</html> 
