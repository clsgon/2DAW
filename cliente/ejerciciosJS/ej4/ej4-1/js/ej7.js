class Food_product
{
    constructor (code, foodName, price) {
        this.code = code;
        this.foodName = foodName;
        this.price = price;
    }

    toString()
    {
        document.write("<h3>" + this.foodName + "</h3>");
        document.write(" - Código del producto: " + this.code + "<br> - Precio del producto: " + this.price);
    }
}

var rice = new Food_product(123, "Arroz Blanco", 12);

rice.toString();