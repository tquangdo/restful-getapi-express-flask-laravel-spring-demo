from flask import Flask, jsonify
# python3 -m flask run

app=Flask(__name__)

return_json={
    "key": "value",
}

@app.route('/apiget')
def _apiGet():
    return jsonify(return_json)