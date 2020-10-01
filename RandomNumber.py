import numpy as np
import os
import sys

def usage():
    print("Usage\n python RandomNumber.py <number of random numbers to generate> <range min> <range max>")
    exit();

args = sys.argv
if(len(args)!=4):
    usage()
else:
    for i in range(int(args[1])):
        print(np.random.randint(int(args[2]),int(args[3])+1), end=" ")
    print()

