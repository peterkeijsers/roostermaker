// Use
const express = require('express')
const router = express.Router()

router.get('/', (req, res) => {
    console.log("Index route...")

    res.render('index', { title: 'Hey', message: 'Hello there!' })
    
    res.end()
});

module.exports = router