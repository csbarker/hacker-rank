# https://www.hackerrank.com/challenges/py-set-difference-operation/problem
n = int(raw_input())
list1 = raw_input().split()

b= int(raw_input())
list2 = raw_input().split()

a = set(list1).difference(list2)

print len(a)