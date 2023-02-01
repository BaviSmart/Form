<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=1">
</head>

<body>

      <div class="container-fluid main">
      <div class="container my-4 d-flex justify-content-between">
          <h3 class="text-center text-success col-10 crud">CRUD OPERATION</h3>
          <button type="button" class="btn btn-dark" id="Add" data-bs-toggle="modal" data-bs-target="#student">
            Add New
          </button>
        </div>

        <div id="result"></div>

        <table id="result_table" class="table caption-top">

        </table>
      </div>

  <!-- Form -->
    <div class="container pt-1 student" id="student">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body mx-md-3">

                  <div class="text-center">                
                    <h3 class="title my-3 pb-1">Student Registration Form</h3>
                  </div>

                  <form action="" method="post" id="dataform" name="myform" onsubmit="return validateForm()">
                    
                    <div class="form-outline mb-3">
                      <label for="studname" class="form-label">Student Name</label>
                      <input type="text" class="form-control" name="studname" id="name" onkeyup="ValidateName()"
                        placeholder="Enter student name" onblur="blurname()">
                      <small class="error text-danger" id="fname-error"></small>
                    </div>

                   <div class="d-flex">
                    <div class="form-outline col-7 mb-3">
                      <label for="studdob" class="form-label">Date of birth </label>
                      <input type="date" class="form-control" name="studdob" id="date" value=""
                        onchange="ValidateDOB()" onblur="blurdate()">
                      <small class="error text-danger" id="fdob-error"></small>
                    </div>
                    <div class="form-outline col-5 mx-5 mb-3">
                      <label for="studgender" class="form-label mb-3">Gender</label>
                    <div>
                      <select name="studgender" id="gender">
                        <option value="Male" name="gender">Male</option>
                        <option value="Female" name="gender">Female</option>
                      </select>
                    </div>
                    </div>
                   </div>

                    <div class="form-outline mb-3">
                      <label for="studmobile" class="form-label">Phone</label>
                      <input type="phone" class="form-control" name="studmobile" id="mobile" onkeyup="ValidateMobile()"
                        placeholder="Enter your mobile no" onblur="blurmobile()"/>
                      <small class="error text-danger" id="fmobile-error"></small>
                    </div>
                    <div class="form-outline mb-3">
                      <label for="studemail" class="form-label">Email</label>
                      <input type="email" class="form-control" name="studemail" id="email" onkeyup="ValidateEmail()"
                        placeholder="Enter your email" onblur="bluremail()"/>
                      <small class="error text-danger" id="femail-error"></small>
                    </div>
                    <div class="form-outline mb-4">
                      <label for="studcourseid" class="form-label">Course</label>
                      <select name="studcourseid" id="course">
                      <?php 
                        $conn = new mysqli('localhost','root','','students');

                        $sql = "SELECT courseid,coursename FROM tbl_course";
                        $result = $conn->query($sql);
                        $str ='';
                        if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                            $str  .= "<option value='".$row['courseid']."'>".$row['coursename']."</option>";
                          }
                        }else{
                          $str .= "<option></option>";
                        }
                        echo $str;
                        $conn->close();
                      ?>
                        <!-- <option value="BA" name="course">BA</option>
                        <option value="BSC" name="course">BSC</option>
                        <option value="BE" name="course">BE</option>
                        <option value="Bcom" name="course">Bcom</option>
                        <option value="ME" name="course">ME</option>
                        <option value="Mcom" name="course">Mcom</option> -->
                      </select>
                    </div>


                    <div class="text-center pt-1 pb-1">
                      <button type="button" class="btn btn-primary btn-block fa-lg gradient-custom-4 mb-3" id="close" data-bs-dismiss="modal" >Close</button>
                      <button type="button" class="btn btn-primary btn-block fa-lg gradient-custom-3 mb-3"  id="submit">Save</button>
                    </div>
                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are collecting students information</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <!--Update -->
  <!-- <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="MyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary font-weight-bold" id="UpdateModalLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body">

          <form action="" method="post" id="updatedataform" name="myForm">

            <input type="hidden" name="studid" id="updateid">
            <div class="form-group mb-3">
              <label for="studname" class="form-label">Student Name</label>
              <input type="text" class="form-control" name="studname" id="updatename" placeholder="Enter student name">
            </div>
            <div class="form-group mb-3">
              <label for="studdob" class="form-label">Date of birth </label>
              <input type="date" class="form-control" name="studdob" id="updatedate">
            </div>
            <div class="form-group mb-3">
              <label for="studgender" class="form-label">Gender</label>
              <select name="studgender" id="updategender">
                <option value="Male" name="gender">Male</option>
                <option value="Female" name="gender">Female</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="studmobile" class="form-label">Phone</label>
              <input type="text" class="form-control" name="studmobile" id="updatemobile"
                placeholder="Enter your phone no">
            </div>
            <div class="form-group mb-3">
              <label for="studemail" class="form-label">Email</label>
              <input type="email" class="form-control" name="studemail" id="updateemail" placeholder="Enter your email">
            </div>

            <div class="form-group mb-3">
              <label for="studcourseid" class="form-label">Course</label>
              <select name="studcourseid" id="updatecourseid">
                <option value="BA" name="course">BA</option>
                <option value="BSC" name="course">BSC</option>
                <option value="BE" name="course">BE</option>
                <option value="Bcom" name="course">Bcom</option>
                <option value="ME" name="course">ME</option>
                <option value="Mcom" name="course">Mcom</option>
              </select>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="update" class="btn btn-primary">Update</button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div> -->

  <div class="container pt-1 updatestudent" id="updatestudent">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body mx-md-3">

                  <div class="text-center">                
                  <h3 class="title my-3 pb-1">Student Registration Form</h3>
                  </div>

                  <form action="" method="post" id="updatedataform" name="myform" onsubmit="return validateForm2()">

                  <input type="hidden" name="studid" id="updateid">
                    <div class="form-outline mb-3">
                      <label for="studname" class="form-label">Student Name</label>
                      <input type="text" class="form-control" name="studname" id="updatename" onkeyup="ValidateName2()"
                        placeholder="Enter student name" onblur="blurname2()">
                      <small class="error text-danger" id="uname-error"></small>
                    </div>

                   <div class="d-flex">
                    <div class="form-outline col-7 mb-3">
                      <label for="studdob" class="form-label">Date of birth </label>
                      <input type="date" class="form-control" name="studdob" id="updatedate" value=""
                        onchange="ValidateDOB2()" onblur="blurdate2()">
                      <small class="error text-danger" id="udob-error"></small>
                    </div>
                    <div class="form-outline col-5 mx-5 mb-3">
                      <label for="studgender" class="form-label mb-3">Gender</label>
                    <div>
                      <select name="studgender" id="updategender">
                        <option value="Male" name="gender">Male</option>
                        <option value="Female" name="gender">Female</option>
                      </select>
                    </div>
                    </div>
                   </div>

                    <div class="form-outline mb-3">
                      <label for="studmobile" class="form-label">Phone</label>
                      <input type="phone" class="form-control" name="studmobile" id="updatemobile" onkeyup="ValidateMobile2()"
                        placeholder="Enter your mobile no" onblur="blurmobile2()"/>
                      <small class="error text-danger" id="umobile-error"></small>
                    </div>
                    <div class="form-outline mb-3">
                      <label for="studemail" class="form-label">Email</label>
                      <input type="email" class="form-control" name="studemail" id="updateemail" onkeyup="ValidateEmail2()"
                        placeholder="Enter your email" onblur="bluremail2()"/>
                      <small class="error text-danger" id="uemail-error"></small>
                    </div>
                    <div class="form-outline mb-4">
                      <label for="studcourseid" class="form-label">Course</label>
                      <select name="studcourseid" id="course">

                      <?php 
                        $conn = new mysqli('localhost','root','','students');

                        $sql = "SELECT courseid,coursename FROM tbl_course";
                        $result = $conn->query($sql);
                        $str ='';
                        if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                            $str  .= "<option value='".$row['courseid']."'>".$row['coursename']."</option>";
                          }
                        }else{
                          $str .= "<option></option>";
                        }
                        echo $str;
                        $conn->close();
                      ?>
                      </select>
                    </div>


                    <div class="text-center pt-1 pb-1">
                      <button type="button" class="btn btn-primary btn-block fa-lg gradient-custom-4 mb-3" id="close1" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-3 mb-3" id="update">Update</button>
                    </div>
                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are collecting students information</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <script>




    // form validation

    let nameError = document.getElementById('fname-error');
    let dobError = document.getElementById('fdob-error');
    let emailError = document.getElementById('femail-error');
    let mobileError = document.getElementById('fmobile-error');

    let unameError = document.getElementById('uname-error');
    let udobError = document.getElementById('udob-error');
    let uemailError = document.getElementById('uemail-error');
    let umobileError = document.getElementById('umobile-error');

    let regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let regPhone = /^(\+91|0)?[6789]\d{9}$/;
    // let regName = /^[a-zA-Z]+$/i;
    let regName = /^[a-zA-Z\s]{2,100}$/;



    function validateForm() {
      let fname = document.getElementById("name").value;
      let fdob = document.getElementById("date").value;
      let fmobile = document.getElementById("mobile").value;
      let femail = document.getElementById("email").value;

      if (fname === "" || !regName.test(fname)) {
        nameError.innerHTML = '* Please enter Name';
        return false;
      }
      if (fdob === "") {
        dobError.innerHTML = '* Please select DOB';
        return false;
      }
      if (fmobile === "" || !regPhone.test(fmobile)) {
        umobileError.innerHTML = '* Please enter Mobile number';
        return false;
      }
      if (femail === "" || !regEmail.test(femail)) {
        uemailError.innerHTML = '* Please enter Email';
        return false;
      }   
      return true;
    }

    function validateForm2() {
      
      let uname = document.getElementById("updatename").value;
      let udob = document.getElementById("updatedate").value;
      let umobile = document.getElementById("updatemobile").value;
      let uemail = document.getElementById("updateemail").value;
    
      if (uname === "" || !regName.test(uname)) {
        unameError.innerHTML = '* Please enter Name';
        return false;
      }
      if (udob === "") {
        udobError.innerHTML = '* Please select DOB';
        return false;
      }
      if (umobile === "" || !regPhone.test(umobile)) {
        umobileError.innerHTML = '* Please enter Mobile number';
        return false;
      }
      if (uemail === "" || !regEmail.test(uemail)) {
        uemailError.innerHTML = '* Please enter Email';
        return false;
      }

      return true;
    }

    // login key up
    function ValidateName(){
      let fname = document.getElementById("name").value;
      let uname = document.getElementById("updatename").value;
      if (regName.test(fname)) {
        nameError.innerHTML = '';
        return false;
      } else if(!regName.test(fname)){
        nameError.innerHTML = '* Please Enter Valid Name';
        return false;
      }
       else if(fname === ''){
        nameError.innerHTML = '* Please Enter Name';
        return false;
      }
    }
    function ValidateName2(){
      let fname = document.getElementById("updatename").value;

      if (regName.test(fname)) {
        unameError.innerHTML = '';
        return false;
      } else if(!regName.test(fname)){
        unameError.innerHTML = '* Please Enter Valid Name';
        return false;
      }
       else if(fname === ''){
        unameError.innerHTML = '* Please Enter Name';
        return false;
      }
    }
    
    function blurname() {
      let fname = document.getElementById("name").value;
      if (regName.test(fname)) {
        nameError.innerHTML = '';
        return false;
      } else if(fname === ""){
        nameError.innerHTML = '* Please enter Name';
        return false;
      }
    }
    function blurname2() {
      let fname = document.getElementById("updatename").value;
      if (regName.test(fname)) {
        unameError.innerHTML = '';
        return false;
      } else if(fname === ""){
        unameError.innerHTML = '* Please enter Name';
        return false;
      }
    }
    function ValidateDOB() {
      let fdob = document.getElementById("date").value;
      if (fdob !== "") {
        dobError.innerHTML = '';
        return false;
      }
    }
    function ValidateDOB2() {
      let fdob = document.getElementById("updatedate").value;
      if (fdob !== "") {
        udobError.innerHTML = '';
        return false;
      }
    }
    function blurdate() {
      let fdob = document.getElementById("date").value;
      if(fdob === ""){
        dobError.innerHTML = '* Please enter DOB';
        return false;
      }
    }
    function blurdate2() {
      let fdob = document.getElementById("updatedate").value;
      if(fdob === ""){
        udobError.innerHTML = '* Please enter DOB';
        return false;
      }
    }

    function ValidateEmail() {
      let femail = document.getElementById("email").value;
      if (regEmail.test(femail)) {
        emailError.innerHTML = '';
        return false;
      }else if(!regEmail.test(femail)){
        emailError.innerHTML = '* Please Enter Valid Email';
        return false;
      }else if(femail === ''){
        emailError.innerHTML = '* Please Enter Email';
        return false;
      }
    }
    function ValidateEmail2() {
      let femail = document.getElementById("updateemail").value;
      if (regEmail.test(femail)) {
        uemailError.innerHTML = '';
        return false;
      }else if(!regEmail.test(femail)){
        uemailError.innerHTML = '* Please Enter Valid Email';
        return false;
      }else if(femail === ''){
        uemailError.innerHTML = '* Please Enter Email';
        return false;
      }
    }
    function bluremail() {
     
      let femail = document.getElementById("email").value;
      if (regEmail.test(femail)) {
        emailError.innerHTML = '';
        return false;
      }else if(femail === ""){
        emailError.innerHTML = '* Please enter Email';
        return false;
      }
    }
    function bluremail2() {
     
      let femail = document.getElementById("updateemail").value;
      if (regEmail.test(femail)) {
        uemailError.innerHTML = '';
        return false;
      }else if(femail === ""){
        uemailError.innerHTML = '* Please enter Email';
        return false;
      }
    }
    function ValidateMobile() {
      let fmobile = document.getElementById("mobile").value;
      if (regPhone.test(fmobile)) {
        mobileError.innerHTML = '';
        return false;
      }else if(!regPhone.test(fmobile)){
        mobileError.innerHTML = '* Please Enter Valid Mobile No';
        return false;
      }else if(fmobile === ''){
        mobileError.innerHTML = '* Please enter Mobile No';
        return false;
      }
    }
    function ValidateMobile2() {
      let fmobile = document.getElementById("updatemobile").value;
      if (regPhone.test(fmobile)) {
        umobileError.innerHTML = '';
        return false;
      }else if(!regPhone.test(fmobile)){
        umobileError.innerHTML = '* Please Enter Valid Mobile No';
        return false;
      }else if(fmobile === ''){
        umobileError.innerHTML = '* Please enter Mobile No';
        return false;
      }
    }
    function blurmobile() {
      let fmobile = document.getElementById("mobile").value;
      if (regPhone.test(fmobile)) {
        mobileError.innerHTML = '';
        return false;
      }else if(fmobile === ""){
        mobileError.innerHTML = '* Please enter Mobile No';
        return false;
      }
    }
    function blurmobile2() {
      let fmobile = document.getElementById("updatemobile").value;
      if (regPhone.test(fmobile)) {
        umobileError.innerHTML = '';
        return false;
      }else if(fmobile === ""){
        umobileError.innerHTML = '* Please enter Mobile No';
        return false;
      }
    }


    $(document).ready(function () {


      // login form
        $(document).ready(function () {
          $('#Add').click(function () {          
            $('.student').show()                                
            $('#name').focus()   
            
  
          });

          $('#close').click(function () {          
            $('#Add').show() 
            $('.student').hide() 
            $('.modal-backdrop').remove()

          })                            
          $('#close1').click(function () {
            $('.updatestudent').hide()
            $('.modal-backdrop').remove(); 
              
          })                            
          $('.edit').click(function () {
            $("#updatestudent").css("display", "block");
            
            
          })                            
        });

      

      $("#result_table").on('click', '.delete', function () {
        var rowid = $(this).attr('data-id');
        console.log(rowid);
        if(confirm('Are you sure to remove this record ?')) {
        $.ajax({
          url: 'delete.php',
          type: 'POST',
          data: {
            id: rowid
          },
          success: function (data) {
            getData();
            if (data == 1) {
              $("#" + rowid).remove();
            }
            $("#result").html(data);
          }
        });
      }
      });


      $("#result_table").on("click", '.edit', function () {
        var id = $(this).attr("data-id");
        console.log(id);

        $.ajax({
          url: "getuser.php",
          type: "POST",
          data: {
            id: id
          },
          success: function (data) {
            var data = JSON.parse(data);
            $("#updatename").val(data.studname);
            $("#updatedate").val(data.studdob);
            $("#updategender").val(data.studgender);
            $("#updatemobile").val(data.studmobile);
            $("#updateemail").val(data.studemail);
            $("#updatecourseid").val(data.studcourseid);
            $("#updateid").val(data.studid);
            console.log(data);         
            $("#result").html(data);
            $("#updatestudent").css("display", "block");

          }
        });
      });


      function getData() {
        $.ajax({
          url: "display.php",
          type: "POST",
          data: {
            action: "getData"
          },
          success: function (data) {
            $("#result_table").html(data);
          }
        });
      }

      getData();

      //Insert Data

      $('#submit').click(function (e) {
        e.preventDefault();

        if (validateForm()) {
 
        var formdata = $('#dataform').serializeArray();

        console.log(formdata);

        $.ajax({
          url: 'insert.php',
          type: 'POST',
          data: formdata,
          success: function (data) {
             getData();

              if(data == 1){
              console.log(data);                                    
              $('.modal-backdrop').remove(); 

               $("#fmobile-error").html('Mobile Number Already exist.');
               $('#mobile').focus()                
            }else {              
              $('#dataform').each(function () {
              this.reset();
              }); 
              $('#student').hide()
              $('.modal-backdrop').remove()
              $("#result").html(data)
              console.log(data);
            }
        }

        });
       
      }

      });


      //Update Data

      $('#update').click(function (e) {
        e.preventDefault();

        if (validateForm2()) {
 
        var formdata = $('#updatedataform').serializeArray();

        console.log(formdata);

        $.ajax({
          url: 'edit.php',
          type: 'POST',
          data: formdata,
          success: function (data) {
             getData();

              if(data == 1){
              console.log(data);                                    
              $('.modal-backdrop').remove(); 

               $("#umobile-error").html('Mobile Number Already exist.');    
               $('#updatemobile').focus()            
            }else {              
              $('#updatedataform').each(function () {
              this.reset();
              }); 
              $('#updatestudent').hide()
              $('.modal-backdrop').remove()
              $("#result").html(data)
            }
        }

        });
       
      }

      });



    });


  </script>
</body>

</html>