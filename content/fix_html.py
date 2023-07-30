import sys
import os
import pathlib

# Usage: python3 fix_html.py path/to/input.html

GLOBAL_REPLACES = {
        "/images/logo.png": "../../../static/logo.png"
        '<link rel="stylesheet" href="/css/styles.28722f0782c05e6eb06366f3f97b2b7f1285a6cdbecada724ee0be51706012ae.css">': '<link rel="stylesheet" href="../../../style.css">'
        '<link rel="stylesheet" href="/css/print.27fc184f8670f41a2690985390779e7b20335a8fadff8fa015cf9417ffe50c36.css" media="print">', ''
        }

def process_file(fpath):
    with open(fpath, 'rw') as f:
        content = '\n'.join(f.readlines())
        for orig,repl in GLOBAL_REPLACES.items():
            content.replace(orig, repl)
        f.write(content)

if __name__ == '__main__':

    if len(sys.argv) >= 2:
        fpath = sys.argv[1]
        process_file(fpath)
    else:
        for p,s,f in os.walk('./en/') + os.walk('./fr/'):
            for name in f:
                if '.html' in name:
                    process_file(pathlib.PurePath(p,name))
        
        os.walk
        pathlib

