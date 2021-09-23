
<label>Emplyoee Name</label>
<select id="TargetSelectSM" name="TargetSelectSM" class="form-control">
	<option value="">Select One</option>
<?php
    session_start();
	require("../MyDB.php");
	
	$FromDateSM=$_POST['FromDateSM'];
	$ToDateSM=$_POST['ToDateSM'];
	
	$Query="select tbl_sellingtargetsalemngr.Target,tbl_targetassign.TargetA,tbl_employee.BasicPay,tbl_employee.Name,tbl_sellingtargetsalemngr.ProductPrice FROM (((tbl_sellingtargetsalemngr INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_sellingtargetsalemngr.EmployeeID) INNER JOIN tbl_targetassign ON tbl_targetassign.EmployeeID=tbl_sellingtargetsalemngr.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_sellingtargetsalemngr.ProductID) WHERE SellDate>='$FromDateSM' AND SellDate<='$ToDateSM' GROUP BY tbl_employee.Name";
	$Result=mysqli_query($con,$Query);
	
	while($Row=mysqli_fetch_array($Result))
	{
		$Target=$Row['Target'];
		$Target2=$Row['TargetA'];
		$Pay=$Row['BasicPay'];
		$EmpName=$Row['Name'];
		$ProductPrice=$Row['ProductPrice'];
?>
<option><?php echo $EmpName;?></option>
<?php 
	}
?>
</select><br />
<div id="ShowSM" class="center-block" style="float:none">

</div>
<script>
	$(document).ready(function()
	{
		$("#TargetSelectSM").change(function()
		{
		  var TargetSelectSM = $(this).val();
		  var dataString = "TargetSelectSM="+TargetSelectSM;
	
		  $.ajax({ 
				type: "POST", 
				url: "getEmpDataSearchSM.php",
				data: dataString,
				success: function(result){
				$("#ShowSM").html(result);
				}
			});
		});
	});
</script>