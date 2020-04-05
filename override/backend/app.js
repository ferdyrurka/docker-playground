const express = require('express');
const os = require('os');
const app = express();
const port = 80;

app.get('/', (req, res) => res.send(
    JSON.stringify({title: "Hello World", content: "Hello world in docker swarm"})
));
app.get('/info', (req, res) => res.send(
    JSON.stringify({hostname: os.hostname(), platform: os.platform(), networkInfo: os.networkInterfaces()})
));

app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`));