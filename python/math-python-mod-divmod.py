# https://www.hackerrank.com/challenges/python-mod-divmod/problem
n, m = int(raw_input()), int(raw_input())

for i in range(0,3):
    print [n//m, n%m, divmod(n,m)][i]