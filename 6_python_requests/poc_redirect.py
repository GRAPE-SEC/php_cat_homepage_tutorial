import requests

url = 'http://grapenet.iptime.org:9028/index.php'
data = {'username': 'babo', 'password': 'babo1234'}

response = requests.post(url, data=data, allow_redirects=False)

print(response.headers)
print(response.status_code)