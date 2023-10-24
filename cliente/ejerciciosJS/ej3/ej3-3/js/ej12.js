let mail = prompt("pon una dirección de correo electronico: ");

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

if (!CheckMail(mail))
    document.write("El correo no es válido");
else
    document.write("El correo es válido");