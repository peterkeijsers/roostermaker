const express = require('express')
const app = express()
const indexRoute = require('./routes/index')
const usersRoute = require('./routes/users')

// Set ejs template engine
app.set('view engine', 'ejs')
app.set('views', './views')

// Serve Static content from 'public' directory
app.use(express.static('public', {}))

// Set routes
app.use(indexRoute)
app.use(usersRoute)

app.listen(5000)