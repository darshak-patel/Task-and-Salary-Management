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
	
	if(!empty($_POST["TargetSelectTL"]))
	{
			$M=$_POST['TargetSelectTL'];
			
			$Query="select tbl_sellingtargetleader.Target,sum(tbl_targetassignteamleader.TargetA) as TT,tbl_employee.BasicPay,tbl_employee.Name,tbl_sellingtargetleader.ProductPrice ,tbl_target.TeamLeaderInsntv FROM ((((tbl_employee INNER JOIN tbl_sellingtargetleader ON tbl_employee.EmployeeID=tbl_sellingtargetleader.EmployeeID) INNER JOIN tbl_targetassignteamleader ON tbl_targetassignteamleader.EmployeeID=tbl_sellingtargetleader.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_sellingtargetleader.ProductID) INNER JOIN tbl_target ON tbl_target.ProductID=tbl_sellingtargetleader.ProductID) where tbl_employee.Name='$M'";
			$Result=mysqli_query($con,$Query);
			
			if(isset($_POST['TargetSelectTL']))
			{
				while($Row=mysqli_fetch_array($Result))
				{ 
					$Target1=$Row['Target'];
					$Target2=$Row['TT'];
					$Pay=$Row['BasicPay'];
					$TM=$Row['TeamLeaderInsntv'];
				}
					 
					  $T=$Target2 - $Target1;
					  
					  if($T==0)
					  {
						$R=($Pay*$TM)/100;
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
<?php 	}
					
		}
	
?>