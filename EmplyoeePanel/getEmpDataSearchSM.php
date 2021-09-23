<?php
session_start();
if(!isset($_SESSION['EmployeeUsername']) || $_SESSION['EmployeeUsername']!=true)
{
	header("Location:../index.php");
	exit();
}
else
{
 $EmployeeUsername=$_SESSION['EmployeeUsername'];
}
?>
<?php
	require("../MyDB.php");
	
	if(!empty($_POST["TargetSelectSM"]))
	{
			$M=$_POST['TargetSelectSM'];
			
			$Query="select tbl_sellingtargetsalemngr.Target,tbl_targetassign.TargetA,tbl_employee.BasicPay,tbl_employee.Name,tbl_sellingtargetsalemngr.ProductPrice,tbl_target.SalesManagerInsntv FROM ((((tbl_employee INNER JOIN tbl_sellingtargetsalemngr ON tbl_employee.EmployeeID=tbl_sellingtargetsalemngr.EmployeeID) INNER JOIN tbl_targetassign ON tbl_targetassign.EmployeeID=tbl_sellingtargetsalemngr.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_sellingtargetsalemngr.ProductID) INNER JOIN tbl_target ON tbl_target.ProductID=tbl_sellingtargetsalemngr.ProductID) where tbl_employee.Name='$M' group by tbl_product.ProductName";
			$Result=mysqli_query($con,$Query);
			
		if(isset($_POST['TargetSelectSM']))
		{		
				while($Row=mysqli_fetch_array($Result))
				{ 
					$Target=$Row['Target'];
					$Target2=$Row['TargetA'];
					$Pay=$Row['BasicPay'];
					$SM=$Row['SalesManagerInsntv'];
				}
					 
					  $T =$Target2 - $Target;
					  
					  if($T==0)
					  {
						$R=($Pay*$SM)/100;
						$P=($Pay+$R);
					  ?>        
                    <label>Insentive</label>
				    <input type="text" name="Insentive" value="<?php echo $R; ?>" class="form-control" /><br />
						
					<label>Grand Total</label>
					<input type="text" name="GrandTotal" value="<?php echo $P; ?>" class="form-control" />
			<?php
                      }
					  elseif($T>0)
					  {

			?>					
					<label>Grand Total</label>
                    <input type="hidden" name="Insentive" value="" class="form-control" /><br />
    				<input type="text" name="GrandTotal" value="<?php echo $Pay; ?>" class="form-control" />
			
            <?php 
					  }
					  else
					  {
					  echo "not";
					  }
						
			?>   
<?php 
					}
		}
	
?>