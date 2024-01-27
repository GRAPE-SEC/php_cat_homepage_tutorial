''' req_goback.py '''
import requests

url = 'http://grapenet.iptime.org:9028/goback.php'

response = requests.get(url)

print(response)
print(response.text)