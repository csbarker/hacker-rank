# https://www.hackerrank.com/challenges/symmetric-difference/problem
a = raw_input()
M = set(raw_input().split())
b = raw_input()
N = set(raw_input().split())
output = sorted((M-N).union(N-M), key = int)

for i in output:
    print i