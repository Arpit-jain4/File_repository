import webbrowser as web
from datetime import datetime
import os, random

helloIntent = ['hi','hello','hey','yo','hie']
while True:
    usermsg = raw_input("Enter your message: ")
    if usermsg in helloIntent:
        print("Hello User")
        
    elif usermsg.startswith("open"):
        x=usermsg.split()[1]
        web.open("{}.tech".format(x))
        
    elif usermsg =="time please":
       currentTime= datetime.now().time()
       print("Time is ",currentTime)

    elif usermsg == "play music":
        path=r'G:\Saransh-Data\Saransh\SONGS\New folder (2)\audios'
        os.chdir(path)
        for root, folders, files in os.walk(path):
            file = random.choice(files)
            os.startfile(file)
        
    elif usermsg =="bye":
         print("Bye")
         break
    else:
        print("I don't understand")
        
