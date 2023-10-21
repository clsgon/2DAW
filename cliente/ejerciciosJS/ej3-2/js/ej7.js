var date = new Date();
var nameDay = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
var dateString = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
document.write("Hoy es " + nameDay[date.getDay()], ", " + dateString);