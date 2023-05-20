<?php
	if(isset($_POST['submit'])){
		$name	= $_POST['name'];
		$kelurahan	= $_POST['kelurahan'];
		$alamat	= $_POST['alamat'];
		$message	= $_POST['message'];
		$no_WA	= $_POST['noWA'];
		header("location:https://api.whatsapp.com/send?phone=$no_WA&text=Nama:%20$name%20%0DKelurahan:%20$kelurahan%20%0DAlamat:%20$alamat%20%0DPesan:%20$message");
	}else{
		echo "
			<script>
				window.location=history.go(-1);
			</script>
		";
	};
?>