/**
 * Funciones que se ejecutan en el DOM
 */
$(document).ready(function(){
    $('.combo').on('change',function(e) {
        var id = e.target.value;
        var route = e.target.dataset.route;
        var r1 = e.target.dataset.r1;
        var r2 = e.target.dataset.r2;
        comboBox(id,route,r1,r2);
    })
});

/**
 * Funciones invocadas
 */
$(".formlDinamic").on('submit', function(e) {
    e.preventDefault();
    var id = $(this).attr('id');
    var url = $(this).attr("action");
    var method = $(this).attr("method");
    var forml = $(this);

    if (id == 'guardarRegistro') {
        saveData(url, forml, method);
    }

    if (id == 'guardarRegistroMultitap') {
        var inputFile = $('#file');
        saveDataMultitap(url, forml, method, inputFile);
    }
    if (id == 'DataUpdate') {
        //input file 
        var inputFile = $('#file-2');

        if(inputFile[0] == undefined){
            saveData(url, forml, method);
        }else{
            saveDataMultitap(url, forml, method, inputFile);
        }
    }
    if (id == 'eliminarRegistro'){
        deleteReg(url,forml,method);
    }
});
/**
 * { function_description }
  * @param      {<type>}  url     The url
 */
function deleteReg(url){
    var token = $("#token").attr("content");
    $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        success: function(result) {
            location.reload();
        },
        error: function(msj) {
            var message = msj.responseText;
            var errors = $.parseJSON(msj.responseText);
            $.each(errors.errors, function(key, value) {
                toastr.error(value,"Error");
            });
        },
        timeout: 15000
    });
}

/**
 * Saves a data.
 *
 * @param      {<type>}    url     The url
 * @param      {<type>}    forml   The forml
 * @param      {Function}  method  The method
 */
function saveData(url, forml, method) 
{
    var route = $('#route').val();
    $.ajax({
        url: url,
        type: method,
        data: forml.serialize(),
        cache: false,
        success: function(result) 
        {
            $('.modal').modal('hide');// Oculta el modal del formulario create
            // $('#tbody').load(' .tbody');//Recarga el body de la tabla
            // toastr.success(result.message,"Exitoso");
            if(route == null || result.operator == true){
                location.reload();
            }else{
                window.location.replace(route)
            }
        },
        error: function(msj) 
        {
            var status = msj.statusText;
            var errors = $.parseJSON(msj.responseText);
        
            $.each(errors.errors, function(key, value) 
            {
                $("#" + key).addClass("is-invalid");
                $("#_" + key).addClass("is-invalid");
                $("." + key + "_span").addClass("invalid-feedback").html(value);
                toastr.error(value,"Error");
            });
        },
    timeout: 15000
    });
}

/**
 * { function_description }
 * @param      {<type>}    url     The url
 * @param      {<type>}    forml   The forml
 * @param      {Function}  method  The method
 */
function saveDataMultitap(url, forml, method, inputFile) 
{
    var route = $('#route').val();
    var formData = new FormData();
    if (inputFile != null) 
    {
        formData.append('file', inputFile[0].files[0]);
    }
        
    $.ajax({
        url: url + '?' + forml.serialize(),
        type: method,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
    
        success: function(result) 
        {
            $('.modal').modal('hide');// Oculta el modal del formulario create
            // $('#tbody').load(' .tbody');//Recarga el body de la tabla
            // toastr.success(result.message,"Exitoso");
            if(route == null){
                location.reload();
            }else{
                location(route)
            }
        },
        error: function(msj) 
        {
            var status = msj.statusText;
            var errors = $.parseJSON(msj.responseText);
        
            $.each(errors.errors, function(key, value) 
            {
                $("#" + key + "_group").addClass("has-error");
                $("." + key + "_span").addClass("help-block text-danger").html(value);
                toastr.error(value,"Error");
            });
        },
    timeout: 15000
    });
}

/**
 * { function_description }
 * @param      {string}  url     dirección del controlador para obtener los datos
 * @param      {string}  url2    dirección que se agrega en el acción para guadar los datos
 */
function obtenerDatosGet(url, url2)
{
    var form = $('.form'); //seleciona el formulario
    form.attr('action',url2); 
    $.get(url, function(data)
    {
        $.each(data, function(key, value) 
        {
            if (key=='curren_account' && value == 1) {
                $('#'+'_'+key).prop('checked', true);
            }
            else{
                $('#'+'_'+key).prop('checked', false);
            }
            if (key=='curren_account' && value == 1) {
                $('#'+'-'+key).prop('checked', true);
            }
            else{
                $('#'+'-'+key).prop('checked', false);
            }

            $('#'+'_'+key).val(value);
        });
        var image = data.image;
        validatFile(image, 'file-2');

    });
}
/**
 * { function_description }
 *
 * @param      {string}  image   The image
 * @param      {string}  id      The identifier
 */
