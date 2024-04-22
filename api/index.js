const express = require('express');
const axios = require('axios');
const cors = require('cors')
require('dotenv').config()

const app = express();
const PORT = 3000;
app.use(express.json())
app.use(cors())
const API_KEY = process.env.API_KEY;
const NEWS_API_URL = 'https://newsapi.org/v2/everything';
const today = new Date()
const sevendays = new Date(today)
sevendays.setDate(today.getDate() - 7);

const currentDate = today.toISOString().split('T')[0];
const previous = sevendays.toISOString().split('T')[0];

// Route to fetch data from NewAPI
app.get('/news/:query', async (req, res) => {
  console.log(currentDate)
  console.log(previous)
  try {
    const query = req.params.query;
    const response = await axios.get(`${NEWS_API_URL}?q=${query}&from=${currentDate}&to=${previous}&language=en&apiKey=${API_KEY}`);
    const data = response.data;
    res.json(data);
  } catch (error) {
    console.error('Error fetching news:', error);
    res.status(500).json({ error: 'Failed to fetch news' });
  }
});

// Start Server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});