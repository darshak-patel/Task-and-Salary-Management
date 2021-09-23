
<label>Emplyoee Name</label>
<select id="TargetSelectTL" name="TargetSelectTL" class="form-control">
	<option value="">Select One</option>
<?php
    session_start();
	require("../MyDB.php");
	
	$FromDateTL=$_POST['FromDateTL'];
	$ToDateTL=$_POST['ToDateTL'];
	
	$Query="select tbl_sellingtargetleader.Target,tbl_targetassignteamleader.TargetA,tbl_employee.BasicPay,tbl_employee.Name,tbl_sellingtargetleader.ProductPrice FROM (((tbl_sellingtargetleader INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_sellingtargetleader.EmployeeID) INNER JOIN tbl_targetassignteamleader ON tbl_targetassignteamleader.EmployeeID=tbl_sellingtargetleader.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_sellingtargetleader.ProductID) WHERE SellDate>='$FromDateTL' AND SellDate<='$ToDateTL' GROUP BY tbl_employee.Name";
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
<div id="ShowTL" class="center-block" style="float:none">

</div>
<script>
	$(document).ready(function()
	{
		$("#TargetSelectTL").change(function()
		{
		  var TargetSelectTL = $(this).val();
		  var dataString = "TargetSelectTL="+TargetSelectTL;
	
		  $.ajax({ 
				type: "POST", 
				url: "getEmpDataSearchTeamLeader.php",
				data: dataString,
				success: function(result){
				$("#ShowTL").html(result);
				}
			});
		});
	});
</script>