const SERVER_PORT = 8120;
var express = require('express');
var fs=require('fs');
const FILE_NAME = "result.txt";


//Allow Cross-Orgin requests
var allowCrossDomain = function (req, res, next) {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods','GET,PUT,POST,DELETE');
    res.header('Access-Control-Allow-Headers','Content-Type');
    next();
};


    var app = express();
    app.use(express.bodyParser());
    app.use(allowCrossDomain);
    app.use('/scripts', express.static(__dirname + '/scripts'));
    app.use('/css', express.static(__dirname + '/css'));
    app.use(express.static(__dirname));
    
    //now start the application server
    var server = app.listen(SERVER_PORT, function () {
        console.log('Listening on port %d',
                server.address().port);
    });


    app.post('/addNumbers', function (request, response) {

        console.log("Process being executed in " + __Public_html);
    
        //extract the data
        var num1 = parseFloat(request.body.one);
        var num2 = parseFloat(request.body.two);
    
        console.log('Adding numbers: ' + one + " + " + two);
        var sum = one + two;
        console.log('Sum is : ' + sum);
    
    });
    