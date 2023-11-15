class Robot{
    constructor(name, type, state){
        this.name = name
        this.type = type
        this.state = state
    }

    Info(){
        document.write("<img src='./img/"+this.name+".jpg' alt='imgRobot'>")
        document.write("<br>");
        document.write("<p class='robotName'>Mensafono del Robot:<p>")
        document.write("<p>"+this.name.toUpperCase()+"</p>")
        document.write("<p>Tipo del robot:"+this.type+"</p>")
        document.write("<p>Estado del robot(0/1):"+this.state+"</p>")
    }

    Wait(){
        document.write("<p>"+this.name.toUpperCase()+"->Ponte en modo espera</p>")
        document.write("<p>")
        document.write(this.name.toUpperCase() + ":¡Iniciando modo espera! ... ¡En modo espera!")
        document.write("</p>");
        this.state = 0
    }

    Start(){
        document.write("<p>"+this.name.toUpperCase()+"->Activate</p>")
        document.write("<p>")
        document.write(this.name.toUpperCase() + ":Saliendo modo espera! ... Activado!")
        document.write("</p>")
        this.state = 1
    }

    Help(){
        document.write("<p>"+this.name.toUpperCase()+"->Ayuda</p>")
        document.write("<p>")
        if (this.state == 1)
            document.write(this.name.toUpperCase() + ":¡Vengo inmediatamente!")
        else if (this.state == 0)
            document.write(this.name.toUpperCase() + ":Piiip");
        document.write("</p>")
    }
}

r2d2 = new Robot("r2d2", "traductor", 0)
c3po = new Robot("c3po", "arregla-todo", 0)
