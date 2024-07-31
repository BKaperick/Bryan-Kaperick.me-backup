import json
import os
import datetime

for file in os.listdir("./new/"):
    d = {"title": ""}
    with open("poems.json", "r+") as fw:
        poems = json.load(fwrite)
        poems['new_' + datetime.utcnow().strftime('%Y%m%d_%H%M%S')] = d
        fw.seek(0)
        json.dump(poems, fw, indent=4)
        fw.truncate()
        


