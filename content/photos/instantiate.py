import re
import os
import json
import sys

with open('photos_old_en.html', 'r') as f_en:
    with open('photos_old_fr.html', 'r') as f_fr:
        with open('photos.json', 'r+') as fwrite:
            photos = json.load(fwrite)
            content = [p.replace("\n", "") for p in "".join(f_en.readlines()).split("\n\n")]
            content_fr = [p.replace("\n", "") for p in "".join(f_fr.readlines()).split("\n\n")]
            print(len(content))
            print(len(content_fr))
            count = 0
            current_year = None
            for i,photo_elem in list(enumerate(content))[::-1]:
                m = re.search(r'<img src="/images/(.*?)">', photo_elem)
                m_fr = re.search(r'<img src="/images/(.*?)">', content_fr[i])
                f_en = m.group(1)
                f_fr = m_fr.group(1)
                
                if f_en != f_fr:
                    print("{0} != {1}".format(f_en,f_fr))

                oldpath = "../../static/" + m.group(1)
                rawpath = "./photos/raw/" + m.group(1)
                m_en = re.search(r'<figcaption>(.*)</figcaption>', photo_elem)
                m_fr = re.search(r'<figcaption>(.*)</figcaption>', content_fr[i])
                en,year_str = m_en.group(1).split(' ~ ')
                fr,_ = m_fr.group(1).split(' ~ ')
                year = int(year_str.strip())
                if year == current_year:
                    count += 1
                else:
                    current_year = year
                    count = 1
                
                desc_words = en.split(" ")
                longest_word = max(desc_words, key=len)
                d = {
                    "rawpath": rawpath,
                    "year": year,
                    "order_in_year": count,
                    "en": en,
                    "fr": fr,
                    "people": [],
                    }
                key = longest_word + "_" + year_str + "_" + str(count)
                photos[key] = d
                print("`mv {0} {1}`".format(oldpath, "." + rawpath))
                os.rename(oldpath, "." + rawpath)
            
            fwrite.seek(0)
            json.dump(photos, fwrite, indent=4)
            fwrite.truncate()

        
    
