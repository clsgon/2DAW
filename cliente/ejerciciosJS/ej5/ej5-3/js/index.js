function CheckMail(mail)
{
    let mailSize = mail.length;
    let at = mail.split("@");
    let dot = mail.split(".");
    let i = 0;

    if (mail == at || mail == dot)
        return (0);
    if (mail[mailSize - 1] == '@' || mail[0] == '@')
        return (0);
    if (mail[mailSize - 1] == '.' || mail[0] == '.')
        return (0);

    while (mail[i] != '@')
    {
        if (mail[i] == '.')
            return (0);
        i += 1;
    }

    i = 0;
    while (mail[i])
    {
        if (mail[i] == '@')
        {
            if (mail[i + 1] == '.' || mail[i - 1] == '.')
                return 0;
        }
        i += 1;
    }

    let count = 0;
    i = 0;
    while (mail[i] != ".")
        i += 1;
    i += 1;
    while (mail[i])
    {
        count += 1;
        i += 1;
    }
    if (count > 3)
        return (0);
    return (1);
}

function CheckDni(dni, d_letra){
    let tabla = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"]
    let modulo = parseInt(dni) % 23;

    let letra = tabla[modulo];
    if (letra.toLocaleLowerCase() == d_letra.toLocaleLowerCase())
        return 1
    else
        return 0
}


function CheckForm() {
    let dni = document.getElementById("dni")
    let letra = document.getElementById("letra")
    let d_red = document.getElementById("d_rojo");
    let name = document.getElementById("nom")
    let n_red = document.getElementById("n_rojo")
    let surname = document.getElementById("ape")
    let s_red = document.getElementById("a_rojo")
    let email = document.getElementById("email")
    let e_red = document.getElementById("e_rojo")
    let mes = ""

    if (!dni.value)
    {
        mes += "\t - El campo dni no puede ser vacío\n"
        d_red.style.color = "red";
    }
    else if (!CheckDni(dni.value, letra.value))
    {
        mes += "\t - El DNI y la Letra no coinciden\n"
        d_red.style.color = "red";
    }
    else
        d_red.style.color = "lightgreen";
    if (!name.value)
    {
        mes += "\t - El campo nombre no puede ser vacío\n"
        n_red.style.color = "red";
    }
    else
        n_red.style.color = "lightgreen";
    if (!surname.value)
    {
        mes += "\t - El campo apellidos no puede ser vacío\n"
        s_red.style.color = "red";
    }
    else
        s_red.style.color = "lightgreen";
    if (!email.value)
    {
        mes += "\t - El campo email no puede ser vacío\n"
        e_red.style.color = "red";
    }
    else if (CheckMail(email.value) == 0)
    {
        mes += "\t - El correo no es correcto\n"
        e_red.style.color = "red";
    }
    else
        e_red.style.color = "lightgreen";
    if (mes == "")
        return true
    else
    {
        alert(mes)
        return false
    }
}

function ValidaCalles(){
    let pro = document.getElementById("provincia")

    pro.disabled = false
}

function validaFichero(){
    let file = document.getElementById("archivo")
    let comp = document.getElementById("comprimido")
    let enc = document.getElementById("encriptado")
    let text = document.getElementById("texto")
    if(file.value)
    {
        comp.disabled = false
        enc.disabled = false
        text.disabled = false
        text.required = true
    }
}