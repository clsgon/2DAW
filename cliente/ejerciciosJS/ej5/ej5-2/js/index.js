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

function Check() {
        const MIN_CHARS = 10;
        const MIN_WHITE_SPACES = 2;
        const MIN_AGE = 16;
        const MAX_AGE = 65;
        const MIN_TEL_NUMS = 9;
        const NUM_TEL_START = '9';

        let name = document.getElementById("name");
        let age = document.getElementById("age");
        let tel = document.getElementById("tel");
        let mail = document.getElementById("mail");
        let count = 0;
        let mess = "";

        for(let i = 0; i < name.value.length; i += 1)
            if (name.value[i] == " ")
                count += 1

        if (name.value.length < MIN_CHARS || count < MIN_WHITE_SPACES)
        {
            mess += "\t - El nombre tiene que tener al menos 10 caracteres y 2 espacios mínimo\n"
            name.value = null
            name.style.border = "solid 2px red";
        }
        else
        {
            name.style.border = "solid 2px lightgreen";
        }
        if (parseInt(age.value) < MIN_AGE || parseInt(age.value) > MAX_AGE)
        {
            mess += "\t - La edad tiene que estar entre 16 y 65 años\n"
            age.value = "\0"
        }
        if (tel.value.length < MIN_TEL_NUMS || tel.value[0] != NUM_TEL_START)
        {
            mess += "\t - El campo teléfono ha de tener 9 dígitos, y el primero por la izquierda ha de ser un 9\n"
            tel.value = null
        }
        if(!CheckMail(mail.value))
        {
            mess += "\t - El correo no es correcto\n"
            mail.value = null
        }
        if(!mess)
        {
            mess += "Los datos son correctos"
            alert(mess)
            return true
        }
        else
        {
            alert(mess)
            return false
        }
}