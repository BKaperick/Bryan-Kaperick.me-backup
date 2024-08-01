import re
import os
import json
with open('photos_old.html', 'r') as f:
    with open('photos.json', 'r+') as fwrite:
        photos = json.load(fwrite)
        content = "".join(f.readlines()).split("\n\n")
        count = 0
        for photo_elem in content:
            photo_elem = photo_elem.replace("\n", "")
            count += 1
            m = re.search(r'<img src="../../../static/(.*)">', photo_elem)
            oldpath = "../../../static/" + m.group(1)
            rawpath = "./photos/raw/" + m.group(1)
            m_en = re.search(r'<figcaption>(.*)</figcaption>', photo_elem)
            print(m_en.group(1))
            en,year_str = m_en.group(1).split(' ~ ')
            
            desc_words = en.split(" ")
            longest_word = max(desc_words, key=len)
            d = {
                "rawpath": rawpath,
                "year": int(year_str.strip()),
                "order_in_year": 1,
                "en": en,
                "people": [],
                }
            key = longest_word + year_str + "_" + str(count)
            photos[key] = d
            print("`mv {0} {1}`".format(oldpath, "." + rawpath))
            #os.rename(oldpath, "." + rawpath)
        
        fwrite.seek(0)
        json.dump(photos, fwrite, indent=4)
        fwrite.truncate()

        
    
