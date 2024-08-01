import os
import sys
sys.path.append(os.path.abspath("../../"))
from helper import *
import json
poem_blocks = []

with open("poems.json", "r") as fw:
    poems = json.load(fw)
    for key,poem in poems.items():
        if poem['author'] != 'Bryan Kaperick':
            continue
        block = """<p><em><?=$p->{0}->title;?></em> &ndash; <?=$language[$p->{0}->month];?> <?=$p->{0}->year;?></p>
        <blockquote>
        <?=$p->{0}->body;?>
        </blockquote>""".format(key)
        
        poem_blocks.append((block, poem))

print("\n\n".join([x[0] for x in sorted(poem_blocks, key=lambda x : -(int(x[1]['year']) + months[x[1]['month']]/100 + x[1]['order_in_month']/1000))]))

    
