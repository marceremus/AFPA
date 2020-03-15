const express = require("express");
const users = require("../users");

const router = express.Router();

router.get("/users", function(req, res) {

    res.json( users.list() );

});

router.post("/users", function(req, res) {

    res.json( users.add(req.body) );

});

router.get("/user/:id", function(req, res) {

    res.json( users.get(req.params.id) );

});

router.put("/user/:id", function(req, res) {

    req.body.id = req.params.id;

    res.json( users.update(req.body) );

});

router.delete("/user/:id", function(req, res) {

    res.json( users.delete(req.params.id) );

});

module.exports = router;