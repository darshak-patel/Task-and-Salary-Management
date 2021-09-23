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
	
	if(!empty($_POST["TargetSelect"]))
	{
			$M=$_POST['TargetSelect'];
			
			$Query="select tbl_selling.Target,sum(tbl_targetassignemplyoee.TargetA) as TT,tbl_employee.BasicPay,tbl_employee.Name,tbl_selling.ProductPrice,tbl_target.EmplyoeeInsntv FROM ((((tbl_selling INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_targetassignemplyoee ON tbl_targetassignemplyoee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_selling.ProductID) INNER JOIN tbl_target ON tbl_target.ProductID=tbl_selling.ProductID) where tbl_employee.Name='$M' group by tbl_product.ProductName";
			$Result=mysqli_query($con,$Query);
			
		if(isset($_POST['TargetSelect']))
		{		
				while($Row=mysqli_fetch_array($Result))
				{ 
					$Target=$Row['Target'];
					$Target2=$Row['TT'];
					$Pay=$Row['BasicPay'];
					$EMP=$Row['EmplyoeeInsntv'];
				}
					 
					  $T =$Target2 - $Target;
					  
					  if($T==0)
					  {
						$R=($Pay*$EMP)/100;
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