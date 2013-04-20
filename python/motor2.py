import RPi.GPIO as io
from time import sleep

io.setmode(io.BCM)

power = 10
frecv = 500

m1_en = 4
m1_p1 = 17
m1_p2 = 22

m2_en = 25
m2_p1 = 23
m2_p2 = 24

io.setup(m1_en, io.OUT)
io.setup(m1_p1, io.OUT)
io.setup(m1_p2, io.OUT)

io.setup(m2_en, io.OUT)
io.setup(m2_p1, io.OUT)
io.setup(m2_p2, io.OUT)

io.output(m1_en, 1)
io.output(m2_en, 1)

io.output(m1_p1, 0)
#io.output(m1_p2, 1)
p11 = io.PWM(m1_p2, frecv)
p11.start(power)

io.output(m2_p1, 0)
#io.output(m2_p2, 1)
p21 = io.PWM(m2_p2, frecv)
p21.start(power)

sleep(1)

p11.stop()
p21.stop()

io.cleanup()
