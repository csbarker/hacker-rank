# https://www.hackerrank.com/challenges/py-set-intersection-operation/problem
s1 = int(input())
sl1 = set(map(int,input().split()))

s2 = int(input())
sl2 = set(map(int,input().split()))

print (len(sl1.intersection(sl2)))