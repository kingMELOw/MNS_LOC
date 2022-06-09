<?php 
session_start();
include('includes/config.php');
if (isset($_SESSION['login'])) {
    if ($_SESSION['admin'] != true) {
        echo '<script>alert("Non autorisée à accéder à cette zone.")</script>';
        header("Location: ../materiel.php");
        die();
    };
} else {
    header("Location: ../Formulaire/formulaire.co.php");
    die();
}
?>
<table border="1">
									<thead>
										<tr>
										<th>#</th>
												<th>ID</th>
                                                <th>Login</th>
                                                <th>Mot de passe</th>
                                                <th>is_admin</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
										</tr>
									</thead>

<?php 
$filename="Users list";
$sql = "SELECT * from Users";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$Name= $result->name.'</td> 
<td>'.$Email= $result->email.'</td> 
<td>'.$Gender= $result->gender.'</td> 
<td>'.$Phone= $result->mobile.'</td> 
<td>'.$Designation= $result->designation.'</td> 					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>