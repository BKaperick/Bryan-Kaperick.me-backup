import re
import os
import json
with open('photos_old.html', 'r') as f:
    with open('photos.json', 'r+') as fwrite:
        photos = json.load(fwrite)
        content = "".join(f.readlines()).split("\n\n")
        count = 0
        for photo_elem in content:
            count += 1
            m = re.search(r'<img src="../../../static/(.*)">', photo_elem)
            oldpath = "../../../static/" + m.group(0)
            rawpath = "./photos/raw/" + m.group(0)
            m_en = re.search(r'<figcaption>(.*)</figcaption>', photo_elem)
            en,year_str = m_en.group(0).split(' ~ ')
            
            desc_words = en.split(" ")
            longest_word = max(desc_words, key=len)
            d = {
                "rawpath": rawpath,
                "year": int(year_str.strip()),
                "order_in_year": 1,
                "en": en,
                "people": [],
                }
            key = longest_word + str(year) + "_" + count
            photos[key] = d
            
            os.rename(oldpath, "." + rawpath)
        
        fwrite.seek(0)
        json.dump(photos, fwrite, indent=4)
        fwrite.truncate()

        
    
