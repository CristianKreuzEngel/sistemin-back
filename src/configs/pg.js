const {Pool} = require('pg')

const pool = new Pool({
    user: 'admin',
    host: 'db-benzin',
    database: 'benzinDB',
    password: '123456',
    port: 5432,
})

module.exports = {query: (text, params) => pool.query(text, params)} 