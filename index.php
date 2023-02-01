<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="MyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="MyModalLabel">New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" method="post" id="dataform" name="myform" onsubmit ="return validateForm()">
                        <div class="form-group mb-3">
                            <label for="studname" class="form-label">Student Name</label>
                            <input type="text" class="form-control" name="studname" id="name" onkeyup="ValidateName()" placeholder="Enter student name">
							 <small class="error text-danger" id="fname-error"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="studdob" class="form-label">Date of birth </label>
                            <input type="date" class="form-control" name="studdob" id="date" value="" onchange="ValidateDOB()">
                            <small class="error text-danger" id="fdob-error"></small>
							 
                        </div>
                        <div class="form-group mb-3">
                            <label for="studgender" class="form-label">Gender</label>
                            <select name="studgender" id="gender">
                                <option value="Male" name="gender">Male</option>
                                <option value="Female" name="gender">Female</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="studmobile" class="form-label">Phone</label>
                            <input type="phone" class="form-control" name="studmobile" id="mobile" onkeyup="ValidateMobile()" placeholder="Enter your mobile no"/>
							 <small class="error text-danger" id="fmobile-error"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="studemail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="studemail" id="email" onkeyup="ValidateEmail()" placeholder="Enter your email"/>
							 <small class="error text-danger" id="femail-error"></small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="studcourseid" class="form-label">Course</label>
                            <select name="studcourseid" id="course">
                                <option value="BA" name="course">BA</option>
                                <option value="BSC" name="course">BSC</option>
                                <option value="BE" name="course">BE</option>
                                <option value="Bcom" name="course">Bcom</option>
                                <option value="ME" name="course">ME</option>
                                <option value="Mcom" name="course">Mcom</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Close</button>
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!--Update Modal -->
    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="MyModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" name="studmobile" id="updatemobile" placeholder="Enter your phone no">
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
    </div>



    <div class="container my-5">
        <h1 class="text-center text-success">CRUD OPERATION</h1>

        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#MyModal">
            Add New
        </button>
    </div>

    <div id="result"></div>

    <table id="result_table" class="table caption-top">

    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <script>
    
            
				
				
			// form validation
			
			let nameError = document.getElementById('fname-error');
			let dobError = document.getElementById('fdob-error');
			let emailError = document.getElementById('femail-error');
			let mobileError = document.getElementById('fmobile-error');

			let regEmail =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			let regPhone = /^(\+91|0)?[6789]\d{9}$/;
			// let regName = /^[a-zA-Z]+$/i;
			let regName = /^[a-zA-Z\s]{2,100}$/;
			


			function validateForm() {
			  let fname = document.getElementById("name").value;
			  let fdob = document.getElementById("date").value;
			  let fmobile = document.getElementById("mobile").value;
			  let femail = document.getElementById("email").value;
			  
			  if (fname === "" || regName.test(fname) != true) {
				nameError.innerHTML = '* Please enter Name';
				return false;
			  }
			  if (fdob === "") {
				dobError.innerHTML = '* Please select DOB';
				return false;
			  }
			   if (fmobile === "" || !regPhone.test(fmobile)) {
				mobileError.innerHTML = '* Please enter Mobile number';
				return false;
			  }
			  if (femail === "" || !regEmail.test(femail)) {
				emailError.innerHTML = '* Please enter Email';
				return false;
			  }
			  
			 return true;
			}
			
			// login key up
			function ValidateName() {
			  let fname = document.getElementById("name").value;
			  if (fname !== "") {
				nameError.innerHTML = '';
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

			  function ValidateEmail() {				  
				let femail = document.getElementById("email").value;
				if (femail !== "") {
				  emailError.innerHTML = '';
				  return false;
				}
			  }
			  function ValidateMobile() {
				let fmobile = document.getElementById("mobile").value;
				if (fmobile !== "") {
				  mobileError.innerHTML = '';
				  return false;
				}
			  }

	
			$(document).ready(function() {
                            
            $("#result_table").on('click', '.delete', function() {

                if(confirm('Are you sure to remove this record ?')) {
                    var rowid = $(this).attr('data-id');
                    console.log(rowid);

                    
                    $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: {
                            id: rowid
                        },
                        success: function(data) {
                            getData();
                            if (data == 1) {
                                $("#" + rowid).remove();
                            }
                            $("#result").html(data);
                        }
                    });
                }
            });


            $("#result_table").on("click", '.edit', function() {
                var id = $(this).attr("data-id");
                console.log(id);

                $.ajax({
                    url: "getuser.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
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
                    success: function(data) {
                        $("#result_table").html(data);
                    }
                });
            }

            getData();

            //Insert Data
			
			
					
			
            $('#submit').click(function(e) {
				e.preventDefault();
				
				if(validateForm()){										            
                var formdata = $('#dataform').serializeArray();
                console.log(formdata);
				
                $.ajax({
                    url: 'insert.php',
                    type: 'POST',
                    data: formdata,
                    success: function(data) {
                        console.log(data);
                        getData();
                        $('#dataform').each(function() {
                            this.reset();
                        });
					  $('#MyModal').modal('hide');
                      $("#result").html(data);
					   
                    }
                });		
				}                             
	
            });
			
			
        
       


            //Update Data

            $('#update').click(function(e) {
				
				e.preventDefault();
                var formdata = $('#updatedataform').serializeArray();

                console.log(formdata);

                $.ajax({
                    url: 'edit.php',
                    type: 'POST',
                    data: formdata,
                    success: function(data) {
                        console.log(data);
                        getData();
                        $('#updatedataform').each(function() {
                            this.reset();
                        });
                     
						 $('#UpdateModal').modal('hide');
						 $("#result").html(data);

                    }
                });


            });
			


        });

        
    </script>
</body>

</html>