var express = require("express");
var bodyParser = require('body-parser');

var connection = require('./config');
var app = express();

var authenticateController = require('./controllers/authenticatecontroller');
var registerController = require('./controllers/registercontroller');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.get('/', function(req, res) {
    res.sendFile(__dirname + "/" + "index.html");
})

app.get('/login.html', function(req, res) {
    res.sendFile(__dirname + "/" + "login.html");
})
app.post('/api/register', registerController.register);
app.post('/api/authenticate', authenticateController.authenticate);

console.log(authenticateController);
app.post('/controllers/register-controller', registerController.register);
app.post('/controllers/authenticate-controller', authenticateController.authenticate);
app.listen(8012);
