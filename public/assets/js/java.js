(function(win,doc){
    'use strict';

    //Delete
    function confirmDel(event)
    {
        event.preventDefault();
        console.log(event);
    }
    if(doc.querySelector('.js-del')){
        let btn = doc.querySelectorAll('.js-del');
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click', confirmDel,false);
        }
    }

})(window,document);

//País para Província
$(document).ready(function() {
    $('#empresa_id').change(function() {
        var id = $(this).val();
        $('#automovel_id').find('option').not(':first').remove();
        $.ajax({
            url: '/getProvincias/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }
                if (len > 0) {
                    for (var i = 0; i < len; i++) {
                        var id = response['data'][i].id;
                        var nome = response['data'][i].matricula;
                        var option = "<option value='" + id + "'>" + nome + "</option>";
                        $("#automovel_id").append(option);
                    }
                }
            }
        });
    });
});
//Província para Distrito
$(document).ready(function() {
    $('#sel_provincia').change(function() {
        var id = $(this).val();
        $('#sel_distrito').find('option').not(':first').remove();
        $.ajax({
            url: 'getDistritos/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }
                if (len > 0) {
                    for (var i = 0; i < len; i++) {
                        var id = response['data'][i].id;
                        var nome = response['data'][i].nome;
                        var option = "<option value='" + id + "'>" + nome + "</option>";
                        $("#sel_distrito").append(option);
                    }
                }
            }
        });
    });
});

//Obter a Quantidade
$(document).ready(function() {
    $('#sel_distrito').change(function() {
        var id = $(this).val();
        $('#sel_quantidade').find('option').not(':first').remove();
        $.ajax({
            url: 'getEstoques/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }
                if (len > 0) {
                    for (var i = 0; i < len; i++) {
                        var id = response['data'][i].produto_id;
                        var nome = response['data'][i].quantidade;
                        var option = "<option value='" + id + "'>" + nome + "</option>"; 
                        /* var option = "<input value='" + nome +"'/>"; */
                        $('#total_records').text(nome);
                        $("#sel_quantidade").append(option);
                    }
                }
            }
        });
    });
});

//Aqui Estoque - Distrito 
$(document).ready(function() {
    $('#sel_distrito').change(function() {
        var id = $(this).val();   
        $.ajax({
            url: 'getEstoques/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }
                if (len > 0) {
                    // Read data and create <option >
                    for (var i = 0; i < len; i++) {

                        var id = response['data'][i].id;
                        var nome = response['data'][i].nome;

                        var option = "<option value='" + id + "'>" + nome + "</option>";
                        $("#sel_estoque").append(option);
                    }
                }
            }
        });
    });
});



//País para Província - Estoque
$(document).ready(function() {

    $('#sel_provincia').change(function() {

        var id = $(this).val();

        $('#sel_distrito').find('option').not(':first').remove();

        // AJAX request 
        $.ajax({
            url: 'getDistrito/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {

                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }

                if (len > 0) {
                    // Read data and create <option >
                    for (var i = 0; i < len; i++) {

                        var id = response['data'][i].id;
                        var nome = response['data'][i].nome;

                        var option = "<option value='" + id + "'>" + nome + "</option>";

                        $("#sel_distrito").append(option);
                    }
                }

            }
        });
    });

});

//Estoque Categoria - Produto
$(document).ready(function() {

    // Department Change
    $('#sel_categoria').change(function() {
        var id = $(this).val();
        // Empty the dropdown
        $('#sel_produto').find('option').not(':first').remove();
        // AJAX request 
        $.ajax({
            url: 'getProdutos/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                var len = 0;
                if (response['data'] != null) {
                    len = response['data'].length;
                }
                if (len > 0) {
                    // Read data and create <option >
                    for (var i = 0; i < len; i++) {
                        var id = response['data'][i].id;
                        var nome = response['data'][i].nome;
                        var option = "<option value='" + id + "'>" + nome + "</option>";
                        $("#sel_produto").append(option);
                    }
                }
            }
        });
    });
});