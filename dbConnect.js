const mongoose = require('mongoose');
const MONGODB_URI = 'mongodb+srv://yvannangong13:Yvanna14@cluster0.t0wun.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';

if (!MONGODB_URI) throw new Error('MONGODB_URI is missing');

mongoose.connect(MONGODB_URI, {
    dbName: 'finly',
    bufferCommands: false,
    });
    console.log('Connected to MongoDB');
