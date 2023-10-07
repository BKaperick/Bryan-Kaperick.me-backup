import sys
import os
import pathlib
from itertools import chain

# Usage: python3 fix_html.py path/to/input.html

GLOBAL_REPLACES = {
        '<link rel="alternate" hreflang="en" href="/en/': '<link rel="alternate" hreflang="en" href="../../en/',
        '<link rel="alternate" hreflang="fr" href="/fr/': '<link rel="alternate" hreflang="fr" href="../../fr/',

        '"/poetry/"': '"../poetry/poetry.html"',
        '"/photos/"': '"../photos/photos.html"',
        '"/bio/"': '"../bio/bio.html"',
        '"/blog-post/"': '"../blog-post/blog-post.html"',
        '"/contact/"': '"../contact/contact.html"',
        
        '<a href="/en/poetry/"': '<a href="../poetry/poetry.html"',
        '<a href="/en/photos/"': '<a href="../photos/photos.html"',
        '<a href="/en/bio/"': '<a href="../bio/bio.html"',
        '<a href="/en/blog-post/"': '<a href="../blog-post/blog-post.html"',
        '<a href="/en/contact/"': '<a href="../contact/contact.html"',

        "/images/": "../../../static/",
        "/images/logo.png": "../../../static/logo.png",
        '<link rel="stylesheet" href="/css/styles.28722f0782c05e6eb06366f3f97b2b7f1285a6cdbecada724ee0be51706012ae.css">': '<link rel="stylesheet" href="../../../style.css">',
        '<link rel="stylesheet" href="/css/print.27fc184f8670f41a2690985390779e7b20335a8fadff8fa015cf9417ffe50c36.css" media="print">': ''
        }

def process_file(fpath):
    content = ''
    with open(fpath, 'r') as f:
        content = ''.join(f.readlines())
        for orig,repl in GLOBAL_REPLACES.items():
            content = content.replace(orig, repl)
    with open(fpath, 'w') as f:
        if content:
            print("writing content to " + str(fpath))
            f.write(content)

if __name__ == '__main__':

    if len(sys.argv) >= 2:
        fpath = sys.argv[1]
        process_file(fpath)
    else:
        for p,s,f in chain(os.walk('./en/'), os.walk('./fr/')):
            for name in f:
                if '.html' in name:
                    process_file(pathlib.PurePath(p,name))
        
        os.walk
        pathlib

