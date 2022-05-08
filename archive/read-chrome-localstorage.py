# See https://plyvel.readthedocs.io/en/latest/
import plyvel
db = plyvel.DB('/mnt/c/Users/righettod/AppData/Local/Google/Chrome/User Data/Default/Local Storage/leveldb')
for key, value in db:
    if "righettod" in str(key):
        print("{0} : {1}".format(key, value)) 
db.close()