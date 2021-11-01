//nama folder di public tidak boleh sama dengan nama route.

for(let i = 1; i <= 5; i++){
    $('#btn'+i).on('click', function(event){
        event.preventDefault();
        $('form input[name="harga"]').attr('value', $(this).val());
    });
}
