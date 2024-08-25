<?php
import requests

# API anahtarınızı buraya yerleştirin
api_key = "YOUR_API_KEY"

# API uç noktasını buraya yerleştirin
url = "https://api.gemma2.com/v1/generate"

# İstek verilerini oluşturun
data = {
    "prompt": "Merhaba dünya!",
    "api_key": api_key
}

# İsteği gönderin
response = requests.post(url, json=data)

# Yanıtı kontrol edin
if response.status_code == 200:
    # Yanıt verilerini alın
    response_data = response.json()

    # Yanıt verilerinden metni alın
    text = response_data["text"]

    # Metni yazdırın
    print(text)
else:
    # Hata mesajını yazdırın
    print("Hata:", response.status_code)
