let ascii = new Array(256);

for(let i = 0; i < ascii.length; i += 1)
    ascii[i] = String.fromCharCode(i);
document.write("<table>");
for(let i = 0; i < ascii.length; i += 1){
    if ((i) % 16 == 0)
        document.write("<tr>");
    document.write("<td style='border:1px solid black'>" + ascii[i] + "</td>");
    if ((i + 1) % 16 == 0)
        document.write("</tr>");
}
document.write("</table>");