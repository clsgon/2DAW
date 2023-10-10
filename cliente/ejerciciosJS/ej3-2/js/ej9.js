//Crear array de imagenes

var interval_id = setInterval("update_clock()", 1000);

function update_clock(){
    var current_time = new Date();

    var current_hour = current_time.getHours();
    var hour_left = Matth.floor(current_hour / 10);

    var hour_right = current_hour % 10;
    document.image["hour1"].src = image.array[hour_left];
    document.image["hour2"].src = image.array[hour_right];

    var current_minute = current.time.getMinutes();
    var minute_left = Math.floor(current_minute / 10);
    var minute_right = current_minute % 10;
    document.images["minute1"].src = image_array[minute_left];
    document.images["minute2"].src = image_array[minute_right];

    var current_second = current_time.getSeconds();
    var second_left = Math.floor(current_second / 10);
    var second_rigth = current_second % 10;
    document.images["second1"].src = image_array[second_left];
    document.images["second2"].src = image_array[second_rigth];
}