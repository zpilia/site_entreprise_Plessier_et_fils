const ejs = require("ejs");
const express = require("express");
const path = require ("path");
const port = process.env.APP_PORT;
const app = express();
const { Sequelize, DataTypes, Op } = require("sequelize");
const validator = require("email-validator");

app.set("view", path.join(__dirname, "view"));
app.set("view engine", "ejs");



const contact = sequelize.define(
    "contact",
    {

    }

);