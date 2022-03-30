// var route = document.querySelector("[name=route]").value;
var urlSolicitud = "/contactanos";
new Vue({
    http: {
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector("#token")
                .getAttribute("value"),
        },
    },
    el: "#contacto",
    data: {
        subject: "",
        nombre: "",
        correo: "",
        telefono: "",
        mensaje: "",
    },
    methods: {
        enviarEmail() {
            if (
                this.subject != "" &&
                this.nombre != "" &&
                this.correo != "" &&
                this.telefono != "" &&
                this.mensaje != ""
            ) {
                Swal.fire({
                    title: "No podrás revertir este cambio!,¿Estás seguro de Enviarlo?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, aceptar",
                    cancelButtonText: "No, cancelar",
                }).then((result) => {
                    if (result.value) {
                        var solicitud = {
                            subject: this.subject,
                            nombre: this.nombre,
                            correo: this.correo,
                            telefono: this.telefono,
                            mensaje: this.mensaje,
                        };
                        this.$http
                            .post(urlSolicitud, solicitud)
                            .then(function (json) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: "¡Guardado exitosamente!",
                                    showConfirmButton: true,
                                    // timer: 1500,
                                });
                                this.limpiar();
                                // console.log(json);
                            })
                            .catch(function (json) {
                                Swal.fire({
                                    icon: "error",
                                    title: "¡Ha ocurrido un error!",
                                    text: "¡Su mensaje no pudo enviarse, pongase en contacto directamente con el email de la empresa!",
                                    showConfirmButton: true,
                                });
                            });
                    }
                });
            }else{
                Swal.fire({
                    icon: "error",
                    title: "¡Ha ocurrido un error!",
                    text: "¡No deje campos vacíos!",
                });
            }
        },
        limpiar(){
            this.subject = "";
            this.nombre = "";
            this.correo = "";
            this.telefono = "";
            this.mensaje = "";
        }
    },
});
