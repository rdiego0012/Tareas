$(document).ready(function(){    
            console.log('jQuery is workiing');    
        // pacientes
                $('#search').keyup(function(e){
                    let search = $('#search').val();                    
                    $.ajax({
                        url: 'searchpaciente.php',
                        type: 'POST',
                        data: { search },
                        success: function(response){
                            let pacientes=  JSON.parse(response);
                            console.log(pacientes);
                        }        
                    })
                })
});