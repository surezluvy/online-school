$(function(){
	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.tombolTambahUbahData').html('Tambah Data');
		$('#nama').val('');
		$('#kelas').val('');
		$('#no').val('');
		$('#id').val('');
	});

	$('.tampilModalUbah').on('click', function(){
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.tombolTambahUbahData').html('Ubah Data');
		$('#formAction').attr('action', 'http://localhost/MVC/public/mahasiswa/ubah');
		
		const id = $(this).data('id');

		// AJAX
		$.ajax({
			// Mengambil data ke url mana
			// Lalu menjalankan method getubah
			url: 'http://localhost/MVC/public/mahasiswa/getubah',
			// Membuat variabel id yang berisi id dari mahasiswa di index.php
			data: {id : id},
			// Lalu datanya dikirimnkan dengan method post ($_POST)
			method: 'post',
			// Lalu mengirim dengan menggunakan tipe data json, bisa juga text
			dataType: 'json',
			// Jika berhasil maka menjalankan fungsi, dan mengganti isi dari modal
			success: function(data){
				// Mengubah nama pada modal, Mengambil nama dari data 
				$('#nama').val(data.nama);
				$('#kelas').val(data.kelas);
				$('#no').val(data.no);
				$('#id').val(data.id);
			}
		});

	});
});