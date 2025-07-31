import requests

url = "https://zenopay.com/api/payments/checkout/"
headers = {
    "x-api-key": "YOUR_API_KEY",
    "Content-Type": "application/json"
}

payload = {
    "amount": 500,
    "currency": "USD",
    "redirect_url": "https://yourwebsite.com/thank-you",
    "buyer_email": "user@example.com",
    "buyer_name": "John Doe",
    "buyer_phone": "0680900380"
}

response = requests.post(url, json=payload, headers=headers)
print(response.json())
