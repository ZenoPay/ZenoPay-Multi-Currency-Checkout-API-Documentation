const axios = require('axios');

const headers = {
  'x-api-key': 'YOUR_API_KEY',
  'Content-Type': 'application/json'
};

const data = {
  amount: 500,
  currency: 'USD',
  redirect_url: 'https://yourwebsite.com/thank-you',
  buyer_email: 'user@example.com',
  buyer_name: 'John Doe',
  buyer_phone: '0680900380'
};

axios.post('https://zenopay.com/api/payments/checkout/', data, { headers })
  .then(response => console.log(response.data))
  .catch(error => console.error(error.response.data));
