import re

def is_username_valid(user):

    regex_user = '^(?=.*^[a-zA-Z])(?=.*[0-9])[.*a-zA-Z0-9]{5,9}$'
    print('username :', user)
    print('is_username_valid',bool(re.search(regex_user, user)))

def is_password_valid(passw):
    regex_pass = '((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.*[=]).{8,})'
    print('password :', passw)
    print('is_password_valid',bool(re.search(regex_pass, passw)))


is_username_valid('1Diana')