import RPi.GPIO as GPIO
import time

LED_ID = [7,11,13,15,37]

def init():
    GPIO.setmode(GPIO.BOARD)
    for led in LEDS:
        GPIO.setup(LED_ID, GPIO.OUT)

def set_state(new_state, led_count):
    for i in range(0, led_count):
        GPIO.output(LEDS[i], new_state)

def cleanup():
    GPIO.cleanup()


