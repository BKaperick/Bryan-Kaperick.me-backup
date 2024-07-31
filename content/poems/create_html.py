import json
poem_blocks = []

months = {
'Jan': 0,
'Feb': 1,
'Mar': 2,
'Apr': 3,
'May': 4,
'Jun': 5,
'Jul': 6,
'Aug': 7,
'Sep': 8,
'Oct': 9,
'Nov': 10,
'Dec': 11
}

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

    
