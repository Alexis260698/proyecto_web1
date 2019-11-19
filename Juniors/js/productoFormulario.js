function crearProducto(){

            var nombre;
            nombre=document.getElementsByName("nombreCompleto");
             
            
            var obj = new producto(document.getElementById('nombre').value,
                                  document.getElementById('precio').value,
                                  document.getElementById('cantidad').value,
                                  document.getElementById('descripcion').value);


			alert("Producto" +obj.nombre+
                 "\n Precio: "+obj.precio +
                 "\n Cantiad: "+obj.cantidad+
                 "\nDescripcion: "+obj.descripcion);
		}
		function producto(nombre, precio , cantidad , descripcion){
			this.nombre= nombre;
			this.precio=precio
            this.cantidad=cantidad;
            this.descripcion=descripcion;

		}

        function cancelar(){
        	alert("CANCELANDO REGISTRO");
        }