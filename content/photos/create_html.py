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
# 2024.05
def order_photos(x):
    if 'month' in x[1] and x[1]['month'] in months:
        month = months[x[1]['month']]/1000
        if 'order_in_month' in x[1]:
            month += x[1]['order_in_month']/10000
    else:
        month = 0
    if 'order_in_year' in x[1]:
        year = int(x[1]['year']) + x[1]['order_in_year']/100
    else:
        year = 0
    return -(year + month)




with open("photos.json", "r") as fw:
    photos = json.load(fw)
    for key,photo in photos.items():
        block = """<figure class="image">
    <img src=<?=$p->{0}->rawpath;?>>
    <figcaption>
<?=$p->{0}->en;?> ~ <?=$p->{0}->year;?>
    </figcaption>
</figure>
""".format(key)
        
        photo_blocks.append((block, photo))

print("\n\n".join([x[0] for x in sorted(photo_blocks, key=order_photos)]))


    
