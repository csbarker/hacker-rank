# https://www.hackerrank.com/challenges/capitalize/problem
def capitalize(string):
    return ' '.join([st.capitalize() for st in string.split(' ')])

if __name__ == '__main__':
    string = raw_input()
    capitalized_string = capitalize(string)
    print capitalized_string