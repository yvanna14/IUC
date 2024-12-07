const express = require("express");
const morgan = require("morgan");

//require('dotenv').config();
//require('./dbConnect');




const app = express();
//yvannangong13
//Yvanna14

app.use(express.static('public'));
app.use(morgan("dev"));

app.set("views", "./views");
app.set("view engine", "ejs");

app.get("/", (req, res) => {
  console.log(req.url);
  res.render("index", { message: "hello motherfucker" });
});

app.get("/contact", (req, res) => {
  console.log(req.url);
  res.render("index", { message: "hello motherfucker" });
});

app.get("/about", (req, res) => {
  console.log(req.url);
  res.render("index", { message: "hello motherfucker" });
});

const PORT = 3000;

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});

app.get("*", (req, res) => {
  res.status(404).render("index", { message: "Not Found" });
});
