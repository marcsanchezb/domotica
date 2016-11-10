#!/usr/bin/env python

#Se Importa Gpio
import RPi.GPIO as GPIO

#Se indica que se va utilizar la nomeclatura BCM
GPIO.setmode(GPIO.BCM)

#Se indica el puerto que se va utilizar, y que es de salida
GPIO.setup(18, GPIO.OUT)
GPIO.output(18, True)
