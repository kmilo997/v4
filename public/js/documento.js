$(document).ready(function() {
    $('#btn-venta').on('click', function() {
        if ($('#codigo').val() == '') {
            

            toastr.error('El campo de codigo esta vacio.', 'Venta!.')
            return false;
        }

        for (i = 0; i < listcodigo.length; i++) {
            if (listcodigo[i] == $('#codigo').val()) {
                toastr.warning('No se puede agregar el mismo codigo.', 'Venta!.')
                return false;
            }
        }

        addRowSale();

    });
});


var listcodigo = new Array();


/*************    Adicionar filas de venta    ************/
function addRowSale() {

    $.ajax({
        url: $('#url_traerproducto').val() + '/' + $('#codigo').val(),
        dataType: 'json',
        type: 'GET',
        success: function(data) {
            console.log(data);
            if (data.code === 200) {
                $(data.datos).each(function(index, el) {
                    var totaIva = parseFloat(el.precio_venta) * parseFloat(0) / 100;
                    var total = parseFloat(el.precio_venta) + totaIva;
                    var row = '<tr id="fila' + el.id + '">\n\
    <td getCompraById(><input readonly="readonly" style="border:none;text-align:center"  type="text" id="codigo' + el.id + '" name="codigo[]" value="' + el.id + '"></td>\n\
    <td align="center"><input min="1" required style="width:50px;border:none;text-align:center"  type="number" id="cantidad' + el.id + '" name="cantidad[]" onkeyup="totalizar(' + el.id + ');isNumberKey(event)" value="1"></td>\n\
    <td align="center"><input style="border:none;text-align:center" readonly="readonly"   type="text" id="nombre' + el.id + '" name="nombre[]" value="' + el.nombre + '"></td>\n\
    <td align="center"><input readonly="readonly" style="width:80px;border:none;text-align:center" type="text" id="precio_u' + el.id + '" name="precio_u[]" value="' + el.precio_venta + '"></td>\n\
    <td align="center"><input readonly="readonly"  style="width:100px;border:none;text-align:center" type="text" id="sub_t' + el.id + '" name="sub_t[]" value="' + el.precio_venta + '"></td>\n\
\n\
    <td align="center"><input readonly="readonly" style="width:80px;border:none;text-align:center" type="text" step="0.01" id="total' + el.id + '" name="total[]" value="' + total + '"></td>\n\
    <td align="center"><a style="text-align:center" id="btn-borrar' + el.id + '" class="btn btn-danger btn-xs" onclick="deleteRow(' + el.id + ')" ><i class="fa fa-trash" ></i></a></td>\n\
    </tr>';

                    $('#tbl-venta tbody').append(row);
                    var c = parseInt($('#venta').val()) + 1;
                    $('#venta').val(c);
                    $('#totalVenta').val(parseFloat($('#totalVenta').val()) + total);
                    listcodigo.push($('#codigo').val());
                
                });

            } else {
                if (data.code === 600) {
                    toastr.error('data.error');
                } else {
                    toastr.error('error');

                }

            }
        },
        error: function(jqXHR, textStatus, errorThrown) {

            data = {
                error: jqXHR + ' - ' + textStatus + ' - ' + errorThrown
            }
            $('#modal' + 1).modal('toggle');
            $('body').append('<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">ERROR EN TRANSACCIÓN</h4></div><div class="modal-body">' + data.error + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button></div></div></div></div>');
            $('#modalError').modal({ show: true });
        }
    });

}

/************ Totaliza todos los valores de la fila agregada ************/
function totalizar(id) {

    var cantidad = $('#cantidad' + id).val();

    if (cantidad != '') {

        var precio = $('#precio_u' + id).val();

        var subtotal = parseFloat(precio).toFixed(2) * parseFloat(cantidad).toFixed(2);
        $('#sub_t' + id).val(subtotal);

        var totalIva = (subtotal * parseFloat($('#iva' + id).val()).toFixed(2)) / 100;
        var total = subtotal ;
        $('#total' + id).val(total);


        var totalVenta = 0;
        var fila = $("#tbl-venta > tbody > tr").each(function(index, element) {
            var idfila = element.id.replace("fila", "#total"); /*Debe ser este*/
            totalVenta += parseInt($(idfila).val());

        });
        $('#totalVenta').val(totalVenta);
    } else {
        $('#sub_t' + id).val(0);
        $('#total' + id).val(0);
    }


}
/*--------- Eliminar fila por medio del id-------------*/
function deleteRow(id, e) {

    if ($('#fila' + id).remove()) {
        file = $('#venta').val() - 1;
        filec = $('#compra').val() - 1;
        $('#venta').val(file)
        $('#compra').val(filec)
        $('#codigo').val('');
        var totalVenta = 0;
        var fila = $("#tbl-venta > tbody > tr").each(function(index, element) {
            var idfila = element.id.replace("fila", "#total"); /*Debe ser este*/
            totalVenta = parseInt($(idfila).val());

        });
        $('#totalVenta').val(totalVenta);

        listcodigo.pop();


        if (isNaN(totalVenta)) {
            $('#totalVenta').val(0);
        } else {
            $('#totalVenta').val(e);

        }
        

        $('#totalVenta').val(totalVenta);

        for (i = 0; i < listcodigo.length; i++) {
            if (listcodigo[i] == id) {

                listcodigo.splice(i);
                return false;

            }
        }
    }
}




