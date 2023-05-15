from flask import Flask, request
import time
import led_control

app = Flask(__name__)

led_control.init()

@app.route("/on", methods=["POST"])
def on():
    json = request.get_json() 
    print(json) 
    seconds = json["seconds"]
    led_control.set_state(True) 
    time.sleep(seconds) 
    led_control.set_state(False)
    return "ok"
