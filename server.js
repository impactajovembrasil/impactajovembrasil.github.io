const express = require('express');
const app = express();
const routes = require('./routes');

//config
//body
app.use(express.urlencoded({
    extended: false
}));
app.use(express.json());
//

app.use(routes);
app.use(express.static('./public'));



app.listen(3000, () => console.log('server is running!'));