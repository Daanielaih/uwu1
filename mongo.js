const mongoose = require('mongoose');
mongoose.connect(http://3.137.186.179/, {useNewUrlParser: true, useUnifiedTopology: true});

// Verificar la conexión
const db = mongoose.connection;
db.on('error', console.error.bind(console, 'Error de conexión a MongoDB:'));
db.once('open', function() {
  console.log('Conexión exitosa a MongoDB');
});
