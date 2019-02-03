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
         required: true
      },
      password: {
         required: true,
      }
   },
   messages: {
      usuario: {
         required: "El Usuario es obligatorio"
      },
      password: {
         required: "La Contraseña es obligatoria"
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
         required: "El Nombre es obligatorio"
      },
      edad: {
         number: "ingrese una edad válida",
         required: "La edad es obligatoria"
      }
   }
});