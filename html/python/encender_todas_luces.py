#!/usr/bin/env python

#Se importa Gpio
import RPi.GPIO as GPIO

#Se indica que se va utilizar la nomeclatura BCM
GPIO.setmode(GPIO.BCM)

#Se indica el puerto que se va utilizar, y que es de salida
GPIO.setup(12, GPIO.OUT) #Luz Sala
GPIO.setup(17, GPIO.OUT) #Luz Cocina
GPIO.setup(18, GPIO.OUT) #Luz Dormitorio
GPIO.setup(19, GPIO.OUT) #Luz Comedor
GPIO.setup(20, GPIO.OUT) #Luz Jardin
GPIO.setup(21, GPIO.OUT) #Luz Garaje

GPIO.output(12, True) #Luz Sala
GPIO.output(17, True) #Luz Cocina
GPIO.output(18, True) #Luz Dormitorio
GPIO.output(19, True) #Luz Comedor
GPIO.output(20, True) #Luz Jardin
GPIO.output(21, True) #Luz Garaje
