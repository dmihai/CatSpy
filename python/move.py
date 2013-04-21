import RPi.GPIO as io
from time import sleep
import sys

io.setmode(io.BCM)

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

#print '1' if sys.argv[1]==1 else '0';

io.output(m1_p1, 1 if sys.argv[1]=='1' else 0)
io.output(m1_p2, 1 if sys.argv[1]=='2' else 0)

io.output(m2_p1, 1 if sys.argv[2]=='1' else 0)
io.output(m2_p2, 1 if sys.argv[2]=='2' else 0)

sleep(5)

io.output(m1_en, 0)
io.output(m2_en, 0)

io.cleanup()
