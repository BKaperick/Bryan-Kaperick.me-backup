import sys
import json

# python format_poem.py input.txt output.md
#fname = sys.argv[1]
#fname_out = sys.argv[2]

def format_line_markdown(line):
    line = ">" + line.strip()
    return format_line(line) + "  \n"

def format_poem(poem):
    out = []
    for line in poem:
        out.append(format_line(line))
    for i,l in enumerate(out):
        if i > 0 and l == "<p>\n<\\p>":
            out[i-1] = out[i-1].replace("<br>", "")
    out[-1] = out[-1].replace("<br>", "")
    poem_body = "<p>" + "\n".join(poem) + r"<\p>"
    return poem_body


def format_line(line):
    line = line.strip()
    print(line)
    if not line:
        return "<p>\n<\\p>"
    line = line.replace("    ", "&nbsp;&nbsp;&nbsp;")
    line = line.replace("--", "&mdash;")
    return line + "<br>\n"

with open("poems.json", 'r+') as fwrite:
    poems = json.load(fwrite)
    for name, poem_metadata in poems.items():
        if not "body" in poem_metadata:
            print("Auto-formatting " + poem_metadata['title'] + " from " + poem_metadata['rawpath'])
            with open(poem_metadata['rawpath'], 'r') as fin:
                poem_body = format_poem(list(fin.readlines()))
                poems[name]['body'] = poem_body

    fwrite.seek(0)
    json.dump(poems, fwrite, indent=4)
    fwrite.truncate()

fixes = []
with open ("poems.json", 'r') as f:
    for line in f.readlines():
        fixes.append(line.replace("\\\\", "\\"))

with open ("poems.json", 'w') as f:
    f.writelines(fixes)

    
        


