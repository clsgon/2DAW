let elementName = new Array("Hydrogen", "Helium", "Lithium", "Beryllium", "Boron", "Carbon", "Nitrogen", "Oxygen", "Fluorine", "Neon", "Sodium", "Magnesium", "Aluminium", "Silicon", "Phosphorus", "Sulphur", "Chlorine", "Argon", "Potassium", "Calcium", "Scandium", "Titanium", "Vanadium", "Chromium", "Manganese", "Iron", "Cobalt", "Nickel", "Copper", "Zinc", "Gallium", "Germanium", "Arsenic", "Selenium", "Bromine", "Krypton", "Rubidium", "Strontium", "Yttrium", "Zirconium", "Niobium", "Molybdenum", "Technetium", "Ruthenium", "Rhodium", "Palladium", "Silver", "Cadmium", "Indium", "Tin", "Antimony", "Tellurium", "Iodine", "Xenon", "Caesium", "Barium", "Lanthanum", "Cerium", "Praseodymium", "Neodymium", "Promethium", "Samarium", "Europium", "Gadolinium", "Terbium", "Dysprosium", "Holmium", "Erbium", "Thulium", "Ytterbium", "Lutetium", "Hafnium", "Tantalum", "Tungsten", "Rhenium", "Osmium", "Iridium", "Platinum", "Gold", "Mercury", "Thallium", "Lead", "Bismuth", "Polonium", "Astatine", "Radon", "Francium", "Radium", "Actinium", "Thorium", "Protactinium", "Uranium", "Neptunium", "Plutonium", "Americium", "Curium", "Berkelium", "Californium", "Einsteinium", "Fermium", "Mendelevium", "Nobelium", "Lawrencium")
let elementSymbol = new Array("H", "He", "Li", "Be", "B", "C", "N", "O", "F", "Ne", "Na", "Mg", "Al", "Si", "P", "S", "Cl", "Ar", "K", "Ca", "Sc", "Ti", "V", "Cr", "Mn", "Fe", "Co", "Ni", "Cu", "Zn", "Ga", "Ge", "As", "Se", "Br", "Kr", "Rb", "Sr", "Y", "Zr", "Nb", "Mo", "Tc", "Ru", "Rh", "Pd", "Ag", "Cd", "In", "Sn", "Sb", "Te", "I", "Xe", "Cs", "Ba", "La", "Ce", "Pr", "Nd", "Pm", "Sm", "Eu", "Gd", "Tb", "Dy", "Ho", "Er", "Tm", "Yb", "Lu", "Hf", "Ta", "W", "Re", "Os", "Ir", "Pt", "Au", "Hg", "Tl", "Pb", "Bi", "Po", "At", "Rn", "Fr", "Ra", "Ac", "Th", "Pa", "U", "Np", "Pu", "Am", "Cm", "Bk", "Cf", "Es", "Fm", "Md", "No", "Lr")
let elementDate = new Array("1766", "1862", "1817", "1798", "1808", "Prehistoric", "1772", "1774", "1771", "1898", "1807", "1775", "1827", "1823", "1669", "Prehistoric", "1774", "1894", "1807", "1808", "1879", "1791", "1830", "1797", "1774", "Prehistoric", "1735", "1751", "Prehistoric", "16th Century", "1875", "1866", "~1250", "1817", "1826", "1898", "1861", "1790", "1794", "1789", "1801", "1778", "1937", "1844", "1803", "1803", "Prehistoric", "1817", "1863", "Prehistoric", "~1450", "1782", "1811", "1898", "1860", "1808", "1839", "1803", "1885", "1885", "1947", "1879", "1896", "1880", "1843", "1886", "1879", "1843", "1879", "1907", "1907", "1923", "1802", "1783", "1925", "1804", "1804", "16th Century", "Prehistoric", "Prehistoric", "1861", "Prehistoric", "1753", "1898", "1940", "1900", "1939", "1898", "1899", "1828", "1917", "1789", "1940", "1940", "1944", "1944", "1949", "1952", "1953", "1955", "1957", "1961", "1969")

function Info(){
    let docAtomicNumber = document.getElementById("atomicNumber")
    let docElemetName = document.getElementById("elementName")
    let docElemetDate = document.getElementById("elementDate")
    let docElemetSymbol = document.getElementById("elementSymbol")
    docElemetName.style.fontSize = "medium"
    docElemetName.style.width = "8%"
    docAtomicNumber.value = "";
    docElemetName.value = "";
    docElemetDate.value = "";
    let found = false

    for(let i = 0; i < elementSymbol.length; i += 1){
        if(docElemetSymbol.value == elementSymbol[i])
        {
            docAtomicNumber.value = i + 1
            docElemetName.value = elementName[i]
            docElemetDate.value = elementDate[i]
            found = true
            break;
        }
    }

    if (!found)
    {
        docElemetName.value = "Sorry, Unknown Symbol"
        docElemetName.style.fontSize = "11px"
        docElemetName.style.width = "11%"
    }
}