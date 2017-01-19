<?php
require_once '../core/init-2.php'; 
$con = new Database();
$table = "berita";
if(isset($_GET['delete_id']))
{
	$id=$_GET['delete_id'];
	$res=$con->deleteberita($table,$id);
	if($res)
	{
		?>
		<script>
		alert('Record Deleted ...')
        window.location='tampil-berita.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Record cant Deleted !!!')
        window.location='tampil-berita.php'
        </script>
		<?php
	}
}
?>