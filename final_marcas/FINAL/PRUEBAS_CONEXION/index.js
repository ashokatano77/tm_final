const express = require('express');
const app = express();
const pgp = require('pg-promise')();
const db = pgp('postgres://inesjoder:horse@localhost:5432/llmm');

app.use(express.static('public'));
app.use(express.json());

app.post('/register', (req, res) => {
  const { username, password } = req.body;

  db.none('INSERT INTO usuario (password, usuario) VALUES ($1, $2)', [ password, username])
  .then(() => {
    res.sendStatus(200);
  })
  .catch(error => {
    console.error('Error en el registro:', error);
    res.sendStatus(500);
  });
});

app.listen(3000, () => {
  console.log('Servidor escuchando en el puerto 3000');
});