function validatFile(image, id)
{
    if (image != null) 
        {
            var url = './././img/avatar/' + image;
            // destroy fileimput previous
            $('#'+id).fileinput('destroy');
            addImage(url, id, image);
        }
}
/**
 * Adds an image.
 *
 * @param      {<type>}  url       The url
 * @param      {string}  id        The identifier
 * @param      {<type>}  namefile  The namefile
 */
function addImage(url, id, namefile) 
{
    $("#"+id).fileinput
    ({
        initialPreview: [url],
        initialPreviewAsData: true,
        initialPreviewConfig: 
            [
                {caption: namefile},
            ],
        showCaption: false,
        showRemove: false,
        showUpload: false,
        showBrowse: false,
        overwriteInitial: true,
        browseOnZoneClick: true,
        initialCaption: namefile
    });
}
/**
 * Shows the data.
 *
 * @param      {<type>}  url     The url
 */
function showData(url)
{
    $.get(url, function(data)
    {
        $.each(data, function(key, value) 
        {
            console.log(key);
            $('#'+'-'+key).val(value);
        });
        var image = data.image;
        validatFile(image, 'file-3');
    });
}
/**
 * Shows the data.
 *
 * @param      {<type>}  url     The url
 */
function showDataPayment(url)
{
    $.get(url, function(data)
    {
        // console.log(data)
        $.each(data[0], function(key, value) 
        {
            console.log(key);
            $('#'+'-'+key).val(value);
        });

        var response = ""
        
        $.each(data[1], function(key, value) 
        {
         var type = ""   
         if (value.type == 1) {
            type = "ABONO"
         }else{
            type = "PAGO TOTAL"
         }
            response += "<tr>"
            response += "<td>"+value.id+"</td>"
            response += "<td>"+value.amount+"$</td>"
            response += "<td>"+type+"</td>"
            response += "<td>"+value.created_at+"</td>"
            response += "</tr>"
        });

      
        $('#pay').html(response)
       
      
    });
}
/**
 * { function_description }
 * @param     {string}  url The url
 */
function modal(url)
{
    var form = $('.form'); //seleciona el formulario
    form.attr('action',url); //agrega url en el action
    form.attr('method', 'POST'); //agrega url en el action
    $("#guardarRegistro")[0].reset();
    $('#myModal').modal('show');
}
/**
 * { function_description }
  * @param      {string}  id      The identifier
 */
function inputClear(id)
{
    $('.'+id+'_span').empty();
    $('#'+id).removeClass("is-invalid");
}


function dataTableExport(title, columns) {
    $('#example2').DataTable( {
        lengthChange: true,
        lengthMenu:[10,25,50,100],
        dom: "<'row'<'col-sm-12 col-md-2'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-6'f>>t<ip>",
        buttons: [
            {
                extend: 'excel',
                title: title,
                text: '<img src="http://localhost/Manager/public/img/excel-ico.png" alt="" heigth= ""/> Export Excell',
                titleAttr: 'Excel',
                exportOptions: {
                    columns: columns
                }

            }
        ],
    } );
}
//Funcion que solo permite introducir n煤meros//
 //===========================================//
 function soloNum(e) {
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = " 0123456789";
     especiales = "8-37-39-46";

     tecla_especial = false
     for (var i in especiales) {
         if (key == especiales[i]) {
             tecla_especial = true;
             break;
         }
     }
     if (letras.indexOf(tecla) == -1 && !tecla_especial) {
         return false;
     }
 }
/**
 * Funcion combo box: agrega data a combos dependientes
 * @param {valor a comparar} val 
 * @param {route del controlador y funcion} route 
 * @param {slelect resecptor de data} select
 */
 function comboBoxCustomer(route) {
    $.get(route, function (data) {
        var n = data.length;
        if(n > 0){
            $.each(data, function(key, value){
                $('#_supplier_bank_id').empty().append("<option value =" + value.id + ">" + value.bank_name + "</option>");
                $('#_customer_bank_id').empty().append("<option value =" + value.id + ">" + value.bank_name + "</option>");
            });
        }
        else{
            $('#_supplier_bank_id').empty().append("<option value =''>Sin Resultados</option>");
            $('#_customer_bank_id').empty().append("<option value =''>Sin Resultados</option>");
        }
    });
 }
 
/**
 * 
 * @param {valor a comparar} id 
 * @param {route del controlador} route 
 * @param {campo receptor 1} r1 
 * @param {campo receptor 2} r2 
 */
function comboBox(id,route,r1,r2) {
        $.get(route + '/' + id, function (data) {
        // console.log(data);
        if(data){
            $.each(data, function(key, value){
                $('#' + r1).empty().append("<option value =" + key + ">" + value + "</option>");
                $('#' + r2).empty().append("<option value =" + key + ">" + value + "</option>");
            });
        }
        else{
            $('#' + r1).empty().append("<option value =''>Sin Resultados</option>");
            $('#' + r2).empty().append("<option value =''>Sin Resultados</option>");
        }
    });
 }
 