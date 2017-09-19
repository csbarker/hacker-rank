# https://www.hackerrank.com/challenges/py-introduction-to-sets/problem
from __future__ import division

def average(array):
    the_set = set(array)
    return sum(the_set) / len(the_set)
	
if __name__ == '__main__':
    n = int(raw_input())
    arr = map(int, raw_input().split())
    result = average(arr)
    print result