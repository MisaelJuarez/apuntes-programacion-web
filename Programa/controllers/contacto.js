const Contacto = require("../models/contacto");

const obtenerContactos = async (req, res) => {
    const contactos = await Contacto.find({}); //obtiene todos los contactos de la base de datos

    res.json({
        msg: "Contactos Obtenidos con exito",
        contactos: contactos
    });
}

const crearContacto = async (req, res) => {
    const contacto = new Contacto(req.body);
    await contacto.save();

    res.json("Guardado con exito");
}

const actualizarContacto = async (req, res) => {
    const contactoID = req.params.id;

    await Contacto.findByIdAndUpdate(contactoID,req.body);

    res.json({
        msg: "Contacto actualizado con exito"
    });
}

const eliminarContacto = async (req, res) => {
    const contactoID = req.params.id;

    await Contacto.findByIdAndDelete(contactoID);

    res.json({
        msg: "Contacto eliminado con exito"
    });
}

module.exports = {
    obtenerContactos,
    crearContacto,
    actualizarContacto,
    eliminarContacto
}

 