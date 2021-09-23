
<?php
session_start();
require("../MyDB.php");

if(!empty($_POST["SelectTeamLeader"])) 
{
	$Name=$_POST["SelectTeamLeader"];
										
?>
<div class="table-responsive">
   <table id="table" class="table table-bordered">
   		<thead>
        	<tr class="d-flex">
                <th class="col-sm-3">Employee Name</th>
                <th class="col-sm-3">Product</th>
                <th class="col-sm-3">Target</th>
            </tr>
         </thead>
         <tbody>
               <?php
					if($Name=='SelectTeamLeader')
				 	{
									
			   ?>
               <tr class="d-flex">
               		<td class="col-sm-3">
                    	<select class="form-control" name="EmpName">
                        <?php
							require("../MyDB.php");
                        	
							$Query = "SELECT * FROM (tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID) where DesignationName='Team Leader'";
		
							$Result = mysqli_query($con,$Query);
    						while($row = mysqli_fetch_array($Result))
							{
									$id=$row["EmployeeID"];
						?>
                         <option value="<?php echo $id;?>"><?php echo $row["Name"];?></option>     
                        <?php } ?>    
                        </select>
                    </td>
                    <!--<td class="col-sm-3"><input type="text" class="form-control" name="Product[]" /></td>-->
                    <td class="col-sm-3">
                    	<select class="form-control" name="Product">
                        	<?php
								require("../MyDB.php");
								
								$Query1="select * from tbl_targetassign INNER JOIN tbl_product ON tbl_product.ProductID=tbl_targetassign.ProductID";
								$Result1=mysqli_query($con,$Query1);
								
								while($Row1=mysqli_fetch_array($Result1))
								{
							?>
                        		<option value="<?php echo $Row1['ProductID'];?>" selected="selected"><?php echo $Row1['ProductName'];?></option>    
                            <?php } ?> 
                        </select>
                    </td>
                    <td class="col-sm-3">
                    			    <input type="text" class="form-control" id="Target" name="Target" />
                    </td>
               </tr>
            	<?php
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