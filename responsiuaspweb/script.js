function validasi() {
	var nama = document.getElementById("nama").value;
	var alamat = document.getElementById("alamat").value;
	if (nama != "" && alamat !="") {
		return true;
	}else{
		alert('Anda harus mengisi data dengan lengkap !');
	}
}