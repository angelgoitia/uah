$(document).ready(function(){
    $('#Productos').hide();

    $("#nav-link").click(function(){
        $('#home').show();
        $('#Productos').hide();
    });

    $("#nav-Productos").click(function(){
        $('#home').hide();
        $('#Productos').show();
    });

    $("#btn-create-producto").click(function(){
        $('#modalProductos').modal('show');
        $('#guardar').show();
        $('#eliminar').hide();
        $('#producto-status').val('new');
        $('#guardar').val('Agregar Producto');
    });

    $("#eliminar").click(function(){
        var productoname = $('#producto-name').val(name);
        alertify.confirm('Confirmar', "¿Deseas Eliminar el Producto?", function(){
            $('#modalProductos').modal('hide'); 
            $('#producto-status').val('remove');
            $('#formProductos').submit()
          }
          , function(){ 
            $('#modalProductos').modal('hide');
          }).set('labels', {ok:'SI', cancel:'NO'});
    });


});

function showModal(id,name,stock,precios,accion){
    $('#modalProductos').modal('show');
    $('#producto-id').val(id);
    $('#producto-name').val(name);
    $('#producto-stock').val(stock);
    $('#producto-precios').val(precios);
    $('#producto-status').val('update');

    if(accion == 1){
        $('#guardar').show();
        $('#eliminar').hide();
    }else{
        $('#eliminar').show();
        $('#guardar').hide();
    }
}

