
<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let id = $("#id").val();
            let nombres = $("#nombres").val();
            let apellidos = $("#apellidos").val();
            let telefono = $("#telefono").val();
            let email = $("#email").val();

            $.ajax({
                data: {
                    id,
                    nombres,
                    apellidos,
                    telefono,
                    email
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
        })
    })
</script>