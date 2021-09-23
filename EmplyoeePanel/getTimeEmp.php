<style>            
	tr{cursor: pointer; transition: all .25s ease-in-out}
    .selected{background-color: red; font-weight: bold; color: #fff;}        
</style>
<?php
session_start();
require("../MyDB.php");

if(!empty($_POST["SelectEmplyoee"])) 
{
	$Name=$_POST["SelectEmplyoee"];
            							
	$Query = "SELECT * FROM ((tbl_employee INNER JOIN tbl_department ON tbl_department.DepartmentID=tbl_employee.DepartmentID) INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID) ORDER BY Name ASC";
		
	$Result = mysqli_query($con,$Query);
										
?>
<div class="table-responsive">
   <table id="table" class="table table-bordered">
   		<thead>
        	<tr class="d-flex">
                <th class="col-sm-3">Date</th>
                <th class="col-sm-3">Employee Name</th>
                <th class="col-sm-3">Attendance</th>
                <th class="col-sm-3">Remarks</th>
            </tr>
         </thead>
         <tbody>
               <?php
					if($Name=='SelectEmplyoee')
				 	{
						while($row = mysqli_fetch_array($Result))
						{
							$id=$row["EmployeeID"];			
			   ?>
               <tr class="d-flex">
               		<td class="col-sm-3"><input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"  name="Date[]" /></td>
    				<td class="col-sm-3"><input type="text" value="<?php echo $row["Name"];?>" class="form-control" name="EmpName[]" readonly="readonly" /></td>
                    <td class="col-sm-3">
                    	<select class="form-control" name="AttendancePA[]">
                        	<option value="Present">Present</option>
                            <option value="Absent">Absent</option>        
                        </select>
                    </td>
                    <td class="col-sm-3"><textarea class="form-control" name="Remarks[]"></textarea></td>
               </tr>
            	<?php
						}
					}
				?>
            </tbody>
    </table>
</div>
<?php
}
?>
<script>            
	function selectedRow()
	{            
       var index,
       table = document.getElementById("table");
            
       for(var i = 1; i < table.rows.length; i++)
       {
        	table.rows[i].onclick = function()
         	{
				// remove the background from the previous selected row
                if(typeof index !== "undefined")
				{
					table.rows[index].classList.toggle("selected");
                }
                console.log(typeof index);
                // get the selected row index
                index = this.rowIndex;
                // add class selected to the row
                this.classList.toggle("selected");
                console.log(typeof index);
             };
       }       
     }
     selectedRow();
</script>