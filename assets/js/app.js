$('#persetujuan').on('click', function(){

    $(this).toggleClass('checked');

    if($(this).hasClass('checked'))
    {

        $('.daftar .daftar-btn').removeClass('btn-disable')
        
    }
    else
    {

        $('.daftar .daftar-btn').addClass('btn-disable')

    }

})