<?php
    include('security.php');
?>

 <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Staff ID </label>
                <input type="text" name="StaffID" class="form-control" placeholder="Enter Staff ID">
            </div>
			<div class="form-group">
                <label>Password</label>
                <input type="password" name="Password" class="form-control" placeholder="Enter Password">
            </div>
			
			<div class="form-group">
                <label>Confirm Password</label>
                <input type="text" name="ConfirmPassword" class="form-control" placeholder="Enter Password again">
            </div>
			
			<div class="form-group">
                <label>Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Enter Name">
            </div>
			
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="Email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            
			<div class="form-group">
                <label>Phone number</label>
                <input type="text" name="PhoneNum" class="form-control" placeholder="Enter Phone number">
            </div>
			
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="Position" class="form-control" placeholder="Enter Position">
            </div>
			
			<div class="form-group">
                <label>Department</label>
                <input type="text" name="Department" class="form-control" placeholder="Enter Department">
            </div>

            <div class="form-group">
                <label>Department</label>
                <input type="radio" name="gender"
				<?php if (isset($usertype) && $usertype=="admin") echo "checked";?>
					value="admin">Admin
				<input type="radio" name="gender"
				<?php if (isset($usertyper) && $usertype=="user") echo "checked";?>
				value="user">Normal user
            </div>
        
        </div>
        <div class="modal-footer">
           <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>