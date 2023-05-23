# pi = 4 * (1/1 - 1/3 + 1/5 - 1/7 + 1/9...)
import math

def calculations(number):
    x = 1
    z = 1
    pi = 0
    for y in range(0, int(number)):
        pi = pi + (z / x)
        x = x + 2
        z = z * -1
    return pi * 4


iterations = input("Please enter the number of iterations: ")

try:
    float(iterations)
except ValueError:
    print("You entered text. Please enter a positive integer.")
else:
    if float(iterations) < 0:
        print("You entered a negative number. Please enter a positive integer.")
    else:
        iterations = math.trunc(float(iterations))
        print("The value of pi after", iterations, "iterations is:", calculations(iterations))
