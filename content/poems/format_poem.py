import sys
import json

def format_poem(poem):
    out = []
    for line in poem:
        out.append(format_line(line))
    for i,l in enumerate(out):
        if i > 0 and l == "</p>\n<p>":
            out[i-1] = out[i-1].replace("<br>", "").replace("\n","")
    out[-1] = out[-1].replace("<br>\n", "")
    poem_body = "<p>" + "".join(out) + r"</p>"
    return poem_body


def format_line(line):
    line = line.strip()
    if not line:
        return "</p>\n<p>"
    line = line.replace("    ", "&nbsp;&nbsp;&nbsp;")
    line = line.replace("--", "&mdash;")
    return line + "<br>\n"

with open("poems.json", 'r+') as fwrite:
    poems = json.load(fwrite)
    for name, poem_metadata in poems.items():
        if not "body" in poem_metadata:
            print("Auto-formatting \"" + poem_metadata['title'] + "\" from " + poem_metadata['rawpath'])
            with open(poem_metadata['rawpath'], 'r') as fin:
                poem_body = format_poem(list(fin.readlines()))
                poems[name]['body'] = poem_body

    fwrite.seek(0)
    json.dump(poems, fwrite, indent=4)
    fwrite.truncate()

    
        


