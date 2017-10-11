# https://www.hackerrank.com/challenges/the-minion-game/problem
def minion_game(string):
    vowels = 'AEIOU'
    kevin = 0
    stuart = 0
    leng = len(string)
    
    for i in range(leng):
        if string[i] in vowels:
            kevin += (leng-i)
        else:
            stuart += (leng-i)

    if kevin > stuart:
        print "Kevin", kevin
    elif kevin < stuart:
        print "Stuart", stuart
    else:
        print "Draw"
		
if __name__ == '__main__':
    s = raw_input()
    minion_game(s)