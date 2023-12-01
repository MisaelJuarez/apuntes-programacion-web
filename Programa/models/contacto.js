const { Schema, model } = require("mongoose");

const contactoSchema = new Schema({
    nombre: {
        type: String, 
        required: true
    },
    email: {
        type: String, 
        required: true
    },
    telefono: {
        type: String, 
        required: true
    }
});

module.exports = model("Contacto",contactoSchema);