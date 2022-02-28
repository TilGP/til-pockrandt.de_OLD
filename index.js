const express = require('express');
const res = require('express/lib/response');
const app = express();

var router = express.Router();
    
router.get('/', function (req, res, next) {
    res.render('index.ejs');
})

app.set('view-engine', 'ejs');

app.use(express.static(__dirname + '/public'));

app.use(router);

app.listen(3000);