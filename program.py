# pi = 4 * (1/1 - 1/3 + 1/5 - 1/7 + 1/9...)


def calculations(number):
    x = 1
    z = 1
    pi = 0
    for y in range(1, int(number) + 1):
        pi = pi + (z / x)
        x = x + 2
        z = z * -1
    return pi * 4


iterations = input()
try:
    int(iterations)
except ValueError:
    print("You entered text. Please enter a positive integer.")
else:
    if int(iterations) < 0:
        print("You entered a negative number. Please enter a positive integer.")
    else:
        print(calculations(iterations))