import RPi.GPIO as GPIO
import time

LED_ID = 7

GPIO.setmode(GPIO.BOARD)
GPIO.setup(LED_ID, GPIO.OUT)

for i in range(5):
	GPIO.output(LED_ID, True)
	time.sleep(1)
	GPIO.output(LED_ID,False)
	time.sleep(1)

GPIO.cleanup()
