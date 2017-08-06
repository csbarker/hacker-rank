# https://www.hackerrank.com/challenges/py-if-else/problem
if __name__ == '__main__':
    n = int(raw_input())
    mod = n % 2
    
    if mod > 0:
        print('Weird')
    elif mod == 0 and (2<= n <=5):
        print('Not Weird')
    elif mod == 0 and (6<= n <=20):
        print('Weird')
    elif mod == 0 and n > 20:
        print('Not Weird')