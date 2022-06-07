const ejs = require("ejs");
const express = require("express");
const path = require ("path");
const port = process.env.APP_PORT;
const app = express();
const { Sequelize, DataTypes, Op } = require("sequelize");
const validator = require("email-validator");

app.set("view", path.join(__dirname, "view"));
app.set("view engine", "ejs");

const sequelize = new Sequelize("transports_plessier", process.env.DB_USER, process.env.DB_PASSWORD, {
    
    });

const Contact = sequelize.define(
    "Contact",
    {
        idContact: {type : DataTypes.INTEGER, primaryKey: true},
        nom : DataTypes.TEXT,
        mail : DataTypes.TEXT,
        objet : DataTypes.TEXT,
        message : DataTypes.TEXT
    },
    {
        tableName: "Contact",
        timestamps: false,
        synchronize: true,
    }
);

document.addEventListener("click",function (e){
    if(e.target.classList.contains("gallery-item")){
        document.querySelector(".modal-img").src = e.target.getAttribute("src");
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
})