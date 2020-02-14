$(document).ready(function() {
    

    $('#show').on('click', (e) => {
        e.preventDefault();
        showData();
    });

    /**
     * This method call ajax information
     */
    function showData() {
        
        $.post(
            ajaxUrl + '/ajaxRequest/exe/', 
            { },
            function(response) {
                let obj = JSON.parse(response);
                
                if (obj.success == true) {
                    $('#results').html('');
                    let data = obj.results;
                    if((data.length>0)){
                        let htmlString = '';
                        $.each(data, function(i, element) {
                            htmlString += "<article class='item'>";
                            htmlString += "<div class='info'>";
                            htmlString += element.email;
                            htmlString += "</div>";
                            htmlString += "</article>";
                        });
                        $('#results').html(htmlString);
                    }else
                        alert('Se obtuvo 0 resultados.');

                } else {
                    alert('Ocurrio un problema, intenten mas tarde.');
                }
        });
    }
});