<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
</head>
<body>
    <div id="info">
        <div>
            <table class="default">
                <h2>Zapateria los 2 hermanos</h2>
                <tr>
                    <td>Categorias</td>

                    <td>Servicio</td>
                </tr>
                <tr>
                    <td>
                        <select name="select1" id="select1" onchange="producto(this.id, 'select2')">
                                <option value=""></option>
                                <option value="ATT / Unefon">ATT / Unefon</option>
                                <option value="Entretenimiento">Entretenimiento</option>
                                <option value="Mas recarga">Mas recarga</option>
                                <option value="Maz tiempo">Maz tiempo</option>
                                <option value="Movistar">Movistar</option>
                                <option value="Movistar Datos">Movistar Datos</option>
                                <option value="Musica">Musica</option>
                                <option value="Servicios públicos">Servicios públicos</option>
                                <option value="Telcel">Telcel</option>
                                <option value="Telcel Datos">Telcel Datos</option>
                                <option value="Telefonia, TV, Internet">Telefonia, TV, Internet</option>
                                <option value="Ventas por Catalogo">Ventas por Catalogo</option>
                                <option value="Virgin">Virgin</option>
                                <option value="Weex">Weex</option>
                            </select>

                    </td>

                    <td>
                        <!-- services -->
                        <select name="select2" id="select2">

                            </select>
                    </td>
                </tr>
                <tr>
                    <td>Fecha</td>

                    <td>No. Ticket:</td>
                </tr>
                <tr>
                    <td>
                        <!-- fecha -->
                        <input type="date" name="fecha" id="fecha">
                    </td>
                    <td>
                        <!-- no. ticket -->
                        <input type="number" name="ticket" id="ticket">
                    </td>
                </tr>
                <tr>
                    <td>No. Cuenta:</td>
                    <td>Costo</td>
                </tr>

                <tr>
                    <td>
                        <!-- no. Cuenta -->
                        <input type="number" name="cuenta" id="cuenta"></td>
                    <td>
                        <!-- costo -->
                        <input type="number" name="costo" id="costo" onkeypress="calcular()"></td>
                </tr>
                <tr>
                    <td>Comision</td>
                    <td>Número de autorizacion</td>
                </tr>
                <tr>
                    <td>
                        <!-- comision -->
                        <input type="" name="comision" id="comision" value="" disabled>
                    </td>
                    <td>
                        <!-- no. de autorizacion -->
                        <input type="number" name="autorizacion" id="autorizacion">
                    </td>
                </tr>
            </table>
            <button onclick="getData()">Generar</button>
        </div>


        <div id="export">
            <span>
                 <label>Fecha: <span id="fechaa"></span></label>
            </span>
            <br>
            <span>
                <label>No. Ticket: <span id="tickett"></span></label>
            </span>
            <br>
            <span>
                <label>Servicio: <span id="servicioo"></span></label>
            </span>
            <br>
            <span>
                <label>No. Cuenta: <span id="cuentaa"></span></label>
            </span>
            <br>
            <span>
                <label>Costo: <span id="costoo"></span></label>
            </span>
            <br>
            <span>
                <label>Comision: <span id="comisionn"></span></label>
            </span>
            <br>
            <span>
                <label>Número de autorizacion: <span id="autorizacionn"></span></label>
            </span>
        </div>

    </div>
    <button onclick="generarPDF()">Imprimir</button>

    <!-- <script>

    </script> -->
    <!-- <script>
        function generarPDF() {
            var doc = new jsPDF()
            var element = document.getElementById('#export');
            // html2pdf(element);
            // var div = document.querySelector('#export')
            // doc.fromHTML(div, 20, 20)
            doc.save("s.pdf ")
        }
    </script> -->
    <script src="js/services.js"></script>
    <script src="js/jquery-3.5.1.js "></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js "></script> --}}

</body>
</html>
