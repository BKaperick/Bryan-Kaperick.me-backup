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

invalid_key_chars = [r"<", r">", ",", ".", r"&rsquo;", "'", "-"]
def clean_key(w):
    for c in invalid_key_chars:
        w = w.replace(c,"")
    return w
