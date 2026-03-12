make a function that uploads a pdf file to a server and returns the URL of the uploaded file
import requests
def upload_pdf(file_path, server_url):
    with open(file_path, 'rb') as file:
        files = {'file': (file_path, file, 'application/pdf')}
        response = requests.post(server_url, files=files)
        
    if response.status_code == 200:
        return response.json().get('url')
    else:
        raise Exception(f"Failed to upload file: {response.status_code} - {response.text}") 