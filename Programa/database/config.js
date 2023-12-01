const { default: mongoose } = require("mongoose"); // Importaciones en ES5

const conexion = async() => {
    try {
        await mongoose.connect("mongodb+srv://Misael:MisaelZKR22@cluster0.6izxmca.mongodb.net/agenda");
        console.log("Se conecto al mongoDB Atlas");
    } catch (error) {
        throw new Error("Error al conectarse al mongoDB Atlas");
    }
}
//esportaciones en ES5
module.exports = conexion;