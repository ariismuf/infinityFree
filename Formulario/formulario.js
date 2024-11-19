class Persona {
    constructor(nombre, dni, edad) {
        this.nombre = nombre;
        this.dni = dni;
        this.edad = edad;
    }
}

document.getElementById('persona').addEventListener('submit', function(event) {
    event.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const dni = document.getElementById("dni").value;
    const edad = document.getElementById("edad").value;

    const persona = new Persona(nombre, dni, edad);

    const url = `resultado.php?nombre=${encodeURIComponent(persona.nombre)}&dni=${encodeURIComponent(persona.dni)}&edad=${encodeURIComponent(persona.edad)}`;

    console.log(url);

});