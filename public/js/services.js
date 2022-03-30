// generar pdf 
function generarPDF() {
    const element = document.getElementById("export");
    html2pdf()
        .from(element)
        .save();

};
// ticket,servicio,cuenta,total,comision,autorizacion
function getData() {
    var fecha = document.getElementById("fecha").value;
    var ticket = document.getElementById("ticket").value;
    var servicio = document.getElementById("select2").value;
    var cuenta = document.getElementById("cuenta").value;
    var costo = document.getElementById("costo").value;
    var comision = document.getElementById("comision").value;
    var autorizacion = document.getElementById("autorizacion").value;
    // console.log(fecha, ticket, servicio, cuenta, total, comision, autorizacion);
    document.getElementById("fechaa").innerHTML = fecha;
    document.getElementById("tickett").innerHTML = ticket;
    document.getElementById("servicioo").innerHTML = servicio;
    document.getElementById("cuentaa").innerHTML = cuenta;
    document.getElementById("costoo").innerHTML = costo;
    document.getElementById("comisionn").innerHTML = comision;
    document.getElementById("autorizacionn").innerHTML = autorizacion;



};

function calcular() {

    var op1 = 10;
    var op2 = 12;
    var op3 = 15;
    var op4 = 20;
    var op5 = 25;


    var c = document.getElementById("costo").value;
    if (c != "") {


        if (c <= 200) {
            a = document.getElementById("comision").value = op1;
            // console.log(a);
        } else if (c > 200 && c < 500) {
            a = document.getElementById("comision").value = op2;
            // console.log(a);
        } else if (c >= 500 && c < 1000) {
            a = document.getElementById("comision").value = op3;
            // console.log(a);
        } else if (c >= 1000 && c < 2000) {
            a = document.getElementById("comision").value = op4;
            // console.log(a);
        } else if (c >= 2000) {
            a = document.getElementById("comision").value = op5;
            // console.log(a);
        }
        // console.log("con valor");
    } else if (c === "") {
        console.log("sin costo")
    }


}

