#!/usr/bin/env python

#Se importa Gpio
import RPi.GPIO as GPIO

#Se indica que se va utilizar la nomeclatura BCM
GPIO.setmode(GPIO.BCM)

#Se indica el puerto que se va utilizar, y que es de salida
GPIO.setup(19, GPIO.OUT)
GPIO.output(19, False)


