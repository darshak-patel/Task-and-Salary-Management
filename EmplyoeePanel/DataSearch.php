
<label>Emplyoee Name</label>
<select id="TargetSelect" name="TargetSelect" class="form-control">
	<option value="">Select One</option>
<?php
    session_start();
	require("../MyDB.php");
	
	$FromDate=$_POST['FromDate'];
	$ToDate=$_POST['ToDate'];
	
	$Query="select tbl_selling.Target,tbl_targetassignemplyoee.TargetA,tbl_employee.BasicPay,tbl_employee.Name,tbl_selling.ProductPrice FROM (((tbl_selling INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_targetassignemplyoee ON tbl_targetassignemplyoee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_selling.ProductID) WHERE SellDate>='$FromDate' AND SellDate<='$ToDate' GROUP BY tbl_employee.Name";
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
<div id="Show" class="center-block" style="float:none">

</div>
<script>
	$(document).ready(function()
	{
		$("#TargetSelect").change(function()
		{
		  var TargetSelect = $(this).val();
		  var dataString = "TargetSelect="+TargetSelect;
	
		  $.ajax({ 
				type: "POST", 
				url: "getEmpDataSearch.php",
				data: dataString,
				success: function(result){
				$("#Show").html(result);
				}
			});
		});
	});
</script>