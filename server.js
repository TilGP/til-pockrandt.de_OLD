const express = require('express');
const res = require('express/lib/response');
const app = express();

var router = express.Router();

router.get('/', (req, res) => {
    res.redirect('index');
})

router.get('*', function (req, res) {
    res.render('layout.ejs', {url: req.url});
})

app.set('view-engine', 'ejs');

app.use('*/static', express.static('public'));

app.use(router);

app.listen(3000);