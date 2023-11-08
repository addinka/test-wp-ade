<?php
/**

* Template Name: Test Form Kontak

*/
get_header ();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--user interface input-->
<div class="container">
<form method='POST'>
<div class="form-group">
<label for ="nama">Nama:</label>

<input type ="text" class="form-control" placeholder="Masukan nama" name="nama">
</div>
<div class="form-group">
<label for ="email">Email Adrees:</label>
<input type ="email" class="form-control" placeholder="Masukan email" name="email">
</div>

<div class="form-group">
<label for ="pesan">Pesan:</label>
<textarea class="form-control" rows="5" name="pesan"></textarea>
</div>

<button type ="submit" name="insert" class="btn btn-primary">Submit</button>


</form>
</div>



<!--logic to wp -->

<?php

//jika di click akan submit button
if (isset($_POST['insert'])){

	//koneksi ke wp
    global $wpdb;

    $e = $_POST ['nama'];
    $n = $_POST ['email'];
    $m = $_POST ['pesan'];


	//function kirim email ke admin wordpress
	//mohon maaf jika function email mau jalan harus di upload ke server tidak boleh di localhost 
		//$to 			= "addin_cakep@ymail.com";
		//$from		= $_POST ['email'];
		//$subject	= "Test Form Kontak";
		
		//$message = $_POST['pesan'];
		
	//	$headers ="From:" . $from;
		
	//	mail ($to,$subject,$message,$headers);
	//	echo "Email terkirim";
		
		
    //function insert ke table 
    $sql = $wpdb->insert(
        'wp_form_kontak',
        array (
            'nama' => $e,
            'email' => $n,
            'pesan' => $m
			)


        );


        //jika berhasil ke insert
        if($sql ==true){
            echo '<script>alert("Inserted")</script>';

        }else {
            echo '<script>alert("Not Inserted")</script>';
        }
		
		

}



?>

<?php
  global $wpdb;
  $user = $wpdb->get_results( "SELECT * FROM wp_form_kontak" );
?>

<div class="container">
<table border>
    <tr>
     <th>Nama</th>
     <th>Email</th>
     <th>Pesan</th>
    
    </tr>

<?php foreach ($user as $row){ ?>
<tr>

    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->pesan ?></td>
</tr>
<?php } ?>

</table>
</div>

<?
get_footer();
?>