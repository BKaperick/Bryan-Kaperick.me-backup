import json
photo_blocks = []

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

with open("photos.json", "r") as fw:
    photos = json.load(fw)
    for key,photo in photos.items():
        block = """

<figure class="image">
    <img src=<?='./photos/' . $p->{0}->rawpath;?>>
    <figcaption>
<?=$p->{0}->en;?> ~ <?=$p->{0}->year;?>
    </figcaption>
</figure>
""".format(key)
        
        photo_blocks.append((block, photo))

print("\n\n".join([x[0] for x in sorted(photo_blocks, key=lambda x : -(int(x[1]['year']) + months[x[1]['month']]/100 + x[1]['order_in_month']/1000))]))

    
