/*
1 - abrir terminal en la carpeta del proyecto (npm init)
2 - instalar dependencias (npm i express mongoose)
3 - con cada proyecto (npm i -D nodemon) o global (npm i -g nodemon)  
4 - creamos dos script en package.json  "start": "node index.js",
                                        "dev": "nodemon index.js"
*/

const conexion = require("./database/config"); // importacion ES5
const express = require("express");
const Contacto = require("./models/contacto");
const { obtenerContactos, actualizarContacto, crearContacto, eliminarContacto } = require("./controllers/contacto");

const app = express();

conexion();

app.use(express.json());

app.get("/", obtenerContactos);

app.put("/:id", actualizarContacto);

app.post("/", crearContacto);

app.delete("/:id", eliminarContacto);

app.listen(3000, () => {
    console.log("Servidor corriendo en puerto 3000");
});