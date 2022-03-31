const express = require('express')
const server = express()
const PORT = 8080
// const HOST = '0.0.0.0'

server.get('/apiget', ((req, res) => {
    res.json({
        "key": "value",
    })
}))
server.listen(PORT)
console.log(`Running on http://localhost:${PORT}`)