# https://www.hackerrank.com/challenges/collections-counter/problem
import collections

shoes_count = int(raw_input())
shoes = collections.Counter(map(int, raw_input().split()))
customer_count = int(raw_input())

income = 0

for i in range(customer_count):
    size, price = map(int, raw_input().split())
    if shoes[size]: 
        income += price
        shoes[size] -= 1

print income