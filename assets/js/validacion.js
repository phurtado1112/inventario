$('#login').validate({
   submitHandler: function (form) {
      form.submit();
   },
   errorClass: "text-danger",
   errorElement: "span",
   highlight: function (element, errorClass, validClass) {
      $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
   },
   unhighlight: function (element, errorClass, validClass) {
      $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
   },
   rules: {
      usuario: {
         required: true,
         email: true
      },
      password: {
         required: true,
      }
   },
   messages: {
      usuario: {
         required: 'El Usuario es obligatorio',
         email: 'El usuario debe ser una cuenta de correo'
      },
      password: {
         required: 'La Contraseña es obligatoria'
      }
   }
});

$('#articulo').validate({
   submitHandler: function (form) {
      form.submit();
   },
   errorClass: "text-danger",
   errorElement: "span",
   highlight: function (element, errorClass, validClass) {
      $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
   },
   unhighlight: function (element, errorClass, validClass) {
      $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
   },
   rules: {
      codigo: {
         required: true
      },
      nombre: {
         required: true
      },
      tamanio: {
         required: true,
         number: true
      },
      fecha_vencimiento: {
         required: true
      },
      costo: {
         required: true,
         number: true
      },
      ganancia: {
         required: true,
         number: true
      },
      precio: {
         required: true,
         number: true
      },
      cantidad_stock: {
         required: true,
         number: true
      },
      cantidad_bodega: {
         required: true,
         number: true
      }
   },
   messages: {
      codigo: {
        required: 'El Código es obligatorio'
      },
      nombre: {
         required: 'El Nombre es obligatorio'
      },
      tamanio: {
         number: 'Ingrese un Tamaño válido',
         required: 'El Tamaño es obligatorio'
      },
      fecha_vencimiento: {
         required: 'La Fecha de Vencimiento es obligatoria'
      },
      costo: {
         required: 'El Costo es obligatorio',
         number: 'Ingrese un Costo válido'
      },
      ganancia: {
         required: 'La Ganancia es obligatoria',
         number: true
      },
      precio: {
         required: "El Precio es obligatorio",
         number: true
      },
      cantidad_stock: {
         required: 'La Cantidad de Stock es obligatoria',
         number: true
      },
      cantidad_bodega: {
         required: 'La Cantidad en Bodega es obligatoria',
         number: true
      }
   }
});