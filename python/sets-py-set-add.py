# https://www.hackerrank.com/challenges/py-set-add/problem
num = raw_input()
dist = set()

for i in range(int(num)):
    dist.add(raw_input())
    
print len(dist)