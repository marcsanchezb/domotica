#!/usr/bin/env python

#Se importa Gpio
import RPi.GPIO as GPIO

#Se indica que se va utilizar la nomeclatura BCM
GPIO.setmode(GPIO.BCM)

#Se indica el puerto que se va utilizar, y que es de salida
GPIO.setup(12, GPIO.OUT) #Luz Sala
GPIO.setup(17, GPIO.OUT) #Luz Cocina
GPIO.setup(18, GPIO.OUT) #Luz Dormitorio

GPIO.output(12, False) #Luz Sala
GPIO.output(17, False) #Luz Cocina
GPIO.output(18, False) #Luz Dormitorio



