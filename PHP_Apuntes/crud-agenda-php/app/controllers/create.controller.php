<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
            let nombres = $("#nombres").val()
            let apellidos = $("#apellidos").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            
            $.ajax({
                data: {
                    nombres,
                    apellidos,
                    telefono,
                    email
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
        })
    })
</script>