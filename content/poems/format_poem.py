import sys
import json

# python format_poem.py input.txt output.md
#fname = sys.argv[1]
#fname_out = sys.argv[2]

def format_line_markdown(line):
    line = ">" + line.strip()
    return format_line(line) + "  \n"

def format_line(line):
    line = line.strip()
    line = line.replace("    ", "&nbsp;&nbsp;&nbsp;")
    line = line.replace("--", "&mdash;")
    return line

with open("poems.json", 'r+') as fwrite:
    poems = json.load(fwrite)
    for name, poem_metadata in poems.items():
        if not "body" in poem_metadata:
            print("Auto-formatting " + poem_metadata['title'] + " from " + poem_metadata['rawpath'])
            with open(poem_metadata['rawpath'], 'r') as fin:
                poem = []
                for line in fin.readlines():
                    poem.append(format_line(line))
                "<br>\n".join(poem)
                poems[name]['body'] = poem

    fwrite.seek(0)
    json.dump(poems, fwrite, indent=4)
    fwrite.truncate()



