
<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let id = $("#id").val();
            let nombres = $("#nombres").val();
            let apellidos = $("#apellidos").val();
            let telefono = $("#telefono").val();
            let fecha = $("#fecha").val();
            let hora = $("#hora").val();
            let IDmedico = $("#IDmedico").val();

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
                        id,
                        nombres,
                        apellidos,
                        telefono,
                        fecha,
                        hora,
                        IDmedico
                    },
                    url: "./app/models/process/update.process.php",
                    type: "POST",
                    success: () => {
                        Swal.fire({
                            title: 'Contacto actualizado',
                            text: "Actualizaste el contacto con exito!",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = "./read"
                            }
                        })
                    },
                    error: () => {
                        Swal.fire({
                            title: 'Contacto no actualizado',
                            text: "No actualizaste el contacto correctamente!",
                            icon: 'error',
                            confirmButtonColor: '#d33',
                            confirmButtonText: 'Ok!'
                        })
                    }
                })
            }

        })
    })
</script>