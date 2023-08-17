jQuery(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // event katika keyword dituliskan
    jQuery('#keyword').on('keyup', function(){
        jQuery('#container').load('ajax/smartphones.php?keyword=' + jQuery('#keyword'.val()))
    })
});