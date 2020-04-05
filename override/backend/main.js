const express = require('express');
const os = require('os');
const app = express();
const port = 80;

app.get('/', (req, res) => res.send(
    JSON.stringify({title: "Hello World", content: "main.js working"})
));

app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`));