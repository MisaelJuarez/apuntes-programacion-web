const { default: mongoose } = require("mongoose"); // Importa el módulo mongoose.

const conexion = async() => { // Define una función llamada conexion.
    // Intenta conectarse a la base de datos MongoDB Atlas.
    try {
        // Parámetros de la función connect()
        await mongoose.connect("mongodb+srv://Misael:MisaelZKR22@cluster0.6izxmca.mongodb.net/agenda");
        // Imprime un mensaje de éxito si la conexión se realizó correctamente.
        console.log("Se conecto al mongoDB Atlas");
    } catch (error) {
        // Lanza un error si la conexión no se pudo realizar
        throw new Error("Error al conectarse al mongoDB Atlas");
    }
}

// Exporta la función conexion
module.exports = conexion;