function producto(categoria, p) {
    var categoria = document.getElementById(categoria);
    var p = document.getElementById(p);

    p.innerHTML = "";
    if (categoria.value == "ATT / Unefon") {
        var optionArray = [
            "|", "ATT/ UNEFON 15 | ATT/ UNEFON 15", "ATT / UNEFON 20 | ATT / UNEFON 20", "ATT / UNEFON 30 | ATT / UNEFON 30",
            "ATT / UNEFON 50| ATT / UNEFON 50", "ATT / UNEFON 55 | ATT / UNEFON 55", "ATT / UNEFON 70 | ATT / UNEFON 70",
            "ATT / UNEFON 100 | ATT / UNEFON 100", "ATT / UNEFON 150 | ATT / UNEFON 150", "ATT / UNEFON 200 | ATT / UNEFON 200 ",
            "ATT / UNEFON 300 | ATT / UNEFON 300", "ATT / UNEFON 500 | ATT / UNEFON 500", "ATT / UNEFON 1000 | ATT / UNEFON 1000",
            "ATT / UNEFON 1200 | ATT / UNEFON 1200", "|"
        ];
    } else if (categoria.value == "Entretenimiento") {
        var optionArray = [
            "|", "NETFLIX $150 | NETFLIX $150", "NETFLIX $300 | NETFLIX $300", "BLIM 1 MES | BLIM 1 MES",
            "BLIM 3 MESES | BLIM 3 MESES", "BLIM 6 MESES | BLIM 6 MESES"
        ];
    } else if (categoria.value == "Mas recarga") {
        var optionArray = [
            "|", "MAS RECARGA 10 | MAS RECARGA 10 ", "MAS RECARGA 20 | MAS RECARGA 20", "MAS RECARGA 30 | MAS RECARGA 30",
            "MAS RECARGA 50 | MAS RECARGA 50", "MAS RECARGA 60 | MAS RECARGA 60", "MAS RECARGA 70 | MAS RECARGA 70",
            "MAS RECARGA 80 | MAS RECARGA 80", "MAS RECARGA 100 | MAS RECARGA 100", "MAS RECARGA 120 | MAS RECARGA 120",
            "MAS RECARGA 150 | MAS RECARGA 150", "MAS RECARGA 200 | MAS RECARGA 200", "MAS RECARGA 250 | MAS RECARGA 250",
            "MAS RECARGA 300 | MAS RECARGA 300", "MAS RECARGA 400 | MAS RECARGA 400", "|"
        ];
    } else if (categoria.value == "Maz tiempo") {

        var optionArray = [
            "|", "MAZ TIEMPO 10 | MAZ TIEMPO 10", "MAZ TIEMPO 20 | MAZ TIEMPO 20", "MAZ TIEMPO 30 | MAZ TIEMPO 30", "MAZ TIEMPO 50 | MAZ TIEMPO 50",
            "MAZ TIEMPO 60 | MAZ TIEMPO 60", "MAZ TIEMPO 100 | MAZ TIEMPO 100", "MAZ TIEMPO 120 | MAZ TIEMPO 120", "MAZ TIEMPO 150 | MAZ TIEMPO 150",
            "MAZ TIEMPO 200 | MAZ TIEMPO 200", "MAZ TIEMPO 300 | MAZ TIEMPO 300", "MAZ TIEMPO 500 | MAZ TIEMPO 500", "|"
        ];
    } else if (categoria.value == "Movistar") {

        var optionArray = [
            "|", "MOVISTAR 10 | MOVISTAR 10", "MOVISTAR 20 | MOVISTAR 20", "MOVISTAR 30 | MOVISTAR 30", "MOVISTAR 40 | MOVISTAR 40",
            "MOVISTAR 50 | MOVISTAR 50", "MOVISTAR 60 | MOVISTAR 60", "MOVISTAR 70 | MOVISTAR 70", "MOVISTAR 80 | MOVISTAR 80", "MOVISTAR 100 | MOVISTAR 100",
            "MOVISTAR 120 | MOVISTAR 120", "MOVISTAR 140 | MOVISTAR 140", "MOVISTAR 150 | MOVISTAR 150", "MOVISTAR 200 | MOVISTAR 200",
            "MOVISTAR 250 | MOVISTAR 250", "MOVISTAR 300 | MOVISTAR 300", "MOVISTAR 400 | MOVISTAR 400", "MOVISTAR 500 | MOVISTAR 500", "|"
        ];
    } else if (categoria.value == "Movistar Datos") {
        var optionArray = [
            "|", "$10 P. Int. 100 MB 500 MB Wa 1 dia | $10 P. Int. 100 MB 500 MB Wa 1 dia",
            "$20 P. Int. 200 MB 500MB WhatsApp 2 dias | $20 P. Int. 200 MB 500MB WhatsApp 2 dias",
            "$30 Internet 300 MB 3 dias 500MB  Facebook Twittery WhatsApp | $30 Internet 300 MB 3 dias 500MB  Facebook Twittery WhatsApp",
            "$50 Internet 600 MB 5 dias 25GB  Facebook Twittery WhatsApp | $50 Internet 600 MB 5 dias 25GB  Facebook Twittery WhatsApp",
            "$100 Internet 1500MB 15 dias 2.5GB  Facebook Twittery WhatsApp | $100 Internet 1500MB 15 dias 2.5GB  Facebook Twittery WhatsApp",
            "$150 Internet 2400 MB 25 dias 25GB  Facebook Twitter y WhatsApp | $150 Internet 2400 MB 25 dias 25GB  Facebook Twitter y WhatsApp",
            "$200 Internet 3.6GB 30 dias Facebook Twittery WhatsApp | $200 Internet 3.6GB 30 dias Facebook Twittery WhatsApp",
            "$10 YouTube Netflix 1 dia  500 MB | $10 YouTube Netflix 1 dia  500 MB",
            "$20 YouTube Netflix 1 dias  1000 MB | $20 YouTube Netflix 1 dias  1000 MB",
            "$30 YouTube Netflix 3 dias 2000 MB | $30 YouTube Netflix 3 dias 2000 MB",
            "$50 YouTube Netflix 3 dias 3000 MB   | $50 YouTube Netflix 3 dias 3000 MB  ",
            "$10 N. Libre 250 MB 1 dia | $10 N. Libre 250 MB 1 dia",
            "$20 Navegacion libre 500 MB 2 dias | $20 Navegacion libre 500 MB 2 dias",
            "$30 Navegacion libre 750 MB 3 dias | $30 Navegacion libre 750 MB 3 dias",
            "$50 Navegacion libre 1250 MB 5 dias | $50 Navegacion libre 1250 MB 5 dias",
            "$100 Navegacion libre 2500 MB 15 dias | $100 Navegacion libre 2500 MB 15 dias",
            "$150 3500 MB Navegacion libre 25 dias | $150 3500 MB Navegacion libre 25 dias",
            "$200 Navegacion libre 4500 MB 30 dias | $200 Navegacion libre 4500 MB 30 dias",
            "|"
        ];
    } else if (categoria.value == "Musica") {
        var optionArray = ["|", "SPOTIFY 100 | SPOTIFY 100", "SPOTIFY 250 | SPOTIFY 250", "SPOTIFY 500 | SPOTIFY 500", "|"];
    } else if (categoria.value == "Servicios públicos") {
        var optionArray = ["|", "INFONAVIT | INFONAVIT", "ADT | ADT", "NATURGY GAS NATURAL | NATURGY GAS NATURAL", "RECIBO CFE | RECIBO CFE", "|"];
    } else if (categoria.value == "Telcel") {
        var optionArray = [
            "|", "RECARGA TELCEL 10 | RECARGA TELCEL 10", "RECARGA TELCEL 20 | RECARGA TELCEL 20", "RECARGA TELCEL 30 | RECARGA TELCEL 30",
            "RECARGA TELCEL 50 | RECARGA TELCEL 50", "RECARGA TELCEL 80 | RECARGA TELCEL 80", "RECARGA TELCEL 100 | RECARGA TELCEL 100",
            "RECARGA TELCEL 150 | RECARGA TELCEL 150", "RECARGA TELCEL 200 | RECARGA TELCEL 200", "RECARGA TELCEL 300 | RECARGA TELCEL 300",
            "RECARGA TELCEL 500 | RECARGA TELCEL 500", "|"
        ];
    } else if (categoria.value == "Telcel Datos") {
        var optionArray = [
            "|",
            "Paq. ASL 20 Vig 1 dia 100MB de Int + 200MB de Redes Sociales | Paq. ASL 20 Vig 1 dia 100MB de Int + 200MB de Redes Sociales",
            "Paq. ASL 30 Vig 3 días 120MB de Int + 300MB de Redes Sociales | Paq. ASL 30 Vig 3 días 120MB de Int + 300MB de Redes Sociales",
            "Paq. ASL 50 Vig 7 días 400MB de Int + 500MB de Redes Sociales | Paq. ASL 50 Vig 7 días 400MB de Int + 500MB de Redes Sociales",
            "Paq. ASL 80 Vig 13 días 500MB de Int + 1GB de Redes Sociales | Paq. ASL 80 Vig 13 días 500MB de Int + 1GB de Redes Sociales",
            "Paq. ASL 100 Vig 15 días 1.3GB de Int + Redes Sociales ilimitadas | Paq. ASL 100 Vig 15 días 1.3GB de Int + Redes Sociales ilimitadas",
            "Paq. ASL 150 Vig 26 días 2GB de Int + Redes Sociales ilimitadas | Paq. ASL 150 Vig 26 días 2GB de Int + Redes Sociales ilimitadas",
            "Paq. ASL 200 Vig 30 días 3GB de Int + Redes Sociales ilimitadas | Paq. ASL 200 Vig 30 días 3GB de Int + Redes Sociales ilimitadas",
            "Paq. ASL 300 Vig 33 días 4GB de Int + Redes Sociales ilimitadas | Paq. ASL 300 Vig 33 días 4GB de Int + Redes Sociales ilimitadas",
            "Paq. ASL 500 Vig 33 días 6GB de Int + Redes Sociales ilimitadas | Paq. ASL 500 Vig 33 días 6GB de Int + Redes Sociales ilimitadas",
            "INT 20 Vig 1 día con 120MB de Int. y 200MB Redes Sociales | INT 20 Vig 1 día con 120MB de Int. y 200MB Redes Sociales",
            "INT 30 Vig 3 días con 150MB de Int + 300MB Redes Sociales | INT 30 Vig 3 días con 150MB de Int + 300MB Redes Sociales",
            "INT 50 Vig 7 días con 500MB de Int + 500MB Redes Sociales | INT 50 Vig 7 días con 500MB de Int + 500MB Redes Sociales",
            "INT 80 Vig 13 días con 700MB Int + 1GB Redes Sociales | INT 80 Vig 13 días con 700MB Int + 1GB Redes Sociales",
            "INT 100 Vig 15 días con 1.6GB de Int + Redes Sociales ilimitadas | INT 100 Vig 15 días con 1.6GB de Int + Redes Sociales ilimitadas",
            "INT 150 Vig 26 días con 2.5GB de Int + Redes Sociales ilimitadas | INT 150 Vig 26 días con 2.5GB de Int + Redes Sociales ilimitadas",
            "INT 200 Vig 30 días con 3.5GB de Int + Redes Sociales ilimitadas | INT 200 Vig 30 días con 3.5GB de Int + Redes Sociales ilimitadas",
            "INT 300 Vig 33 días Con 5GB de Int + Redes Sociales ilimitadas | INT 300 Vig 33 días Con 5GB de Int + Redes Sociales ilimitadas",
            "INT 500 Vig 33 días con 8GB de Int + Redes Sociales ilimitadas | INT 500 Vig 33 días con 8GB de Int + Redes Sociales ilimitadas",
            "|"
        ];
    } else if (categoria.value == "Telefonia, TV, Internet") {
        var optionArray = [
            "|",
            "FACTURA TELCEL | FACTURA TELCEL", "FACTURA MOVISTAR | FACTURA MOVISTAR", "FACTURA NEXTEL | FACTURA NEXTEL",
            "RECIBO AXTEL | RECIBO AXTEL", "RECIBO DISH | RECIBO DISH", "FACTURA ATT | FACTURA ATT", "RECIBO TELNOR | RECIBO TELNOR",
            "RECIBO MEGACABLE | RECIBO MEGACABLE", "RECIBO TELECABLE | RECIBO TELECABLE", "RECIBO STARTTV | RECIBO STARTTV",
            "RECIBO MAXCOM | RECIBO MAXCOM", "RECIBO GIGACABLE | RECIBO GIGACABLE", "RECIBO CABLEVISION/IZZI | RECIBO CABLEVISION/IZZI",
            "RECIBO CABLEMAS | RECIBO CABLEMAS", "MULTIMEDIOS CABLEVISION MONTERREY | MULTIMEDIOS CABLEVISION MONTERREY",
            "MULTIMEDIOS CABLEVISION SALTILLO | MULTIMEDIOS CABLEVISION SALTILLO", "RECIBO TOTAL PLAY | RECIBO TOTAL PLAY",
            "RECIBO SKYVeTV | RECIBO SKYVeTV", "RECIBO TELMEX | RECIBO TELMEX",
            "|"
        ];
    } else if (categoria.value == "Ventas por Catalogo") {
        var optionArray = [
            "|",
            "ARABELA | ARABELA", "AVON | AVON", "ILUSION | ILUSION", "JAFRA | JAFRA",
            "L-BEL | L-BEL", "NATURA | NATURA", "TUPERWARE | TUPERWARE", "YANBAL | YANBAL",
            "YVES ROCHER | YVES ROCHER", "|"
        ];
    } else if (categoria.value == "Virgin") {
        var optionArray = [
            "|",
            "VIRGIN 20 | VIRGIN 20", "VIRGIN 30 | VIRGIN 30", "VIRGIN 40 | VIRGIN 40", "VIRGIN 50 | VIRGIN 50",
            "VIRGIN 100 | VIRGIN 100", "VIRGIN 150 | VIRGIN 150", "VIRGIN 200 | VIRGIN 200", "VIRGIN 300 | VIRGIN 300",
            "VIRGIN 500 | VIRGIN 500", "|"
        ];
    } else if (categoria.value == "Weex") {
        var optionArray = [
            "|",
            "WEEX 10 | WEEX 10", "WEEX 50 | WEEX 50", "WEEX 30 | WEEX 30", "WEEX 20 | WEEX 20",
            "WEEX 500 | WEEX 500", "WEEX 200 | WEEX 200", "WEEX 100 | WEEX 100", "|"
        ];
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        p.options.add(newOption);
    }
}