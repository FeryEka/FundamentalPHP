jQuery(document).ready(function() {
    // hilangkan tombol cari dan class loader
    $('.loader').hide();
    $('#tombol-cari').hide();

    // event katika keyword dituliskan
    jQuery('#keyword').on('keyup', function(){
        // munculkan icon loading
        $('.loader').show();
        
        // ajax menggunakan load
        // jQuery('#container').load('ajax/smartphones.php?keyword=' + jQuery('#keyword'.val()))

        // $.get()
        // 
        $.get('ajax/smartphones.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    })
});