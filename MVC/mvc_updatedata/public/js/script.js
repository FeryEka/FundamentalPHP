$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('http://localhost:8080/FundamentalPHP/MVC/mvc_updatedata/public/smartphone/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost:8080/FundamentalPHP/MVC/mvc_updatedata/public/smartphone/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#merek').val(data.merek);
                $('#chipset').val(data.chipset);
                $('#ram').val(data.ram);
                $('#harga').val(data.harga);
                $('#gambar').val(data.gambar);
            }
        });
    });
});