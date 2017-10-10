# https://www.hackerrank.com/challenges/py-set-mutations/problem
m = int(raw_input())
A = set(map(int, raw_input().split(" ")))
n = int(raw_input())

for i in range(n):
    cmd, args = raw_input().split(" ")
    B = set(map(int, raw_input().split(" ")))
    eval('A.' + cmd + '(B)')

print sum(A)