# https://www.hackerrank.com/challenges/py-set-symmetric-difference-operation/problem
set_one_count = int(input())
set_one = set(map(int,input().split()))

set_two_count = int(input())
set_two = set(map(int,input().split()))

print(len(set_one.symmetric_difference(set_two)))