    <?php require_once '../includes/functions.php';?>
  
    <!-- add employee-->
    <div class="modal fade" id="employees">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h6 style="margin-left:30%" class="modal-title">Municipality of Toboso Employee Registration Form</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
            <div class="row">
                <?php 
                inputTextData('First Name','text','','fname','fname');
                inputTextData('Middle Name','text','','mname','mname');
                inputTextData('Last Name','text','','lname','lname');
                ?>
                <div class="col-sm-3">
                <div class="form-group">
                        <label>Suffix</label>
                        <select class="form-control" type="text" name="suffix"  id="suffix">
                        <option value=''></option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        </select>
                </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                   <label>Gender</label>
                    <div class="row">
                     <div class="custom-control custom-radio">
                          <input autocomplete=off  class="custom-control-input" type="radio" id="customRadio1" name="gender" value="Male" checked>
                          <label for="customRadio1" class="custom-control-label">Male</label>
                     </div>
                     <div class="custom-control custom-radio" style="margin-left:20%">
                          <input autocomplete=off  class="custom-control-input" type="radio" id="customRadio2" name="gender" value="Female">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                     </div>
                     </div>
                  </div>
                </div>
                <?php inputTextData('Birth Date','date','','bdate','bdate');?>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="exampleInputText">Address</label>
                    <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#address"></i>
                    <select class="form-control" type="text" name="addres"  id="addres">
                    <?php
                    $sql = "SELECT * FROM addres ORDER BY addres ASC";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)> 0 )
                    {
                       while($row = mysqli_fetch_assoc($result)) {
                         echo ' 
                         <option value="'.$row['a_id'].'">'.$row['addres'].'</option>  
                        '  ;
                    }}
                    ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                <div class="form-group">
                        <label>Marital Status</label>
                        <select class="form-control" type="text" name="stat"  id="status">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Life Partner">Life Partner</option>
                        </select>
                </div>
                </div>
                <?php 
                inputTextData('Email','email','','email','email');
                inputTextData('Contact Number','number','','contact','contact');
                ?>
                <div class="col-sm-3">
                  <div class="form-group">
                        <label>Religion</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#addreligion"></i>
                        <select class="form-control" type="text" name="religion"  id="religion">
                        <?php
                         $sql = "SELECT religion FROM religion ORDER BY religion ASC";
                         $result = mysqli_query($con, $sql);
                         if (mysqli_num_rows($result)> 0 )
                         {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo ' 
                              <option value="'.$row['r_id'].'">'.$row['religion'].'</option>  
                             '  ;
                         }}
                         ?>
                        </select>
                  </div>
                </div>
                <div class="col-sm-3" id="educ">
                  <div class="form-group">
                        <label>Educational Attainment</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#addEduc"></i>
                        <select class="form-control" type="text" name="education"  id="education">
                        <?php
                        $education = "SELECT education FROM education ORDER BY e_id ASC";
                        $result = mysqli_query($con, $education);
                        if (mysqli_num_rows($result)> 0 )
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <option value="'.$row['e_id'].'">'.$row['education'].'</option>  
                            '  ;
                        }}
                        ?>
                        </select>
                  </div>
                </div>
                <div class="col-sm-3" id="courses">
                  <div class="form-group">
                        <label>Course  / NC</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#addCourse"></i>
                        <select class="form-control" type="text" name="course"  id="course">
                        <?php
                        $course = "SELECT course FROM course ORDER BY course ASC";
                        $result = mysqli_query($con, $course);
                        if (mysqli_num_rows($result)> 0 )
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <option value="'.$row['c_id'].'">'.$row['course'].'</option>  
                            '  ;
                        }}
                        ?>
                        </select>
                  </div>
                </div>
                 <div class="col-sm-3">
                  <div class="form-group">
                        <label>Employment Type</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#addEmpType"></i>
                        <select class="form-control" type="text" name="emp_type"  id="emp_type">
                        <?php
                        $employee_type = "SELECT emp_type FROM employee_type ORDER BY e_id ASC";
                        $result = mysqli_query($con, $employee_type);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <option value="'.$row['t_id'].'">'.$row['emp_type'].'</option>  
                            '  ;
                        }}
                        ?>
                        </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                        <label>Department</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#Department"></i>
                        <select class="form-control" type="text" name="department"  id="department">
                        <?php
                        $department = "SELECT department FROM department ORDER BY department ASC";
                        $result = mysqli_query($con, $department);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <option value="'.$row['d_id'].'">'.$row['department'].'</option>  
                            '  ;
                        }}
                        ?>
                        </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                        <label>Job Title</label>
                        <i style="margin-left:5%" class="fa fa-plus" data-toggle="modal" data-target="#addJob"></i>
                        <select class="form-control" type="text" name="job"  id="job">
                        <?php
                        $job = "SELECT job FROM job ORDER BY job ASC";
                        $result = mysqli_query($con, $job);
                        if (mysqli_num_rows($result)> 0 ) 
                        {
                           while($row = mysqli_fetch_assoc($result)) {
                             echo ' 
                             <option value="'.$row['j_id'].'">'.$row['job'].'</option>  
                            '  ;
                        }}
                        ?>
                        </select>
                  </div>
                </div>
                <?php inputTextData('Salary','number','','salary','salary');?>
               <div class="col-sm-3">
                  <div class="form-group">
                   <label>CSE Passer</label>
                    <div class="row">
                     <div class="custom-control custom-radio">
                          <input autocomplete=off  class="custom-control-input" type="radio" id="customRadio3" name="cse" value="Yes" checked>
                          <label for="customRadio3" class="custom-control-label">Yes</label>
                     </div>
                     <div class="custom-control custom-radio" style="margin-left:20%">
                          <input autocomplete=off  class="custom-control-input" type="radio" id="customRadio4" name="cse" value="No">
                          <label for="customRadio4" class="custom-control-label">No</label>
                     </div>
                     </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                        <label>CSE Type</label>
                        <select class="form-control" type="text" name="cse_type"  id="cse_type">
                        <option></option>
                        <option value="Professional">Professional</option>
                        <option value="Sub-Professional">Sub-Professional</option>
                        <option value="Not">Not</option>
                        </select>
                  </div>
                </div>
                <?php inputTextData('Date Hired','date','','hired','hired');?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-xs btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" name="addEmp" class="btn btn-xs btn-primary">Save Record</button>
            </div>
          </div>
        </div>
    </form>     
      </div>
      </div>
      <!-- /.modal -->

  <?php  
  /* function call for all modals*/

     addModal('address','Address','addresses','addAddress');
     addModal('addreligion','Religions','religions','addReligions');
     addModal('addEduc','Education','educations','addEducations');
     addModal('addCourse','Course','courses','addCourses');
     addModal('addEmpType','Employee Type','emp_Type','addEmp_Type');
     addModal('Department','Department','departments','addDepartment');
     addModal('addJob','Job Title','jobs','addJobs');
     addModal('addSettings','Settings','settings','addSettings');
  ?>