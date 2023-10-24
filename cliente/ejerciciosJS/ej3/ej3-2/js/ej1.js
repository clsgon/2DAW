var num = parseInt(prompt("Dime un número: "));
document.write("<table style='border-collapse: collapse;'>");
for(var i = 1; i <= 10; i += 1)
{
    document.write("<tr>");
    document.write("<td style='border:solid 1px black;padding: 10px'>"+ num +"</td>");
    document.write("<td style='border:solid 1px black;padding: 10px'>X</td>");
    document.write("<td style='border:solid 1px black;padding: 10px'>"+ i +"</td>");
    document.write("<td style='border:solid 1px black;padding: 10px'>=</td>");
    document.write("<td style='border:solid 1px black;padding: 10px'>"+ (num * i) +"</td>");
    document.write("</tr>");

}
document.write("</table>");