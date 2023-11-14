<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
            let nombres = $("#nombres").val()
            let apellidos = $("#apellidos").val()
            let telefono = $("#telefono").val()
            let fecha = $("#fecha").val()
            let hora = $("#hora").val()
            let IDmedico = $("#IDmedico").val()

            if (nombres == '' || apellidos == '' || telefono == '' || fecha == '' || hora == '') {
                Swal.fire({
                title: "Hay compos que estan vacios",
                text: "Porfavor llena todos los compos del formulario",
                icon: "warning"
                });
            } else if(telefono.length != 10){
                Swal.fire({
                title: "Numero Incorrecto",
                text: "Tu numero de telefono debe contener 10 digitos",
                icon: "warning"
                });
            } else {
                $.ajax({
                    data: {
                        nombres,
                        apellidos,
                        telefono,
                        fecha,
                        hora,
                        IDmedico
                    },
                    url: "./app/models/process/create.process.php",
                    type: "POST",
                    success: (res) => {
                        Swal.fire({
                            title: 'Contacto agregado',
                            text: "El contacto fue agregado con exito!",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = "./read"
                            }
                        })
                    },
                    error: (err) => {
                        console.log(err, "la peticion tuvo un error")
                    }
                })
            }   
        })
    })
</script>