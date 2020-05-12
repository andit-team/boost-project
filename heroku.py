from os import rename

rename('.env_copy', 'testtemp.txt')
rename('.env', '.env_copy')
rename('testtemp.txt', '.env')