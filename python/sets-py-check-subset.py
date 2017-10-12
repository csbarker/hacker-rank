# https://www.hackerrank.com/challenges/py-check-subset/problem
for _ in range(int(raw_input())):
    a, A = int(input()), set(raw_input().split())
    b, B = int(input()), set(raw_input().split())
    print(A.issubset(B))