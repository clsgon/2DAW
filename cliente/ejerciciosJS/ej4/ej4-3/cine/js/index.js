class Cinema{
    constructor(address, contact, taq, mail, parking, minus, dolby, film){
        this.address = address;
        this.contact = contact;
        this.taq = taq;
        this.mail = mail;
        this.parking = parking;
        this.minus = minus;
        this.dolby = dolby;
        this.film = film;
    }

    Saca_info_cine(){
        document.write("<nav>");
        document.write("<ul>");
        document.write("<li> Dirección: "+this.address+"</li>");
        document.write("<li> Contacto: "+this.contact+"</li>");
        document.write("<li> Taquilla: "+this.taq+"</li>");
        document.write("<li> Correo: "+this.mail+"</li>");
        document.write("<li> Parking: "+this.parking+"</li>");
        document.write("<li> Acceso Minusválidos: "+this.minus+"</li>");
        document.write("<li> Sonido: "+this.dolby+"</li>");
        document.write("</ul>");
        document.write("</nav>");
    }

    Mostrar_Peliculas(){
        for(let i = 0; i < film.length; i += 1){
            document.write("<div class='pelicula'>");
                document.write("<h4 id='h"+i+"'>" + this.film[i][1] + "</h4>");
                document.write("<div class='filmData'>");
                    document.write("<img src='" + this.film[i][10] + "' alt='foto-pelicula'>");
                    document.write("<div class='info'>");
                        document.write("<p>Género: " + this.film[i][4] + "</p>");
                        document.write("<p>Nacionalidad: " + this.film[i][3] + "</p>");
                        document.write("<p>Clasificación: " + this.film[i][5] + "</p>");
                    document.write("</div>");
                document.write("</div>");
            document.write("</div>");
            var enlace = document.getElementById('h' + i);
            enlace.addEventListener('click', () => {
              this.Info_pelicula(parseInt(this.film[i][0]) - 1);
            });
        }
    }

    Info_pelicula(num_peli){
        let newWin = window.open("./pages/info.html", "hello", "width=600,height=600");
        newWin.document.write("<div class='pelicula'>");
            newWin.document.write("<h4>" + this.film[num_peli][1] + "</h4>");
            newWin.document.write("<div class='filmData'>");
                newWin.document.write("<img src='" + this.film[num_peli][10] + "' alt='foto-pelicula'>");
                newWin.document.write("<div class='info'>");
                    newWin.document.write("<p>Nacionalidad: " + this.film[num_peli][2] + "</p>");
                    newWin.document.write("<p>Nacionalidad: " + this.film[num_peli][3] + "</p>");
                    newWin.document.write("<p>Género: " + this.film[num_peli][4] + "</p>");
                    newWin.document.write("<p>Clasificación: " + this.film[num_peli][5] + "</p>");
                    newWin.document.write("<p>Descripción: " + this.film[num_peli][6] + "</p>");
                    newWin.document.write("<p>Duración: " + this.film[num_peli][7] + "</p>");
                    newWin.document.write("<p>Actores: " + this.film[num_peli][8] + "</p>");
                    newWin.document.write("<p>Link Wikipedia: <a href=" + this.film[num_peli][9] + ">Wiki</a></p>");
                newWin.document.write("</div>");
            newWin.document.write("</div>");
        newWin.document.write("</div>");
    }
}
let film = new Array(3);


function Film(pid, title, director, nat, gender, pegi, desc, long, actors, link_wiki, link_image){
    let film = [
        pid,
        title,
        director,
        nat,
        gender,
        pegi,
        desc,
        long,
        actors,
        link_wiki,
        link_image
    ];
    return film;
}

film[0] = Film(1, "Transformers", "Michael Bay", "Americana", "Acción/Ciencia Ficción", "Pegi-13",
    "A long time ago, far away on the planet of Cyberton...", 144,
        "Shia LaBeouf, Megan Fox, Jhos Duhamel, Tyrese Gibson", "https://es.wikipedia.org/wiki/Transformers_(serie_cinematogr%C3%A1fica)",
            "./img/transformers.jpeg");

film[1] = Film(2, "Joshua", "George Ratliff", "Americana", "Terror", "Pegi-17",
    "Brad y Abby Cairn, aparentemente los padres perfectos, están celebrando el nacimiento de su segundo retoño, Lily. Su primer hijo, Joshua, no es un niño corriente. ", 144,
        "Sam Rockwell, Vera Farmiga, Celia Weston, Dallas Roberts", "https://en.wikipedia.org/wiki/Joshua_(2007_film)",
            "./img/joshua.jpg");

film[2] = Film(3, "Ratatouille", "Brad Bird", "Americana", "Animación/Comedia", "Pegi-3",
    "Remy es una rata que aprecia la buena comida y tiene un paladar bastante sofisticado. Su sueño es convertirse algún día en un gran chef francés a pesar de la oposición de su familia.", 144,
        "Lou Romano, Patton Oswalt, Will Arnett, Peter O'Toole", "https://es.wikipedia.org/wiki/Ratatouille_(pel%C3%ADcula)",
            "./img/ratatouille.jpeg");

let cine = new Cinema("Ave, Wiston Churchill Londres Reino Unido 452233", "809-724-4875", "", "cine@gmail.com", "Disponible, 400 plazas", "Si", "Dolby Digital Surround 7.1", film);