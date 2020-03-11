// Use
const express = require('express')
const router = express.Router()

router.get('/users', (req, res) => {
    console.log("Users route...")

    res.render('index', { title: 'Hey', message: 'Hello there!' })
    
    res.end()
});

module.exports = router